<?php
/**
* @package     Joomla.Site
* @subpackage  Templates.protostar
*
* @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
* @license     GNU General Public License version 2 or later; see LICENSE.txt
*/

defined('_JEXEC') or die;

$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$this->language = $doc->language;
$this->direction = $doc->direction;

// Detecting Active Variables
$option   = $app->input->getCmd('option', '');
$view     = $app->input->getCmd('view', '');
$layout   = $app->input->getCmd('layout', '');
$task     = $app->input->getCmd('task', '');
$itemid   = $app->input->getCmd('Itemid', '');
$sitename = $app->getCfg('sitename');

include 'pwa.php';

// Include and instantiate the class.
require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/favicon.ico">
		<title>Esp&#233;rance Plouguerneau</title>
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/assets/css/bootstrap.min.css">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style>
			#containermain {
				margin-top: 60px;
			}
			.banneritem {
				margin-top: 10px;
			}
			td {
				border: 1px solid !important;
			}
			#contenu {
				margin-top: 20px;
			}
		</style>
	</head>
	<body data-offset="0" data-target="#navbar-main">
		<div id="navbar-main">
			<div class="navbar navbar-inverse navbar-fixed-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menuprincipal">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#"><img src="<?php echo $this->baseurl ?>/images/logo-micro.png"/></a>
					</div>
					<div class="navbar-collapse collapse" id="menuprincipal">
						<jdoc:include type="modules" name="menubootstrap" style="menu"/>
					</div>
				</div>
			</div>
		</div>
		<div class="container" id="containermain">
			<?php
			$menu = & JSite::getMenu();
			if ($menu->getActive() == $menu->getDefault()) {
			?>
			<div class="row" id="accueil" name="accueil">
				<br>
				<div class="col-md-3 hidden-sm hidden-xs">
					<div class="panel panel-success">
						<div class="panel-heading">
							<h3 class="panel-title">&nbsp;</h3>
						</div>
						<div class="panel-body">
							<p><img src="<?php echo $this->baseurl ?>/images/logo-esp.jpg"/></p>
							<?php if ( !$detect->isMobile() ) : ?>
							<p style="margin-top:10px"><script src="http://connect.facebook.net/fr_FR/all.js#xfbml=1"></script><fb:like href="http://www.esperanceplouguerneau.fr/" show_faces="true" width="200px"></fb:like></p>
							<?php endif; ?>
							<p><a href="https://www.facebook.com/esperancede.plouguerneau.5" target="_blank">Retrouvez nous sur <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/FB-f-Logo__blue_72.png"/></a></p>
							<p><a href="http://www.pronosticsdefolie.fr/accueil/index.php?idChampionnat=1179" target="_blank"><img width="220px" src="http://www.esperanceplouguerneau.fr/images/banners/pronostics.gif"/></a></p>
						</div>
					</div>
				</div>
				<div class="col-xs-1 hidden-sm hidden-md hidden-lg">
				</div>
				<div class="col-md-6 col-sm-8 col-xs-10">
					<?php if ($this->countModules( 'newsflash' )) : ?>
					<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert">
							<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
						</button>
						<jdoc:include type="modules" name="newsflash"/>
					</div>
					<?php endif; ?>
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li class="active" data-target="#carousel-example-generic" data-slide-to="0"></li>
							<li class="" data-target="#carousel-example-generic" data-slide-to="1"></li>
							<li class="" data-target="#carousel-example-generic" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
							<?php
							$listeUrlImg=searchPicasaImages();
							$i=0;
							foreach ($listeUrlImg as $entry) {
								$class="";
								if ($i==0) {
									$class=" active";
								}
								$i++;
							?>
								<div class="item<?php echo $class ?>"><img src="<?php echo $entry ?>" alt="" width="100%" /></div>
							<?php
							}
							?>
						</div>
						<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left"></span>
						</a>
						<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right"></span>
						</a>
					</div>
					<p><span class="label label-primary"><a href="http://picasaweb.google.com/esperance.plouguerneau/" target="_blank">Retrouvez toutes nos photos sur Picasa Web</a></span></p>
				</div>
				<div class="col-md-3 col-sm-4 hidden-xs">
					<div class="panel panel-success">
						<div class="panel-heading">
							<h3 class="panel-title">Nos partenaires</h3>
						</div>
						<div class="panel-body">
							<jdoc:include type="modules" name="partenaires"/>
						</div>
					</div>
				</div>
			</div>
			<?php
			}
			?>
			<div class="row well" id="contenu" name="contenu">
				<div class="col-lg-12">
					<jdoc:include type="component" />
				</div>
			</div>
			<?php
			$menu = & JSite::getMenu();
			if ($menu->getActive() == $menu->getDefault()) {
			?>
			<div class="row" id="u6u9" name="u6u9">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title">U6 U9</h3>
					</div>
					<div class="panel-body">
						<jdoc:include type="modules" name="moduleu69" />
					</div>
				</div>
			</div>
			<div class="row" id="u11" name="u11">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title">U11</h3>
					</div>
					<div class="panel-body">
						<jdoc:include type="modules" name="moduleu11" />
					</div>
				</div>
			</div>
			<div class="row" id="u13u15" name="u13u15">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title">U13 U15</h3>
					</div>
					<div class="panel-body">
						<jdoc:include type="modules" name="moduleu1315" />
					</div>
				</div>
			</div>
			<div class="row" id="u17" name="u17">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title">U17</h3>
					</div>
					<div class="panel-body">
						<jdoc:include type="modules" name="moduleu17" />
					</div>
				</div>
			</div>
			<div class="row" id="seniors" name="seniors">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title">S&#233;niors</h3>
					</div>
					<div class="panel-body">
						<jdoc:include type="modules" name="moduleuseniors" />
					</div>
				</div>
			</div>
			<div class="row" id="footer" name="footer">
				<div class="panel panel-default well">
					<div class="panel-body">
						<a href="http://www.joomla.org">Joomla!</a> est un Logiciel Libre diffusé sous licence <a href="http://www.gnu.org/licenses/gpl-2.0.html">GNU General Public</a>
					</div>
				</div>
			</div>
			<?php
			}
			?>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script>
			<?php
				// Objectif : afficher l'entete des sections quand on clique sur les menus
				// cf https://github.com/twbs/bootstrap/issues/1768
			?>
			$( window ).load(function() {
				randomNumber=getRandomInt(0,100);
				if (randomNumber==0) {
					$.ajax({
						url: "../updateimages.php",
						type: "GET"
					});
				}
			});
			
			// Returns a random integer between min (included) and max (excluded)
			// Using Math.round() will give you a non-uniform distribution!
			function getRandomInt(min, max) {
				return Math.floor(Math.random() * (max - min)) + min;
			}			
			
			$( document ).ready(function() {
				var shiftWindow = function() { scrollBy(0, -70) };
				if (location.hash) shiftWindow();
				window.addEventListener("hashchange", shiftWindow);
			});

			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-10623558-1']);
			_gaq.push(['_setDomainName', 'esperanceplouguerneau.fr']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();			
		</script>
	</body>
</html>
