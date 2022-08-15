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
            <h3 class="title">Profesores</h3>
            <a href="<?php echo FOLDER_PATH ?>/teacher/add" class="btn btn-primary icon-btn">
                <i class="fa fa-plus"></i> Nuevo
            </a>
        </div>
        <div class="tile-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered" id="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Dni</th>
                            <th>Nombre</th>
                            <th>Asignatura</th>
                            <th>Estado</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($teachers as $teacher) {?>
                            <tr>
                                <td><?= $teacher['id']?></td>
                                <td><?= $teacher['dni']?></td>
                                <td><?= $teacher['name']?></td>
                                <td><?= $teacher['course']?></td>
                                <?php if($teacher['status'] == 1){ ?>
                                    <td><a href="<?php echo FOLDER_PATH. "/teacher/status/{$teacher['id']}"?>" class="badge badge badge-success btn btn-success">Activo</a></td>
                                <?php }else{ ?>
                                    <td><a href="<?php echo FOLDER_PATH. "/teacher/status/{$teacher['id']}"?>" class="badge badge badge-danger btn btn-danger">Inactivo</a></td>
                                <?php } ?>
                                <td>
                                    <a href="<?php echo FOLDER_PATH. "/teacher/edit/{$teacher['id']}"?>" class="btn btn-circle">
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