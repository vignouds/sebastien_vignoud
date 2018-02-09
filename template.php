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
	                <li><a href="index.php">A propos</a></li>
	                <li><a href="cv.php">Mon CV</a></li>
                    <li><a href="projets.php">Mes projets</a></li>
	                <!-- <li><a href="contact.php">Me conctacter</a></li> -->
             	</ul>   		
        	</nav>
        	<?= $content ?>
        	<footer class="row">
                <p>Retrouvez-moi sur les réseaux : <a href="https://linkedin.com/in/sébastien-vignoud" target="_blank"><img src="images/linkedin.png" alt="linkedin" title="linkedin"></a>    <a href="https://github.com/vignouds" title="GitHub" target="_blank"><img src="images/GitHub.png" alt="GitHub"></a></p>
    		</footer>
        </div>
    </body>
</html>