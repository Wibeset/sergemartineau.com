@extends('layout')

@section('content')
<section id="about">
	<header>
		<h1>À propos</h1>
	</header>
	
	<div id="serge">
	  	<div><img src="/assets/img/apropos/serge.jpg?v={{ $version }}" /></div>
		<h2>Serge Martineau</h2>
	</div>
		
	<p>Après avoir oeuvré à Québec au sein de Aero Photo Inc en 1976 et 1977 et à Chicoutimi avec Michel Corriveau a.-g. de 1977 à 1984, M. Serge Martineau a.-g. fonda sa propre firme en mars 1984 en étroite collaboration avec M. Mario Gascon a.-g.</p>
	<p>Depuis ce temps, la firme a étendu son expertise dans plusieurs domaines reliés à l’arpentage foncier ainsi que dans d’autres champs d’activité tels que l’arpentage de construction, la géodésie et la géomatique. </p>
	<p>Basé à Ville de Saguenay, l'entreprise couvre l'ensemble du territoire de la région du Saguenay.</p>
	<p>L’entreprise détient présentement les greffes des arpenteurs-géomètres suivants, lesquels représentent plus de 15000 dossiers:</p>
		
	<ul id="greffes">
		<li>Jade Rousseau a.-g. 2000 – 2007</li>
		<li>Mario Gascon a.-g. 1980 –</li>
		<li>Serge Martineau a.-g. 1977 – </li>
		<li>Claude Rochon a.-g. 1972-1975 </li>
		<li>Michel Corriveau a.-g. 1953-1992 </li>
		<li>Rodolphe Joron a.-g. 1910-1940 </li>
	</ul>
		
	<div id="who">
		<h2>Des gens d'expérience</h2>
		<ul>
		  	<li>
				<div><img src="/assets/img/apropos/mario.jpg?v={{ $version }}" /></div>
				<h3>Mario Gascon</h3>
				<p>Arpenteur-géomètre associé à la firme depuis 1984</p>
			</li>
		  	<li>
				<div><img src="/assets/img/apropos/charles.jpg?v={{ $version }}" /></div>
				<h3>Charles Simard</h3>
				<p>Technicien depuis plus de 15 ans.</p>
			</li>
		 	 <li>
				<div><img src="/assets/img/apropos/yves.jpg?v={{ $version }}" /></div>
				<h3>Yves Simard</h3>
				<p>Technicien depuis plus de 3 ans.</p>
			</li>
		  	<li>
				<div><img src="/assets/img/apropos/sandra.jpg?v={{ $version }}" /></div>
				<h3>Sandra Bernard</h3>
				<p>Adjointe administrative depuis plus de 15 ans.</p>
			</li>
		</ul>
	</div>
</section>
@endsection