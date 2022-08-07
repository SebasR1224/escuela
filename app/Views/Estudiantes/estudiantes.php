<?php 
    echo view_header($data); ?>
<main class="app-content">
    <div class="app-title">
    <div>
        <h1><i class="fa fa-users"></i> <?php echo $data['page_title']?></h1>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li> 
        <li class="breadcrumb-item"><a href="<?php echo base_url() ?>estudiantes">Estudiantes </a></li>
    </ul>
    </div>
    <div class="row">
    <div class="col-md-12">
    <div class="tile">
            <div class="tile-title-w-btn">
              <h3 class="title">Estudiantes</h3>
                <button type="button" class="btn btn-primary icon-btn" data-toggle="modal" data-target="#modalEstudiante">
                    <i class="fa fa-plus"></i> Nuevo
                </button>
            </div>
            <div class="tile-body">
            <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="tableEstudiantes">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>DNI</th>
                      <th>Nombres</th>
                      <th>Apellidos</th>
                      <th>Teléfono</th>
                      <th>Email</th>
                      <th>Estado</th>
                      <th></th>
                    </tr>
                  </thead>
                </table>
              </div>
            </div>
          </div>
        </div>
            </div>
          </div>
    </div>
    </div>
</main>

<!-- Modal -->
<div class="modal fade" id="modalEstudiante" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Nuevo Estudiante</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <form id="formEstudiante" name="formEstudiante">
      	<div class="modal-body">
			<input type="hidden" name="id" id="id" value="">
			<div class="form-group">
				<label class="control-label" for="dni">DNI</label>
				<input class="form-control" type="text" id="dni" name="dni" placeholder="Ingrese número de identificación" required>
			</div>
			<div class="form-group">
				<label class="control-label" for="nombre">Nombre</label>
				<input class="form-control" type="text" id="nombre" name="nombre" placeholder="Ingrese nombres completo" required>
			</div>
			<div class="form-group">
				<label class="control-label" for="apellido">Apellido</label>
				<input class="form-control" type="text" id="apellido" name="apellido" placeholder="Ingrese apellidos completo" required>
			</div>
			<div class="form-group">
				<label class="control-label" for="correo">Correo</label>
				<input class="form-control" type="email" id="correo" name="correo" placeholder="Ingrese correo electrónico" required>
			</div>
			<div class="form-group">
				<label class="control-label" for="telefono">Teléfono</label>
				<input class="form-control" type="text" id="telefono" name="telefono" placeholder="Ingrese número de teléfono" required>
			</div>
			<div class="form-group">
				<label for="estado">Estado</label>
				<select class="form-control" id="estado" name="estado">
					<option value="" >Seleccione...</option>
					<option value="1" >Activo</option>
					<option value="2" >Inactivo</option>
				</select>
			</div>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-primary">Guardar</button>
      	</div>
	</form>
    </div>
  </div>
</div>

<?php echo view_footer($data)?>