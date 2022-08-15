<div class="offset-3 mx-auto col-md-6">
    <?php if(!empty($message)){?>
        <div class="alert alert-dismissible alert-<?= $message_type?>">
            <button class="close" type="button" data-dismiss="alert">×</button><strong><?=ucfirst($message_type)?>!</strong>
            <?=$message?>.
        </div>
    <?php } ?>   
    <div class="tile">
        <div class="tile-title-w-btn">
            <h4 class="title">Agregar estudiante</h4>
            <a href="<?php echo FOLDER_PATH ?>/student" class="btn btn-primary icon-btn">
                Volver
            </a>
        </div>
        <div class="tile-body">
            <form action="<?php echo FOLDER_PATH ?>/student/store" method="post">
                <div class="form-group">
                    <label class="col-form-label" for="dni">Documento</label>
                    <input class="form-control" id="dni" name="dni" type="text" >
                </div>
                <div class="form-group">
                    <label for="dniType">Tipo de documento</label>
                    <select class="form-control" id="dniType" name="dniType" >
                      <option>Seleccione</option>
                      <option value="CC" >Cedula</option>
                      <option value="TI">Targeta de identidad</option>
                      <option value="PS">Pasaporte</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="name">Nombre</label>
                    <input class="form-control" id="name" name="name" type="text" >
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="lastName">Apellido</label>
                    <input class="form-control" id="lastName" name="lastName" type="text" >
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Genero</label>
                  <div class="col-md-9">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" value="F" name="gender">Femenino
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" value="M" name="gender">Masculino
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" value="0" name="gender">Prefiero no decirlo
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="lastName">Salon de clase</label>
                    <select class="form-control" id="demoSelect" name="classroom[]" multiple="multiple">
                      <optgroup label="Seleccione">
                        <?php foreach($classrooms as $classroom) {?>
                          <option value="<?= $classroom['roomCode']?>"><?= $classroom['roomCode']?></option>
                        <?php } ?>
                      </optgroup>
                    </select>
                </div>
                <div class="form-group">
                    <label for="status">Estado</label>
                    <select class="form-control" id="status" name="status" >
                      <option value="">Seleccione</option>
                      <option value="1" >Activo</option>
                      <option value="0">Inactivo</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Enviar</button>
            </form>
        </div>
    </div>
</div>