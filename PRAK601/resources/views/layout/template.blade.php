<!DOCTYPE html>
<html lang="id" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.0/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #121212; color: #fff; min-height: 100vh;}
        .navbar-custom { background-color: #1a1a1a; border-bottom: 1px solid rgba(255,255,255,0.05); padding: 0.5rem 2rem; }
        .custom-box { background-color: #1f1f1f; border-radius: 12px; border: 1px solid rgba(255,255,255,0.05); box-shadow: 0 4px 6px rgba(0,0,0,0.2); }
        .navbar-item.is-active { color: hsl(171, 100%, 41%) !important; font-weight: 600; }
    </style>
</head>
<body>
    <nav class="navbar navbar-custom is-transparent">
        <div class="navbar-brand">
            <a class="navbar-item has-text-weight-bold is-size-5 has-text-primary" href="{{ url('/') }}">
                <i class="fa-solid fa-code mr-2"></i> PRAK601
            </a>
        </div>
        <div class="navbar-menu is-active has-background-transparent">
            <div class="navbar-start ml-4">
                <a class="navbar-item has-text-grey-light" href="{{ url('/') }}">Beranda</a>
                <a class="navbar-item has-text-grey-light" href="{{ url('/profil') }}">Profil</a>
            </div>
            <div class="navbar-end">
                <div class="navbar-item has-text-weight-bold">Fathi</div>
            </div>
        </div>
    </nav>

    <div class="container mt-6 px-4 pb-6">
        @yield('content')
    </div>
</body>
</html>