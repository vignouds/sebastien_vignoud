<!DOCTYPE html>
<html>
    <head>

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
	                <li><a href="http://sebastien-vignoud.com/blog" target="_blank">Blog d'écrivain</a></li>
             	</ul>
        	</nav>
        	<?= $content ?>
        	<footer>
                <p>Retrouvez-moi sur les réseaux : <span class="logo">
                  <a href="https://www.facebook.com/Sébastien-Vignoud-109361150776429" target="_blank" title="Facebook"><i class="fab fa-facebook"></i></a>
                  <a href="https://twitter.com/SebVignoud" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
                  <a href="https://linkedin.com/in/sébastien-vignoud" target="_blank" title="Linkedin"><i class="fab fa-linkedin"></i></a>
                  <a href="https://www.scribay.com/author/1474233768/sebastien-vignoud" target="_blank" title="Scribay">Scribay</a>
                  <a href="https://www.wattpad.com/user/svignoud" target="_blank" title="wattpad">Wattpad</a>
                  <!-- <a href="https://github.com/vignouds" title="GitHub" target="_blank"><i class="fab fa-github"></i></a> -->
                  <!-- TODO : amazon -->
                </span></p>
    		</footer>
        </div>
    </body>
</html>
