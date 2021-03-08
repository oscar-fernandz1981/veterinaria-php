<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	
	<title><?php echo ($titulo)?></title>
	<metaname="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1.0, minimum-scale=1.0">

	


	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<!--kit fonawesome-->
	<script src="https://kit.fontawesome.com/3574fad660.js" crossorigin="anonymous"></script>

	<!-- hojas de estilo -->
	
	<link rel="stylesheet" type="text/css" href="assets/css/miestilo.css">

	<!--FONT AWESOME-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">


</head>


<body>


		<nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #5A3A85;">
			
		
		  <a class="navbar-brand" href="<?php base_url()?>index">
		  	<img src="<?php echo base_url() ?>assets/img/LogoVet3.jpg" width="65" height="75" alt="" class="d-inline-block align-top">Veterinaria El Rodeo
		  </a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNavDropdown">
		    <ul class="navbar-nav">
		      <li class="nav-item active">
		        <a class="nav-link" href="<?php base_url()?>index">Inicio <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="<?php echo base_url()?>QuienesSomos">Quienes Somos</a>
		      </li>
		     

		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
		          Productos
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color: #dac0fc;">
		          <a class="dropdown-item" href="<?php echo base_url()?>CaninoFelino" style="background-color: #dac0fc;">Caninos y felinos</a>
		          <a class="dropdown-item" href="<?php echo base_url()?>Bovinos" style="background-color: #dac0fc;">Bovinos</a>
		          <a class="dropdown-item" href="<?php echo base_url()?>Equinos" style="background-color: #dac0fc;">Equinos</a>
		        </div>
		      </li>


		       <li class="nav-item">
		        <a class="nav-link" href="<?php echo base_url()?>Servicios">Servicios</a>
		      </li>

		      <li class="nav-item">
		        <a class="nav-link" href="<?php echo base_url()?>Contacto">Contacto</a>
		      </li>


		    </ul>
		  </div>
		</nav>
		


		<header class="container-fluid header" id="inicio">
        	<!--<h1 class="text-black pb-4 ">Veterinaria Rodeo</h1>-->
        	<!--<p class="text-black desp ">
            web developer
        	</p>-->


    	</header>



	
	
