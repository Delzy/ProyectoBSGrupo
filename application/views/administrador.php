<!doctype html>
<html>
<head>
	<title>Bienvenido <?php echo $email; ?></title>
	<meta charset="utf-8">      <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="/extra/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/extra/bootstrap/css/bootstrap-theme.min.css">
    <script src="/extra/bootstrap/js/bootstrap.min.js"></script>  
    <link rel="stylesheet" href="/extra/css/login-styles.css">  
    <link rel="stylesheet" href="/extra/css/del-styles.css">  

    <div id="encDOfertas">
      		<img src="/extra/imagenes/deofertas.jpg" alt="DeOfertas online store" />
    </div> 

</head>

<body>
	<div id="titulo" align="center"> 
		<legend><h1>HOLA ADMINISTRADOR! <?php echo $email; ?></h1></legend>
    </div>	

    <table id="tableDO">
    	<tr>
    		<td>
				<div class="dropshadow">
				<div class="innerbox">
				  <a href=""><img src="/extra/imagenes/mantenimiento.jpg" alt="Mantenimiento" /></a>
				  <h1>MANTENIMIENTO</h1>
				</div>
				</div>
			</td>
    		<td>
    			<div class="dropshadow">
				<div class="innerbox">
					<a href=""><img src="/extra/imagenes/ofertas.jpg" alt="Ofertas" /></a>
					<h1>OFERTAS DEL MES</h1>
				</div>
				</div>
			</td>
			<td>
    			<div class="dropshadow">
				<div class="innerbox">
					<a href=""><img src="/extra/imagenes/redes.jpg" alt="Redes Sociales" /></a>
					<h1>REDES SOCIALES</h1>
				</div>
				</div>
			</td>
    	</tr>

    </table>

</body>
</html>