<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Customer</title>
</head>
<body>
    <h1>Form Pencarian Customer</h1>
    <form action="http://localhost:8080/customers/search" method="post">
        <label for="input">Masukkan Nama Customer:</label>
        <input type="text" name="input" id="input" required>
        <button type="submit">Cari</button>
    </form>
</body>
</html>
