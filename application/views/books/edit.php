<!DOCTYPE html>
<html>
<head>
    <title>Edit Buku</title>
</head>
<body>
    <h2>Edit Buku</h2>
    <form action="<?= site_url('book/update/'.$book->id) ?>" method="post">
        Judul: <input type="text" name="title" value="<?= $book->title ?>"><br>
        Penulis: <input type="text" name="author" value="<?= $book->author ?>"><br>
        Penerbit: <input type="text" name="publisher" value="<?= $book->publisher ?>"><br>
        Tahun: <input type="number" name="year" value="<?= $book->year ?>"><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
