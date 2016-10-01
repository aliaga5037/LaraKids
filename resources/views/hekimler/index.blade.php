<?php
use App\Hekimler;
?>
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
			.create{
				transform:translateX(-1100px);
				transition: all .5s ease;
				position:absolute;
				top:50px;
			}
			.show{
				position: absolute;
				transform: translateY(-400px);
				top:50px;
			}
		</style>
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<h1><b>Məqalələriniz</b></h1>


				<p>{{-- Xoş gəldiniz, {{$name}} --}}</p>
				<a class="btn btn-success createButton">Məqalə Yazın</a>
				<a href="{{url('/hekimler/logout')}}" class="btn btn-danger">Çıxış et</a>
				
				<table class="table">
					<thead>
						<tr>
							<td>Başlıq</td>
							<td>Kontent</td>
							<td>Action</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							@foreach($meqaleler as $meqale)
								<tr>
									<td>{{$meqale->title}}</td>
									<td>{{$meqale->text}}</td>
									<td>
										<a href="{{url('hekimler/show',$meqale->id)}}" class="btn btn-default goster">Göstər</a>
										<a href="{{url('hekimler/edit',$meqale->id)}}" class="btn btn-primary">Təzələ</a>
										<form action="{{url('hekimler/destroy',$meqale->id)}}" method="DELETE" style="display:inline-block">
												{{csrf_field()}}
											<input type="hidden" name="_method" value="Sil">
											<input type="submit" name="sub" value="Sil" class="btn btn-danger">
										</form>	
									</td>
								</tr>
							@endforeach
						</tr>
					</tbody>
				</table>
				<div class="create panel col-md-6 col-md-offset-3">
					<h3><b>Məqalə əlavə edin</b></h3>
					{!! Form::open(['url' => 'hekimler/store' , 'method'=>'post']) !!}<br>
					Məqalə adı:
					{!! Form::text('title',null,['class' => 'form-control'])!!}<br>
					Məqalə kontenti:<br>
					{{ Form::textarea('text',null,['class' => 'form-control'])}}
					
					{!! Form::submit('save')!!}
					{!! Form::close() !!}

					<a class="back btn btn-danger pull-right">Qayıt</a>
				</div>

				
			</div>
		</div>
	</body>
</html>
 <script src="{{ url('assets/js/jquery-3.1.0.js')}}"></script>
 <script>
 	$(document).ready(function($) {
 		$('.createButton')
 		.on('click',function(event) {
 			$('.create').css('transform','translateX(0px)');
 		});

 		$('.back')
 		.on('click',function(event) {
 			$('.create').css('transform', 'translateX(-1100px)');
 		});
 	});
 </script>