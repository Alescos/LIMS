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

    echo '
        <table class="table">
            <caption><strong>Nivel 1</strong></caption> 
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">TP</th>
                      <th scope="col">PTT</th>
                      <th scope="col">AT</th>
                      <th scope="col">TT</th>
                      <th scope="col">Fibrinógeno</th>
                    </tr>
                  </thead>
                  <tbody>';
    $sql = $connection->query("SELECT * FROM control_calidad") or die (mysql_error());
    while($resultados = $sql->fetch_array(MYSQLI_NUM)) {
        $consecutivo=$resultados[0];
        $tp_n1=$resultados[1];
        $tp_n2 = $resultados[2];
        $tp_n3 = $resultados[3];
        $ptt_n1 = $resultados[4];
        $ptt_n2 = $resultados[5];
        $ptt_n3 = $resultados[6];
        $at_n1 = $resultados[7];
        $at_n2 = $resultados[8];
        $at_n3 = $resultados[9];
        $tt_n1 = $resultados[10];
        $tt_n2 = $resultados[11];
        $tt_n3 = $resultados[12];
        $fib_n1 = $resultados[13];
        $fib_n2 = $resultados[14];
        $fib_n3 = $resultados[15];
        $i=$i+1;
        echo "<tr>
                      <th scope=\"row\">$consecutivo</th>
                      <td>$tp_n1</td>
                      <td>$ptt_n1</td>
                      <td>$at_n1</td>
                      <td>$tt_n1</td>
                      <td>$fib_n1</td>
                    </tr>";
        }
        echo " </tbody>
                </table>";
 

                /*<table class=\"table\">
                  <thead>
                    <tr>
                      <th scope=\"col\">#</th>
                      <th scope=\"col\">TP</th>
                      <th scope=\"col\">PTT</th>
                      <th scope=\"col\">AT</th>
                      <th scope=\"col\">TT</th>
                      <th scope=\"col\">Fibrinógeno</th>
                    </tr>
                  </thead>
                  <caption>Nivel 2</caption>
                  <tbody>
                    <tr>
                      <th scope=\"row\">$consecutivo</th>
                      <td>$tp_n2</td>
                      <td>$ptt_n2</td>
                      <td>$at_n2</td>
                      <td>$tt_n2</td>
                      <td>$fib_n2</td>
                    </tr>
                  </tbody>
                </table>
                <table class=\"table\">
                  <thead>
                    <tr>
                      <th scope=\"col\">#</th>
                      <th scope=\"col\">TP</th>
                      <th scope=\"col\">PTT</th>
                      <th scope=\"col\">AT</th>
                      <th scope=\"col\">TT</th>
                      <th scope=\"col\">Fibrinógeno</th>
                    </tr>
                  </thead>
                  <caption>Nivel 3</caption>
                  <tbody>
                    <tr>
                      <th scope=\"row\">$consecutivo</th>
                      <td>$tp_n3</td>
                      <td>$ptt_n3</td>
                      <td>$at_n3</td>
                      <td>$tt_n3</td>
                      <td>$fib_n3</td>
                    </tr>
                  </tbody>
                </table>*/ /*";
    }
    echo " </table>";
    */?>
</div>

</body>
<?php
include 'Assets/html/footer.php';
?>