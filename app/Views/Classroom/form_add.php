<div class="offset-3 mx-auto col-md-6">
    <?php if(!empty($message)){?>
        <div class="alert alert-dismissible alert-<?= $message_type?>">
            <button class="close" type="button" data-dismiss="alert">×</button><strong><?=ucfirst($message_type)?>!</strong>
            <?=$message?>.
        </div>
    <?php } ?>   
    <div class="tile">
        <div class="tile-title-w-btn">
            <h4 class="title">Agregar salon de clases</h4>
            <a href="<?php echo FOLDER_PATH ?>/classroom" class="btn btn-primary icon-btn">
                Volver
            </a>
        </div>
        <div class="tile-body">
            <form action="<?php echo FOLDER_PATH ?>/classroom/store" method="post">
                <div class="form-group">
                    <label class="col-form-label" for="roomCode">Código</label>
                    <input class="form-control" id="roomCode" name="roomCode" type="text" >
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="ability">Capacidad de estudiantes</label>
                    <input class="form-control" id="ability" name="ability" type="text" >
                </div>
                <div class="form-group">
                    <label for="id_teacher">Profesores</label>
                    <select class="form-control" id="id_teacher" name="id_teacher" >
                      <option>Seleccione</option>
                      <?php foreach($teachers as $teacher){?>
                            <option value="<?=$teacher['id']?>"><?= $teacher['name'] ." ". $teacher['course']?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="status">Estado</label>
                    <select class="form-control" id="status" name="status" >
                      <option>Seleccione</option>
                      <option value="1" >Activo</option>
                      <option value="0">Inactivo</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Enviar</button>
            </form>
        </div>
    </div>
</div>