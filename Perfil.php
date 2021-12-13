<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Perfil</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body bgcolor="black">
	<?php
    $conexion=mysqli_connect('localhost','root','','hidroelectrica') or die ('problems en la conexion');
  ?>
  <?php
 $usuario    = $_SESSION['user'];
 $photo      = $_SESSION['Foto'];
 $idrol      = $_SESSION['rol'];
 $email      = $_SESSION['correo'];
  ?>
<hr>
<div class="container bootstrap snippet">
    <div class="row">
  		<div class="col-sm-10"><h1>Bienvenido a tu perfil</h1></div>
    	<div class="col-sm-2"><a href="Supervisor.php" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="Material/logo.png"></a></div>
    </div>
    <div class="row">
  		<div class="col-sm-3">
              <?php

if(isset($_POST['actualizame']))
  {
  $actualizausuario = $_POST['usuario'];
  $actualizatelefono   = $_POST['telefono'];
  $actualizacorreo   = $_POST['electronico'];
  $actualizafoto   = $_POST['clave'];

  $ruta = "imagenes/".basename( $_FILES['imagenasubir']['name']);
    if (move_uploaded_file( $_FILES['imagenasubir']['tmp_name'],$ruta)) 
      {
      echo "<div align='center'><font face='impact' size='3'><b> 
      El archivo ".basename( $_FILES['imagenasubir']['name'])." ha sido subido satisfactoriamente</b></font></div>";
      }
    else
      {
        echo "el archivo no se cargo";
      }

  $update = "UPDATE usuarios SET Usuario = '$actualizausuario',Clave = ('$actualizaclave'),numero = '$actualizatelefono',electronico = '$actualizacorreo',  WHERE id = 'rol'";
  $ejecutar=mysqli_query($conexion,$update);
  if ($ejecutar)
    {
      echo "<script>
          alert ('Dato editados con exito')
         </script> ";
    }
  else
    {
      echo "<script>
                alert ('no se pudo EDITAR')
               </script> ";
    }
  }
?>                      
<table>
	<hr>
	<div class="text-center">
        <img src="Material/logo.png" class="avatar img-circle img-thumbnail" alt="avatar">
        <h6>Upload a different photo...</h6>
        <input type="file" class="text-center center-block file-upload" name="imagenasubir">
      </div></hr><br>
 
</table>
        </div><!--/col-3-->
    	<div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
              </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                  <form class="form" action="#" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>Nombre</h4></label>
                              <input type="text" class="form-control" name="usuario" id="first_name" value="<?php echo $usuario; ?>" title="pon un nuevo nombre con el que te identificaras">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>Telefono</h4></label>
                              <input type="text" class="form-control" name="telefono" id="phone" value="<?php echo $email; ?>" title="introduce tu nuevo numero si tienes">
                          </div>
                      </div>
                      <div class="form-group">  
                          <div class="col-xs-6">
                              <label for="email"><h4>Correo</h4></label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="<?php $correos; ?>" title="enter your email.">
                          </div>
                      </div>
                      <div class="form-group">  
                          <div class="col-xs-6">
                              <label for="email"><h4>Rol</h4></label>
                              <input class="form-control" type="text" placeholder="<?php echo $idrol;?> " aria-label="Disabled input example" disabled>
                          </div>
                      </div>
                    
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="password"><h4>Contraseña</h4></label>
                              <input type="password" class="form-control" name="clave" id="password" placeholder="" title="enter your password.">
                          </div>
                      </div>
                      <div class="form-group">
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12" align="center">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit" name="actualizame"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                      </div>
              	</form> 

             </div>
                      </div>
              	</form>
              </div>
               
              </div>
          </div>
        </div>
    </div>
</body>
</html>