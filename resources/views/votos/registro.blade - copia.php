<!DOCTYPE html>
<html>
<head>

	<!--===============================================================================================-->  
	<link rel="icon" href="{{asset('imagen/icon.jpg')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
<!--===============================================================================================-->

	<title> Votacion </title>

</head>
<body>

	<div class="container-login100" style="background-image: url(imagen/fondo.jpg)">	
		<div class="wrap-login100">
			<form class="form validate-form p-b-15 p-t-20" action="cerrar.php">
				<div>
	              	<label style="border-radius: 25px; padding: 5px;"> <img src="imagen/banda.png" width="30%"> </label>
	            </div>
	            <div style="padding-bottom: 20px;">	
					<h1><strong>
						
						Se registro el voto por {{$hokage}}

					</strong></h1>
				</div>
				<div class="container-login100-form-btn m-t-20 p-t-20 p-b-20">
			 		<button type="submit" class="form-btn">Finalizar</button>
				</div>
			</form>
		</div>
	</div>



<!--===============================================================================================-->
	<script src="{{asset('jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('js/popper.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('js/main.js')}}"></script>

</body>
</html>
