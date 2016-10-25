@extends('layouts.hekim')
@section('content')
		<div class="container">
			<h1><b>Təzələyin</b></h1>		
			{!! Form::model($meqale,['url' => ['/hekimler/update', $meqale->id],'method' => 'post']) !!}
				<strong>Başlıq</strong>
			    {!! Form::text('title',"$meqale->title",['class'=>'form-control'])!!}<br>
			    <strong>Mətn</strong><br>
			    {!! Form::textarea('text',"$meqale->text",['class'=>'form-control'])!!}<br>
				<br>
			    {!! Form::submit('Qeyd et',['class'=>'btn btn-success'])!!}
			    <a class="btn btn-danger" href="{{url('hekimler')}}">Qayıt</a>
			 
			{!! Form::close() !!}
		
		</div>
	</body>
</html>
@endsection