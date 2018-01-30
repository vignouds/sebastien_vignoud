<?php $title = 'Me contacter'; ?>

<?php ob_start(); ?>

<section class="row">
    <p>Vous pouvez me retrouver sur différents réseaux :</p>
    <ul>
    	<li><a href="https://linkedin.com/in/sébastien-vignoud" target="_blank">Mon profil Linkedin</a></li>
    	<li><a href="https://github.com/vignouds" target="_blank">Mon profil GitHub</a></li>

    </ul>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>