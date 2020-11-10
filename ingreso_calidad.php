<?php
include 'Assets/html/header.php';
?>
<link rel="stylesheet" href="Assets/css/ingreso_pacientes.css">
<form action="registro_calidad.php" method="post" class="form-hce">
    <a class="btn btn-primary" href="control_calidad.php" role="button">Regresar</a>
    <br>
    <br>
    <fieldset>
        <legend>Nivel 1</legend>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputTP1">TP:</label>
                <input class="form-control" type="number" name="tp_n1">
            </div>
            <div class="form-group col-md-6">
                <label>PPT:</label>
                <input class="form-control" type="number" name="ptt_n1">
            </div>
            <div class="form-group col-md-6">
                <label>AT:</label>
                <input class="form-control" type="number" name="at_n1">
            </div>
            <div class="form-group col-md-6">
                <label>TT:</label>
                <input class="form-control" type="number" name="tt_n1">
            </div>
            <div class="form-group col-md-6">
                <label>Fib:</label>
                <input class="form-control" type="number" name="fib_n1">
            </div>
        </div>
    </fieldset>
    <fieldset>
        <legend>Nivel 2</legend>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputTP1">TP:</label>
                <input class="form-control" type="number" name="tp_n2">
            </div>
            <div class="form-group col-md-6">
                <label>PPT:</label>
                <input class="form-control" type="number" name="ptt_n2">
            </div>
            <div class="form-group col-md-6">
                <label>AT:</label>
                <input class="form-control" type="number" name="at_n2">
            </div>
            <div class="form-group col-md-6">
                <label>TT:</label>
                <input class="form-control" type="number" name="tt_n2">
            </div>
            <div class="form-group col-md-6">
                <label>Fib:</label>
                <input class="form-control" type="number" name="fib_n2">
            </div>
        </div>
    </fieldset>
    <fieldset>
        <legend>Nivel 3</legend>
        <div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputTP1">TP:</label>
                    <input class="form-control" type="number" name="tp_n3">
                </div>
                <div class="form-group col-md-6">
                    <label>PPT:</label>
                    <input class="form-control" type="number" name="ptt_n3">
                </div>
                <div class="form-group col-md-6">
                    <label>AT:</label>
                    <input class="form-control" type="number" name="at_n3">
                </div>
                <div class="form-group col-md-6">
                    <label>TT:</label>
                    <input class="form-control" type="number" name="tt_n3">
                </div>
                <div class="form-group col-md-6">
                    <label>Fib:</label>
                    <input class="form-control" type="number" name="fib_n3">
                </div>
            </div>
        </div>
    </fieldset>
    <button type="reset" class="btn btn-primary">Borrar</button>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>


