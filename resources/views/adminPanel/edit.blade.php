<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/admin.css')}}">
    <link rel="stylesheet" href="{{url('assets/awesome/css/font-awesome.css')}}">
    <script src="//cdn.ckeditor.com/4.5.11/full/ckeditor.js"></script>
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-2">
			<div class="row">
				<img src="{{url('images/logo.png')}}" alt="">
				<hr>
				<ul>
					<li>
						<i class="fa fa-pie-chart"></i>
						<p>STATİSTİKA</p>
					</li>

					<li>
						<i class="fa fa-user"></i>
						<p>İSTİFADƏÇİLƏR</p>
					</li>
					
					<li>
						<i class="fa fa-bell"></i>
						<p>BİLDİRİŞLƏR</p>
					</li>

					<li>
						<i class="fa fa-cog"></i>
						<a href="{{url('/admin/tenzim')}}">TƏNZİMLƏMƏLƏR</a>
					</li>

					<li>
						<i class="fa fa-envelope"></i>
						<p>E-POÇT MESAJLARI</p>
					</li>
				</ul>
			</div>
		</div>

		<div class="col-md-10">
			<h1><b>VERİLƏNİ TƏNZİMLƏ</b></h1>
			{!! Form::model($texts, ['method' => 'PATCH','route' => ['admin.tenzim.update', $texts->id]]) !!}
				<strong>AD</strong>
			    {!! Form::text('element',"$texts->element")!!}<br>
			    <strong>QİYMƏT</strong><br>
			    <textarea name="value" id="editor">{{$texts->value}}</textarea>
				<br>
			    {!! Form::submit('Qeyd et') !!}
			 
			{!! Form::close() !!}
		</div>
	</div>
</div>
<script type="text/javascript">
    CKEDITOR.replace( 'editor' );
</script>
</body>
</html>