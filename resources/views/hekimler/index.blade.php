@extends('layouts.hekim')
@section('content')
<div class="container">
	<div class="row">
		<h1><b>Məqalələriniz</b></h1>
		<a class="btn btn-warning createButton">Məqalə Yaz</a>
		
		
		<table class="table table-striped">
			<thead>
				<tr>
					<td>Nömrə</td>
					<td>Başlıq</td>
					<td>Mətn</td>
					<td>Əməllər</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					@foreach($meqaleler as $meqale)
					<tr>
						<td class="col-md-1">{{$meqale->id}}</td>
						<td class="col-md-2">{{$meqale->title}}</td>
						<td class="col-md-8">{{substr($meqale->text,0,400)}}</td>
						<td>
							<a href="{{url('hekimler/show',$meqale->id)}}" class="btn btn-xs btn-default goster"><i class="fa fa-eye"></i></a>
							<a href="{{url('hekimler/edit',$meqale->id)}}" class="btn btn-xs btn-primary"><i class="fa fa-cog"></i></a>
							<a href="{{url('hekimler/destroy',$meqale->id)}}" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
						</td>
					</tr>
					@endforeach
				</tr>
			</tbody>
		</table>
	</div>
</div>
</body>
<div class="create panel col-md-6 col-md-offset-3">
	<h3><b>Məqalə Yazın</b></h3>
	{!! Form::open(['url' => 'hekimler/store' , 'method'=>'post']) !!}<br>
	Məqalə adı:
	{!! Form::text('title',null,['class' => 'form-control'])!!}<br>
	Məqalə kontenti:<br>
	{{ Form::textarea('text',null,['class' => 'form-control'])}}
	<br>

	{!! Form::submit('Göndər',['class' => 'btn btn-success'])!!}
	<a class="back btn btn-danger">Qayıt</a>
	{!! Form::close() !!}

</div>
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
			$('.create').css('transform', 'translateX(-3000px)');
		});
	});
</script>
@endsection