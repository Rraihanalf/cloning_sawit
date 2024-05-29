<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="store">tes</a>
    <form action="lapangan/store" method="post" enctype="multipart/form-data">
        @csrf
        <!-- <input type="text" name="id_lapangan" placeholder="ID Lapangan"> -->
        <input type="text" name="luas" placeholder="Luas Lapangan">
        <input type="text" name="lokasi" placeholder="Lokasi Lapangan">
        <input type="text" name="kondisi_tanah" placeholder="Kondisi Tanah">
        <button type="submit">Simpan</button>
    </form>
</body>
</html>