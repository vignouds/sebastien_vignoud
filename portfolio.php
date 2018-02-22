<?php $title = 'Porftolio'; ?>

<?php ob_start(); ?>

<section>
	<h2>[En cours]Intégration de maquette (WebAgency)</h2>
	<p>Il s'agit du premier projet du parcours professionnalisant "développeur web junior" d'Openclassrooms.</p>
	<p><a href="http://sebastien-vignoud.com/Webagency" target="_blank">Vous pouvez suivre l'avancement du projet ici</a></p>
	<h2>[En cours]Création d'un thème Wordpress (ville de Strasbourg)</h2>
	<p>Il s'agit du second projet du parcours professionnalisant "développeur web junior" d'Openclassrooms.</p>
	<p><a href="http://sebastien-vignoud.com/Strasbourg" target="_blank">Vous pouvez suivre l'avancement du projet ici</a></p>
	<h2>[En cours]Création d'une application de réservation de vélos à Lyon</h2>
	<p>Il s'agit du troisième projet du parcours professionnalisant "développeur web junior" d'Openclassrooms.</p>
	<p><a href="http://sebastien-vignoud.com/VeloLyon" target="_blank">Vous pouvez suivre l'avancement du projet ici</a></p>
	<h2>[En cours]Création d'un blog pour écrivain en PHP</h2>
	<p>Il s'agit du quatrième projet du parcours professionnalisant "développeur web junior" d'Openclassrooms.</p>
	<p><a href="http://sebastien-vignoud.com/BlogEcrivain" target="_blank">Vous pouvez suivre l'avancement du projet ici</a></p>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>