<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include ("db/conexion_db.php");
    $documento=$_GET['documento'];
    ?>
    <title>Consulta individual</title>
</head>
<body>
<?php
include 'Assets/html/header.php';
?>
<?php
$i=0;
$sql = $connection->query("SELECT * FROM pacientes WHERE documento = $documento") or die (mysql_error());
while($resultados = $sql->fetch_array(MYSQLI_NUM)) {
    $consecutivo=$resultados[0];
    $documento=$resultados[1];
    $nombres = $resultados[2];
    $apellidos = $resultados[3];
    $edad = $resultados[4];
    $genero = $resultados[5];
    $eps = $resultados[6];
    $tp = $resultados[7];
    $ptt = $resultados[8];
    $at = $resultados[9];
    $tt = $resultados[10];
    $fibrinogeno = $resultados[11];
    $i=$i+1;

};

?>
<div class="d-flex justify-content-center">
    <form class="form-hce">
        <div class="form-row">
            <div class="form-group">
                <h3 class="exampleInputName">Datos consultados</h3>
                <br></br>
                <p ><b>Documento de identidad: </b> <?php echo $documento;?> </p>
                <p ><b>Nombres: </b><?php echo $nombres;?></p>
                <p ><b>Apellidos: </b><?php echo $apellidos;?></p>
                <p ><b>Género: </b> <?php echo $genero;?></p>
                <p ><b>Edad: </b> <?php echo $edad;?> años de edad</p>
                <p ><b>Tiempo de Protrombina - TP: </b> <?php echo $tp;?> segundos</p>
                <p ><b>Tiempo de Tromboplastina Parcial -PTT: </b> <?php echo $ptt;?> segundos</p>
                <p ><b>Antitrombina III – AT III: </b> <?php echo $at;?> %</p>
                <p ><b>Tiempo de Trombina - TT: </b> <?php echo $tt;?> segundos</p>
                <p ><b>Fibrinógeno: </b> <?php echo $fibrinogeno;?> mg/dL</p>
            </div>

        </div>
    </form>

</div>
<div class="d-flex justify-content-center">
    <a class="btn btn-primary" href="consulta_usuarios.php">Regresar</a>
</div>
<?php
include 'Assets/html/footer.php'
?>


</body>
</html>