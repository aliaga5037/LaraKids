@extends('layouts.index')
@section('content')
<section id="sevrices_content">
	<div class="col-md-12 col-sm-12 col-xs-12 banner">
		<img src="{{url('assets/images/services_banner.jpg')}}" >
	</div>
	
</section>
<section id="slider2" class="col-md-12 col-xs-12 col-sm-12">
	<div class="container">
		<div class="col-md-6">
			<div class="row">
				<h2>Play As You Learn</h2>
				<div class="col-md-6">
					<div class="row">
						<ul>
							<li>
								<i class="fa fa-glass"></i>
								<p class="heading">English Summer Camp</p>
								<p class="text">Nam ullamcorper, diam sit amet euismod pelleontesque, eros risus rhoncus libero, inst tibulum nisl ligula....</p>
							</li>
							<li>
								<i class="fa fa-pencil"></i>
								<p class="heading">Drawing & Painting</p>
								<p class="text">Nam ullamcorper, diam sit amet euismod pelleontesque, eros risus rhoncus libero, inst tibulum nisl ligula....</p>
							</li>
							<li>
								<i class="fa fa-bullseye"></i>
								<p class="heading">Swimming Camp</p>
								<p class="text">Nam ullamcorper, diam sit amet euismod pelleontesque, eros risus rhoncus libero, inst tibulum nisl ligula....</p>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<ul>
							<li>
								<i class="fa fa-tachometer"></i>
								<p class="heading">Sports Camp</p>
								<p class="text">Nam ullamcorper, diam sit amet euismod pelleontesque, eros risus rhoncus libero, inst tibulum nisl ligula....</p>
							</li>
							<li>
								<i class="fa fa-magic"></i>
								<p class="heading">Personalizing</p>
								<p class="text">Nam ullamcorper, diam sit amet euismod pelleontesque, eros risus rhoncus libero, inst tibulum nisl ligula....</p>
							</li>
							<li>
								<i class="fa fa-music"></i>
								<p class="heading">Sing & Dance</p>
								<p class="text">Nam ullamcorper, diam sit amet euismod pelleontesque, eros risus rhoncus libero, inst tibulum nisl ligula....</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="row">
				<h2>With Music4Kids, Music Is Child's Play!</h2>
				
				<div class="tablet">
					<img src="assets/images/add1.jpg" class="img img-responsive">
				</div>
				<div class="circleSet text-center">
					<div class="circle circle1"></div>
					<div class="circle circle2"></div>
					<div class="circle circle3"></div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="admission">
	<div class="col-md-12 admission_form">
		<div class="container text-center ">
			<h2>Admission Form</h2>
			<img src="assets/images/green_title_bg.png">
			<form>
				<input type="text" name="" class="form-control" style="width:30%;">
				<input type="text" name="" class="form-control" style="width:30%;">
				<input type="text" name="" class="form-control" style="width:30%;">
				<textarea class="form-control"></textarea>
				<input type="submit" class="btn btn-default" name="">
			</form>
		</div>
	</div>
</section>
@stop