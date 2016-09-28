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
			<div class="row">
				<div class="panel firstPanel">
					<b>AUKID ADMIN PANEL</b>
					<i class="fa fa-comments"></i>
					<i class="fa fa-globe"></i>
					<i class="fa fa-search"></i>

					<div class="pull-right">
						<a href="#">
							<i class="fa fa-sign-out" style="display:inline-block"></i>
							<p style="display:inline-block">ÇIXIŞ</p>
						</a>
					</div>
				</div>
			</div>

			<div class="panel stats col-md-4 text-center">
				<h4 class="text-left"><b>STATİSTİKA</b></h4>
				<p class="small text-left">Dinamikanı izləyə bilərsiniz.</p>
				<i class="fa fa-pie-chart"></i>
				<hr>
				<p class="small text-left">2 saat öncə yeni e-mail gəldi.</p>
			</div>

			<div class="panel stats meqale col-md-7 col-md-offset-1">
				<h4><b>YENİ ƏLAVƏ OLUNMUŞ MƏQALƏLƏR</b></h4>
				<p class="small text-left">Psixoloqların ən son əlavə etdikləri məqalələr</p>

				<ul>
					<li>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi nisi voluptas quod necessitatibus aut officiis perspiciatis vitae, molestias quia. Nesciunt optio eaque corporis delectus ex sit, fuga vel tempore porro.</p>
					</li>

					<li>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi nisi voluptas quod necessitatibus aut officiis perspiciatis vitae, molestias quia. Nesciunt optio eaque corporis delectus ex sit, fuga vel tempore porro.</p>
					</li>

					<li>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi nisi voluptas quod necessitatibus aut officiis perspiciatis vitae, molestias quia. Nesciunt optio eaque corporis delectus ex sit, fuga vel tempore porro.</p>
					</li>

					<li>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi nisi voluptas quod necessitatibus aut officiis perspiciatis vitae, molestias quia. Nesciunt optio eaque corporis delectus ex sit, fuga vel tempore porro.</p>
					</li>
				</ul>
			</div>

			<div class="panel tables stats col-md-7 col-md-offset-1">
				<h4><b>CƏDVƏLLƏR</b></h4>
				<p class="small text-left">Məlumat bazanızda olan cədvəllər</p>

				<div class="col-md-3 panel">
					<p>USER</p>
				</div>

				<div class="col-md-3 panel">
					<p>COMMENT</p>
				</div>

				<div class="col-md-3 panel">
					<p>SUALLAR</p>
				</div>

				<div class="col-md-3 panel">
					<p>ADMIN</p>
				</div>

				<div class="col-md-3 panel">
					<p>RATE</p>
				</div>

				<div class="col-md-3 panel">
					<p>HƏKİMLƏR</p>
				</div>

				<div class="col-md-3 panel">
					<p>MƏQALƏ</p>
				</div>

				<div class="col-md-3 panel">
					<p>OYUN</p>
				</div>

				<div class="col-md-3 panel">
					<p>SLIDER</p>
				</div>

				<div class="col-md-3 panel">
					<p>ŞƏKİLLƏR</p>
				</div>
			</div>

			<div class="panel games stats col-md-5">
				<h4><b>OYUNLAR</b></h4>
				<p class="small text-left">Səhifədə fəaliyyət göstərən oyunlar</p>

				<img src="{{url('assets/images/gamelogo.jpg')}}" alt="">
				<img src="{{url('assets/images/gamelogo.jpg')}}" alt="">
				<img src="{{url('assets/images/gamelogo.jpg')}}" alt="">
				<img src="{{url('assets/images/gamelogo.jpg')}}" alt="">
				<img src="{{url('assets/images/gamelogo.jpg')}}" alt="">
				<img src="{{url('assets/images/gamelogo.jpg')}}" alt="">
			</div>
		</div>
	</div>
</div>
</body>
</html>