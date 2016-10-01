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
		<h3><b>Təzələyin</b></h3>		
		{!! Form::model($meqale,['url' => ['/hekimler/update', $meqale->id],'method' => 'post']) !!}
				<strong>Başlıq</strong>
			    {!! Form::text('title',"$meqale->title",['class'=>'form-control'])!!}<br>
			    <strong>Kontent</strong><br>
			    {!! Form::textarea('text',"$meqale->text",['class'=>'form-control'])!!}<br>
				<br>
			    {!! Form::submit('Qeyd et') !!}
			 
			{!! Form::close() !!}
		<a class="btn btn-danger pull-right" href="{{url('hekimler')}}">Qayıt</a>
	</body>
</html>