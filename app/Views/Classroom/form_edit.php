<div class="offset-3 mx-auto col-md-6"> 
    <div class="tile">
        <div class="tile-title-w-btn">
            <h4 class="title">Editar salon de clases</h4>
            <a href="<?php echo FOLDER_PATH ?>/classroom" class="btn btn-primary icon-btn">
                Volver
            </a>
        </div>
        <div class="tile-body">
            <form action="<?php echo FOLDER_PATH ?>/classroom/update/" method="post">
                <div class="form-group">
                    <label class="col-form-label" for="roomCode">Código</label>
                    <input class="form-control" id="roomCode" name="roomCode" type="text" readonly value="<?= $classroom['roomCode']?>">
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="ability">Capacidad de estudiantes</label>
                    <input class="form-control" id="ability" name="ability" type="text" value="<?= $classroom['ability']?>">
                </div>
                <div class="form-group">
                    <label for="id_teacher">Profesores</label>
                    <select class="form-control" id="id_teacher" name="id_teacher" >
                      <option>Seleccione</option>
                      <?php foreach($teachers as $teacher){?>
                            <option value="<?=$teacher['id']?>" <?= $teacher['id'] == $classroom['id_teacher'] ? 'selected': '' ?>><?= $teacher['name'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="status">Estado</label>
                    <select class="form-control" id="status" name="status" >
                      <option>Seleccione</option>
                      <option value="1" <?= $classroom['status'] == 1 ? "selected" : '' ?> >Activo</option>
                      <option value="0" <?= $classroom['status'] == 0 ? "selected" : '' ?> >Inactivo</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Enviar</button>
            </form>
        </div>
    </div>
</div>