@extends('layouts.hekim')
@section('content')
<div class="container">
	@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
	<form action="{{url('/savehekim',$id)}}" method="get" enctype="multipart/form-data">
		{{csrf_field()}}
		<b>Ad</b>
		<input type="text" name="name" value="{{$id->name}}" class="form-control"><br>
		<b>Soyad</b>
		<input type="text" name="surname" value="{{$id->surname}}" class="form-control"><br>
{{-- 		<b>Şifrə</b>
		<input type="text" name="password" value="{{$id->password}}" class="form-control"><br> --}}
		<b>E-poçt ünvanı</b>
		<input type="email" name="email" value="{{$id->email}}" class="form-control"><br>
		<b>Haqqında</b>
		<textarea name="about" class="form-control">{{$id->about}}</textarea>
		<br>
		<input type="submit" class="btn btn-success" value="Yenilə">
		<a href="{{url('/hekimler')}}" class="btn btn-danger">Qayıt</a>
		<input type="hidden" name="_token">
	</form>
</div>
@endsection