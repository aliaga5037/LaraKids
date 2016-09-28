<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Update Data</h1>
{!! Form::model($admin, ['method' => 'PATCH','route' => ['admin.update', $admin->id]]) !!}
	Adiniz
    {!! Form::text('name',"$admin->name")!!}
    Soyadiniz
    {!! Form::text('surname',"$admin->surname") !!}
	E-poct
    {!! Form::text('email',"$admin->email") !!}
    Sifre
    {!! Form::text('password',"$admin->password") !!}

    {!! Form::submit('Saxla') !!}
 
{!! Form::close() !!}
</body>
</html>