<?php
if($_SERVER['HTTP_HOST'] != 'davidtwigger.com'){
	header('Location: http://davidtwigger.com', true, 301);
}
?>
<!DOCTYPE html>
<html id="home" lang="en" itemscope itemtype="http://schema.org/Person">
<head>
    <meta charset="utf-8">
    <!--<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0"> -->
    <title>David Twigger - 404</title>
	
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="David Twigger">
    
    <link href="http://fonts.googleapis.com/css?family=Orienta" rel="stylesheet">
    <link href="style/style.css" rel="stylesheet">
    <!--<link href="style/style.less" rel="stylesheet/less">-->
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
	<!--[if gte IE 9]>
	  <style type="text/css">
		.gradient {
		   filter: none;
		}
	  </style>
	<![endif]-->
</head>
<body>
    <div id="document">
        <header id="top">
            <div class="sectionInner">
                <h1><img src="images/david-twigger-logo.png" alt="David Twigger"></h1>
                <nav id="navTop" class="clearfix gradient">
                    <ul>
                        <li><a href="http://davidtwigger.com/index.php#document" id="navTop_aPropos" title="A propos de moi">A propos</a></li>
                        <li><a href="http://davidtwigger.com/index.php#portfolio" id="navTop_portfolio" title="Mes réalisations">Portfolio</a></li>
                        <li><a href="http://davidtwigger.com/index.php#experiencePro" id="navTop_experiences" title="Mes expéreiences professionnelles">Expériences</a></li>
                        <li><a href="http://davidtwigger.com/index.php#formations" id="navTop_formations" title="Mes études">Formations</a></li>
                        <li><a href="http://davidtwigger.com/index.php#extras" id="navTop_extra" title="Un peu plus sur moi">Extra</a></li>
                        <li><a href="http://davidtwigger.com/index.php#contact" id="navTop_contact" title="Contactez-moi">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <section id="apropos">
            <div class="sectionInner">
				<div id="aproposTxt">
					<h1>OOPS...</h1>
					<p>La page <?php echo $_SERVER['REQUEST_URI'] ?> n'existe pas...</p>
				</div>
            </div>
        </section>
        <footer>
            <p>Copyright 2012 © <span itemprop="givenName">David</span> <span itemprop="familyName">Twigger</span> - Réalisation graphique : <a href="http://naissance-graphique.fr/" data-link="external" title="Voir le site de Naissance graphique (Nouvelle fenêtre)">Josselin Andrieux - Naissance Graphique</a></p>
        </footer>
		<div id="ggPlus1"><div class="g-plusone" data-size="small" data-annotation="inline" data-width="300" data-href="http://davidtwigger.com"></div></div>
        <nav id="navBar">
            <ul>
                <li><a href="http://davidtwigger.com/index.php#document" title="A propos de mon parcours" id="nav_aPropos">A propos</a></li>
                <li><a href="http://davidtwigger.com/index.php#portfolio" id="nav_portfolio">Portfolio</a></li>
                <li><a href="http://davidtwigger.com/index.php#experiencePro" id="nav_experiences">Expériences</a></li>
                <li><a href="http://davidtwigger.com/index.php#formations" id="nav_formation">Formations</a></li>
                <li><a href="http://davidtwigger.com/index.php#extras" id="nav_extra">Extra</a></li>
                <li><a href="http://davidtwigger.com/index.php#contact" id="nav_contact">Contact</a></li>
            </ul>
        </nav>
    </div>
    <script src="js/modernizr.custom.61260.js"></script> 
	<!--
	<script>
    less = { env: 'development' }; </script>
    <script src="js/lessCss-1-3-1.js"></script>
	-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <!--<script src="js/jquery.backgroundpos.min.js"></script>
    <script src="js/jcarousel/dist/jquery.jcarousel.min.js"></script>
    <script src="js/cv.js"></script>-->
    <script src="js/cv-min.js"></script>
	<script type="text/javascript">
	var _gaq = _gaq || [];
	var pluginUrl = '//www.google-analytics.com/plugins/ga/inpage_linkid.js';
	_gaq.push(['_require', 'inpage_linkid', pluginUrl]);
	_gaq.push(['_setAccount', 'UA-2974179-4']);
	_gaq.push(['_trackPageview']);

	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
	window.___gcfg = {lang: 'fr'};

	(function() {
		var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
		po.src = 'https://apis.google.com/js/plusone.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
	})();

	</script>
</body>
</html>