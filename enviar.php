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


  <div class="enviarbd">
    <form action="PruebaEmail.php" method="post" enctype="multipart/form-data">
      <h2>Enviar un correo electronico a un grupo en especifico</h2>
      <p><b>Titulo del correo:</b></p>
      <input type="text" placeholder="titulo" name="titulo" class="titulo"> 
      <p><b>Cuerpo del correo:</b></p>
      <input type="text" placeholder="cuerpo"  name="cuerpo" class="cuerpo">
      <br><br>
      <p><b>Escoger una base de datos</b></p>

      
      <select name="nombre" id="">
    <?php
    require("connect_db.php");
    $sql="SELECT * FROM tablasregistro";
    $result=mysqli_query($conexion,$sql);
    while ($opciones=mysqli_fetch_array($result)) {
        $id=$opciones['idtabla'];
        $nombre=$opciones['nombre'];
        $filas=$fila['filas'];
        $columnas=$fila['columnas'];
?>
        <option value="<?php echo $nombre ?>"><?php echo $nombre ?></option>
<?php } ?>
    </select>
      
      <p><b>Correo emisor </b></p>
      <input type="text" name="correo" class="correo">
      <p><b>Contraseña </b></p>
      <input type="password" name="password" class="password">
      <div id="Btn">
      <input type="submit" class="submit" value="Importar">
      </div>
      </form>
  </div>

  <script type="text/javascript">

function uploadfiles()
{
  var Form = new FormData($('#filesForm')[0]);
  $.ajax({

    url: "PruebaEmail.php",
    type: "post",
    data: Form, 
    processData: false,
    contentType: false,
    success: function(data)
    {
        alert('Base de datos agregada');
    }
  })
}

</script>

  
</body>
</html>

