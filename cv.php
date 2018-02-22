<?php $title = 'Mon CV'; ?>

<?php ob_start(); ?>

<section>
    <h2>Expériences professionnelles</h2>
    <ul>
    	<li><strong>2016-2017</strong> : Analyste financier chez Exoce</li>
    	<li><strong>2015</strong> : Consultant diagnostic économique chez Secafi</li>
    </ul>

	<h2>Formation</h2>
	<ul>
		<li><strong>2015</strong> : Master 2 Finance d'entreprise et des marchés </li>
		<li><strong>2013</strong> : Master 2 Economie de l'énergie et de l'environnement</li>
	</ul>
	<h2>Certifications</h2>
	<ul>
		<li><strong>2017</strong> : Fondamentaux du Marketing Digital, <em>Google Digital Active</em></li>
		<li><strong>2015</strong> : Certification professionnelle des connaissances réglementaires des acteurs de marché</li>
	</ul>
    <h2>Compétences</h2>
    <ul>
    	<li><strong>Langues</strong> : Anglais, Espagnol, Italien </li>
		<li><strong>Informatique</strong> :  Pack office avancé, VBA, HTML, CSS, Javascript, PHP, MySQL, Python 
 	</ul>
 	<h2>Centres d'intérêt</h2>
    <ul>
    	<li><strong>Ecriture</strong> : projet de rédaction d’un roman, rédaction de nouvelles et promotion sur les réseaux sociaux </li>
		<li><strong>Musique</strong> :  trompette, piano, composition, improvisation et expérience en direction d’orchestre 
 	</ul>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>