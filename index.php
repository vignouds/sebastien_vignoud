<?php $title = 'A propos'; ?>

<?php ob_start(); ?>

<section>
    <p>Bonjour.</p>
    <p>Je suis Sébastien Vignoud, développeur informatique et passionné d'écriture et de musique.</p>
    <p>Ce site est actuellement en construction et évoluera en fonction des mes différents projets.</p>
    <p>Je suis actuellement en pleine écriture de mon premier roman, donc si ce sujet vous intéresse je vous invite à me retrouver sur mon blog d'écrivain.</p>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
