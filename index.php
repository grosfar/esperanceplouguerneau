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
<html>
  <head>
    <title>Esperance Plouguerneau</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="templates/esperance/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
	    .row,.nav,.tab-content {
	    	    margin-top:10px;
	    }
	    #barrelogo {
		background-color: white;
	    }
    </style>
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.bootstrap/js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<div id="barrelogo" class="row">
		<!-- Bannieres des sponsors -->
		<jdoc:include type="modules" name="position-10" style="bannieres" />

		<!--
		<div class="col-md-3 col-sm-6 text-center"><img src="http://www.esperanceplouguerneau.fr/images/banners/combustibles%20de%20louest.jpg"></div>
		<div class="col-md-3 col-sm-6 hidden-xs text-center"><img src="http://www.esperanceplouguerneau.fr/images/banners/sport2000.jpg"></div>
		<div class="col-md-3 hidden-sm hidden-xs text-center"><img src="http://www.esperanceplouguerneau.fr/images/banners/extbois.jpg"></div>
		<div class="col-md-3 hidden-sm hidden-xs text-center"><img src="http://www.esperanceplouguerneau.fr/images/banners/maison%20nature%20et%20bois.jpg"></div>
		-->
	</div>

  
    <div class="container">
	
	<!-- Menu du haut -->
	<div id="menuhaut">
		<jdoc:include type="modules" name="position-1" style="menu" />
	</div>
	
	<!--
	<ul class="nav nav-pills nav-justified">
		<li class="active"><a href="#accueil" data-toggle="pill">Accueil</a></li>
		<li><a href="#u6u9" data-toggle="pill">U6->U9</a></li>
		<li><a href="#u11" data-toggle="pill">U11</a></li>
		<li><a href="#u13u15" data-toggle="pill">U13-U15</a></li>
		<li><a href="#u17" data-toggle="pill">U17</a></li>
		<li><a href="#seniors" data-toggle="pill">S&eacute;niors</a></li>
	</ul>
	-->
	
	<div class="row">
		<div class="col-md-3 hidden-sm hidden-xs text-center">
			<p><img src="http://www.esperanceplouguerneau.fr/images/stories/logo-esp.jpg"/></p>
			<p><script src="http://connect.facebook.net/fr_FR/all.js#xfbml=1"></script><fb:like href="http://www.esperanceplouguerneau.fr/" show_faces="true" width="200px"></fb:like></p>
		</div>
		<div class="col-md-6 hidden-xs">
			<object id="o" 
				classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 
				width="100%" 
				height="250">
				<param name="movie"
				value="http://apps.cooliris.com/embed/cooliris.swf" />
				<param name="allowFullScreen" value="true" />
				<param name="allowScriptAccess" value="always" />
				<param name="flashvars" value="feed=api://picasaweb.google.com/?user=esperance.plouguerneau&numRows=2" />
				<embed type="application/x-shockwave-flash"
				src="http://apps.cooliris.com/embed/cooliris.swf"
				flashvars="feed=api://picasaweb.google.com/?user=esperance.plouguerneau&numRows=2"
				width="100%" 
				height="250" 
				allowFullScreen="true"
				allowScriptAccess="always">
				</embed>
			</object>

			<!--
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li class="active" data-target="#carousel-example-generic" data-slide-to="0"></li>
					<li class="" data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li class="" data-target="#carousel-example-generic" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<?php
						/*
						include 'pwa.php';
						$listeUrlPicasa = searchPicasaImages();
						$i=0;
						foreach ($listeUrlPicasa as $entry) {
							$active="";
							if ($i==0) {
								$active=" active";
							}
							$i++;
							echo '<div class="item'.$active.'">',PHP_EOL;
							echo '<img width="100%" src="'.$entry.'"/>',PHP_EOL;
							echo '</div>',PHP_EOL;
							
						}
						*/
					?>
				</div>
				<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</div>
			-->
		</div>
		<div class="col-md-3 hidden-sm hidden-xs text-center">
			<script src="http://connect.facebook.net/fr_FR/all.js#appId=157670407619532&amp;xfbml=1"></script><fb:comments href="http://www.esperanceplouguerneau.fr/" num_posts="1" width="200px"></fb:comments>
		</div>
	</div>
	
	<div class="tab-content">
		<div class="tab-pane active" id="accueil" class="row col-md-12 show">
			<jdoc:include type="component" />
		</div>
		<div class="tab-pane" id="u6u9" class="row col-md-12 hidden">
			U6 U9
		</div>
		<div class="tab-pane" id="u11" class="row col-md-12 hidden">
			Convocation des U11, avec mon super Paol !!
		</div>
		<div class="tab-pane" id="u13u15" class="row col-md-12 hidden">
			U13 U15
		</div>
		<div class="tab-pane" id="u17" class="row col-md-12 hidden">
			U17
		</div>
		
		<div class="tab-pane" id="seniors" class="row col-md-12 hidden">
			Seniors
		</div>
	</div>

	<ul class="nav nav-pills nav-justified">
		<li><a href="#">Contact</a></li>
		<li><a href="#">Le Maillot Vert</a></li>
		<li><a href="#">Liens</a></li>
		<li><a href="#">Historique</a></li>
		<li><a href="#">Organisation</a></li>
		<li><a href="#">Dirigeants</a></li>
		<li><a href="#">Stages d'&eacute;t&eacute; 2013</a></li>
	</ul>
	
	<div class="row">
		<div class="col-md-4 hidden-xs"><img src="http://www.esperanceplouguerneau.fr/images/banners/pronostics.gif"/></div>
		<div class="col-md-4 hidden-xs"><jdoc:include type="modules" name="footer" style="none" /></div>
		<div class="col-md-4 hidden-sm hidden-xs"></div>
	</div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="templates/esperance/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>

