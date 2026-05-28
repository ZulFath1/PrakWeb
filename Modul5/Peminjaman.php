    <?php
    require_once 'Model.php';

    if (isset($_GET['id_hapus'])) {
        hapusPeminjaman($_GET['id_hapus']);
        header("Location: Peminjaman.php");
        exit;
    }

    $peminjaman = getPeminjaman();
    ?>

    <!DOCTYPE html>
    <html lang="en" data-theme="dark">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Data Peminjaman - Perpustakaan OPM</title>
        
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

            .custom-box { 
                background-color: #1f1f1f; 
                border-radius: 12px; 
                border: 1px solid rgba(255, 255, 255, 0.05); 
                box-shadow: 0 4px 6px rgba(0,0,0,0.2); 
            }
            
            .table { 
                background-color: transparent; 
            }

            .table td, .table th { 
                border-bottom: 1px solid rgba(255, 255, 255, 0.05); 
                border-width: 0 0 1px 0; 
                vertical-align: middle; 
                padding: 1.25rem 1rem; 
            }

            .table thead th { 
                color: #8b949e; 
                font-weight: 500; 
                font-size: 0.9rem; 
            }
            
            .action-link { 
                font-weight: 500; 
                font-size: 0.9rem; 
                transition: opacity 0.2s; 
                display: inline-flex; 
                align-items: center; 
            }

            .action-link:hover { 
                opacity: 0.7; 
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
                            <a href="Member.php" class="has-text-grey-light">
                                <i class="fa-solid fa-users menu-icon"></i> Member
                            </a>
                        </li>
                        <li>
                            <a href="Peminjaman.php" class="is-active-menu">
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
                        Dashboard / <span class="has-text-weight-bold has-text-white">Peminjaman</span>
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
                    
                    <div class="custom-box">
                        
                        <div class="px-5 py-4 is-flex is-justify-content-space-between is-align-items-center" style="border-bottom: 1px solid rgba(255,255,255,0.05);">
                            <div>
                                <h2 class="title is-4 mb-1 has-text-weight-bold has-text-white">Riwayat Transaksi Peminjaman</h2>
                                <p class="subtitle is-6 has-text-grey-light mt-1">Pantau sirkulasi peminjaman dan pengembalian buku.</p>
                            </div>
                            <a href="FormTambahPeminjaman.php" class="button is-primary has-text-weight-medium" style="border-radius: 8px;">
                                <i class="fa-solid fa-plus mr-2"></i> Tambah Transaksi
                            </a>
                        </div>

                        <div class="p-2 table-container">
                            <table class="table is-fullwidth is-hoverable has-background-transparent">
                                <thead>
                                    <tr>
                                        <th class="pl-5">ID</th>
                                        <th>Nama Member</th>
                                        <th>Judul Buku</th>
                                        <th>Tgl Pinjam</th>
                                        <th>Tgl Kembali</th>
                                        <th class="has-text-right pr-5">Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($peminjaman as $row) : ?>
                                    <tr>
                                        <td class="has-text-grey-light pl-5">#<?= $row['id_peminjaman'] ?></td>
                                        <td class="has-text-weight-medium has-text-white"><?= $row['nama_member'] ?></td>
                                        <td class="has-text-grey-light"><?= $row['judul_buku'] ?></td>
                                        <td class="has-text-grey-light"><?= date('d M Y', strtotime($row['tgl_pinjam'])) ?></td>
                                        <td class="has-text-grey-light"><?= date('d M Y', strtotime($row['tgl_kembali'])) ?></td>
                                        <td class="has-text-right pr-5">
                                            <a href="FormEditPeminjaman.php?id=<?= $row['id_peminjaman'] ?>" class="action-link has-text-primary mr-3">
                                                <i class="fa-solid fa-pen mr-1"></i> Edit
                                            </a>
                                            <a href="Peminjaman.php?id_hapus=<?= $row['id_peminjaman'] ?>" class="action-link has-text-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data transaksi ini?');">
                                                <i class="fa-regular fa-trash-can mr-1"></i> Delete
                                            </a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                </div>

            </div>

        </div>

    </body>
    </html>