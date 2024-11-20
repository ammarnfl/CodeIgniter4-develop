<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Coba</title>
</head>
<body>
    <h1>Tambah Nilai ke Tabel Coba</h1>

    <?php if (session()->getFlashdata('error')): ?>
        <p style="color: red;"><?= session()->getFlashdata('error') ?></p>
    <?php endif; ?>

    <?php if (session()->getFlashdata('success')): ?>
        <p style="color: green;"><?= session()->getFlashdata('success') ?></p>
    <?php endif; ?>

    <form action="/coba/create" method="post">
        <?= csrf_field() ?>
        <label for="value">Masukkan Nilai:</label>
        <input type="text" id="value" name="value" required>
        <button type="submit">Submit</button>
    </form>

    <h2>Tampilkan Semua Data</h2>
    <form action="/coba/show" method="get" target="_blank">
        <button type="submit">Show</button>
    </form>
</body>
</html>
