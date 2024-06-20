<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio de Datos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<form action="welcome.php" method="POST">
Nombre: <input type="text" name="name" pattern="[A-Z|a-z|Ñ|ñ|Ü|ú|Á|É|Í|Ó|Ú|á|é|í|ó|ú]" required><br>
Edad: <input type="text" name="edad" pattern="[1-9]{1,99}" required><br>
<input type="submit">
</form>
</body>
</html>