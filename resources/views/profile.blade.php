<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata GUWE</title>
</head>
<body>
    <header>
        <h1>BIODATA GWE</h1>
        <hr>
    </header>

    <section>
        <h2>Informasi Pribadi</h2>
        <ul>
            <li><strong>Nama:</strong> {{$nama}}</li>
            <li><strong>Umur:</strong> {{$umur}} tahun</li>
            <li><strong>Alamat:</strong> {{$alamat}}</li>
            <li><strong>Hobi:</strong> {{$hobi}}</li>
        </ul>
    </section>

    <section>
        <h2>Foto</h2>
        <figure>
            <img src="{{ asset($gambar) }}" alt="Foto Profil" width="200">
            <figcaption>Ini aku cuy 😎</figcaption>
        </figure>
    </section>

    <footer>
        <hr>
        <p>© {{ date('Y') }} - Dibuat dengan 45 INDONESIA MERDEKA</p>
    </footer>
</body>
</html>
