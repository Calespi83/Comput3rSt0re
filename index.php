<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <title>Computer Store</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
            <div class="container">        
				<nav class="navbar navbar-expand-lg navbar-light bg-light">                
            <img class="masthead-picture" style="margin-right: 50px" src="assets/img/favicon.ico" alt="" />
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>			  
            </button>
			<!--Título página-->
			<span class="titulo_menu" >COMPUTER STORE</span>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
			  <!--Menú administrador-->
                <li class="nav-item">
                  <a class="nav-link" href="#">
				  Administrador
				  </a>
				  <!--SubMenú de inventario-->
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="script/crearDB.php">Crear base de datos</a>
                    <a class="dropdown-item" href="script/crearTabla.php">Crear tabla</a>
					<a class="dropdown-item" href="script/backups.php">Generar reporte PDF</a>
					<a class="dropdown-item" href="ReportPDF.php">Generar Backup</a>
                  </div>
                </li>
				<!--Menú invntario-->
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Inventario
                  </a>
				  <!--SubMenú de inventario-->
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="ingreso.html">Formulario de ingreso</a>
                    <a class="dropdown-item" href="actualizar.html">Formulario de actualizar</a>
					<a class="dropdown-item" href="eliminar.html">Formulario de eliminar</a>
					<a class="dropdown-item" href="consulta.html">Formulario de consulta</a>
                  </div>
                </li>
				<!--Menú utilidades-->
				<li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Utilidades
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="Utilidades.html">Valor Venta</a>
                  </div>
                </li>
              </ul>
            </div>
        </nav>      
    </div>
        <!-- Masthead-->
        <header class="masthead bg-primary text-white">
            <div class="container d-flex flex-column">
            </div>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
        </header>
        <!-- Copyright Section-->			
			<div class="copyright py-4 text-center text-white">	
				<div class="container"><small>Copyright © Comput3rSt0re 2021</small>
				</div>
			</div>
        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
        <div class="scroll-to-top d-lg-none position-fixed">
            <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
        </div>        
       </body>
	   
	   <script src="js/app.js"></script>
	   
	   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" 
	   crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" 
integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
