<div class="offset-3 mx-auto col-md-6"> 
    <div class="tile">
        <div class="tile-title-w-btn">
            <h4 class="title">Editar profesor</h4>
            <a href="<?php echo FOLDER_PATH ?>/teacher" class="btn btn-primary icon-btn">
                Volver
            </a>
        </div>
        <div class="tile-body">
            <form action="<?php echo FOLDER_PATH ?>/teacher/update/" method="post">
                <input type="hidden" name="id" value="<?= $teacher['id'] ?>">
                <div class="form-group">
                    <label class="col-form-label" for="dni">Documento</label>
                    <input class="form-control" id="dni" name="dni" type="text" value="<?= $teacher['dni']?>">
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="name">Nombre</label>
                    <input class="form-control" id="name" name="name" type="text" value="<?= $teacher['name']?>">
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="course">Asignatura</label>
                    <input class="form-control" id="course" name="course" type="text"  value="<?= $teacher['course']?>">
                </div>
                <div class="form-group">
                    <label for="status">Estado</label>
                    <select class="form-control" id="status" name="status">
                      <option>Seleccione</option>
                      <option value="1" <?= $teacher['status'] == 1 ? "selected" : '' ?> >Activo</option>
                      <option value="0" <?= $teacher['status'] == 0 ? "selected" : '' ?> >Inactivo</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Enviar</button>
            </form>
        </div>
    </div>
</div>