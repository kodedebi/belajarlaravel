<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Belajar laravel</title>
</head>
<body class="container mt-4">
    <h2>My App laravel 240426 08.40</h2>
    <nav class="mb-3">
        <a href="/home" class="btn btn-primary">Home</a>
        <a href="/about" class="btn btn-success">About</a>
        <a href="/kontak" class="btn btn-warning">Kontak</a>
        <a href="/produk" class="btn btn-secondary">Product</a>
        <a href="/profil/namasaya" class="btn btn-info">Profil</a>
    </nav>
    
    
    @yield('content')
    
    <p>Footer Copyright 2026</p>
</body>
</html>