<?php $title = 'A propos'; ?>

<?php ob_start(); ?>

<section class="row">
    <p>Bonjour.</p>
    <p>Je suis Sébastien Vignoud et je vous souhaite la bienvenue sur mon site internet.</p>
    <p>Diplômé en économie et en finance, je suis actuellement en train de me former au développement infromatique afin d'élargir mes horizons professionnels. La création de ce site est donc un moyen pour moi de mettre en pratique mes conaissances fraichement acquises.</p>
    <p>Par ailleurs, je suis trompettiste, pianiste et compositeur amateur. J'écris aussi quelques nouvelles à mes heures perdues et j'ai plusieurs projets de romans dans mes cartons.</p>
    <p>Ce site en est à ses débuts et il évoluera avec mes progrès en informatique et le nouveau contenu que je pourrai poster dessus.</p>
    <p>Je ne vois rien à ajouter pour le moment à cette description, je vous souhaite donc bonne visite !</p>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>