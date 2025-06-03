<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>MY Biodata</h1>
    <p>Nama :{{$nama}}</p>
    <p>Umur :{{$umur}}</p>
    <p>Alamat :{{$alamat}}</p>
    <p>Hobi :{{$hobi}}</p>
    <h1>Poto</h1>
    <img src="{{ asset($gambar) }}" alt="Foto" width="200">
</body>
</html>