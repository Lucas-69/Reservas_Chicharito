<?php if(empty($varlink))return;?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style_cabezera.css">

</head>
<body>

	<div class="contenedor_menu">
		
		<div class="navbar">	
			<ul>
				<li><a href="index.php">Inicio</a></li>
				<li><a href="#">Servicios</a></li>
				<li><a href="#">Contacto</a></li>
			</ul>
		</div>
	
	</div>

	<script type="text/javascript"> //-Xmx512M
		
		var prevScrollpos = window.pageYOffset;
		window.onscroll = function(){

			var currentScrollpos = window.pageYOffset;

			if (prevScrollpos > currentScrollpos) {

				document.getElementById("navbar").style.top = "0";

			}else{

				document.getElementByIdt("navbar").style.top = "-100px";
			}

			prevScrollpos = currentScrollpos;

		}
	</script>

</body>
</html>