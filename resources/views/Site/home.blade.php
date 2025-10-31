<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - RSHP UNAIR</title>
    <link rel="icon" type="image/png" href="{{ asset('pictures/unairbiru.png') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</head>

<body>
    <header class="navbar">
        <div class="logo">
            <img src="{{ asset('pictures/unairbiru.png') }}" alt="Logo Unair" height="100">
        </div>

        <nav class="nav-links">
            <a href="#">Home</a>
            <a href="#">Dokter Jaga</a>
            <a href="{{ route('layanan') }}">Layanan Umum</a>
            <a href="#">Instalasi Pendukung</a>
            <a href="#">Pendidikan</a>
            <a href="#">Penelitian</a>
            <a href="#">Pelatihan</a>
        </nav>
    </header> 

    <section class="hero">
        <div class="hero-content">
            <h1>Rumah Sakit Hewan Pendidikan Universitas Airlangga</h1>
            <p class="subtitle">
                Rumah Sakit Hewan Pendidikan Universitas Airlangga berinovasi untuk selalu meningkatkan kualitas pelayanan, maka dari itu Rumah Sakit Hewan Pendidikan Universitas Airlangga mempunyai fitur pendaftaran online yang mempermudah untuk mendaftarkan hewan kesayangan anda.
            </p>

            <div class="action-buttons">
                <a href="{{ route('login') }}" class="btn darkblue">Login</a>
                <a href="pendaftaran-online.php" class="btn yellow">Pendaftaran Online</a>
            </div>
        </div>

        <div class="hero-image"></div>
    </section>

    <section class="tentang-kami">
    <h2 class="judul">Tentang <span>Kami</span></h2>

        <div class="kontainer-card">
            <div class="card">
                <div class="icon-box yellow">
                    <i class="bi bi-clock-history"></i>
                </div>
                <h3>Sejarah</h3>
                <p>Sejarah Rumah Sakit Hewan Pendidikan Universitas Airlangga dapat dilihat melalui link dibawah ini</p>
                <a href="#" class="learn-more">Learn More →</a>
            </div>

            <div class="card">
                <div class="icon-box green">
                    <i class="bi bi-diagram-3"></i>
                </div>
                <h3>Struktur Organisasi</h3>
                <p>Struktur Organisasi Rumah Sakit Hewan Pendidikan Universitas Airlangga dapat dilihat melalui link dibawah ini</p>
                <a href="{{ route('struktur') }}" class="learn-more">Learn More →</a>
            </div>

            <div class="card">
                <div class="icon-box pink">
                    <i class="bi bi-bullseye"></i>
                </div>
                <h3>Visi, Misi, dan Tujuan</h3>
                <p>Visi, misi, dan tujaun Rumah Sakit Hewan Pendidikan Universitas Airlangga dapat dilihat melalui link dibawah ini</p>
                <a href="{{ route('visi') }}" class="learn-more">Learn More →</a>
            </div>
        </div>
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