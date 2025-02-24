<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
</head>
<body>
    <h2>Daftar Buku</h2>
    <a href="<?= site_url('book/create') ?>">Tambah Buku</a>
    <table border="1">
        <tr>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($books as $book): ?>
        <tr>
            <td><?= $book->title ?></td>
            <td><?= $book->author ?></td>
            <td><?= $book->publisher ?></td>
            <td><?= $book->year ?></td>
            <td>
                <a href="<?= site_url('book/edit/'.$book->id) ?>">Edit</a>
                <a href="<?= site_url('book/delete/'.$book->id) ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
