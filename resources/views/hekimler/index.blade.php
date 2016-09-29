<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<script src="//cdn.ckeditor.com/4.5.11/full/ckeditor.js"></script>
		<style>
			body{
				background:lightgray;
			}
		</style>
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<h1><b>Məqalə əlavə edin</b></h1>


				{!! Form::open(['url' => 'meqale' , 'method'=>'post']) !!}<br>
				Məqalə adı:
				{!! Form::text('meqale',null,['class' => 'form-control'])!!}<br>
				Məqalə kontenti:<br>
				{{ Form::textarea('content',null,['class' => 'ckeditor'])}}

				{!! Form::submit('save')!!}
				{!! Form::close() !!}
			</div>
		</div>
	</body>
</html>