<!doctype html>
<html>
<head>
	<title><?php echo $titulo; ?></title>
	<meta charset="utf-8">      <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="/extra/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/extra/bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/extra/css/jquery.dataTables.min.css"> 
    <link rel="stylesheet" href="/extra/css/login-stylescss">
    <link rel="stylesheet" href="/extra/css/del-styles.css">   
    <script src="/extra/js/jquery-1.11.3.min.js"></script>
    <script src="/extra/bootstrap/js/bootstrap.min.js"></script>
    <script src="/extra/js/validator.min.js"></script>
    
    <div id="encDOfertas">
      		<img src="/extra/imagenes/deofertas.jpg" alt="DeOfertas online store" />
    </div> 
</head>

<body>
<div id="menu">
			<ul class="nav">
				<li><a href="<?php echo base_url("/autorizar/index"); ?>">Inicio</a></li>

				<li><a href="">Categorías</a>
					<ul>
						<li><a href="">Niños</a>
							<ul>
								<li><a href="">0-3años</a></li>
								<li><a href="">3-6años</a></li>
								<li><a href="">6-9años</a></li>
								<li><a href="">10-12años</a></li>
							</ul>
						</li>
						<li><a href="">Adolescentes</a></li>
						<li><a href="">Damas</a></li>
						<li><a href="">Caballeros</a></li>
					</ul>
				</li>
				<li><a href="">Ofertas</a>
					<ul>
						<li><a href="">Agosto</a></li>
						<li><a href="">Septiembre</a></li>
					</ul>
				</li>
				<li><a href="">Las Tiendas</a>
					<ul>
						<li><a href="">Perú</a></li>
						<li><a href="">USA-California</a></li>
						<li><a href="">México</a></li>
					</ul>
				</li>
				<li><a href="">Contacto</a></li>
				<li>
					 <form class="form-inline my-2 my-lg-0">
						<input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Search">
      					<button class="btn btn-default my-2 my-sm-0" type="submit">Buscar</button>
    				</form>
				</li>
</ul>
	</div>
  		<!-- -->

	<div class="container">
		<div class="row">
			<div class="col-md-6">				
				<?php echo form_open('usuarios/acceso_usuario', array(
						'class'=>'form-horizontal',
						'data-toggle' => 'validator',
						'id' => 'fm_usuarios',
						'name' => 'fm_usuarios',
						'role' => 'form'
					));
				?>
				<fieldset>
					<br>
					<div id="legend" align="center">
						<legend class="text-danger"><b><?php echo $titulo; ?></b></legend>
					</div>
					
					<div class="form-group">	
						<label for="email" class="text-info">Email:</label>
						<div class="controls">
							<?php							
								echo form_input($email);		
							?>						
							<div class="help-block with-errors"></div>
						</div>
					</div>

					<div class="form-group">	
						<label for="password" class="text-info">Password:</label>
						<div class="controls">
							<?php							
								echo form_password($password);		
							?>
							<div class="help-block with-errors"></div>
						</div>
					</div>

					<div class="form-group">	
						<label for="confirmar_password" class="text-info">Confirmar Password:</label>
						<div class="controls">
							<?php
								echo form_password($confirmar_password);		
							?>
							<div class="help-block with-errors"></div>
						</div>
					</div>

					<div class="form-group">	
						<label for="cumpleanios" class="text-info">Cumpleaños:</label>
						<div class="controls">
							<?php
								echo form_input($cumpleanios);		
							?>
							<div class="help-block with-errors"></div>
						</div>
					</div>

					<div class="form-group">	
						<label for="nombre" class="text-info">Nombre:</label>
						<div class="controls">
							<?php
								echo form_input($nombre);		
							?>
							<div class="help-block with-errors"></div>
						</div>
					</div>

					<div class="form-group">	
						<label for="apellidos" class="text-info">Apellidos:</label>
						<div class="controls">
							<?php
								echo form_input($apellidos);		
							?>
							<div class="help-block with-errors"></div>
						</div>
					</div>

					<div class="form-group">	
						<label for="telefono" class="text-info">Telefono:</label>
						<div class="controls">
							<?php
								echo form_input($telefono);		
							?>
							<div class="help-block with-errors"></div>
						</div>
					</div>

					<div class="form-group">	
						<label for="fotografia" class="text-info">Fotografia:</label>
						<div class="controls">
							<?php
								echo form_input($fotografia);		
							?>
							<div class="help-block with-errors"></div>
						</div>
					</div>

					<div class="form-group">
						<div class="controls">
							<button class="btn btn-success">Registrar</button>
							<a href="<?php echo base_url(); ?>" class="btn btn-danger" >Salir</a>
						</div>
					</div>
				</fieldset>
				<?php echo form_close();?>
			</div>
		</div>
	</div>
</body>
</html>