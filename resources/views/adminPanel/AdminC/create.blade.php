<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Create New Data</h1>
{!! Form::open(['url' => 'admin','method'=>'post']) !!}
	Adiniz
    {!! Form::text('name')!!}
    Soyadiniz
    {!! Form::text('surname') !!}
	E-poct
    {!! Form::text('email') !!}
    Sifre
    {!! Form::text('password') !!}
    {!! Form::submit('Saxla') !!}
 
{!! Form::close() !!}
</body>
</html>