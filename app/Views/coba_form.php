<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Coba</title>
</head>
<body>
    <h1>Operasi yang Dapat Dilakukan pada Tabel 'Coba'</h1>

    <!-- Success/Error Messages -->
    <?php if (session()->getFlashdata('error')): ?>
        <p style="color: red;"><?= session()->getFlashdata('error') ?></p>
    <?php endif; ?>

    <?php if (session()->getFlashdata('success')): ?>
        <p style="color: green;"><?= session()->getFlashdata('success') ?></p>
    <?php endif; ?>

    <!-- Section 1: Add Data -->
    <h2>Add Data</h2>
    <form action="/coba/create" method="post">
        <?= csrf_field() ?>
        <label for="value">Value:</label>
        <input type="text" id="value" name="value" required>
        <button type="submit">Add</button>
    </form>

    <br>
    <hr>

    <!-- Section 2: Update Data -->
    <h2>Update Data</h2>
    <form action="/coba/update" method="post">
        <?= csrf_field() ?>
        <label for="id">ID:</label>
        <input type="number" id="id" name="id" required>
        <br><br>
        <label for="value">New Value:</label>
        <input type="text" id="value" name="value" required>
        <br><br>
        <button type="submit">Update</button>
    </form>

    <br>
    <hr>

    <!-- Section 3: Delete Data -->
    <h2>Delete Data</h2>
    <form action="/coba/delete" method="post">
        <?= csrf_field() ?>
        <label for="id">ID:</label>
        <input type="number" id="id" name="id" required>
        <button type="submit">Delete</button>
    </form>

    <br>
    <hr>

    <!-- Section 4: Show Data -->
    <h2>Show All Data</h2>
    <form action="/coba/show" method="get" target="_blank">
        <button type="submit">Show</button>
    </form>
</body>
</html>
