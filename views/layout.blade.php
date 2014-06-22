<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Serge Martineau</title>
	<meta name="description" content="Serge Martineau, arpenteur géomètre, à votre service depuis 1984">
	<meta name="keywords" content="Serge,Martineau,arpenteur,géomètre,certificat,localisation,piquetage,bornage,implantation,saguenay,chicoutimi">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//google-analytics.com">
    <link rel="dns-prefetch" href="//www.google-analytics.com">
    <link rel="dns-prefetch" href="//code.jquery.com">
    <link rel="dns-prefetch" href="//netdna.bootstrapcdn.com">
	<link href="//fonts.googleapis.com/css?family=Leckerli+One|Droid+Sans" rel="stylesheet" type="text/css">
	<link href="assets/css/styles.css?v={{ $version }}" rel="stylesheet">
	<link href="assets/img/favicon.ico?v={{ $version }}" rel="shortcut icon" type="image/x-icon">
</head>
<body lang="fr" class="s-{{ $page }}">

	<div id="background-main"></div>

		<div id="main">
		  	<header id="header" class="container">
				<ul>
					<li class="home"><a href="/">Accueil</a></li>
					<li class="services"><a href="services">Services</a></li>
					<li class="realisations"><a href="realisations">Réalisations</a></li>
					<li class="apropos"><a href="apropos">À propos</a></li>
					<li class="contact"><a href="contact">Contact</a></li>
				</ul>
			  	<a id="home" href="/">Serge Martineau</a>
			</header>
			
			<div id="body" class="container">
				@yield('content')
			</div>
			
			<div id="footer">
			  	<div class="container">
					<ul class="menu">
						<li>&raquo; <a href="/">Accueil</a></li>
						<li>&raquo; <a href="services">Services</a></li>
						<li>&raquo; <a href="realisations">Réalisations</a></li>
						<li>&raquo; <a href="apropos">À propos</a></li>
						<li>&raquo; <a href="contact">Contact</a></li>
					</ul>
					<ul class="menu">
						<li>&raquo; <a href="services#certificatlocalisation">Certificat de localisation</a></li>
						<li>&raquo; <a href="services#piquetage">Piquetage</a></li>
						<li>&raquo; <a href="services#bornage">Bornage</a></li>
						<li>&raquo; <a href="services#implantation">Implantation</a></li>
						<li>&raquo; <a href="services#subdivision">Subdivision</a></li>
						<li>&raquo; <a href="services#autres">Autres services</a></li>
					</ul>
					<div class="menu last">
						<a class="map" href="http://maps.google.ca/?q=100 racine est, Chicoutimi, Québec">
							<img alt="100 racine est, Chicoutimi, Québec, Canada" src="http://maps.google.com/maps/api/staticmap?zoom=15&center=100+racine+est+chicoutimi+canada&size=280x100&maptype=roadmap&markers=color:red|label:|48.4278782,-71.0655317&sensor=false">
						</a>
						<br>
						<div>
							<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fsergemartineau.com&amp;send=false&amp;layout=box_count&amp;width=60&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=90&amp;appId=188939451127264" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:60px; height:90px;" allowTransparency="true"></iframe>
						</div>
						100 Racine Est (Bureau 220) <br>
					  	Chicoutimi, Québec <br>
						418 543-0658
					</div>
					<div id="copy">
					  	<a href="http://wibeset.com" target="_blank">Conçu par Wibeset</a>
					  	&copy; Serge Martineau <?php echo date('Y'); ?>.
					</div>
				</div>
			</div>
		</div>

	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="assets/js/main.js?v={{ $version }}"></script>

	<script type="text/javascript">	
		var _gaq = _gaq || [];
	  	_gaq.push(['_setAccount', 'UA-29316811-1']);
	  	_gaq.push(['_trackPageview']);	
	  	(function() {
	    	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	 	})();	
	</script>

</body>
</html>