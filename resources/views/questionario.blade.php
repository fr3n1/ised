	@extends('layouts.app')
	@section('content')
	<!DOCTYPE html>
	<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
	body {
	  font-family: "Lato", sans-serif;
	}

	.sidenav {
	  height: 100%;
	  width: 400px;
	  position: fixed;
	  z-index: 1;
	  top: 0;
	  left: 0;
	  background-color: #00796a;
	  overflow-x: hidden;
	  padding-top: 20px;
	  
	}

	.sidenav a {
	  padding: 6px 8px 6px 16px;
	  text-decoration: none;
	  font-size: 25px;
	  color: #818181;
	  display: block;
	}

	.sidenav a:hover {
	  color: #f1f1f1;
	}

	.main {
	  margin-top: 25px;
	  margin-left: 420px; /* Same as the width of the sidenav */
	  font-size: 28px; /* Increased text to enable scrolling */
	  padding: 0px 10px;
	}

	@media screen and (max-height: 450px) {
	  .sidenav {padding-top: 15px;}
	  .sidenav a {font-size: 18px;}
	}
	</style>
	</head>
	<body>

	<div class="sidenav" >
	    <a href="#" class="stretched-link">
      	<div class="progress">
				<div class="progress-bar bg-success" style="width:100%">100%</div>
		</div>
	      <div class="card mx-auto mt-5" style="width: 300px">
	      	<img class="card-img-top" src="storage/professorAvatar1.png" alt="Card image" style="width:100%" >
	        <div class="card-body">
	             <h4 class="card-title">Prof. Joãozinho do Juazeiro</h4>
	             <p class="card-text">Inteligencia Artificial</p>
	        </div>
	      </div>
		</a>

		<a href="#" class="stretched-link">
	      <div class="card mx-auto mt-5" style="width:300px">
	         <img class="card-img-top" src="storage/professorAvatar2.jpg" alt="Card image" style="width:100%" >
	        <div class="card-body">
	             <h4 class="card-title">Prof. Maria Antonieta da Silva</h4>
	             <p class="card-text">Sistemas Distribuidos</p>
	        </div>
	      </div>
		</a>

		<a href="#" class="stretched-link">
	      <div class="card mx-auto mt-5" style="width:300px">
	         <img class="card-img-top" src="storage/professorAvatar1.png" alt="Card image" style="width:100%" >
	        <div class="card-body">
	             <h4 class="card-title">Prof. Antônio Pereira dos Santos</h4>
	             <p class="card-text">Técnicas de Programação</p>
	        </div>
	      </div>
		</a>
    </div>

	<div class="main" style="color: white">
		<div class="col-5" style="margin-left: 200px; margin-top: 10px; float: right;" > <img src="storage/uam.png" class="float-left" alt="logoUAM"  width="290" height="60"> </div> 

		<h3>Curso: </h3>
		<h3>Campus: </h3>
		<h3>Período: </h3>
	  
	  
	</div>
	   
	</body>
	</html> 
