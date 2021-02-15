<!DOCTYPE html>
<html lang="en">
<head>
	<title style="color: grey;">Software Developers Staff</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body style="background-color:powderblue;" >
	<div class="jumbotron">
		<center><h3 class="display-4" style="color: grey;">Ministry Of Labour</h3></center>

		<hr class="my-4" style="color: grey;" >

	</div>


	@foreach($staff as $staff)
	<div class="row" style=" left: 30%;float: left; width: 33.3%; margin-bottom: 01px; margin-left: 01px; padding: 0 2px;">
		<center><div class="column" style="
		
		width: 40%;
		margin-left: 01px;
		margin-bottom: 02px;
		padding: 02px;
		max-width: 650px;
		display: block;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">


		<div class="card" style="
		padding: 0 2px;
		content: "";
		clear: both;
		color: grey;
		" >
		<center> <img src="{{$staff['emp_image']}}" class="rounded-circle"	 style="width:20%"></center>
		<div class="container" class="col-lg-6">
			<center> <h2>{{$staff['emp_name']}}</h2></center> 
			<center>  <p class="title">PHP Developer </p></center> 

			<center> <p>{{$staff['Age']}}</p></center> 
			<center> <p><button class="button" style="border: none;
			outline: 0;
			display: inline-block;
			padding: 5px;
			color: white;
			background-color: #000;
			text-align: center;
			cursor: pointer;
			width: 50%;
			background-color: #555;"><a href="{{$staff['Github']}}"  target="_blank">Contact</button></p></center> 
			</div>
		</div></center>
	</div>
	@endForeach


</body>
</html>