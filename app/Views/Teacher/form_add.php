<div class="offset-3 mx-auto col-md-6">
    <?php if(!empty($message)){?>
        <div class="alert alert-dismissible alert-<?= $message_type?>">
            <button class="close" type="button" data-dismiss="alert">×</button><strong><?=ucfirst($message_type)?>!</strong>
            <?=$message?>.
        </div>
    <?php } ?>   
    <div class="tile">
        <div class="tile-title-w-btn">
            <h4 class="title">Agregar profesor</h4>
            <a href="<?php echo FOLDER_PATH ?>/teacher" class="btn btn-primary icon-btn">
                Volver
            </a>
        </div>
        <div class="tile-body">
            <form action="<?php echo FOLDER_PATH ?>/teacher/store" method="post">
                <div class="form-group">
                    <label class="col-form-label" for="dni">Documento</label>
                    <input class="form-control" id="dni" name="dni" type="text" >
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="name">Nombre</label>
                    <input class="form-control" id="name" name="name" type="text" >
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="course">Asignatura</label>
                    <input class="form-control" id="course" name="course" type="text" >
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