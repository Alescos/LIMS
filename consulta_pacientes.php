<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta masiva de pacientes</title>
</head>
<body>
    <?php
    include 'Assets/html/header.php';
    ?>
    <div class="d-flex justify-content-center">
    <?php
            include ("db/conexion_db.php");
            $i=0;
            
            echo '<table border="1" cellspacing="0" cellpadding="5">
            <tr align="center" bgcolor="#B9CCDD">
                <td><strong>Consecutivo.</strong></td>
                <td><strong>Documento</strong></td>
                <td><strong>Nombres</strong></td>
                <td><strong>Apellidos</strong></td>
            </tr>
            <tr>';
            $sql = $connection->query("SELECT * FROM pacientes") or die (mysql_error());
                while($resultados = $sql->fetch_array(MYSQLI_NUM)) {
                        $consecutivo=$resultados[0];
                        $documento=$resultados[1];
                        $nombres = $resultados[2];
                        $apellidos = $resultados[3];
                        $genero = $resultados[4];        	
                        $edad = $resultados[5];        	
                        $eps = $resultados[6];
                        $tp = $resultados[7];
                        $ptt = $resultados[8];
                        $at = $resultados[9];
                        $tt = $resultados[10];
                        $fibrinogeno = $resultados[11];
                    $i=$i+1;    
                    echo "<td align='center'>".$consecutivo."</td>
                    <td><a href='consulta_pacientes_ind.php?documento=".$documento."'>".$documento."</a></td>
                    <td>".$nombres."</td>
                    <td>".$apellidos."</td>
                </tr>";

                }
                echo " </table>";
            ?>

        </div>
    
</body>
<?php
    include 'Assets/html/footer.php';
    ?>