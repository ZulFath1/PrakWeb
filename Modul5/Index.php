<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan OPM</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.0/css/bulma.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
    body { 
        font-family: 'Inter', sans-serif; 
        background-image: url('OPM.jpg'); 
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-color: rgba(0, 0, 0, 0.7);
        background-blend-mode: overlay;
    }
    
    .hero-container { 
        height: 100vh; 
        display: flex; 
        align-items: center; 
        justify-content: center; 
    }
    
    .card { 
        border-radius: 20px; 
        border: 1px solid rgba(255, 255, 255, 0.1); 
        padding: 3rem; 
        background-color: rgba(36, 36, 36, 0.85);
    }
</style>
</head>
<body>

    <section class="hero-container">
        <div class="card has-text-centered">
            <h1 class="title is-1 has-text-white mb-3">Selamat Datang Admin</h1>
            <p class="subtitle is-3 has-text-grey-light mb-6">Perpustakaan OPM</p>
            <a href="Buku.php" class="button is-primary is-medium has-text-weight-semibold px-6">Masuk ke Halaman</a>
        </div>
    </section>

</body>
</html>