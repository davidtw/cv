<?php
if($_SERVER['HTTP_HOST'] != 'davidtwigger.com'){
	header('Location: http://davidtwigger.com', true, 301);
}
?>
<!DOCTYPE html>
<html id="home" lang="fr" itemscope itemtype="http://schema.org/Person">
<head>
    <meta charset="utf-8">
    <!--<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0"> -->
    <title>David Twigger - Développeur Front back &amp; mobile - CV en ligne</title>
	
	<meta name="description" content="Responsable du développement front-end &amp; mobile (IOS &amp; android en natif, web &amp; phonegap) &amp; développeur back-end.">
	<meta name="keywords" content="Web, internet, Developpeur, Front end, Site web, Site mobile, application, responsive design, jQuery, HTML5, PHP, CSS3, CMS, Phonegap, lessCss, Anglais, Français">
	<meta name="author" content="David Twigger">
	
	<meta itemprop="name" content="David Twigger">
	<meta itemprop="description" content="Responsable du développement front-end &amp; mobile (IOS &amp; android en natif, web &amp; phonegap) &amp; développeur back-end.">
	<meta itemprop="image" content="http://davidtwigger.com/images/david-twigger-logo.png">
	<!-- open graph -->
	<meta property="og:title" content="Le web CV de David Twigger">
	<meta property="og:image" content="http://davidtwigger.com/images/david-twigger-logo.png">
	<meta property="og:description" content="Responsable du développement front-end &amp; mobile (IOS &amp; android en natif, web &amp; phonegap) &amp; développeur back-end.">
    <!--twitter card-->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:url" content="http://davidtwigger.com/">
	<meta name="twitter:domain" content="davidtwigger.com">
	<meta name="twitter:site" content="@TwiggerDavid">
	<meta name="twitter:creator" content="@TwiggerDavid">
	<meta name="twitter:title" content="Le web CV de David Twigger">
	<meta name="twitter:description" content="Responsable du développement front-end & mobile (IOS & android en natif, web & phonegap) & développeur back-end.">
	<meta name="twitter:image" content="http://davidtwigger.com/images/david-twigger-logo.png">
	
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
                        <li><a href="aPropos.html#document" id="navTop_aPropos" title="A propos de moi" data-role="scroll">A propos</a></li>
                        <li><a href="portfolio.html#portfolio" id="navTop_portfolio" title="Mes réalisations" data-role="scroll">Portfolio</a></li>
                        <li><a href="experiences.html#experiencePro" id="navTop_experiences" title="Mes expéreiences professionnelles" data-role="scroll">Expériences</a></li>
                        <li><a href="formations.html#formations" id="navTop_formations" title="Mes études" data-role="scroll">Formations</a></li>
                        <li><a href="extra.html#extras" id="navTop_extra" title="Un peu plus sur moi" data-role="scroll">Extra</a></li>
                        <li><a href="extra.html#contact" id="navTop_contact" title="Contactez-moi" data-role="scroll">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <section id="apropos">
            <div class="sectionInner">
				<div id="aproposTxt">
					<h1 itemprop="jobTitle">Responsable développement front-end &amp; mobile, développeur back-end</h1>
					<p>Responsable des équipes de développement front-end et de développement mobile de la société B&amp;D Eolas et Développeur du noyau du CMS@Eolas.</p>
					<p>Responsable technique, je prends les décisions techniques lors de la phase de conception et assure le bon déroulement des projets. Je suis garant de la qualité des développements produits par les différentes équipes et assure la formation des développeurs front &amp; back.</p>		
				</div>
            </div>
        </section>
        <section id="portfolio">
            <div class="sectionInner">
				<div id="realisations-txt">
					<h1>Quelques Réalisations</h1>
					<h2>Quelques projets sur lesquels j'ai été amené à travailler</h2>
					<p>J'ai travaillé sur de nombreux projets web et mobile implémentant des frameworks variés tels que le CMS@Eolas, jQuery Mobile, PhoneGap, ...</p>
				</div>
                <div id="realisations">
                    <div class="item">
                        <a href="#" data-rel="realisation">
                            <img src="images/screen-magie.png" alt="Maison de la magie">
                        </a>
						<article class="item-description">
							<h3>Maison de la magie</h3>
							<p>Musée de la maison de la magie à Blois. Première expérience en "responsive design", l'ergonomie du site s'adapte à la largeur de l'écran. Formats supportés : Ecran de bureau, Ipad protrait, iPad Paysage.</p>
							<a href="http://www.maisondelamagie.fr/" data-link="external" title="Voir le site de la maison de la magie (Nouvelle fenêtre)">Voir le site</a>
						</article>
                    </div>
                    <div class="item">
                        <a href="#" data-rel="realisation">
                            <img src="images/screen-argBu.png" alt="Argenteuil BU">
                        </a>
						<article class="item-description">
							<h3>Site mobile des balades du patrimoine d'Argenteuil</h3>
							<p>Responsable technique du projet. Développement  et intégration graphique du site en jQuery Mobile.</p>
							<a href="http://m.argenteuil-patrimoine.fr/" data-link="external" title="Voir le site des balades du patrimoine d'Argenteuil (Nouvelle fenêtre)">Voir le site</a>
						</article>
                    </div>
                    <div class="item">
                        <a href="#" data-rel="realisation" title="Voir EVA en grand">
                            <img src="images/screen-eva.png" alt="EVA">
                        </a>
						<article class="item-description">
							<h3>CG95 EVA</h3>
							<p>Application mobile permettant aux jeunes actifs du Val d'Oise de financer une formation ou du matériel professionnel afin de faciliter l'entrée dans la vie active.</p>
							<p>
                                <a href="https://itunes.apple.com/fr/app/valdoise-eva/id533798757" data-link="external" title="Voir l'appli IOS sur l'AppStore (Nouvelle fenêtre)">AppStore</a> -
                                <a href="https://play.google.com/store/apps/details?id=com.cg95.eva" data-link="external" title="Voir l'appli Android sur Google Play (Nouvelle fenêtre)">Google Play</a> -
                                <a href="http://www.valdoise.fr/9020-eva-entree-dans-la-vie-active-.htm" data-link="external" title="Voir la description sur le site de la valdoise(Nouvelle fenêtre)">Plus d'information</a>
                            </P>
						</article>
                    </div>
                    <div class="item">
                        <a href="#" data-rel="realisation" title="Voir la FNPF en grand">
                            <img src="images/screen-peche.png" alt="FNPF">
                        </a>
							<h3>Fédération nationale de la pêche en France</h3>
						<article class="item-description">
							<p>La pêche en ligne! Responsable technique du projet. Développement du système de vente en ligne et de génération des cartes de pêche. Le site dispose aussi d'un Backoffice permettant la gestion des commandes, des statistiques ainsi qu'une grosse partie de gestion comptable.</p>
							<p><a href="http://www.cartedepeche.fr/" data-link="external" title="Voir le site de la FNPF (Nouvelle fenêtre)">Plus d'information</a></p>
						</article>
                    </div>
                    <div class="item">
                        <a href="#" data-rel="realisation" title="Voir l'OTG en grand">
                            <img src="images/screen-otg.png" alt="OTG">
                        </a>
						<article class="item-description">
							<h3>Grenoble Tourisme</h3>
							<p>Site web de l'office du tourisme de Grenoble. Responsable technique du projet. Développement d'un système d'import de contenu depuis SITRA un SI spécialisé dans le tourisme en Rhône-Alpes.</p>
							<p><a href="http://www.grenoble-tourisme.com/" data-link="external" title="Voir le site de l'OTG (Nouvelle fenêtre)">Plus d'information</a></p>
						</article>
                    </div>
                    <div class="item">
                        <a href="#" data-rel="realisation" title="Voir Rhône-alpes en grand">
                            <img src="images/screen-ra.png" alt="Rône-alpes">
                        </a>
						<article class="item-description">
							<h3>région Rhône-Alpes</h3>
							<p>Responsable technique du projet. Refonte graphique du site de la région Rhône-alpes. Mise en place de taggages analytics avancés, notamment au niveau des vidéos (satistiques sur les vidéos vues, des temps de visionage, ...)</p>
							<p><a href="http://www.rhonealpes.fr/" data-link="external" title="Voir le site de la région Rhône-alpes (Nouvelle fenêtre)">Plus d'information</a></p>
						</article>
                    </div>
                    <div class="item">
                        <a href="#" data-rel="realisation" title="Voir la Maison de la magie en grand">
                            <img src="images/screen-simply.png" alt="Maison de la magie">
                        </a>
						<article class="item-description">
							<h3>Simply market, courses en ligne</h3>
							<p>Mise en place du système de navigation par rayon sur tous les sites des magasins.</p>
							<p><a href="http://www.supermarche-reuilly.simplymarket.fr/" data-link="external" title="Voir le site de Simply (Nouvelle fenêtre)">Plus d'information</a></p>
						</article>                        
                    </div>
                    <div class="item">
                        <a href="#" data-rel="realisation" title="Voir la métro en grand">
                            <img src="images/screen-lam.png" alt="La métro">
                        </a>
						<article class="item-description">
							<h3>La Métro - Pôle-sud</h3>
							<p>Intégration et développement de la galaxie de sites de la Métro.</p>
							<p>
                                <a href="http://www.lametro.fr/" data-link="external" title="Voir le site de la mmétro (Nouvelle fenêtre)">Le site portail</a>
                                <a href="http://www.pole-sud.org/" data-link="external" title="Voir le site de pôle sud (Nouvelle fenêtre)">Pôle Sud</a>
                                <a href="http://mobile.lametro.fr/" data-link="external" title="Voir le site mobile de la métro (Nouvelle fenêtre)">Site mobile</a>
                            </p>
						</article> 
                    </div>
                    <div class="item">
                        <a href="#" data-rel="realisation" title="Voir la Fondation du doute en grand">
                            <img src="images/screen-fdd.png" alt="La fondation du doute">
                        </a>
						<article class="item-description">
							<h3>La fondation du doute de Blois (Sortie 02/2013)</h3>
							<p>Ancien musée de l'objet contient la collection d'objets contemporains proposée par Eric Fabre. (ouverture février 2013). Site en responsive design avec une ergonomie et une navigation innovante.</p>
							<p><a href="http://www.fondationdudoute.fr/" data-link="external" title="Voir le site de la fondation du doute (Nouvelle fenêtre)">Plus d'information</a></p>
						</article>  
                    </div>
                </div>
            </div>
        </section>
        <section id="experiencePro">
            <div class="sectionInner">
                <div id="experience-description">
                    <h1>Expériences professionnelles</h1>
                    <h2>5 ans d'expérience dans le domaine du Web et du mobile.</h2>
                    <p>Spécialisé dans les techniques et technologies du web dont : Javascript, jQuery, LessCss, PhoneGap, jQuery Mobile, Sencha Touch, HTML5, CSS3, Responsive design, Média queries, PHP, SQL, Apache, Unix</p>
                </div>
                <div id="experience-details">
					<a id="exp-2009" class="exp-link selected" href="#" title="Mon expérience depuis Juin 2009"><span class="outter"><span class="inner">Depuis Juin 2009</span></span></a>
					<a id="exp-2008" class="exp-link" href="#" title="Mon expérience de Janvier 2008 - Juin 2009"><span class="outter"><span class="inner">Janvier 2008 - Juin 2009</span></span></a>
					<a id="exp-2007-1" class="exp-link" href="#"><span class="outter" title="Mon expérience de Septembre 2007 à Décembre 2007"><span class="inner">Septembre 2007 Décembre 2007</span></span></a>
					<a id="exp-2007-2" class="exp-link" href="#"><span class="outter" title="Mon expérience de Mai 2007 à Août 2007"><span class="inner">Mai 2007 - Août 2007</span></span></a>
					<a id="exp-2006" class="exp-link" href="#"><span class="outter" title="Mon expérience en Mai 2006"><span class="inner">Mai 2006</span></span></a>
                    <div class="exp-content selected" data-rel="exp-2009">
                        <h3>Depuis Juin 2009</h3>
                        <p><a href="http://www.businessdecision-eolas.com/" title="Groupe Business &amp; Decision" data-link="external" itemprop="worksFor">Business &amp; Decision Eolas</a> - Développeur Expert (Référent technique). Responsable du bon déroulement technique et de la qualité des développements.</p>
                    </div>
                    <div class="exp-content" data-rel="exp-2008">
                        <h3>Janvier 2008 - Juin 2009</h3>
                        <p><a href="http://www.businessdecision-eolas.com/" title="Groupe Business &amp; Decision" data-link="external">Business & Decision Eolas</a> - Développeur Web. Développement sur des projets CMS@Eolas et E-commerce (solution proxy business).</p>
                    </div>
                    <div class="exp-content" data-rel="exp-2007-1">
                        <h3>Septembre - Décembre 2007</h3>
                        <p>Développeur Web / Intégrateur à <a href="http://www.rodacom.fr/" title="Rodacom - Logiciel pour l'immobilier" data-link="external">Rodacom</a>, solutions informatiques pour l'immobilier.</p>
                    </div>
                    <div class="exp-content" data-rel="exp-2007-2">
                        <h3>Mai - Août 2007</h3>
                        <p>Stage Développement à <a href="http://www.nodule.com/" title="Nodule - Agence Web" data-link="external">Nodule</a> : Développement de l'intranet de l'entreprise sous Symfony.</p>
                    </div>
                    <div class="exp-content" data-rel="exp-2006">
                        <h3>Mai - Août 2006</h3>
                        <p>CNRS CRTBT - Stage Développement. Développement d'un système d'analyse de logs.</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="formations">
            <div class="sectionInner">
                <h1>Etudes <em>&amp; formations</em></h1>
                <div class="carousel-wrapper">
                    <div class="carousel">
                        <ul>
                            <li>
                                <strong>
                                    <span>2004</span>
                                    Baccalauréat <abbr title="Science et Techniques de l'Ingénieur">STI</abbr> Electronique*
                                </strong>
                                * Sciences et technologies de l'industrie au lycée Ferdinand Buisson à Voiron
                                <em>Mention Bien</em>
                            </li>
                            <li>
                                <strong>
                                    <span>2004 2006</span>
                                    <abbr title="Brevet de Technicien supérieur">BTS</abbr> <abbr title="Informatique et Réseau pour l'Industrie et les Services">IRIS</abbr> *
                                </strong>
                                * Informatique et réseaux pour l'industrie et les services au lycée du Grésivaudan à Meylan
                                <em>Diplôme d'honneur de l'AFDET</em>
                            </li>
                            <li>
                                <strong>
                                    <span>2006 2007</span>
                                    <abbr title="Système Informatique et Logiciel">SIL</abbr> option <abbr title="Informatique, Internet, Images et Documents">3ID</abbr> *
                                </strong>
                                * Licence professionnelle <abbr title="Système Informatique et Logiciel">SIL</abbr> option <abbr title="Informatique, Internet, Images et Documents">3ID</abbr> à l'<abbr title="Institut Universitaire de Technologie 2">IUT2</abbr> de Grenoble 
                            </li>
                            <li>
                                <strong>
                                    <span>2011</span>
                                    Formation Développement PhoneGap
                                </strong>
                                * Formation développement PhoneGap au centre de formation PLB
                            </li>
                            <li>
                                <strong>
                                    <span>2013</span>
                                    Formation Développement Android
                                </strong>
                                * Formation développement Java pour téléphones et tablettes Android
                            </li>
                            <li>
                                <strong>
                                    <span>2013</span>
                                    Formation Développement Ios
                                </strong>
                                * Formation développement Objective-C pour Iphone et Ipad
                            </li>
                        </ul>
                    </div>
                    <a href="#" class="carousel-control-prev">&nbsp;</a>
                    <a href="#" class="carousel-control-next">&nbsp;</a>
                </div>
            </div>
        </section>
        <div id="extras-contact">
            <div class="sectionInner">
                <section id="extras">
                    <h1>Les extras</h1>
                    <h2>Musique</h2>
                    <p>Basse - Guitare - Trombone</p>
                    <h2>Sport</h2>
                    <p>Squash - Natation</p>
                </section>
                <section id="contact">
                    <h1>Mes coordonnées <a href="https://plus.google.com/103721178134113682956?rel=author" data-link="external" title="Voir mon profil Google plus (Nouvelle fenêtre)"><img src="images/google-plus.png" alt="Mon profil Google+" title="Mon profil Google plus"></a></h1>
					<div id="plan"></div>
                    <!--<img src="images/map.png" alt="Plan" id="plan">-->
                    <div id="adresse" itemscope="itemscope" itemtype="http://schema.org/Address">
                        <h2>Adresse</h2>
                        <p itemprop="street-address">1 Chemin de Villebois</p>
                        <p><span itemprop="postal-code">38100</span> <span itemprop="locality">Grenoble</span></p>
                        <p><a href="tel:0033673128710" title="Appelez-moi" itemprop="telephone">+33 (0)6 73 12 87 10</a></p>
                        <p>04/05/1983 (30 ans)</p>
                        <h2>Nationlité</h2>
                        <p><span itemprop="nationality">Britannique</span> (demande de la nationnalité Française en cours)</p>
                    </div>
                </section>
			</div>
        </div>
        <footer>
            <p>Copyright 2012 © <span itemprop="givenName">David</span> <span itemprop="familyName">Twigger</span> - Réalisation graphique : <a href="http://naissance-graphique.fr/" data-link="external" title="Voir le site de Naissance graphique (Nouvelle fenêtre)">Josselin Andrieux - Naissance Graphique</a></p>
        </footer>
		<div id="ggPlus1"><div class="g-plusone" data-size="small" data-annotation="inline" data-width="300" data-href="http://davidtwigger.com"></div></div>
        <nav id="navBar">
            <ul>
                <li><a href="#document" title="A propos de mon parcours" id="nav_aPropos" data-role="scroll">A propos</a></li>
                <li><a href="#portfolio" id="nav_portfolio" data-role="scroll">Portfolio</a></li>
                <li><a href="#experiencePro" id="nav_experiences" data-role="scroll">Expériences</a></li>
                <li><a href="#formations" id="nav_formation" data-role="scroll">Formations</a></li>
                <li><a href="#extras" id="nav_extra" data-role="scroll">Extra</a></li>
                <li><a href="#contact" id="nav_contact" data-role="scroll">Contact</a></li>
            </ul>
        </nav>
    </div>
	<div id="share">
		<a href="#" title="Partage" id="partage-link"><img src="images/share.png" alt="Partager"></a>
		<a href="https://plus.google.com/share?url=http%3A%2F%2Fdavidtwigger.com" title="Partager sur Google +" class="sharer-links"><img src="images/share-gg.png" alt="Partager sur Google +"></a>
		<a href="http://www.facebook.com/sharer/sharer.php?s=100&amp;p[url]=http://davidtwigger.com" title="Partager sur facebook" class="sharer-links"><img src="images/share-facebook.png" alt="Partager sur Facebook"></a>
		<a href="http://twitter.com/home?status=Le%20Web%20CV%20de%20@TwiggerDavid%20:%20htp://davidtwigger.com" title="Partager sur Twitter" class="sharer-links"><img src="images/share-twitter.png" alt="Partager sur Twitter"></a>
	</div>
    <script src="js/modernizr.custom.61260.js"></script> 
	<!--
	<script>
    less = { env: 'development' }; </script>
    <script src="js/lessCss-1-3-1.js"></script>
	-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
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