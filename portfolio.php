<?php $title = 'Porftolio'; ?>

<?php ob_start(); ?>

<section>
	<h2>WebAgency (intégration de maquette)</h2>
	<div class="flex">
		<p class="portfolio">Il s'agit du premier projet du parcours professionnalisant "développeur web junior" d'Openclassrooms.<br><br>
		<em>Intégration de maquette, responsive design</em><br><br>
		<em>HTML, CSS, Javascript</em>
		</p>
		<p><a href="http://sebastien-vignoud.com/Webagency" target="_blank"><figure><img src="./images/webagency.jpg" alt="WebAgency"><figcaption>Cliquez-moi !</figcaption></figure></a></p>
	</div>

	<h2>[En cours] Création d'un thème Wordpress (ville de Strasbourg)</h2>
	<p>Il s'agit du second projet du parcours professionnalisant "développeur web junior" d'Openclassrooms.</p>
	<p><a href="http://sebastien-vignoud.com/Strasbourg" target="_blank">Vous pouvez suivre l'avancement du projet ici</a></p>
	<h2>[En cours] Création d'une application de réservation de vélos à Lyon</h2>
	<p>Il s'agit du troisième projet du parcours professionnalisant "développeur web junior" d'Openclassrooms.</p>
	<p><a href="http://sebastien-vignoud.com/VeloLyon" target="_blank">Vous pouvez suivre l'avancement du projet ici</a></p>
	<h2>[En cours] Création d'un blog pour écrivain en PHP</h2>
	<p>Il s'agit du quatrième projet du parcours professionnalisant "développeur web junior" d'Openclassrooms.</p>
	<p><a href="http://sebastien-vignoud.com/BlogEcrivain" target="_blank">Vous pouvez suivre l'avancement du projet ici</a></p>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>