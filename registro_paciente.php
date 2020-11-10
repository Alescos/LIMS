<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Registro de paciente</title>
        <link rel="stylesheet" href="Assets/css/ingreso_pacientes.css">
        
        <?php
        	include("db/conexion_db.php");
        	$documento=$_POST['documento'];
        	$nombres = $_POST['nombres'];
        	$apellidos = $_POST['apellidos'];  
        	$genero = $_POST['genero'];        	
        	$edad = $_POST['edad'];        	
        	$eps = $_POST["eps"];
            $tp = $_POST["tp"];
            $ptt = $_POST["ptt"];
            $at = $_POST["at"];
            $tt = $_POST["tt"];
            $fibrinogeno = $_POST["fibrinogeno"];	
            $sql=$connection->query("INSERT INTO pacientes(documento,nombres,apellidos,edad,genero,eps,tp,ptt,at,tt,fibrinogeno) VALUES('".$documento."','".$nombres."','".$apellidos."','".$edad."','".$genero."','".$eps."','".$tp."','".$ptt."','".$at."','".$tt."','".$fibrinogeno."')");	
            /*
            Este codigo comprueba el query en caso que no se ejecute correctamente y muestra cual es el error
            if($sql){
                echo "insertado exitoso";
            }
            else {
                printf("Errormessage: %s\n", $connection->error);
            }*/
        ?>
    </head>
    <body>
    <?php
        include 'Assets/html/header.php';
        ?>
    <div class="d-flex justify-content-center">
        <form class="form-hce">
            <div class="form-row">  
                <div class="form-group">
                    <h3 class="exampleInputName">Datos de registro del paciente</h3>
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
    </body>
    <?php
        include 'Assets/html/footer.php'
        ?>
    </html>