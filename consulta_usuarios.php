<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de usuario</title>
</head>
<body>
<?php
    include 'Assets/html/header.php';
?>
<link rel="stylesheet" href="Assets/css/ingreso_pacientes.css">
<form method="get" action="mostrar_usuario.php">
    <div class="form-group">
        <label for="exampleInputDocument1">Documento de identidad:</label>
        <input type="number" name="documento" class="form-control" id="exampleInputDocument" placeholder="Documento de identidad">
    </div>
    <button type="submit" class="btn btn-primary">Buscar resultados</button>
</form>




<?php
    include 'Assets/html/footer.php'
?>
</body>
</html>