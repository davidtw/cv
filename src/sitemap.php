<?php
if($_SERVER['HTTP_HOST'] != 'davidtwigger.com'){
	header('Location: http://davidtwigger.com', true, 301);
}
header('Content-Type: text/html; charset=utf-8');
header('Vary: Accept-Encoding');
$offset = 30 * 60 * 60;
$expire = "expires: " . gmdate("D, d M Y H:i:s", time() + $offset) . " GMT";
header($expire);
//header("cache-control: must-revalidate");

define('FROM_LESS', false);
?><!DOCTYPE html>
<html id="home" lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
<?php /* <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1"> */ ?>
<title>David Twigger - Développeur Front back &amp; mobile - CV en ligne</title>
<meta name="description" content="Responsable du développement front-end &amp; mobile (IOS &amp; android en natif, web &amp; phonegap) &amp; développeur back-end.">
<meta name="keywords" content="Web, internet, Developpeur, Front end, Site web, Site mobile, application, responsive design, jQuery, HTML5, PHP, CSS3, CMS, Phonegap, lessCss, Anglais, Français">
<meta name="author" content="David Twigger">
<meta itemprop="name" content="David Twigger">
<meta itemprop="description" content="Responsable du développement front-end &amp; mobile (IOS &amp; android en natif, web &amp; phonegap) &amp; développeur back-end.">
<meta itemprop="image" content="http://davidtwigger.com/images/david-twigger-logo.png">
<!-- open graph -->
<meta property="og:locale" content="fr_FR">
<meta property="og:title" content="Le web CV de David Twigger">
<meta property="og:image" content="http://davidtwigger.com/images/david-twigger-logo.png">
<meta property="og:description" content="Responsable du développement front-end &amp; mobile (IOS &amp; android en natif, web &amp; phonegap) &amp; développeur back-end.">
<meta property="og:type" content="website">
<!--twitter card-->
<meta name="twitter:card" content="summary">
<meta name="twitter:url" content="http://davidtwigger.com/">
<meta name="twitter:domain" content="davidtwigger.com">
<meta name="twitter:site" content="@TwiggerDavid">
<meta name="twitter:creator" content="@TwiggerDavid">
<meta name="twitter:title" content="Le web CV de David Twigger">
<meta name="twitter:description" content="Responsable du développement front-end & mobile (IOS & android en natif, web & phonegap) & développeur back-end.">
<meta name="twitter:image" content="http://davidtwigger.com/images/david-twigger-logo.png">
<link rel="alternate" type="text/directory" title="vCard" href="vCard.vcf">
<link href="http://fonts.googleapis.com/css?family=Orienta" rel="stylesheet">
<?php if(FROM_LESS) { ?>
<link href="style/style.less" rel="stylesheet/less">
<?php } else { ?>
<link href="style/style.css" rel="stylesheet">
<?php } ?>
<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
<!--[if gte IE 9]><style type="text/css">.gradient{filter:none;}</style><![endif]-->
<style>
@media print {
	body {
	  background-color :#fff;
	  font-family :Serif;
	  font-size:15pt;
	}
	h1 { font-size: 30pt; margin: 20pt 0 0; }
	h1 a { display: none; }
	h2 { font-size: 18pt; margin: 10pt 0 0; }
	h3 { font-size: 15pt; margin: 8pt 0 0; }
	a { color: #000; text-decoration: none; }
	p { margin: 0; }
	#apropos h1{ margin: 0; }
	.item-description a { display: none; }
	section .sectionInner , #apropos, #extras, #contact, #aproposTxt  { width: 100%; margin: 0 auto; height: auto; }
	#extras-contact { padding-bottom: 0; }
	#realisations .item img{ width: 50%; }
	footer, #ggPlus1, #navTop, #share, .exp-link, #navBar, .carousel-control-prev { display: none; }
}
</style>
</head>
<body>
<div id="document" itemscope itemtype="http://schema.org/Person">
<header id="top">
<div class="sectionInner">
<h1><img src="images/david-twigger-logo.png" alt="David Twigger" itemprop="image"></h1>
<nav id="navTop" class="clearfix gradient">
<ul>
<li><a href="index.php#document" id="navTop_aPropos" title="A propos de moi">A propos</a></li>
<li><a href="index.php#portfolio" id="navTop_portfolio" title="Mes réalisations">Portfolio</a></li>
<li><a href="index.php#experiencePro" id="navTop_experiences" title="Mes expéreiences professionnelles">Expériences</a></li>
<li><a href="index.php#formations" id="navTop_formations" title="Mes études">Formations</a></li>
<li><a href="index.php#extras" id="navTop_extra" title="Un peu plus sur moi">Extra</a></li>
<li><a href="index.php#contact" id="navTop_contact" title="Contactez-moi">Contact</a></li>
</ul>
</nav>
</div>
</header>
<section id="apropos">
<div class="sectionInner">
<div id="aproposTxt">
<ul id="sitemap">
<li><a href="index.php#document" title="A propos de mon parcours">A propos</a></li>
<li><a href="index.php#portfolio">Portfolio</a></li>
<li><a href="index.php#experiencePro">Expériences</a></li>
<li><a href="index.php#formations">Formations</a></li>
<li><a href="index.php#extras">Extra</a></li>
<li><a href="index.php#contact">Contact</a></li>
</ul>
</div>
</div>
</section>
</div>
</div>
<footer>
<p>Copyright 2012 © <span itemprop="name"><span itemprop="givenName">David</span> <span itemprop="familyName">Twigger</span></span> - Réalisation graphique : <a href="http://naissance-graphique.fr/" data-link="external" title="Voir le site de Naissance graphique (Nouvelle fenêtre)">Josselin Andrieux - Naissance Graphique</a></p>
</footer>
<div id="ggPlus1"><div class="g-plusone" data-size="small" data-annotation="inline" data-width="300" data-href="http://davidtwigger.com"></div><a href="https://twitter.com/share" class="twitter-share-button" data-url="http://davidtwigger.com" data-via="TwiggerDavid" data-lang="fr">Tweeter</a></div>
<nav id="navBar">
<ul>
<li><a href="index.php#document" title="A propos de mon parcours" id="nav_aPropos">A propos</a></li>
<li><a href="index.php#portfolio" id="nav_portfolio">Portfolio</a></li>
<li><a href="index.php#experiencePro" id="nav_experiences">Expériences</a></li>
<li><a href="index.php#formations" id="nav_formation">Formations</a></li>
<li><a href="index.php#extras" id="nav_extra">Extra</a></li>
<li><a href="index.php#contact" id="nav_contact">Contact</a></li>
</ul>
</nav>
</div>
<div id="share">
<a href="#" title="Partage" id="partage-link"><img src="images/share.png" alt="Partager"></a>
<a href="https://plus.google.com/share?url=http%3A%2F%2Fdavidtwigger.com" title="Partager sur Google +" class="sharer-links"><img src="images/share-gg.png" alt="Partager sur Google +"></a>
<a href="http://www.facebook.com/sharer/sharer.php?s=100&amp;p[url]=http://davidtwigger.com" title="Partager sur facebook" class="sharer-links"><img src="images/share-facebook.png" alt="Partager sur Facebook"></a>
<a href="http://twitter.com/home?status=Le%20Web%20CV%20de%20@TwiggerDavid%20:%20htp://davidtwigger.com" title="Partager sur Twitter" class="sharer-links"><img src="images/share-twitter.png" alt="Partager sur Twitter"></a>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
<?php 
if(FROM_LESS) { ?>
<script src="js/lessCss-1-3-1.js"></script>
<?php } else if(false) { ?>
<?php /*<script src="js/cv-min.js"></script>*/ ?>
<script src="js/modernizr.custom.61260.js"></script> 
<script src="js/jcarousel/dist/jquery.jcarousel.min.js"></script>
<script src="js/jquery.backgroundpos.min.js"></script>
<script src="js/cv.js"></script>
<?php } else { ?>
<script src="http://static.davidtwigger.com/js/davidtwigger-js.min.js"></script>
<?php } ?>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
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