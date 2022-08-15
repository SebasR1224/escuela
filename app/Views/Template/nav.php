<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="<?php echo FOLDER_MEDIA?>/img/programador.png" alt="User Image">
        <div>
          <p class="app-sidebar__user-name"><?= $username ?></p>
          <p class="app-sidebar__user-designation"><?= $email ?></p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="<?php echo FOLDER_PATH ?>/dashboard"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li><a class="app-menu__item" href="<?php echo FOLDER_PATH ?>/user"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Usuarios</span></a></li>
        <li><a class="app-menu__item" href="<?php echo FOLDER_PATH ?>/student"><i class="app-menu__icon fa fa-book"></i><span class="app-menu__label">Estudiantes</span></a></li>
        <li><a class="app-menu__item" href="<?php echo FOLDER_PATH ?>/teacher"><i class="app-menu__icon fa fa-user-tie"></i><span class="app-menu__label">Profesores</span></a></li>
        <li><a class="app-menu__item" href="<?php echo FOLDER_PATH ?>/classroom"><i class="app-menu__icon fa fa-school"></i><span class="app-menu__label">Salones de clases</span></a></li>
      </ul>
    </aside>