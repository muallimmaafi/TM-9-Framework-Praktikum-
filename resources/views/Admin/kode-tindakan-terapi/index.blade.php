<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Deskripsi Tindakan Terapi</th>
            <th>idKategori</th>
            <th>idKategori Klinis</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tindakan as $index => $t)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $t->kode }}</td>
            <td>{{ $t->deskripsi_tindakan_terapi }}</td>
            <td>{{ $t->kategori->idkategori ?? '-' }}</td>
            <td>{{ $t->kategoriKlinis->idkategori_klinis ?? '-' }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
