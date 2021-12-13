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
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Inicio</title>
        <link href="css/styles.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
  </head>       
  <?php
    $conexion=mysqli_connect('localhost','root','','hidroelectrica') or die ('problems en la conexion');
  ?>
  <?php
 $usuario    = $_SESSION['user'];
  ?>
    <body class="sb-nav-fixed">
 <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark" class="sb-nav-fixed ">
            <a class="navbar-brand">Principal</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $usuario; ?><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="pagina.html">Configuración</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">Salir</a>
          </div>
        </li>
      </ul>
    </nav>
        <div id="layoutSidenav" class="sb-nav-fixed ">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link"
              ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard</a>
                <div class="sb-sidenav-menu-heading">Interface</div>
                
                  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages"
                  ><div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Paginas
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                    ></a>
                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                      <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth"
                        >Herramientas
                          <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                          ></a>
                          <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="register.php">Agregar usuario</a><i class="bi bi-envelope-plus-fill"></i><a class="nav-link" href="informe.php">Enviar informe</a></nav>
                          </div>
                      </nav>
                    </div>
              </div>
          </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Administrador
          </div>
        </nav>
      </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                           </ol>
                        <div class="row" align="center">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Resumen</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="informacion.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                  </div>
                </div>
              </div>
                            <div class="col-xl-3 col-md-6" align="center">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Estadistica</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="chart.html">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                  </div>

                </div>
              </div> 
                      <div class="card mb-4" align="left">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Datos Usuario</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>Nombres</th>
                                                <th>Rol</th>
                                                <th>Telefono</th>
                                                <th>Correo</th>
                                                <th>editar</th>
                                                <th>borrar</th>
                                                <?php
                                                    $consulta="SELECT * FROM usuarios ";
                                                    $ejecutar=mysqli_query($conexion,$consulta);
                                                    $i=0;
                                                    while ($fila=mysqli_fetch_array($ejecutar)) 
                                                            {
                                                                $id      = $fila['id'];
                                                              $usuario = $fila['Usuario'];
                                                              $rol     = $fila['idrol'];
                                                              $telefono = $fila['numero'];
                                                              $correo  = $fila['electronico'];
                                                              $i++; 
                                                    ?>
                      </tr>
                    </thead>
                                       
                                        <tbody>
                                                    <td class="text-left"><?php echo $id ?></td>
                                                    <td class="text-left"><?php echo $usuario ?></td>
                                                    <td class="text-left"><?php echo $rol ?></td>
                                                    <td class="text-left"><?php echo $telefono ?></td>
                                                    <td class="text-left"><?php echo $correo ?></td>
                                                    <td><a href="funcion.php? editar= <?php echo $id; ?>">Editar</a></td>
            <td><button  class="btn btn-primary"><a href="Supervisor.php? borrar= <?php echo $id; ?>" value="Borrar"></a>Borrar</button></td>

                                                    </tr>
                                                    <?php
                                                      }
                                                    ?>
                                        </tbody>
                  </table>
                  <?php
if(isset($_GET['borrar']))
    {
    $borrar_id = $_GET['borrar'];
    $borrar = "DELETE FROM usuarios WHERE id = '$borrar_id'";
    $ejecutar=mysqli_query($conexion,$borrar);
    if($ejecutar)
        {
            echo "<script>
                        alert ('Datos borrados con exito')
                     </script> ";
        }
    else
        {
            echo "<script>
                        alert ('no se logro eliminar')
                     </script> ";
        }
    }
        unset($_POST['borrar']);
?>

                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted"> copyright &copy; HIDROMAX S.A.S 2021 </div>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
  </body>
</html>
