<?php require_once("./app/Views/Template/header.php"); ?>
	<main class="app-content">
		<div class="app-title">
			<div>
				<h1><i class="fa fa-users"></i> Escuela - Usuarios</h1>
			</div>
			<ul class="app-breadcrumb breadcrumb">
				<li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li> 
				<li class="breadcrumb-item"><a href="<?php echo FOLDER_PATH ?>/user">Usuarios </a></li>
			</ul>
		</div>
		<div class="row">
			<?php !empty($show_list) ? require './app/Views/User/list.php' : '' ?>
			<?php !empty($show_form) ? require './app/Views/User/form_add.php' : '' ?>
			<?php !empty($show_edit) ? require './app/Views/User/form_edit.php' : '' ?>
			<?php !empty($show_profile) ? require './app/Views/User/profile.php' : '' ?>
		</div>
	</main>
<?php require_once("./app/Views/Template/footer.php") ?>
