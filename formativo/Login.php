<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link href="estilos.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
	<body background="material/fondo.png" style="background-repeat: no-repeat; background-size: cover; margin: 0; height: 40vh";>
		<div class="login" align="center">
		<div>
       <div>
       	 <div style="text-align: left;" style="color: white;">
       	 	<a href="index.html">
        	 <i class="large material-icons" >arrow_back</i>
        	 </a>
        </div>
       	<h1 style="color: white;" style="background-size: auto;">Login</h1>
		<img src="material/logo.png" class="rounded-circle" class="border border-5" alt="..." style="background-repeat: no-repeat; background-size: cover; margin: 0; height: 15vh;"><br>
		 <div> 
		 	<form method="POST" action="#">
      		<input class="form-control form-control-sm" name="user" type="text" placeholder="ingrese usuario" aria-label=".form-control-sm example">
	</div><br>
		<div>
		   <input class="form-control form-control-sm"  name="clave" type="text" placeholder="ingrese clave" aria-label=".form-control-sm example">
	      <input class="btn btn-primary" type="submit" value="Login"><br>
		  <a href="Restaurar.php">Lost your Password?</a><br>
        <a href="Registro.php">Don't have An account?</a>
        </form>
    </div>
     <?php
include_once 'conexionPDO.php';
session_start();
if(isset($_POST['cerrar_sesion']))
	{

	    session_unset();
		session_destroy();
	}
if(isset($_SESSION['cargo']))
{
		switch ($_SESSION['cargo']) 
		{
			case 1:
				header('Location: Supervisor.php');
				break;
			case 2: 
			    header('Location: Contratista.php');
				break;
			case 3:
			    header('Location: Empleado.php');
				break;
			case 4:
				header('Location: Usuario.php');
                break;
	    }
}
if (isset($_POST['user']) && isset($_POST['clave']))
	   {
	   	$username=$_POST['user'];
		$password=$_POST['clave'];
		$db = new database();
		$query=$db->connectar()->prepare('SELECT * FROM datos WHERE Usuario = :user AND Clave= :clave');
		$query->execute(['user'=>$username,'clave'=>$password]);
		$arreglofila=$query->fetch(PDO::FETCH_NUM);
		if ($arreglofila == true ) 
			{
				$cargo=$arreglofila[3];
				$_SESSION['cargo']=$cargo;
				switch ($cargo) 
					{
						case 1:
							header('Location: Supervisor.php');
							break;
						case 2: 
						    header('Location: Contratista.php');
						    break;
						case 3:
						    header('Location: Empleado.php');
						    break;
						case 4:
						    header('Location: Usuario.php');
                            break;
						default:
							echo "Este rol no existe dentro de las opciones";
							break;
					}

					$user=$arreglofila[1];
				    $_SESSION['user']=$user;
						    $photo=$arreglofila[5];
						    $_SESSION['Foto']=$photo;
			}
			else
			{
				echo '<br> Nombre de usuario o contraseña incorrecto o formularios en blanco     <br>';
			}
	   }
?>
  </body>
</html>