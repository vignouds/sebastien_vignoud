<?php $title = 'A propos'; ?>

<?php ob_start(); ?>

<section>
    <p>Bonjour.</p>
    <p>Je suis Sébastien Vignoud, développeur informatique au chômage partiel et écrivain en devenir.</p>
    <p>Ce site est actuellement en construction et évoluera en fonction des mes différents projets.</p>
    <p>Vous pouvez suivre mon actualité liée à l'écriture sur mon blog et sur les différents réseaux.</p>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
