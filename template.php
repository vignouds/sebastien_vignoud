<!DOCTYPE html>
<html>
    <head>
    	<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-114826189-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-114826189-1');
		</script>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title ?></title>
        <link href="./style.css" rel="stylesheet" /> 
        <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico" />
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    </head>
        
    <body>
    	<div class="container">
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

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script type="text/javascript" src="./script.js"></script>
    </body>
</html>