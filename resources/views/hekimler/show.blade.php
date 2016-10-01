<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<style>
			body{
				background:lightgray;
			}
		</style>
	</head>
	<body>
		<div class="container-fluid">
			<h3><b>Göstər</b></h3>
			<br>
			Məqalə adı:{{$found->title}}
			<br>
			{{-- {{dd($found)}} --}}
			Məqalə kontenti:{{$found->text}}
			<br>
			<a href="{{url('hekimler')}}" class="btn btn-danger">Qayıt</a>
		</div>
	</body>
</html>