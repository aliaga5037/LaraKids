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

    <style>
    	td{
    		max-width: 150px;
    	}
    </style>
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
		<h1><b>ANA SƏHİFƏDƏ OLAN TEXTLƏR</b></h1>
			<table class="table">
				<thead>
					<td>ID</td>
					<td>AD</td>
					<td>QİYMƏT</td>
					<td>ACTION</td>
				</thead>
				<tbody>
					@foreach($texts as $text)
						<tr>
							<td>{{$text->id}}</td>	
							<td>{{$text->element}}</td>
							<td>{{$text->value}}</td>
							<td>
								<a href="{{route('admin.tenzim.show',$text->id)}}" class="btn btn-default"><i class="fa fa-eye"></i></a>
								<a href="{{route('admin.tenzim.edit',$text->id)}}" class="btn btn-success"><i class="fa fa-cog"></i></a>
								<form action="{{route('admin.tenzim.destroy',$text->id)}}" method="post" style="display:inline-block">
									{{csrf_field()}}
									<input type="hidden" name="_method" value="DELETE">
									<input type="submit" name="sub" value="DELETE" class="btn btn-danger">
								</form>	
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
</body>
</html>