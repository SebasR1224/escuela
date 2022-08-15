<!doctype html>
<html lang="en">
  <head>
  	<title>iniciar Sesión</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="<?php echo FOLDER_MEDIA?>/css/login/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Iniciar sesión</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center mb-4">
		      		<span class="fa fa-user-o"></span>
		      	</div>
				<form action="<?php echo FOLDER_PATH?>/login/signIn" method="POST" class="login-form">
		      		<div class="form-group">
		      			<input type="text" class="form-control rounded-left" placeholder="Email o username" id="value" name="value" >
		      		</div>
					<div class="form-group d-flex">
						<input type="password" class="form-control rounded-left" placeholder="Contraseña" id="password" name="password" >
					</div>
					<div class="form-group d-flex">
						<label class="checkbox-primary"><?php !empty($error) ? print($error) : ''; ?></label>
					</div>
					<div class="form-group d-md-flex">
						<div class="w-50">
							<label class="checkbox-wrap checkbox-primary">Recordar
								<input type="checkbox" checked="">
								<span class="checkmark"></span>
							</label>
						</div>
						<div class="w-50 text-md-right">
							<a href="<?= FOLDER_PATH?>">Volver</a>
						</div>
	            	</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary rounded submit p-3 px-5">Ingresar</button>
					</div>
	          	</form>
	        </div>
		</div>
	</section>
	</body>
</html>
