@extends('layout')

@section('content')
<h1>Serge Martineau, arpenteur géomètre basé à Ville de Saguenay, à votre service depuis 1984, <a href="contact">Nous contacter &raquo;</a></h1>

<div id="slideshow">	
	<img class="active" src="assets/img/home/2.jpg?v={{ $version }}" width="940" />
	<img src="assets/img/home/3.jpg?v={{ $version }}" width="940" />
	<img src="assets/img/home/4.jpg?v={{ $version }}" width="940" />
	<img src="assets/img/home/1.jpg?v={{ $version }}" width="940" />
</div>	
	
<ul id="intros">
	<li>
		<h2>Notre expertise</h2>
		<p>La firme a étendu son expertise dans tous les domaines reliés à l’arpentage foncier ...</p>
		<a href="services">Nos services &rarr;</a>
	</li>
	<li>
		<h2>Plus de 15,000 dossiers</h2>
		<p>Près de 18 000 dossiers composent l’ensemble des greffes d’arpenteurs géomètres détenus par la firme.</p>
		<a href="realisations">Nos réalisations majeures &rarr;</a>
	</li>
  	<li>
  		<h2>Secteur couvert</h2>
  		<p>Basé à Ville de Saguenay, l’entreprise couvre principalement tout le territoire du Saguenay mais aussi ceux du Lac-St-Jean, de la Haute-Côte-Nord et de Charlevoix.</p>
  		<a href="apropos">En savoir plus &rarr;</a>
  	</li>
</ul>
@endsection