@extends('layouts.index')
@section('content')
<section id="blog" class="col-md-12 col-sm-12 col-sm-12 col-xs-12">
	<div class="container text-center">
		<div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3">
			<div class="row">
				<div class="data col-md-3 col-sm-3 col-xs-3 text-center">
					<img src="{{url('assets/images/service1.jpg')}}" alt="">
					<div class="date">
						<p>{{$tarix}}</p>
					</div>
					<div class="comments date">
						<span>12</span>
						<p><i class="fa fa-comment"></i></p>
					</div>
					<div class="image date">
						<i class="fa fa-image"></i>
					</div>
				</div>
				<div class="textAndPhoto col-md-9 text-left col-sm-9 col-xs-9">
					<div class="row">
						<img src="{{url('assets/images/blog_img1.jpg')}}" class="img img-responsive">
						<a><h3><b>{{$basliq}}</b></h3></a>
						<p>{{$sonmeqale}}</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection