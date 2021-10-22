<?php
session_start();
 ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
 
  
  <link rel="stylesheet" href="CSS.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


  <title>Emmasive</title>
</head>
<body>

<?php
   include 'plantillas/navbar.php'
 ?>


  <div class="importarbd">
    <form action="" method="post">
    <h2>Importar base de datos</h2>
    <p><b>Asignar el nombre a la base de datos</b></p>
    <input type="text" placeholder="Nombre" name="Nombre" class="nombre">
    <p><b>Localizacion</b></p>
    <input type="text" placeholder="Localizacion"  name="localicacion" class="localizacion">
    <p class="hypervinculo">Si no tiene la localizacion, buscar  <a href="./registro.html"><u>aqui!</u></a></p>
    <div id="Btn">
    <input type="submit" class="submit" value="Importar">
    </div>
  
    </form>
</div>


  </nav>
</div>





	<footer id="main-footer">
		<p><a href="https://www.uanl.mx/">Preguntas frecuentes. </a></p>
		<p><a href="https://www.uanl.mx/">¿Quienes somos?. </a></p>
		<p><a href="https://www.uanl.mx/">Aviso de terminos y condiciones. </a></p>
	</footer> 
</body>
</html>