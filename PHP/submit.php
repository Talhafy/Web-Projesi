<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Bilgileri</title>
</head>
<body>
    <h2>Form Bilgileri</h2>
    <p>Ad: <?php echo $_POST["name"]; ?></p>
    <p>Soyad: <?php echo $_POST["surname"]; ?></p>
    <p>Email: <?php echo $_POST["email"]; ?></p>
    <p>Telefon: <?php echo $_POST["phone"]; ?></p>
    <p>Mesaj: <?php echo $_POST["message"]; ?></p>
</body>
</html>
