@extends('layout')

@section('content')
<section id="services">
	<header>
		<h1>Nos services</h1>
	</header>
	
	<ul>
		<li><a href="#certificatlocalisation">Certificat de localisation</a></li>
		<li><a href="#piquetage">Piquetage</a></li>
		<li><a href="#bornage">Bornage</a></li>
		<li><a href="#implantation">Implantation</a></li>
		<li><a href="#subdivision">Opérations cadastrale</a></li>
		<li><a href="#autres">Autres services</a></li>
	</ul>		
		
	<article id="certificatlocalisation">
		<header><h2>Certificat de localisation</h2></header>
		<img src="assets/img/services/certificat.jpg?v={{ $version }}">
		<p>Document composé d’un rapport et d’un plan, dans lequel l’arpenteur-géomètre exprime son opinion sur la situation et la condition actuelle d’une propriété par rapport aux titres, au cadastre, aux occupations ainsi qu’aux lois et règlements pouvant l’affecter.</p>
		<p><a href="assets/pdf/certificat.pdf?v={{ $version }}">Visualiser un exemple</a> (format pdf)</p>
		<footer>Destiné aux propriétaires, notaires, avocats, créanciers hypothécaire et acheteurs</footer>
	</article>
	<article id="piquetage">
		<header><h2>Piquetage</h2></header>
		<img src="assets/img/services/piquetage.jpg?v={{ $version }}">
		<p>Représentation à l’aide de repères métalliques identifiés, de l’opinion de l’arpenteur-géomètre, sur les limites d’une propriété.</p>
		<p><a href="assets/pdf/piquetage.pdf?v={{ $version }}">Visualiser un exemple</a> (format pdf)</p>
		<footer>Destiné aux propriétaires, entrepreneurs et municipalités</footer>
	</article>
	<article id="bornage">
		<header><h2>Bornage</h2></header>
		<img src="assets/img/services/certificat.jpg?v={{ $version }}">
		<p>Fait par lequel des propriétaires d’emplacements voisins acceptent de faire établir par un arpenteur-géomètre la limite permanente et irrévocable entre leurs propriétés soit à la suite d’une entente à l’amiable entre voisins ou à la suite d’une procédure judiciaire pouvant amener une décision du tribunal.</p>
		<p><a href="assets/pdf/bornage.pdf?v={{ $version }}">Visualiser un exemple</a> (format pdf)</p>
		<footer>Destiné aux propriétaires contigus</footer>
	</article>
	<article id="implantation">
		<header><h2>Implantation</h2></header>
		<img src="assets/img/services/certificat.jpg?v={{ $version }}">
		<p>Positionnement sur le terrain d’une future construction dans le respect de certaines exigences des municipalités. Dans plusieurs cas, le plan d’implantation est préalable à la délivrance du permis de construction et à l’implantation.</p>
		<p><a href="assets/pdf/implantation.pdf?v={{ $version }}">Visualiser un exemple</a> (format pdf)</p>
		<footer>Destiné aux propriétaires et entrepreneurs</footer>
	</article>
	<article id="subdivision">
		<header><h2>Opérations cadastrales</h2></header>
		<img src="assets/img/services/cadastre.jpg?v={{ $version }}">
		<p>Opération découlant de la loi, par laquelle, suite à un arpentage, un plan identifiant une propriété avec un numéro de lot distinct est déposé aux archives du cadastre.</p>
		<p><a href="assets/pdf/cadastre.pdf?v={{ $version }}">Visualiser un exemple</a> (format pdf)</p>
		<footer>Destiné aux propriétaires, promoteurs, entrepreneurs et municipalités</footer>
	</article>
	<article id="autres">
		<header><h2>Autres services</h2></header>
		<p>En plus des travaux ci-haut mentionnés, l’arpenteur-géomètre peut effectuer pour vous: Descriptions techniques ou foncières, plan topographique, arpentage de terre (ouverture de ligne de lots),
			 Lotissement, levés topographiques, volumétrie, expertise légale et physique d’une propriété, opérations cadastrales (subdivision, remplacement, correction), nivellement et
			 arpentage de précision.</p>
	</article>
</section>
@endsection