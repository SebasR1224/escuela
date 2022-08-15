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
            <h3 class="title">Salones de clase</h3>
            <a href="<?php echo FOLDER_PATH ?>/classroom/add" class="btn btn-primary icon-btn">
                <i class="fa fa-plus"></i> Nuevo
            </a>
        </div>
        <div class="tile-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered" id="table">
                    <thead>
                        <tr>
                            <th>Coódigo</th>
                            <th>Capacidad de estudiantes</th>
                            <th>Profesor encargado</th>
                            <th>Estado</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($classrooms as $classroom) {?>
                            <tr>
                                <td><?= $classroom['roomCode']?></td>
                                <td><?= $classroom['ability']?></td>
                                <td><?= $classroom['teacher']?></td>
                                <?php if($classroom['status'] == 1){ ?>
                                    <td><a href="<?php echo FOLDER_PATH. "/classroom/status/{$classroom['roomCode']}"?>" class="badge badge badge-success btn btn-success">Activo</a></td>
                                <?php }else{ ?>
                                    <td><a href="<?php echo FOLDER_PATH. "/classroom/status/{$classroom['roomCode']}"?>" class="badge badge badge-danger btn btn-danger">Inactivo</a></td>
                                <?php } ?>
                                <td>
                                    <a href="<?php echo FOLDER_PATH. "/classroom/edit/{$classroom['roomCode']}"?>" class="btn btn-circle">
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