<?php
session_start();
if(!isset($_SESSION['rol']))
  {
    header('location: Login.php');
  }
else
  {
    if($_SESSION['rol'] !=2)
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
        <title>Estadisticas</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
     <?php
    $conexion=mysqli_connect('localhost','root','','hidroelectrica') or die ('problems en la conexion');
  ?>
  <?php
 $usuario    = $_SESSION['user'];
  ?>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">Principal</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
            ><!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $usuario; ?><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="pagina.html">Settings</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
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
                            <nav class="sb-sidenav-menu-nested nav"><i class="bi bi-envelope-plus-fill"></i><a class="nav-link" href="informe.php">Enviar informe</a></nav>
                          </div>
                      </nav>
                    </div>
              </div>
          </div>
          <br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Contratista
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Charts</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="Contratista.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">estadistica</li>
                        </ol>
                        <div class="card mb-4">
                           
                        </div>
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-chart-area mr-1"></i>Mes de mayor demanda</div>
                            <div class="card-body"><canvas id="myAreaChart" width="100%" height="30"></canvas></div>
                            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card mb-4">
                                    <div class="card-header"><i class="fas fa-chart-bar mr-1"></i>Rendimiento meses</div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="50"></canvas></div>
                                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                                </div>
                            </div>
                        </div>
                         <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-chart-area mr-1"></i>actualizacion hoy</div>
                            <div class="card-body"><canvas id="myAreaChart" width="100%" height="30"></canvas>ups parece que por ahora no han enviado la informacion de hoy por favor intentalo mas tarde</div>
                            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Hidromax 2021</div>
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
        <script src="assets/demo/chart-pie-demo.js"></script>
    </body>
</html>
