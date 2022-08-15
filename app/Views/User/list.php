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
            <a href="<?php echo FOLDER_PATH ?>/user/add" class="btn btn-primary icon-btn">
                <i class="fa fa-plus"></i> Nuevo
            </a>
        </div>
        <div class="tile-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered" id="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre de Usuario</th>
                            <th>Correo</th>
                            <th>Fecha de creación</th>
                            <th>Estado</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($users as $user) {?>
                            <tr>
                                <td><?= $user['id']?></td>
                                <td><?= $user['username']?></td>
                                <td><?= $user['email']?></td>
                                <td><?= $user['created_at']?></td>
                                <?php if($user['status'] == 1){ ?>
                                    <td><a href="<?php echo FOLDER_PATH. "/user/status/{$user['id']}"?>" class="badge badge badge-success btn btn-success">Activo</a></td>
                                <?php }else{ ?>
                                    <td><a href="<?php echo FOLDER_PATH. "/user/status/{$user['id']}"?>" class="badge badge badge-danger btn btn-danger">Inactivo</a></td>
                                <?php } ?>
                                <td>
                                    <a href="<?php echo FOLDER_PATH. "/user/edit/{$user['id']}"?>" class="btn btn-circle">
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