<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>404 - Tidak Ditemukan</title>
    <style>
        body { font-family: sans-serif; text-align: center; padding-top: 100px; background-color: #1a202c; color: #a0aec0; }
        h1 { font-size: 40px; color: white; margin-bottom: 10px; }
        .btn-login {
            display: inline-block; margin-top: 30px; padding: 10px 20px;
            background-color: #ef4444; color: white; text-decoration: none;
            border-radius: 5px; font-weight: bold; transition: 0.3s;
        }
        .btn-login:hover { background-color: #dc2626; }
    </style>
</head>
<body>
    <h1>404 | NOT FOUND</h1>
    <p>Maaf, halaman yang Anda tuju tidak tersedia.</p>
    <!-- Tombol kembali ke rute login -->
    <a href="{{ route('login') }}" class="btn-login">Kembali ke Login</a>
</body>
</html>