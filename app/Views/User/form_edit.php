<div class="offset-3 mx-auto col-md-6"> 
    <div class="tile">
        <div class="tile-title-w-btn">
            <h4 class="title">Editar usuario</h4>
            <a href="<?php echo FOLDER_PATH ?>/user" class="btn btn-primary icon-btn">
                Volver
            </a>
        </div>
        <div class="tile-body">
            <form action="<?php echo FOLDER_PATH ?>/user/update/" method="post">
                <input type="hidden" name="id" value="<?= $user['id'] ?>">
                <div class="form-group">
                    <label class="col-form-label" for="username">Nombre de usuario</label>
                    <input class="form-control" id="username" name="username" type="text" value="<?= $user['username']?>">
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="email">Correo</label>
                    <input class="form-control" id="email" name="email" type="email" value="<?= $user['email']?>">
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="password">Contraseña</label>
                    <input class="form-control" id="password" name="password" type="password"  value="<?= $user['password']?>">
                </div>
                <div class="form-group">
                    <label for="status">Estado</label>
                    <select class="form-control" id="status" name="status">
                      <option>Seleccione</option>
                      <option value="1" <?= $user['status'] == 1 ? "selected" : '' ?> >Activo</option>
                      <option value="0" <?= $user['status'] == 0 ? "selected" : '' ?> >Inactivo</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Enviar</button>
            </form>
        </div>
    </div>
</div>