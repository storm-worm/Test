<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>school management</title>

	<link rel="shortcut icon" href="images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body class="home">
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="https://webcinq.com/">WEBCINQ</a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li class="active"><a href="#">Home</a></li>
					@if (Route::has('login'))
                
                    @auth
                       <li> <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Accueil</a></li>
                         @else
                        <li><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Connexion</a></li>
                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">S'inscrire</a></li>
                        @endif
                        
                    @endauth
                
            @endif
					
					
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<!-- Header -->
	<header id="head">
		<div class="container">
			<div class="row">
				<h1 class="lead">Le centre WEBCINQ se met à votre service afin de vous garantire une exellente prise en charge de votre accompagnement scolaire</h1>
				<p class="tagline"> <a href="http://www.gettemplate.com/?utm_source=progressus&amp;utm_medium=template&amp;utm_campaign=progressus"></a></p>
				<p> <a class="btn btn-action btn-lg" role="button" href="https://webcinq.com/">visitez notre site</a></p>
			</div>
		</div>
	</header>
	<!-- /Header -->

	<!-- Intro -->
	<div class="container text-center">
		<br> <br>
		<h2 class="thin">Notre centre dispense une formation de qualité et répond aux besoins spécifiques de chacun</h2>
		<p class="text-muted">
			
		</p>
	</div>
	<!-- /Intro-->
		
	<!-- Highlights - jumbotron -->
	<div class="jumbotron top-space">
		<div class="container">
			
			<h3 class="text-center thin"></h3>
			
			<div class="row">
				<div class="col-md-4 col-sm-5 highlight">
					<div class="h-caption"><h4>Cours de soutien mission</h4></div>
					<div class="h-body text-center">
						<p>Le centre WEBCINQ se met à votre service afn de vous garantir une excellente prise en charge de votre accompagnement scolaire! Que vous soyez Lycéens, collégiens ou élèves de primaire, il n'est jamais trop tot pour se préparer un bon avenir.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-5 highlight">
					<div class="h-caption"><h4>Langues</h4></div>
					<div class="h-body text-center">
						<p>Vivant et communicative, notre méthode de angues favorise le contact et le dialogue! Suivez des cours vivants axés sur des thèmes d'actualisés et des mises en situation concrètes! Elle s'appuie sue des documents authentique écrits , vidéo et sonores, des mises en situation pour encourager l'échange et vous garantir une progression conctante dals la langue que vous aurez choisie</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-5 highlight">
					<div class="h-caption"><h4>Préparation aux concours</h4></div>
					<div class="h-body text-center">
						<p>WEBCINQ School vous offre une meilleure préparation aux concours pour optimiser vos chances de réussite pour les grandes écoles de: Médecine, Pharmacie, Dentaire, ENSAM, ENSA, ENA,ENCG & ISCAE. Nos professeurs expérimentés vous accompagnent afin de se familiariser et maîtriser la méthodologie et la technicité des concours.</p>
					</div>
				</div>
				
			</div> <!-- /row  -->
		
		</div>
	</div>
	<!-- /Highlights -->

	<!-- container -->
	<div class="container">

			<div class="jumbotron top-space">
			<h4>Nos professeurs sont issus des Grandes Ecoles les plus prestigieuses</h4>
     		
  		</div>

</div>	<!-- /container -->
	
	<!-- Social links. @TODO: replace by link/instructions in template -->
	<section id="social">
		<div class="container">
			<div class="wrapper clearfix">
				<!-- AddThis Button BEGIN -->
				<div class="addthis_toolbox addthis_default_style">
				<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
				<a class="addthis_button_tweet"></a>
				<a class="addthis_button_linkedin_counter"></a>
				<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
				</div>
				<!-- AddThis Button END -->
			</div>
		</div>
	</section>
	<!-- /social links -->


	<footer id="footer" class="top-space">

		<div class="footer1">
			<div class="container">
				<div class="row">
					
					<div class="col-md-3 widget">
						<h3 class="widget-title">Contact</h3>
						<div class="widget-body">
							<p>0674177417<br>
								<a href="mailto:#">contact@webcinq.com</a><br>
								<br>
								Marrakech , Avenue allal el Fassi Lot RATMA n90 app2
							</p>	
						</div>
					</div>

					<div class="col-md-3 widget">
						<h3 class="widget-title">Follow me</h3>
						<div class="widget-body">
							<p class="follow-me-icons">
								<a href=""><i class="fa fa-email fa-2"></i></a>
								<a href=""><i class="fa fa-gmail fa-2"></i></a>
								<a href="https://www.youtube.com/c/zakariatalebessalama"><i class="fa fa-youtube fa-2"></i></a>
								<a href="https://www.facebook.com/webcinqmarrakech"><i class="fa fa-facebook fa-2"></i></a>
							</p>	
						</div>
					</div>

					

				</div> 
			</div>
		</div>

				</div>

	</footer>	
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="js/headroom.min.js"></script>
	<script src="js/jQuery.headroom.min.js"></script>
	<script src="js/template.js"></script>
</body>
</html>