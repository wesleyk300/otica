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
