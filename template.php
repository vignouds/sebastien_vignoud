<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <link href="./style.css" rel="stylesheet" /> 
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    </head>
        
    <body>
    	<div>
			<header>
          		<h1>Sébastien Vignoud</h1>
      		</header>
    		<nav>
            	<ul>
	                <li><a href="./index.php">A propos</a></li>
	                <li><a href="./cv.php">Mon CV</a></li>
                    <li><a href="./portfolio.php">Portfolio</a></li>
                    <li><a href="./projets.php">Projets en cours</a></li>
	                <li><a href="http://sebastien-vignoud.com/blog" target="_blank">Blog</a></li>
             	</ul>   		
        	</nav>
        	<?= $content ?>
        	<footer>
                <p>Retrouvez-moi sur les réseaux : <span class="logo"><a href="https://linkedin.com/in/sébastien-vignoud" target="_blank" title="Linkedin"><i class="fab fa-linkedin"></i></a><a href="https://github.com/vignouds" title="GitHub" target="_blank"><i class="fab fa-github"></i></a></span></p>
    		</footer>
        </div>
    </body>
</html>