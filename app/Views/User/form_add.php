<div class="offset-3 mx-auto col-md-6">
    <?php if(!empty($message)){?>
        <div class="alert alert-dismissible alert-<?= $message_type?>">
            <button class="close" type="button" data-dismiss="alert">×</button><strong><?=ucfirst($message_type)?>!</strong>
            <?=$message?>.
        </div>
    <?php } ?>   
    <div class="tile">
        <div class="tile-title-w-btn">
            <h4 class="title">Agregar usuario</h4>
            <a href="<?php echo FOLDER_PATH ?>/user" class="btn btn-primary icon-btn">
                Volver
            </a>
        </div>
        <div class="tile-body">
            <form action="<?php echo FOLDER_PATH ?>/user/store" method="post">
                <div class="form-group">
                    <label class="col-form-label" for="username">Nombre de usuario</label>
                    <input class="form-control" id="username" name="username" type="text" >
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="email">Correo</label>
                    <input class="form-control" id="email" name="email" type="email" >
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="password">Contraseña</label>
                    <input class="form-control" id="password" name="password" type="password" >
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