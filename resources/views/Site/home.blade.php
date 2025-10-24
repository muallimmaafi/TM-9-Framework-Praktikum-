<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - RSHP UNAIR</title>
    <link rel="icon" type="image/png" href="{{ asset('pictures/unairbiru.png') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>

<body>
    <header class="navbar">
        <div class="logo">
            <img src="{{ asset('pictures/unairbiru.png') }}" alt="Logo Unair" height="100">
        </div>

        <nav class="nav-links">
            <a href="{{ route('dashboard') }}">Dashboard</a>
            <a href="{{ route('struktur') }}">Struktur Organisasi</a>
            <a href="{{ route('layanan') }}">Layanan Umum</a>
            <a href="{{ route('visi') }}">Visi, Misi, dan Tujuan</a>
        </nav>
    </header> 

    <section class="hero">
        <div class="hero-content">
            <h1>Rumah Sakit Hewan Pendidikan Universitas Airlangga</h1>
            <p class="subtitle">
                Rumah Sakit Hewan Pendidikan Universitas Airlangga berinovasi untuk selalu meningkatkan kualitas pelayanan, maka dari itu Rumah Sakit Hewan Pendidikan Universitas Airlangga mempunyai fitur pendaftaran online yang mempermudah untuk mendaftarkan hewan kesayangan anda.
            </p>

            <div class="action-buttons">
                <a href="login.php" class="btn darkblue">Login</a>
                <a href="pendaftaran-online.php" class="btn yellow">Pendaftaran Online</a>
            </div>
        </div>

        <div class="hero-image"></div>
    </section>

    <br>

    <footer>
        <div class="footer-top">
            <div class="footer-right">
                <img src="{{ asset('pictures/zona-integritas-unair.png') }}" alt="Logo Zona Integritas Unair" width="200">
            </div>
        </div>

        <div class="footer-bottom">
            <div class="footer-copy">
                <p>Copyright 2024 Universitas Airlangga. All Rights Reserved</p>
            </div>

            <div class="footer-contact">
                <p><strong>RUMAH SAKIT HEWAN PENDIDIKAN</strong><br>
                GEDUNG RS HEWAN PENDIDIKAN<br>
                rshp@fkh.unair.ac.id<br>
                Telp : 031 5927832<br>
                Kampus C Universitas Airlangga<br>
                Surabaya 60115, Jawa Timur</p>
            </div>
        </div>
    </footer>
</body>
</html>
