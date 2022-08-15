<?php require_once("./app/Views/Template/header.php"); ?>
	<main class="app-content">
		<div class="app-title">
			<div>
				<h1><i class="fa fa-book"></i> Escuela - Estudiantes</h1>
			</div>
			<ul class="app-breadcrumb breadcrumb">
				<li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li> 
				<li class="breadcrumb-item"><a href="<?php echo FOLDER_PATH ?>/student">Estudiantes </a></li>
			</ul>
		</div>
		<div class="row">
			<?php !empty($show_list) ? require './app/Views/Student/list.php' : '' ?>
			<?php !empty($show_form) ? require './app/Views/Student/form_add.php' : '' ?>
			<?php !empty($show_edit) ? require './app/Views/Student/form_edit.php' : '' ?>
			<?php !empty($show_profile) ? require './app/Views/Student/profile.php' : '' ?>
		</div>
	</main>
<?php require_once("./app/Views/Template/footer.php") ?>
