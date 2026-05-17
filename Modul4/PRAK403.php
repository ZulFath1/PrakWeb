<?php
$mahasiswa = [
    [
        "No" => "1", 
        "Nama" => "Ridho", 
        "Mata Kuliah diambil" => ["Pemrograman I", "Praktikum Pemrograman I", "Pengatar Lingkungan Lahan Basah", "Arsitektur Komputer"], 
        "SKS" => [2, 1, 2, 3]
    ],
    [
        "No" => "2", 
        "Nama" => "Ratna", 
        "Mata Kuliah diambil" => ["Basis Data I", "Praktikum Basis Data I", "Kalkulus"], 
        "SKS" => [2, 1, 3]
    ],
    [
        "No" => "3", 
        "Nama" => "Tono", 
        "Mata Kuliah diambil" => ["Rekayasa Perangkat Lunak", "Analisis Perancangan Sistem", "Komputasi Awan", "Kecerdasan Bisnis"], 
        "SKS" => [3, 3, 3, 3]
    ]
];
for ($i = 0; $i < count($mahasiswa); $i++) {
    $total_sks = array_sum($mahasiswa[$i]["SKS"]);
    $mahasiswa[$i]["Total SKS"] = $total_sks;
    
    $mahasiswa[$i]["Keterangan"] = ($total_sks < 7) ? "Revisi KRS" : "Tidak Revisi";
}
?>

<!DOCTYPE html>
<html lang="en">
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr style="background-color: lightgray;">
            <?php 
            foreach ($mahasiswa[0] as $judul_kolom => $isi) {
                echo "<th>$judul_kolom</th>";
            }
            ?>
        </tr>
        
        <?php foreach ($mahasiswa as $mhs) : ?>
            <?php 
            $list_mk = $mhs["Mata Kuliah diambil"];
            $list_sks = $mhs["SKS"];
            ?>
            
            <?php for ($i = 0; $i < count($list_mk); $i++) : ?>
                <tr>
                    <?php if ($i == 0) : ?>
                        <td><?= $mhs["No"] ?></td>
                        <td><?= $mhs["Nama"] ?></td>
                        <td><?= $list_mk[$i] ?></td>
                        <td><?= $list_sks[$i] ?></td>
                        <td><?= $mhs["Total SKS"] ?></td>
                        
                        <?php $warna_bg = ($mhs["Total SKS"] < 7) ? "red" : "green"; ?>
                        <td style="background-color: <?= $warna_bg ?>;"><?= $mhs["Keterangan"] ?></td>
                        
                    <?php else : ?>
                        <td></td>
                        <td></td>
                        <td><?= $list_mk[$i] ?></td>
                        <td><?= $list_sks[$i] ?></td>
                        <td></td>
                        <td></td>
                    <?php endif; ?>
                </tr>
            <?php endfor; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>