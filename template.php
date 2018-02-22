<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <link href="./style.css" rel="stylesheet" /> 
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
                <p>Retrouvez-moi sur les réseaux : <a href="https://linkedin.com/in/sébastien-vignoud" target="_blank"><img src="./images/linkedin.png" alt="linkedin" title="Linkedin"></a>    <a href="https://github.com/vignouds" title="GitHub" target="_blank"><img src="./images/GitHub.png" alt="GitHub"></a></p>
    		</footer>
        </div>
    </body>
</html>