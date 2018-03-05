<?php $title = 'Mon CV'; ?>

<?php ob_start(); ?>

<section>
	<div>
		<ul class="cv">
			<li id="cvGlobal">CV</li>
			<li id="info">Informatique</li>
		</ul>
	</div>
	<div id="cv">
	</div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>