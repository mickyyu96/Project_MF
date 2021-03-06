<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Mooda Fitness website">

	<title>Mooda Fitness</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

	<!-- Temporary navbar container fix -->
	<style>
	.navbar-toggler {
		z-index: 1;
	}
	
	@media (max-width: 576px) {
		nav > .container {
			width: 100%;
		}
	}
	</style>

</head>

<body id="page-top">

	<!-- Navigation -->
	<nav class="navbar fixed-top navbar-toggleable-md navbar-light" id="mainNav">
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarThis" aria-controls="navbarThis" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="container">
			<a class="navbar-brand" href="#page-top">Mooda Fitness</a>
			<div class="collapse navbar-collapse" id="navbarThis">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="#home">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#profile">Profile</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#media">Media</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#contact">Contact</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<header class="masterhead" id="home">
		<div class="header-content">
			<div class="header-content-inner">
				<h1 id="homeHeading"> Mooda Fitness </h1>
				<hr>
				<p> Slogan here </p>
			</div>
		</div>
	</header>

	<section class="bg-dark" id="profile">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<h2 class="section-heading text-white">Profile</h2>
					<hr>
					<p class="text-faded">{{ $profil->deskripsi }}</p>
				</div>
			</div>
		</div>
	</section>

	<section class="bg-primary" id="customer">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading">Current Customer</h2>
					<hr class="light">
					<div class="counter-box sr-counter">
						<h3>{{ $jumlah_pengunjung->jumlah_pengunjung }}</h3>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="bg-dark no-padding" id="media">
		<div id="carouselIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselIndicators" data-slide-to="1"></li>
				<li data-target="#carouselIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner popup-gallery" role="listbox">
				@foreach ($list_publikasi as $publikasi)
				<a href="uploads/{{ $publikasi->id_publikasi }}" class="carousel-item {{ $publikasi->status }}">
					<img class="mx-auto d-block carousel-img" src="uploads/{{ $publikasi->id_publikasi }}">
					<div class="carousel-caption d-none d-md-block">
				    <p>{{ $publikasi->deskripsi }}</p>
				  	</div>
				</a>
				@endforeach
				<!--
				<a href="img/header.jpg" class="carousel-item">
					<img class="mx-auto d-block carousel-img" src="img/header.jpg">
					<div class="carousel-caption d-none d-md-block">
				    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam lobortis bibendum consequat. Curabitur non massa nulla. Sed faucibus dictum lenec venenatis ut magna bibendum venenatis. Praesent vel fermentum tortor, non ultricies est. Sed maximus sit amet sapien vitae sollicitudin.</p>
				  </div>
				</a>
				<a href="img/header.jpg" class="carousel-item">
					<img class="mx-auto d-block carousel-img" src="img/header.jpg">
					<div class="carousel-caption d-none d-md-block">
				    <p>Lorem ipsum dodin.</p>
				  </div>
				</a>
				-->
			</div>
			<a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</section>

	<section id="contact">
		<div class="container">
			<h2 class="section-heading text-center"> Contact Us </h2>
			<div class="row">
				<div class="col-lg-6 offset-lg-1 text-left">
					<br>
					<div class="row">
						<div class="col-sm-1 text-center">
							<i class="fa fa-map-marker fa-3x sr-icons"></i>
						</div>
						<div class="col-sm-4">
							<p>{{ $profil->alamat }}</p>
						</div>
						<div class="col-sm-6 offset-sm-1">
							<table>
								<tr>
									<td> <i class="fa fa-phone sr-contact contact-icon"></i> </td>
									<td>{{ $profil->no_telp }}</td>
								</tr>
								<tr>
									<td> <i class="fa fa-envelope sr-contact contact-icon"></i> </td>
									<td>{{ $profil->email }}</td>
								</tr>
								<tr>
									<td> <i class="fa fa-instagram sr-contact contact-icon"></i> </td>
									<td>{{ $profil->instagram }}</td>
								</tr>
							</table>
						</div>
					</div>
					<div id="maps">
					</div>
				</div>
				<div class="col-lg-4">
					<br>
					<form role="form" method="POST" action="{{ url('/add_message') }}">
					{{ csrf_field() }}
						<div class="form-group">
							<input id="name" name="name" type="text" class="form-control" placeholder="Name">
						</div>
						<div class="form-group">
							<input id="email" name="email" type="email" class="form-control" placeholder="Email">
						</div>
						<div class="form-group">
							<input id="subject" name="subject" type="text" class="form-control" placeholder="Subject">
						</div>
						<div class="form-group">
							<textarea id="content" name="content" rows="5" class="form-control" placeholder="Write your message here" style="resize: none;"></textarea>
						</div>
						<button type="submit" class="btn btn-primary sr-button"> Send </button>
					</form>
				</div>
			</div>
		</div>
	</section>

</body>

	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	<script src="http://maps.googleapis.com/maps/api/js"></script>

	<script src="js/scrollreveal.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>

	<script src="js/script.js"></script>

</html>
