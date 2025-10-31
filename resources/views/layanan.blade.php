<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Umum</title>
    <link rel="stylesheet" href="{{ asset('css/layanan.css') }}">
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

    <div class="layanan-header">
        <h1>Layanan Umum</h1>
        <p>Rumah Sakit Hewan Pendidikan Universitas Airlangga melakukan layanan-layanan, baik atas kehendak klien atau rujukan dokter hewan praktisi sebagai berikut:</p>
    </div>
    
    <div class="layanan-isi">
        <h2>Poliklinik</h2>
        <p>Poliklinik adalah layanan rawat jalan dimana pelayanan kesehatan hewan dilakukan tanpa pasien menginap. Poliklinik melayani tindakan observasi, diagnosis, pengobatan, rehabilitasi medik, serta pelayanan kesehatan lainnya seperti permintaan surat keterangan sehat. Tindakan observasi dan diagnosis, juga bisa diteguhkan dengan berbagai macam pemeriksaan yang bisa kami lakukan, misalnya pemeriksaan sitologi, dermatologi, hematologi, atau pemeriksaan radiologi, ultrasonografi, bahkan pemeriksaan elektrokardiografi. Bilamana diperlukan pemeriksaan-pemeriksaan lain yang diperlukan seperti pemeriksaan kultur bakteri, atau pemeriksaan jaringan/histopatologi, dan lain-lain kami bekerja sama dengan Fakultas Kedokteran Hewan Universitas Airlangga untuk membantu melakukan pemeriksaan-pemeriksaan tersebut. Selain itu kami mempunyai rapid test untuk pemeriksaan cepat, untuk meneguhkan diagnosa penyakit-penyakit berbahaya pada kucing seperti panleukopenia, calicivirus, rhinotracheitis, FIP, dan pada anjing seperti parvovirus, canine distemper.</p>
        <p>Layanan kesehatan hewan di poliklinik yang kami lakukan antara lain:</p>
        <ul>
            <li>Rawat jalan</li>
            <li>Vaksinasi</li>
            <li>Akupuntur</li>
            <li>Kemoterapi</li>
            <li>Fisioterapi</li>
            <li>Mandi Terapi</li>
        </ul>
    </div>

    <div class="layanan-isi">
        <h2>Rawat Inap</h2>
        <p>Rawat inap dilakukan pada pasien-pasien yang berat atau parah dan membutuhkan perawatan intensif. Pasien akan diobservasi dan mendapat perawatan intensif dibawah pengawasan dokter dan paramedis yang handal. Sebelum rawat inap, klien wajib mengisi inform konsen yang artinya klien telah diberi penjelasan yang detail tentang kondisi penyakit pasien dan menyetujui rencana terapi yang akan dijalankan sepengetahuan klien. Klien juga diberitahu biaya yang dibebankan untuk semua layanan. RSHP menerima pembayaran tunai maupun kartu debit bank.</p>
    </div>

    <div class="layanan-isi">
        <h2>Bedah</h2>
        <li>Tindakan Bedah Minor:
            <ul>
                <li>Jahit Luka</li>
                <li>Kastrasi</li>
                <li>Othematoma</li>
                <li>Scalling - rool planning</li>
                <li>Ekstraksi Gigi</li>
            </ul>
        </li>
        <br>
        <li>Tindakan Bedah Mayor:
            <ul>
                <li>Gastrotomi; Entrotomi; Enterektomi; Salivary mucocele</li>
                <li>Ovariohisterektomi; Sectio caesar; Piometra</li>
                <li>Sistotomi; Urethrostomi</li>
                <li>Fraktur tulang</li>
                <li>Hernia diafragmatika</li>
                <li>Hernia perinealis</li>
                <li>Hernia inguinalis</li>
                <li>Eksisi tumor</li>
            </ul>
        </li>
    </div>

    <div class="layanan-isi">
        <h2>Pemeriksaan</h2>
            <li>Pemeriksaan Sitologi</li>
            <li>Pemeriksaan Dermatologi</li>
            <li>Pemeriksaan Hematologi</li>
            <li>Pemeriksaan Radiografi</li>
            <li>Pemeriksaan Ultrasonografi</li>
    </div>
    
    <div class="layanan-tambahan">
        <p>Selain layanan medis, Rumah Sakit Hewan Pendidikan Universitas Airlangga juga melayani <a href="grooming.html">grooming</a> pada hewan kesayangan.</p>
    </div>
</body>
</html>