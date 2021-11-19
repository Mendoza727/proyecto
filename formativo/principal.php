<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Principal</title>
	<link rel="stylesheet" href="principal.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body bgcolor="aqua">
  <nav></nav>
  <ul id="slide-out" class="sidenav">
    <li><div class="user-view">
      <div class="background" style="background-repeat: no-repeat; background-size: cover; margin: 0; height: 175px;">
        <img src="Material/fotografia.gif">
      </div>
      <a href="#user"><img class="circle" src="Material/hidromax.gif"></a>
      <a href="#name"><span class="white-text name">John Doe</span></a>
      <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
    </div></li>
    <li><a href="#!"><i class="material-icons">cloud</i>First Link With Ico</a></li>
    <li><a href="datos.php">Editar datos</a></li>
    <li><div class="divider"></div></li>
    <li><a class="waves-effect" href="close.php">Cerrar sesion</a></li>
  </ul>
  <div align="right">
  </div>
  <div class="login" align="right">
    <div class=""> 	
  	<i class="large material-icons"></i>
  	<i class="large material-icons"></i>	
  	<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="large material-icons">more_vert</i></a>
    </div>
  	<div align="center">
  		<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  	<a class="waves-effect waves-light btn-small" href="index.html"><i class="material-icons left">power</i>finalizar</a>
  	</div>
  </form>
  <script>
  	document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems,
    {
    	edge:'left',
    	draggable:true,

    })
  });
  </script>
  
  </div>
</body>
</html>