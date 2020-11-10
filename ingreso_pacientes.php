<?php
include 'Assets/html/header.php';
?>
<link rel="stylesheet" href="Assets/css/ingreso_pacientes.css">
<form action="registro_paciente.php" method="post" class="form-hce">
<div class="form-row">
  <div class="form-group col-md-6">
    <label for="exampleInputName">Nombres</label>
    <input type="text" class="form-control" name="nombres" aria-describedby="emailHelp">
  </div>
  <div class="form-group col-md-6">
    <label for="exampleInputLastName">Apellidos</label>
    <input type="text" class="form-control" name="apellidos" aria-describedby="emailHelp">
  </div>
</div>
<div class="form-row">
  <div class="form-group col-md-6">
    <label for="exampleInputId">Documento de identidad</label>
    <input type="text" class="form-control" name="documento" aria-describedby="emailHelp">
  </div>
  <div class="form-group col-md-6">
    <label for="exampleInputAge">Edad</label>
    <input type="text" class="form-control" name="edad" aria-describedby="emailHelp">
  </div>
</div>
<div class="form-row">
  <div class="form-group col-md-6">
    <label for="exampleInputGender">Género</label>
    <select class="form-control form-control-lg" name="genero">
        <option value=""></option>
        <option value="masculino">Masculino</option>
        <option value="femenino">Femenino</option>
    </select>
  </div>
  <div class="form-group col-md-6">
    <label for="exampleInputGender">EPS</label>
    <select class="form-control form-control-lg" name="eps">
        <option value=""></option>
        <option value="sura">Sura</option>
        <option value="coomeva">Coomeva</option>
        <option value="sanitas">Sanitas</option>
        <option value="nueva eps">Nueva Eps</option>
        <option value="savia">Savia</option>
        <option value="compensar">Compensar</option>
        <option value="salud total">Salud total</option>
        <option value="famisanar">Famisanar</option>
        <option value="mutualser">Mutualser</option>
        <option value="coosalud">Coosalud</option>
    </select>
  </div>
</div>
  <h5>Resultados pruebas de coagulación</h5>
  <div class="form-row">
      
    <div class="form-group col-md-3">
        <label for="inputNumber">TP</label>
        <input type="text" class="form-control" name="tp">
    </div>
    <div class="form-group col-md-3">
        <label for="inputNumber">PTT</label>
        <input type="text" class="form-control" name="ptt">
    </div>
    <div class="form-group col-md-3">
        <label for="inputNumber">AT III</label>
        <input type="text" class="form-control" name="at">
    </div>
        <div class="form-group col-md-3">
        <label for="inputNumber">TT</label>
        <input type="text" class="form-control" name="tt">
        </div>
        <div class="form-group col-md-3">
        <label for="inputNumber">Fibrinógeno</label>
        <input type="text" class="form-control" name="fibrinogeno">
        </div>
        </div>
  
  <button type="submit" class="btn btn-primary">Guardar</button>
  <button type="reset" class="btn btn-primary">Borrar</button>
</form>



<?php
include 'Assets/html/footer.php'
?>