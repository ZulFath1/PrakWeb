<?php
require_once 'Model.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $data_lama = getMemberById($id);
} else {
    header("Location: Member.php");
    exit;
}

if (isset($_POST['submit'])) {
    $nama = $_POST['nama_member'];
    $nomor = $_POST['nomor_member'];
    $alamat = $_POST['alamat'];
    $tgl_mendaftar = $_POST['tgl_mendaftar'];
    $tgl_terakhir_bayar = $_POST['tgl_terakhir_bayar'];

    if (editMember($id, $nama, $nomor, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar)) {
        echo "<script>
                alert('Data member berhasil diperbarui!');
                window.location.href = 'Member.php';
              </script>";
    } else {
        echo "<script>alert('Gagal memperbarui data member.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Member - Perpustakaan OPM</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.0/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        body { 
            font-family: 'Inter', sans-serif; 
        }
        
        .sidebar-dashboard { 
            min-height: 100vh; 
            border-right: 1px solid rgba(255, 255, 255, 0.05); 
        }

        .menu-list a { 
            padding: 12px 16px; 
            margin-bottom: 8px; 
            border-radius: 8px; 
            transition: background-color 0.2s ease, color 0.2s ease; 
            display: flex; 
            align-items: center; 
        }

        .menu-list a:hover { 
            background-color: rgba(255, 255, 255, 0.05); 
            color: #fff !important; 
        }

        .menu-list a.is-active-menu { 
            background-color: rgba(255, 255, 255, 0.1); 
            color: #ffffff; 
            font-weight: 600; 
        }

        .menu-icon { 
            width: 24px; 
            text-align: center; 
            margin-right: 12px; 
        }
        
        .top-navbar { 
            background-color: #1a1a1a; 
            border-bottom: 1px solid rgba(255, 255, 255, 0.05); 
            padding: 1.25rem 2.5rem; 
            display: flex; 
            align-items: center; 
            justify-content: space-between; 
        }
        
        .content-area { 
            padding: 3rem; 
        }

        .form-container { 
            max-width: 600px; 
        }

        .custom-box { 
            background-color: #1f1f1f; 
            border-radius: 12px; 
            border: 1px solid rgba(255, 255, 255, 0.05); 
            box-shadow: 0 4px 6px rgba(0,0,0,0.2); 
            padding: 2.5rem; 
        }

        .field:not(:last-child) { 
            margin-bottom: 1.5rem; 
        }
    </style>
</head>
<body>

    <div class="columns is-gapless mb-0">
        
        <div class="column is-2 has-background-black-bis sidebar-dashboard is-flex is-flex-direction-column">
            
            <div class="p-5 is-flex is-align-items-center mb-4 mt-2">
                <i class="fa-solid fa-layer-group is-size-4 mr-3 has-text-primary"></i>
                <span class="has-text-weight-bold is-size-5 has-text-white">Perpus OPM</span>
            </div>
            
            <aside class="menu px-4 is-flex-grow-1">
                <ul class="menu-list">
                    <li>
                        <a href="Buku.php" class="has-text-grey-light">
                            <i class="fa-solid fa-book-open menu-icon"></i> Data Buku
                        </a>
                    </li>
                    <li>
                        <a href="Member.php" class="is-active-menu">
                            <i class="fa-solid fa-users menu-icon"></i> Member
                        </a>
                    </li>
                    <li>
                        <a href="Peminjaman.php" class="has-text-grey-light">
                            <i class="fa-solid fa-right-left menu-icon"></i> Peminjaman
                        </a>
                    </li>
                </ul>
            </aside>

            <div class="p-5 has-text-grey-light is-size-7" style="border-top: 1px solid rgba(255,255,255,0.05);">
                v1.0 • Dashboard System
            </div>
        </div>

        <div class="column has-background-dark is-flex is-flex-direction-column">
            
            <nav class="top-navbar">
                <div class="has-text-grey-light is-size-6">
                    Dashboard / Member / <span class="has-text-weight-bold has-text-white">Ubah Data</span>
                </div>
                
                <div class="is-flex is-align-items-center">
                    <div class="has-text-right mr-3">
                        <div class="has-text-weight-bold is-size-6 has-text-white">Fathi</div>
                        <div class="has-text-grey-light is-size-7">Administrator</div>
                    </div>
                    <div class="is-flex is-justify-content-center is-align-items-center has-text-white has-text-weight-bold" 
                         style="background-color: hsl(171, 100%, 41%); width: 40px; height: 40px; border-radius: 50%; font-size: 1.1rem;">
                        FA
                    </div>
                </div>
            </nav>

            <div class="content-area flex-grow-1">
                <div class="form-container">
                    <h2 class="title is-3 mb-5 has-text-weight-bold has-text-white">Ubah Data Member</h2>
                    
                    <div class="custom-box">
                        <form action="" method="post">
                            
                            <div class="field">
                                <label class="label has-text-grey-light">Nama Lengkap</label>
                                <div class="control has-icons-left">
                                    <input class="input" type="text" name="nama_member" value="<?= htmlspecialchars($data_lama['nama_member']) ?>" required>
                                    <span class="icon is-small is-left"><i class="fa-solid fa-user"></i></span>
                                </div>
                            </div>
                            
                            <div class="field">
                                <label class="label has-text-grey-light">Nomor Member</label>
                                <div class="control has-icons-left">
                                    <input class="input" type="text" name="nomor_member" value="<?= htmlspecialchars($data_lama['nomor_member']) ?>" required>
                                    <span class="icon is-small is-left"><i class="fa-solid fa-id-badge"></i></span>
                                </div>
                            </div>
                            
                            <div class="field">
                                <label class="label has-text-grey-light">Alamat</label>
                                <div class="control">
                                    <textarea class="textarea" name="alamat" rows="3" required><?= htmlspecialchars($data_lama['alamat']) ?></textarea>
                                </div>
                            </div>
                            
                            <div class="field">
                                <label class="label has-text-grey-light">Tanggal Mendaftar</label>
                                <div class="control has-icons-left">
                                    <input class="input" type="datetime-local" name="tgl_mendaftar" value="<?= date('Y-m-d\TH:i', strtotime($data_lama['tgl_mendaftar'])) ?>" required>
                                    <span class="icon is-small is-left"><i class="fa-regular fa-calendar-plus"></i></span>
                                </div>
                            </div>
                            
                            <div class="field">
                                <label class="label has-text-grey-light">Tanggal Terakhir Bayar</label>
                                <div class="control has-icons-left">
                                    <input class="input" type="date" name="tgl_terakhir_bayar" value="<?= $data_lama['tgl_terakhir_bayar'] ?>" required>
                                    <span class="icon is-small is-left"><i class="fa-solid fa-credit-card"></i></span>
                                </div>
                            </div>
                            
                            <div class="field is-grouped mt-6">
                                <div class="control">
                                    <button type="submit" name="submit" class="button is-primary has-text-weight-medium px-5">
                                        <i class="fa-solid fa-floppy-disk mr-2"></i> Simpan Perubahan
                                    </button>
                                </div>
                                <div class="control">
                                    <a href="Member.php" class="button is-light is-outlined has-text-weight-medium px-5">
                                        Batal
                                    </a>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>
</html>