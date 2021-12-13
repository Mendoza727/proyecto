<?php
session_start();
if(!isset($_SESSION['rol']))
  {
    header('location: Login.php');
  }
else
  {
    if($_SESSION['rol'] !=1)
      {
        header('location: Login.php');
      }
  }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Añadir usuario</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
     <?php
    $conexion=mysqli_connect('localhost','root','','hidroelectrica') or die ('problems en la conexion');
  ?>
    <body class="bg-light">
        <div>
            <a href="Supervisor.php"> 
            <img src="Material/atras.png"  width="100hv"> Regresar
                </a>
        </div>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                        <form action="#" method="POST">
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputFirstName">nombre</label><input class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter first name" name="usuario"></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputLastName">telefono</label><input class="form-control py-4" id="inputLastName" type="number" placeholder="Enter your number phone" name="number"></div>
                                                </div>
                                            </div>
                                            <div class="form-group"><label class="small mb-1" for="inputEmailAddress">correo</label><input class="form-control py-4" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="Enter email address" name="email"></div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputPassword">Password</label><input class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" name="clave"></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputConfirmPassword">rol</label><input class="form-control py-4" id="inputConfirmPassword" type="number" name="cargo" placeholder="enter your rol" min="2" max="3" ></div>
                                                </div>
                                            </div>
                                            <div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-block" href="" name="insertar">Create Account</button></div>
                                        </form>
                                     <?php 
                                        if(isset($_POST['insertar']))
            {
            $usuario = $_POST['usuario'];
            $clave   = $_POST['clave'];
            $idrol   = $_POST['cargo'];
            $telefono   = $_POST['number'];
            $email   = $_POST['email'];

            $insertar = "INSERT INTO usuarios(Usuario,Clave,idrol,numero,electronico) VALUES ('$usuario','$clave','$idrol','$telefono','$email')";
            $ejecutar=mysqli_query($conexion,$insertar);
            if ($ejecutar)
                {
                    echo "<script>
                  alert ('Usuario añadido con exito')
                  </script> ";
                }
                else
                {
                    echo "<script>
                  alert ('error al añadir usuario')
                  </script> ";
                }
            
                       }
                       unset($_POST['insertar']);
        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>

            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2019</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
