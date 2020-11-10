<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Registro de calidad</title>
    <link rel="stylesheet" href="Assets/css/ingreso_pacientes.css">

    <?php
    include("db/conexion_db.php");
    $tp_n1=$_POST['tp_n1'];
    $ptt_n1=$_POST['ptt_n1'];
    $at_n1=$_POST['at_n1'];
    $tt_n1=$_POST['tt_n1'];
    $fib_n1=$_POST['fib_n1'];
    $tp_n2=$_POST['tp_n3'];
    $ptt_n2=$_POST['ptt_n2'];
    $at_n2=$_POST['at_n2'];
    $tt_n2=$_POST['tt_n1'];
    $fib_n2=$_POST['fib_n2'];
    $tp_n3=$_POST['tp_n3'];
    $ptt_n3=$_POST['ptt_n3'];
    $at_n3=$_POST['at_n3'];
    $tt_n3=$_POST['tt_n3'];
    $fib_n3=$_POST['fib_n3'];
    $sql=$connection->query("INSERT INTO control_calidad(tp_nivel_1,tp_nivel_2,tp_nivel_3,ptt_nivel_1,ptt_nivel_2,ptt_nivel_3,at_nivel_1,at_nivel_2,at_nivel_3,tt_nivel_1,tt_nivel_2,tt_nivel_3,fibrinogeno_nivel_1,fibrinogeno_nivel_2,fibrinogeno_nivel_3,fecha) VALUES('".$tp_n1."','".$tp_n2."','".$tp_n3."','".$ptt_n1."','".$ptt_n2."','".$ptt_n3."','".$at_n1."','".$at_n2."','".$at_n3."','".$tt_n1."','".$tt_n2."','".$tt_n3."','".$fib_n1."','".$fib_n2."','".$fib_n3."',NOW())");
    ?>
</head>
<body>
<?php
    include 'Assets/html/header.php';
?>
<di>
    <form>
        <fieldset>
            <legend>Nivel 1</legend>
            <p><b>TP: </b><?php echo $tp_n1; ?></p>
            <p><b>PPT: </b><?php echo $ptt_n1; ?></p>
            <p><b>AT: </b><?php echo $at_n1; ?></p>
            <p><b>TT: </b><?php echo $tt_n1; ?></p>
            <p><b>Fibrinógeno: </b><?php echo $fib_n1; ?></p>
        </fieldset>
        <fieldset>
            <legend>Nivel 2</legend>
            <p><b>TP: </b><?php echo $tp_n2; ?></p>
            <p><b>PPT: </b><?php echo $ptt_n2; ?></p>
            <p><b>AT: </b><?php echo $at_n2; ?></p>
            <p><b>TT: </b><?php echo $tt_n2; ?></p>
            <p><b>Fibrinógeno: </b><?php echo $fib_n2; ?></p>
        </fieldset>
        <fieldset>
            <legend>Nivel 3</legend>
            <p><b>TP: </b><?php echo $tp_n3; ?></p>
            <p><b>PPT: </b><?php echo $ptt_n3; ?></p>
            <p><b>AT: </b><?php echo $at_n3; ?></p>
            <p><b>TT: </b><?php echo $tt_n3; ?></p>
            <p><b>Fibrinógeno: </b><?php echo $fib_n3; ?></p>
        </fieldset>
    </form>
</di>
<?php
    include 'Assets/html/footer.php';
?>
</body>