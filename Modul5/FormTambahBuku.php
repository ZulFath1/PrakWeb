<?php
require_once 'Model.php';

if (isset($_POST['submit'])) {
    $judul = $_POST['judul_buku'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun = $_POST['tahun_terbit'];

    if (tambahBuku($judul, $penulis, $penerbit, $tahun)) {
        echo "<script>
                alert('Data buku berhasil ditambahkan!');
                window.location.href = 'Buku.php';
              </script>";
    } else {
        echo "<script>alert('Gagal menambahkan data buku.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku - Perpustakaan OPM</title>
    
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
                        <a href="Buku.php" class="is-active-menu">
                            <i class="fa-solid fa-book-open menu-icon"></i> Data Buku
                        </a>
                    </li>
                    <li>
                        <a href="Member.php" class="has-text-grey-light">
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
                    Dashboard / Data Buku / <span class="has-text-weight-bold has-text-white">Tambah Baru</span>
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
                    <h2 class="title is-3 mb-5 has-text-weight-bold has-text-white">Tambah Data Buku</h2>
                    
                    <div class="custom-box">
                        <form action="" method="post">
                            
                            <div class="field">
                                <label class="label has-text-grey-light">Judul Buku</label>
                                <div class="control has-icons-left">
                                    <input class="input" type="text" name="judul_buku" placeholder="Masukkan judul buku" required>
                                    <span class="icon is-small is-left"><i class="fa-solid fa-heading"></i></span>
                                </div>
                            </div>
                            
                            <div class="field">
                                <label class="label has-text-grey-light">Penulis</label>
                                <div class="control has-icons-left">
                                    <input class="input" type="text" name="penulis" placeholder="Masukkan nama penulis" required>
                                    <span class="icon is-small is-left"><i class="fa-solid fa-pen-nib"></i></span>
                                </div>
                            </div>
                            
                            <div class="field">
                                <label class="label has-text-grey-light">Penerbit</label>
                                <div class="control has-icons-left">
                                    <input class="input" type="text" name="penerbit" placeholder="Masukkan nama penerbit" required>
                                    <span class="icon is-small is-left"><i class="fa-solid fa-building"></i></span>
                                </div>
                            </div>
                            
                            <div class="field">
                                <label class="label has-text-grey-light">Tahun Terbit</label>
                                <div class="control has-icons-left">
                                    <input class="input" type="number" name="tahun_terbit" placeholder="Contoh: 2024" required>
                                    <span class="icon is-small is-left"><i class="fa-regular fa-calendar"></i></span>
                                </div>
                            </div>
                            
                            <div class="field is-grouped mt-6">
                                <div class="control">
                                    <button type="submit" name="submit" class="button is-primary has-text-weight-medium px-5">
                                        <i class="fa-solid fa-check mr-2"></i> Simpan Data
                                    </button>
                                </div>
                                <div class="control">
                                    <a href="Buku.php" class="button is-light is-outlined has-text-weight-medium px-5">
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