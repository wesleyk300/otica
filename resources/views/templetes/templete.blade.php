<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V03</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{url('assets/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('assets/vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('assets/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('assets/vendor/perfect-scrollbar/perfect-scrollbar.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('assets/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('assets/main.css')}}">

	
	<link rel="stylesheet" href="{{url('assets/style.css')}}">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>


<!--====================================MASCARA===========================================================-->
	<script language="JavaScript" src="{{url('assets/js/mascara.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/jquery.mask.min.js')}}"></script>
	




</head>
<body>
<!--===============================================================================================-->
<nav>
	<div class="logo">
	Ótica Imperatriz</div>
<label for="btn" class="icon">
	  <span class="fa fa-bars"></span>
	</label>
	<input type="checkbox" id="btn">
	<ul>
<li><a href="#">Home</a></li>
<li>
		<label for="btn-1" class="show">Features +</label>
		<a href="#">Features</a>
		<input type="checkbox" id="btn-1">
		<ul>
<li><a href="#">Pages</a></li>
<li><a href="#">Elements</a></li>
<li><a href="#">Icons</a></li>
</ul>
</li>
<li>
		<label for="btn-2" class="show">Services +</label>
		<a href="#">Services</a>
		<input type="checkbox" id="btn-2">
		<ul>
<li><a href="#">Web Design</a></li>
<li><a href="#">App Design</a></li>
<li>
			<label for="btn-3" class="show">More +</label>
			<a href="#">More <span class="fa fa-plus"></span></a>
			<input type="checkbox" id="btn-3">
			<ul>
<li><a href="#">Submenu-1</a></li>
<li><a href="#">Submenu-2</a></li>
<li><a href="#">Submenu-3</a></li>
</ul>
</li>
</ul>
</li>
<li><a href="#">Portfolio</a></li>
<li><a href="#">Contact</a></li>

<li>
	<label for="btn-2" class="show">Services +</label>
	<a href="#">Services</a>
	<input type="checkbox" id="btn-2">
	<ul>
<li><a href="#">Web Design</a></li>
<li><a href="#">App Design</a></li>
<li>
		<label for="btn-3" class="show">More +</label>
		<a href="#">More <span class="fa fa-plus"></span></a>
		<input type="checkbox" id="btn-3">
		<ul>
<li><a href="#">Submenu-1</a></li>
<li><a href="#">Submenu-2</a></li>
<li><a href="#">Submenu-3</a></li>
</ul>
</li>
</ul>
</li>



</ul>
</nav>



  <!--======================================FORMULARIO=========================================================-->
	

	

<!--==========================================LISTAGEM=====================================================-->


@yield('content')






<!--======================================SCRIPTS=========================================================-->


  

	

<!--===============================================================================================-->	
	<script src="{{url('assets/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{url('assets/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{url('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{url('assets/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{url('assets/js/main.js')}}"></script>
	<script>
		$('.icon').click(function(){
		  $('span').toggleClass("cancel");
		});
	  </script>
	  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>