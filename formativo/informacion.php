<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progress bar</title>
    <link rel="stylesheet" href="grafico.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body background="Material/fondo4.gif" style="background-repeat: no-repeat; background-size: cover; margin: 0; ">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand">Informacion General</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Principal.php">Principal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Estado</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</body>
<body>
    <div class="porcentaje">
        <div class="container">
            <div class="card">
                <div class="box">
                    <div class="porcent">
                        <svg>
                            <circle cx="70" cy="70" r="70"/>
                            <circle cx="70" cy="70" r="70"/>
                        </svg>
                        <div class="number">
                            <h2>80<span>%</span></h2>
                        </div>
                        <h3 class="text">Rendimiento</h3>
                    </div>
                </div>
            </div>
<div class="card">
                <div class="box">
                    <div class="porcent">
                        <svg>
                            <circle cx="70" cy="70" r="70"/>
                            <circle cx="70" cy="70" r="70"/>
                        </svg>
                        <div class="number">
                            <h2>60<span>%</span></h2>
                        </div>
                        <h3 class="text">tasa de retraso</h3>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <div class="porcent">
                        <svg>
                            <circle cx="70" cy="70" r="70"/>
                            <circle cx="70" cy="70" r="70"/>
                        </svg>
                        <div class="number">
                            <h2>70<span>%</span></h2>
                        </div>
                        <h3 class="text">productividad</h3>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</body>
</html>