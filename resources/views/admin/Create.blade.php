<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>CREATE</h1>
{!! Form::open(['url' => 'admin' , 'method'=>'post']) !!}
Name:
{!! Form::text('name')!!}
Surname:
  {!! Form::text('surname')!!}
  E-poct
  {!! Form::text('email')!!}
  Sifre
  {!! Form::text('password')!!}
  {!! Form::submit('save')!!}
{!! Form::close() !!}


</body>
</html>