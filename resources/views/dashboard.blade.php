<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="icon" type="image/png" href="{{ asset('pictures/unairbiru.png') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
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

    <div class="content">
        <h1>Halo, Admin</h1>
        <p>Selamat Datang di halaman dashboard Rumah Sakit Hewan Pendidikan Universitas Airlangga</p>
    </div>

    <div class="container">
        <div class="dashboard-container">
            <a href="JenisHewan.php">Daftar Jenis Hewan</a>
        </div>

        <div class="dashboard-container">
            <a href="RasHewan.php">Daftar Ras Hewan</a>
        </div>

        <div class="dashboard-container">
            <a href="Kategori.php">Daftar Kategori</a>
        </div>

        <div class="dashboard-container">
            <a href="KategoriKlinis.php">Daftar Kategori Klinis</a>
        </div>

        <div class="dashboard-container">
            <a href="KodeTindakanTerapi.php">Kode Tindakan Terapi</a>
        </div>
    
        <div class="dashboard-container">
            <a href="Pet.php">Daftar Pet</a>
        </div>

        <div class="dashboard-container">
            <a href="Role.php">Daftar Role</a>
        </div>

        <div class="dashboard-container">
            <a href="User.php">Daftar User</a>
        </div>
    </div>

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
