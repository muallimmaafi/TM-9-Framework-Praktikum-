<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur Pimpinan</title>
    <link rel="icon" type="image/png" href="{{ asset('pictures/unairbiru.png') }}">
    <link rel="stylesheet" href="{{ asset('css/struktur.css') }}">
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
        <h1>Struktur Pimpinan Rumah Sakit Hewan Pendidikan Universitas Airlangga</h1>
        <p>Struktur Pimpinan Rumah Sakit Hewan Pendidikan Universitas Airlangga terdiri dari berbagai posisi diantaranya:</p>
    </section>

    <div class="pimpinan-container">
        <div class="pimpinan-header">
            <div>Nama</div>
            <div>Jabatan</div>
        </div>

        <div class="pimpinan-row">
            <div class="pimpinan-info">
                <img src="{{ asset('pictures/direktur.jpg') }}" alt="Direktur">
                <span class="pimpinan-name">Dr. Ira Sari Yudaniayanti, M.P., drh.</span>
            </div>
            <div class="pimpinan-jabatan">Direktur</div>
        </div>

        <div class="pimpinan-row">
            <div class="pimpinan-info">
                <img src="{{ asset('pictures/wakil-direktur1.jpg') }}" alt="Wakil Direktur 1">
                <span class="pimpinan-name">Dr. Nusdianto Triakoso, M.P., drh.</span>
            </div>
            <div class="pimpinan-jabatan">Wakil Direktur 1</div>
        </div>

        <div class="pimpinan-row">
            <div class="pimpinan-info">
                <img src="{{ asset('pictures/wakil-direktur2.jpg') }}" alt="Wakil Direktur 2">
                <span class="pimpinan-name">Dr. Miyayu Soneta S., M.Vet., drh.</span>
            </div>
            <div class="pimpinan-jabatan">Wakil Direktur 2</div>
        </div>
    </div>

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