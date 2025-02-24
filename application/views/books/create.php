<!DOCTYPE html>
<html>
<head>
    <title>Tambah Buku</title>
</head>
<body>
    <h2>Tambah Buku</h2>
    <form action="<?= site_url('book/store') ?>" method="post">
        Judul: <input type="text" name="title"><br>
        Penulis: <input type="text" name="author"><br>
        Penerbit: <input type="text" name="publisher"><br>
        Tahun: <input type="number" name="year"><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
