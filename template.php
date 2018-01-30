<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet" /> 
    </head>
        
    <body>
    	<div class="container">
			<header class="row">
          		<h1>Sébastien Vignoud</h1>
      		</header>
    		<nav class="row">
            	<ul>
	                <li><a href="acceuil.php">A propos</a></li>
	                <li><a href="cv.php">Mon CV</a></li>
	                <li><a href="contact.php">Me conctacter</a></li>
             	</ul>   		
        	</nav>
        	<?= $content ?>
        	<footer class="row">
    			<p>Copywright Sébastien Vignoud, all rights reserved</p>
    		</footer>
        </div>
    </body>
</html>