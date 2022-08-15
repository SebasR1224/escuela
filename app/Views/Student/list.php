<div class="col">
    <?php if(!empty($message)){?>
        <div class="alert alert-dismissible alert-<?= $message_type?>">
            <button class="close" type="button" data-dismiss="alert">×</button><strong><?=ucfirst($message_type)?>!</strong>
            <?=$message?>.
        </div>
    <?php } ?>    
</div>
<div class="col-md-12">
    <div class="tile">
        <div class="tile-title-w-btn">
            <h3 class="title">Usuarios</h3>
            <a href="<?php echo FOLDER_PATH ?>/student/add" class="btn btn-primary icon-btn">
                <i class="fa fa-plus"></i> Nuevo
            </a>
        </div>
        <div class="tile-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered" id="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Documento</th>
                            <th>Nombre</th>
                            <th>Genero</th>
                            <th>Cursos</th>
                            <th>Estado</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($students as $student) {?>
                            <tr>
                                <td><?= $student['id']?></td>
                                <td><?= $student['dniType'] ." ". $student['dni']?></td>
                                <td><?= $student['name'] ." ". $student['lastName']?></td>
                                <td><?= empty($student['gender']) ? 'N/A' : $student['gender'] ?></td>
                                <td>
                                    <?php foreach($student['classroom'] as $classroom) {?>
                                        <span class="badge badge-primary"><?= $classroom['id_classroom']?></span>
                                    <?php } ?>
                                </td>

                                <?php if($student['status'] == 1){ ?>
                                    <td><a href="<?php echo FOLDER_PATH. "/student/status/{$student['id']}"?>" class="badge badge badge-success btn btn-success">Activo</a></td>
                                <?php }else{ ?>
                                    <td><a href="<?php echo FOLDER_PATH. "/student/status/{$student['id']}"?>" class="badge badge badge-danger btn btn-danger">Inactivo</a></td>
                                <?php } ?>
                                <td>
                                    <a href="<?php echo FOLDER_PATH. "/student/edit/{$student['id']}"?>" class="btn btn-circle">
                                        <i class="far fa-edit text-warning"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
	</div>
</div>