<?php

require_once 'Koneksi.php';

// Function for Book Table
function getBuku(){
    $conn = koneksi();
    $stmt = $conn->query("SELECT * FROM buku");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function tambahBuku($judul, $penulis, $penerbit, $tahun) {
    $conn = koneksi();
    $stmt = $conn->prepare("INSERT INTO buku (judul_buku, penulis, penerbit, tahun_terbit) VALUES (?, ?, ?, ?)");
    return $stmt->execute([$judul, $penulis, $penerbit, $tahun]);
}

function getBukuById($id) {
    $conn = koneksi();
    $stmt = $conn->prepare("SELECT * FROM buku WHERE id_buku = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function editBuku($id, $judul, $penulis, $penerbit, $tahun) {
    $conn = koneksi();
    $stmt = $conn->prepare("UPDATE buku SET judul_buku = ?, penulis = ?, penerbit = ?, tahun_terbit = ? WHERE id_buku = ?");
    return $stmt->execute([$judul, $penulis, $penerbit, $tahun, $id]);
}

function hapusBuku($id) {
    $conn = koneksi();
    $stmt = $conn->prepare("DELETE FROM buku WHERE id_buku = ?");
    return $stmt->execute([$id]);
}

// Function for Member Table
function getMember() {
    $conn = koneksi();
    $stmt = $conn->query("SELECT * FROM member");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function tambahMember($nama, $nomor, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar) {
    $conn = koneksi();
    $stmt = $conn->prepare("INSERT INTO member (nama_member, nomor_member, alamat, tgl_mendaftar, tgl_terakhir_bayar) VALUES (?, ?, ?, ?, ?)");
    return $stmt->execute([$nama, $nomor, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar]);
}

function getMemberById($id) {
    $conn = koneksi();
    $stmt = $conn->prepare("SELECT * FROM member WHERE id_member = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function editMember($id, $nama, $nomor, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar) {
    $conn = koneksi();
    $stmt = $conn->prepare("UPDATE member SET nama_member = ?, nomor_member = ?, alamat = ?, tgl_mendaftar = ?, tgl_terakhir_bayar = ? WHERE id_member = ?");
    return $stmt->execute([$nama, $nomor, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar, $id]);
}

function hapusMember($id) {
    $conn = koneksi();
    $stmt = $conn->prepare("DELETE FROM member WHERE id_member = ?");
    return $stmt->execute([$id]);
}

// Function for Loan Table
function getPeminjaman() {
    $conn = koneksi();
    $sql = "SELECT p.*, m.nama_member, b.judul_buku 
            FROM peminjaman p 
            JOIN member m ON p.id_member = m.id_member 
            JOIN buku b ON p.id_buku = b.id_buku";
    $stmt = $conn->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function tambahPeminjaman($tgl_pinjam, $tgl_kembali, $id_member, $id_buku) {
    if (strtotime($tgl_kembali) < strtotime($tgl_pinjam)) {
        echo "<script>alert('Error: Tanggal kembali tidak boleh lebih awal dari tanggal pinjam!');</script>";
        return false;
    }

    $conn = koneksi();
    $stmt = $conn->prepare("INSERT INTO peminjaman (tgl_pinjam, tgl_kembali, id_member, id_buku) VALUES (?, ?, ?, ?)");
    return $stmt->execute([$id_member, $id_buku, $tgl_pinjam, $tgl_kembali]);
}

function getPeminjamanById($id) {
    $conn = koneksi();
    $stmt = $conn->prepare("SELECT * FROM peminjaman WHERE id_peminjaman = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function editPeminjaman($id, $tgl_pinjam, $tgl_kembali, $id_member, $id_buku) {
    if (strtotime($tgl_kembali) < strtotime($tgl_pinjam)) {
        echo "<script>alert('Error: Tanggal kembali tidak boleh lebih awal dari tanggal pinjam!');</script>";
        return false;
    }

    $conn = koneksi();
    $stmt = $conn->prepare("UPDATE peminjaman SET tgl_pinjam = ?, tgl_kembali = ?, id_member = ?, id_buku = ? WHERE id_peminjaman = ?");
    return $stmt->execute([$tgl_pinjam, $tgl_kembali, $id_member, $id_buku, $id]);
}

function hapusPeminjaman($id) {
    $conn = koneksi();
    $stmt = $conn->prepare("DELETE FROM peminjaman WHERE id_peminjaman = ?");
    return $stmt->execute([$id]);
}

?>