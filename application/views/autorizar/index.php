<!DOCTYPE html>
<html>
	<head>
    	<title>LOGIN</title>
    	<meta charset="utf-8">      <!-- Bootstrap -->
    	<link rel="stylesheet" type="text/css" href="/extra/bootstrap/css/bootstrap.min.css">
    	<link rel="stylesheet" href="/extra/bootstrap/css/bootstrap-theme.min.css">
      	<link rel="stylesheet" href="/extra/css/jquery.dataTables.min.css">
      	<link rel="stylesheet" href="/extra/css/login-styles.css">
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
						<li><a href="">USA</a></li>
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
	        <div class="card card-container">
				<div align="center"><a class="btn btn-info" href="<?php echo base_url('usuarios/acceso_usuario'); ?>">Registrar usuario</a></div><br>
	            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
	            <p id="profile-name" class="profile-name-card"></p>

	            <?php echo validation_errors(); ?>
	            <?php echo form_open('verifylogin', array(
						'class'=>'form-signin',		
						'id' => 'fm_login',
						'name' => 'fm_login',
						'role' => 'form'
					));
				?>
	                <span id="reauth-email" class="reauth-email"></span>
	                <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Direccion de Email" required autofocus>
	                <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>
	               
	                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Entrar</button>
	            <?php echo form_close();?>
	            <a href="#" class="forgot-password">
	                Olvidaste tu Password?
	            </a>
	        </div><!-- /card-container -->
    	</div><!-- /container -->

	</body>
 </html>