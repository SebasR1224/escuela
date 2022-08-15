<div class="offset-3 mx-auto col-md-6"> 
    <div class="tile">
        <div class="tile-title-w-btn">
            <h4 class="title">Editar Estudiante</h4>
            <a href="<?php echo FOLDER_PATH ?>/student" class="btn btn-primary icon-btn">
                Volver
            </a>
        </div>
        <div class="tile-body">
            <form action="<?php echo FOLDER_PATH ?>/student/update/" method="post">
                <input type="hidden" name="id" value="<?= $student['id'] ?>">
                <div class="form-group">
                    <label class="col-form-label" for="dni">Documento</label>
                    <input class="form-control" id="dni" name="dni" type="text" value="<?= $student['dni']?>">
                </div>
                <div class="form-group">
                    <label for="dniType">Tipo de documento</label>
                    <select class="form-control" id="dniType" name="dniType" >
                      <option>Seleccione</option>
                      <option value="CC" <?= $student['dniType'] == "CC" ? "selected" : '' ?>>Cedula</option>
                      <option value="TI" <?= $student['dniType'] == "TI" ? "selected" : '' ?>>Targeta de identidad</option>
                      <option value="PS" <?= $student['dniType'] == "PS" ? "selected" : '' ?>>Pasaporte</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="name">Nombre</label>
                    <input class="form-control" id="name" name="name" type="text" value="<?= $student['name']?>">
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="lastName">Apellido</label>
                    <input class="form-control" id="lastName" name="lastName" type="text" value="<?= $student['lastName']?>">
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Genero</label>
                  <div class="col-md-9">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" value="F" name="gender"  <?= $student['gender'] == "F" ? "checked" : '' ?>>Femenino
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" value="M" name="gender" <?= $student['gender'] == "M" ? "checked" : '' ?>>Masculino
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" value="0" name="gender" <?= empty($student['gender']) ? "checked" : '' ?>>Prefiero no decirlo
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="lastName">Salon de clase</label>
                    <select class="form-control" id="demoSelect" name="classroom[]" multiple="multiple">
                      <optgroup label="Seleccione">
                        <?php foreach($classrooms as $classroom){
                            if(in_array($classroom['roomCode'], $classroomsCodeStudent)){
                              echo "<option value='{$classroom['roomCode']}' selected>{$classroom['roomCode']}</option>";
                            }else{
                              echo "<option value='{$classroom['roomCode']}'>{$classroom['roomCode']}</option>";
                            }
                        } ?>
                      </optgroup>
                    </select>
                </div>
                <div class="form-group">
                    <label for="status">Estado</label>
                    <select class="form-control" id="status" name="status" >
                      <option>Seleccione</option>
                      <option value="1" <?= $student['status'] == 1 ? "selected" : '' ?> >Activo</option>
                      <option value="0" <?= $student['status'] == 0 ? "selected" : '' ?> >Inactivo</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Enviar</button>
            </form>
        </div>
    </div>
</div>