<?php $title = 'A propos'; ?>

<?php ob_start(); ?>

<section class="row">
    <p>Bonjour.</p>
    <p>Je suis Sébastien Vignoud.</p>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>