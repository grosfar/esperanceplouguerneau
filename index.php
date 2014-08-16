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
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/favicon.png">
		<title>Esp&#233;rance Plouguerneau</title>
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/assets/css/bootstrap.min.css">
		<style>
			#accueil {
				margin-top: 60px;
			}
			.banneritem {
				margin-top: 10px;
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
						<jdoc:include type="modules" name="position-1" style="menu"/>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
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
							<p style="margin-top:10px"><script src="http://connect.facebook.net/fr_FR/all.js#xfbml=1"></script><fb:like href="http://www.esperanceplouguerneau.fr/" show_faces="true" width="200px"></fb:like></p>
						</div>
					</div>
				</div>
				<div class="col-xs-1 hidden-sm hidden-md hidden-lg">
				</div>
				<div class="col-md-6 col-sm-8 col-xs-10">
					<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert">
							<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
						</button>
						Pour cette nouvelle saison 2014/2015, le comité directeur de l'Espérance a décidé de mettre en place une "opération spéciale équipements". Cette opération consiste à proposer un "pack équipements" à un tarif très préférentiel. En effet, le coût d'achat de ce pack est de 70 euros et, sera vendu seulement 30 euros aux licenciés. L'Espérance prenant à sa charge 60% du prix.
					</div>
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li class="active" data-target="#carousel-example-generic" data-slide-to="0"></li>
							<li class="" data-target="#carousel-example-generic" data-slide-to="1"></li>
							<li class="" data-target="#carousel-example-generic" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
							<jdoc:include type="modules" name="position-2" style="carousel"/>
						</div>
						<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left"></span>
						</a>
						<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right"></span>
						</a>
					</div>
				</div>
				<div class="col-md-3 col-sm-4 hidden-xs">
					<div class="panel panel-success">
						<div class="panel-heading">
							<h3 class="panel-title">Nos partenaires</h3>
						</div>
						<div class="panel-body">
							<jdoc:include type="modules" name="position-10"/>
						</div>
					</div>
				</div>
			</div>
			<?php
			}
			?>
			<br>
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
						<jdoc:include type="modules" name="moduleu17" />
					</div>
				</div>
			</div>
			<div class="row" id="u11" name="u11">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title">U11</h3>
					</div>
					<div class="panel-body">
						<jdoc:include type="modules" name="moduleu17" />
					</div>
				</div>
			</div>
			<div class="row" id="u13u15" name="u13u15">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title">U13 U15</h3>
					</div>
					<div class="panel-body">
						<jdoc:include type="modules" name="moduleu17" />
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
						<jdoc:include type="modules" name="moduleu17" />
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
	</body>
</html>
