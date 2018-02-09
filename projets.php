<?php $title = 'Mes projets'; ?>

<?php ob_start(); ?>

<section class="row">
	<h2>Le Pélican Séché</h2>
	<p>Reprise d'un ancien blog où je publiais des nouvelles pour en faire un veritable site représenant l'univers littéraire du Pélican Séché sous forme d'univers digital avec à terme la publication de nouvelles, des jeux, une boutique...  </p>
	<p><a href="pelicanseche.sebastien-vignoud.com" target="_blank">Vous pouvez suivre l'avancement du projet ici</a></p>
	<p><a href="https://github.com/vignouds/projet_pelican" target="_blank">Repository Git du projet</a></p>
	<h2>Jeu de rôle en javascript</h2>
	<p>Il s'agit d'un petit jeu de rôle que je suis en train de créer essentiellement en Javascript. Le but ici est seulement de m'entraîner à coder en mettant en pratique mes connaissances dans un domaine qui me plait.</p>
	<p><a href="https://github.com/vignouds/jdr_js" target="_blank">Repository Git du projet</a></p>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>