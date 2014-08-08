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
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
		<!--<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>-->
		<style>
			#accueil {
				margin-top: 60px;
			}
			.banneritem {
				margin-top: 10px;
			}
			h1 {
				color: #2A6496;
			}
			/*.navbar-inverse {
				background-image: none;
				background-color: #ADC387;
			}*/
			/*h1, h2, h3, h4, h5, h6 {
				font-family: 'Oswald';
			}
			p, div {
				font-family: 'Oswald';
			}*/
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
						<jdoc:include type="modules" name="position-1"/>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row" id="accueil" name="accueil">
				<div class="col-md-10">
					<jdoc:include type="component" />
				</div>
				<div class="col-md-2 hidden-sm hidden-xs">
					<p><img src="<?php echo $this->baseurl ?>/images/logo-esp.jpg"/></p>
					<jdoc:include type="modules" name="position-10"/>
					<p><script src="http://connect.facebook.net/fr_FR/all.js#xfbml=1"></script><fb:like href="http://www.esperanceplouguerneau.fr/" show_faces="true" width="200px"></fb:like></p>
				</div>
			</div>
			<div class="row">
				<br>
				<div class="col-md-2">
				</div>
				<div class="col-md-8">
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
				<div class="col-md-2">
				</div>
			</div>
			<div class="row" id="u6u9" name="u6u9">
				<br>
				<h1>U6 U9</h1>
				<hr>
				<div class="col-lg-12">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas nisi nulla, sed dictum libero bibendum ut. Mauris consequat a quam ut euismod. Donec consectetur et mauris et blandit. Maecenas tincidunt nunc et justo blandit aliquet. Phasellus eget massa iaculis, facilisis velit sed, egestas ligula. Sed fringilla in tellus quis aliquam. Curabitur in nulla vulputate massa imperdiet pellentesque. Mauris pellentesque bibendum magna. Donec fermentum odio velit. Pellentesque aliquet diam non interdum congue. Donec congue porta libero, vel vehicula eros. In euismod tincidunt justo sit amet vulputate.

					Ut cursus urna in quam consequat, sed egestas justo dapibus. Integer vulputate sollicitudin arcu, vel condimentum felis lacinia eget. Donec in fermentum purus. In bibendum malesuada rhoncus. Proin nec odio id risus elementum mattis. Nunc at risus quam. Ut convallis dui nec libero fermentum, nec auctor nisl placerat. Donec nisl tellus, rutrum eget ligula a, consequat tristique risus. Donec semper vitae mauris id porttitor. Suspendisse eros mauris, blandit a sem at, sodales commodo ante. Quisque vitae justo pulvinar, posuere augue sit amet, luctus ante. Praesent ut orci mauris.

					Maecenas felis metus, ornare et quam vitae, bibendum dapibus nunc. Nunc imperdiet dolor ac libero venenatis sagittis. Donec nec nisl posuere, tristique elit eu, egestas quam. Nulla leo nisi, molestie id nunc vel, rhoncus sodales urna. Nulla adipiscing porta egestas. Etiam at quam turpis. Cras at quam ipsum. Aliquam at nulla eu sem consectetur condimentum et sit amet purus.

					Suspendisse ut nunc sem. Proin suscipit ac augue a accumsan. Pellentesque pharetra, lorem sed pharetra suscipit, risus lectus aliquet nunc, in accumsan urna mi scelerisque ipsum. Mauris porttitor rutrum urna in commodo. Nam fermentum et augue sit amet lobortis. Maecenas metus nunc, aliquet quis pretium auctor, suscipit non magna. Suspendisse odio sem, commodo id pharetra nec, eleifend ac magna. Cras sed mauris at leo luctus bibendum. Phasellus fringilla, magna vitae dapibus dictum, lacus purus pellentesque nibh, non adipiscing velit sapien auctor ligula. Phasellus a nisl sed tortor consequat dictum. Integer a tincidunt lacus.

					Curabitur vestibulum, metus eget dapibus rhoncus, ante massa viverra est, id pretium massa purus at sem. Nulla erat urna, sollicitudin eu felis sed, egestas sodales arcu. Morbi felis metus, tempus eget lacinia nec, lobortis quis tortor. Duis aliquam nisi sapien, sit amet pharetra nunc iaculis quis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Cras ligula elit, elementum non bibendum ultrices, rutrum eu orci. Mauris nec nisi condimentum eros bibendum feugiat aliquet egestas sapien. Nam eget leo sed odio sagittis ultrices. In nibh metus, iaculis et varius eu, pharetra nec velit. Nullam ligula velit, commodo vel odio eget, tincidunt pharetra lorem. Aenean dapibus libero eget nunc consectetur, at iaculis orci cursus. Nunc sagittis tellus nec nisi lacinia mattis sit amet sit amet lectus. Pellentesque tortor odio, placerat ut tortor sit amet, volutpat mattis risus. 
				</div>
			</div>
			<div class="row" id="u11" name="u11">
				<br>
				<h1>U11</h1>
				<hr>
				<div class="col-lg-12">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas nisi nulla, sed dictum libero bibendum ut. Mauris consequat a quam ut euismod. Donec consectetur et mauris et blandit. Maecenas tincidunt nunc et justo blandit aliquet. Phasellus eget massa iaculis, facilisis velit sed, egestas ligula. Sed fringilla in tellus quis aliquam. Curabitur in nulla vulputate massa imperdiet pellentesque. Mauris pellentesque bibendum magna. Donec fermentum odio velit. Pellentesque aliquet diam non interdum congue. Donec congue porta libero, vel vehicula eros. In euismod tincidunt justo sit amet vulputate.

					Ut cursus urna in quam consequat, sed egestas justo dapibus. Integer vulputate sollicitudin arcu, vel condimentum felis lacinia eget. Donec in fermentum purus. In bibendum malesuada rhoncus. Proin nec odio id risus elementum mattis. Nunc at risus quam. Ut convallis dui nec libero fermentum, nec auctor nisl placerat. Donec nisl tellus, rutrum eget ligula a, consequat tristique risus. Donec semper vitae mauris id porttitor. Suspendisse eros mauris, blandit a sem at, sodales commodo ante. Quisque vitae justo pulvinar, posuere augue sit amet, luctus ante. Praesent ut orci mauris.

					Maecenas felis metus, ornare et quam vitae, bibendum dapibus nunc. Nunc imperdiet dolor ac libero venenatis sagittis. Donec nec nisl posuere, tristique elit eu, egestas quam. Nulla leo nisi, molestie id nunc vel, rhoncus sodales urna. Nulla adipiscing porta egestas. Etiam at quam turpis. Cras at quam ipsum. Aliquam at nulla eu sem consectetur condimentum et sit amet purus.

					Suspendisse ut nunc sem. Proin suscipit ac augue a accumsan. Pellentesque pharetra, lorem sed pharetra suscipit, risus lectus aliquet nunc, in accumsan urna mi scelerisque ipsum. Mauris porttitor rutrum urna in commodo. Nam fermentum et augue sit amet lobortis. Maecenas metus nunc, aliquet quis pretium auctor, suscipit non magna. Suspendisse odio sem, commodo id pharetra nec, eleifend ac magna. Cras sed mauris at leo luctus bibendum. Phasellus fringilla, magna vitae dapibus dictum, lacus purus pellentesque nibh, non adipiscing velit sapien auctor ligula. Phasellus a nisl sed tortor consequat dictum. Integer a tincidunt lacus.

					Curabitur vestibulum, metus eget dapibus rhoncus, ante massa viverra est, id pretium massa purus at sem. Nulla erat urna, sollicitudin eu felis sed, egestas sodales arcu. Morbi felis metus, tempus eget lacinia nec, lobortis quis tortor. Duis aliquam nisi sapien, sit amet pharetra nunc iaculis quis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Cras ligula elit, elementum non bibendum ultrices, rutrum eu orci. Mauris nec nisi condimentum eros bibendum feugiat aliquet egestas sapien. Nam eget leo sed odio sagittis ultrices. In nibh metus, iaculis et varius eu, pharetra nec velit. Nullam ligula velit, commodo vel odio eget, tincidunt pharetra lorem. Aenean dapibus libero eget nunc consectetur, at iaculis orci cursus. Nunc sagittis tellus nec nisi lacinia mattis sit amet sit amet lectus. Pellentesque tortor odio, placerat ut tortor sit amet, volutpat mattis risus. 
				</div>
			</div>
			<div class="row" id="u13u15" name="u13u15">
				<br>
				<h1>U13 U15</h1>
				<hr>
				<div class="col-lg-12">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas nisi nulla, sed dictum libero bibendum ut. Mauris consequat a quam ut euismod. Donec consectetur et mauris et blandit. Maecenas tincidunt nunc et justo blandit aliquet. Phasellus eget massa iaculis, facilisis velit sed, egestas ligula. Sed fringilla in tellus quis aliquam. Curabitur in nulla vulputate massa imperdiet pellentesque. Mauris pellentesque bibendum magna. Donec fermentum odio velit. Pellentesque aliquet diam non interdum congue. Donec congue porta libero, vel vehicula eros. In euismod tincidunt justo sit amet vulputate.

					Ut cursus urna in quam consequat, sed egestas justo dapibus. Integer vulputate sollicitudin arcu, vel condimentum felis lacinia eget. Donec in fermentum purus. In bibendum malesuada rhoncus. Proin nec odio id risus elementum mattis. Nunc at risus quam. Ut convallis dui nec libero fermentum, nec auctor nisl placerat. Donec nisl tellus, rutrum eget ligula a, consequat tristique risus. Donec semper vitae mauris id porttitor. Suspendisse eros mauris, blandit a sem at, sodales commodo ante. Quisque vitae justo pulvinar, posuere augue sit amet, luctus ante. Praesent ut orci mauris.

					Maecenas felis metus, ornare et quam vitae, bibendum dapibus nunc. Nunc imperdiet dolor ac libero venenatis sagittis. Donec nec nisl posuere, tristique elit eu, egestas quam. Nulla leo nisi, molestie id nunc vel, rhoncus sodales urna. Nulla adipiscing porta egestas. Etiam at quam turpis. Cras at quam ipsum. Aliquam at nulla eu sem consectetur condimentum et sit amet purus.

					Suspendisse ut nunc sem. Proin suscipit ac augue a accumsan. Pellentesque pharetra, lorem sed pharetra suscipit, risus lectus aliquet nunc, in accumsan urna mi scelerisque ipsum. Mauris porttitor rutrum urna in commodo. Nam fermentum et augue sit amet lobortis. Maecenas metus nunc, aliquet quis pretium auctor, suscipit non magna. Suspendisse odio sem, commodo id pharetra nec, eleifend ac magna. Cras sed mauris at leo luctus bibendum. Phasellus fringilla, magna vitae dapibus dictum, lacus purus pellentesque nibh, non adipiscing velit sapien auctor ligula. Phasellus a nisl sed tortor consequat dictum. Integer a tincidunt lacus.

					Curabitur vestibulum, metus eget dapibus rhoncus, ante massa viverra est, id pretium massa purus at sem. Nulla erat urna, sollicitudin eu felis sed, egestas sodales arcu. Morbi felis metus, tempus eget lacinia nec, lobortis quis tortor. Duis aliquam nisi sapien, sit amet pharetra nunc iaculis quis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Cras ligula elit, elementum non bibendum ultrices, rutrum eu orci. Mauris nec nisi condimentum eros bibendum feugiat aliquet egestas sapien. Nam eget leo sed odio sagittis ultrices. In nibh metus, iaculis et varius eu, pharetra nec velit. Nullam ligula velit, commodo vel odio eget, tincidunt pharetra lorem. Aenean dapibus libero eget nunc consectetur, at iaculis orci cursus. Nunc sagittis tellus nec nisi lacinia mattis sit amet sit amet lectus. Pellentesque tortor odio, placerat ut tortor sit amet, volutpat mattis risus. 
				</div>
			</div>
			<div class="row" id="u17" name="u17">
				<br>
				<h1>U17</h1>
				<hr>
				<div class="col-lg-12">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas nisi nulla, sed dictum libero bibendum ut. Mauris consequat a quam ut euismod. Donec consectetur et mauris et blandit. Maecenas tincidunt nunc et justo blandit aliquet. Phasellus eget massa iaculis, facilisis velit sed, egestas ligula. Sed fringilla in tellus quis aliquam. Curabitur in nulla vulputate massa imperdiet pellentesque. Mauris pellentesque bibendum magna. Donec fermentum odio velit. Pellentesque aliquet diam non interdum congue. Donec congue porta libero, vel vehicula eros. In euismod tincidunt justo sit amet vulputate.

					Ut cursus urna in quam consequat, sed egestas justo dapibus. Integer vulputate sollicitudin arcu, vel condimentum felis lacinia eget. Donec in fermentum purus. In bibendum malesuada rhoncus. Proin nec odio id risus elementum mattis. Nunc at risus quam. Ut convallis dui nec libero fermentum, nec auctor nisl placerat. Donec nisl tellus, rutrum eget ligula a, consequat tristique risus. Donec semper vitae mauris id porttitor. Suspendisse eros mauris, blandit a sem at, sodales commodo ante. Quisque vitae justo pulvinar, posuere augue sit amet, luctus ante. Praesent ut orci mauris.

					Maecenas felis metus, ornare et quam vitae, bibendum dapibus nunc. Nunc imperdiet dolor ac libero venenatis sagittis. Donec nec nisl posuere, tristique elit eu, egestas quam. Nulla leo nisi, molestie id nunc vel, rhoncus sodales urna. Nulla adipiscing porta egestas. Etiam at quam turpis. Cras at quam ipsum. Aliquam at nulla eu sem consectetur condimentum et sit amet purus.

					Suspendisse ut nunc sem. Proin suscipit ac augue a accumsan. Pellentesque pharetra, lorem sed pharetra suscipit, risus lectus aliquet nunc, in accumsan urna mi scelerisque ipsum. Mauris porttitor rutrum urna in commodo. Nam fermentum et augue sit amet lobortis. Maecenas metus nunc, aliquet quis pretium auctor, suscipit non magna. Suspendisse odio sem, commodo id pharetra nec, eleifend ac magna. Cras sed mauris at leo luctus bibendum. Phasellus fringilla, magna vitae dapibus dictum, lacus purus pellentesque nibh, non adipiscing velit sapien auctor ligula. Phasellus a nisl sed tortor consequat dictum. Integer a tincidunt lacus.

					Curabitur vestibulum, metus eget dapibus rhoncus, ante massa viverra est, id pretium massa purus at sem. Nulla erat urna, sollicitudin eu felis sed, egestas sodales arcu. Morbi felis metus, tempus eget lacinia nec, lobortis quis tortor. Duis aliquam nisi sapien, sit amet pharetra nunc iaculis quis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Cras ligula elit, elementum non bibendum ultrices, rutrum eu orci. Mauris nec nisi condimentum eros bibendum feugiat aliquet egestas sapien. Nam eget leo sed odio sagittis ultrices. In nibh metus, iaculis et varius eu, pharetra nec velit. Nullam ligula velit, commodo vel odio eget, tincidunt pharetra lorem. Aenean dapibus libero eget nunc consectetur, at iaculis orci cursus. Nunc sagittis tellus nec nisi lacinia mattis sit amet sit amet lectus. Pellentesque tortor odio, placerat ut tortor sit amet, volutpat mattis risus. 
				</div>
			</div>
			<div class="row" id="seniors" name="seniors">
				<br>
				<h1>S&#233;niors</h1>
				<hr>
				<div class="col-lg-12">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas nisi nulla, sed dictum libero bibendum ut. Mauris consequat a quam ut euismod. Donec consectetur et mauris et blandit. Maecenas tincidunt nunc et justo blandit aliquet. Phasellus eget massa iaculis, facilisis velit sed, egestas ligula. Sed fringilla in tellus quis aliquam. Curabitur in nulla vulputate massa imperdiet pellentesque. Mauris pellentesque bibendum magna. Donec fermentum odio velit. Pellentesque aliquet diam non interdum congue. Donec congue porta libero, vel vehicula eros. In euismod tincidunt justo sit amet vulputate.

					Ut cursus urna in quam consequat, sed egestas justo dapibus. Integer vulputate sollicitudin arcu, vel condimentum felis lacinia eget. Donec in fermentum purus. In bibendum malesuada rhoncus. Proin nec odio id risus elementum mattis. Nunc at risus quam. Ut convallis dui nec libero fermentum, nec auctor nisl placerat. Donec nisl tellus, rutrum eget ligula a, consequat tristique risus. Donec semper vitae mauris id porttitor. Suspendisse eros mauris, blandit a sem at, sodales commodo ante. Quisque vitae justo pulvinar, posuere augue sit amet, luctus ante. Praesent ut orci mauris.

					Maecenas felis metus, ornare et quam vitae, bibendum dapibus nunc. Nunc imperdiet dolor ac libero venenatis sagittis. Donec nec nisl posuere, tristique elit eu, egestas quam. Nulla leo nisi, molestie id nunc vel, rhoncus sodales urna. Nulla adipiscing porta egestas. Etiam at quam turpis. Cras at quam ipsum. Aliquam at nulla eu sem consectetur condimentum et sit amet purus.

					Suspendisse ut nunc sem. Proin suscipit ac augue a accumsan. Pellentesque pharetra, lorem sed pharetra suscipit, risus lectus aliquet nunc, in accumsan urna mi scelerisque ipsum. Mauris porttitor rutrum urna in commodo. Nam fermentum et augue sit amet lobortis. Maecenas metus nunc, aliquet quis pretium auctor, suscipit non magna. Suspendisse odio sem, commodo id pharetra nec, eleifend ac magna. Cras sed mauris at leo luctus bibendum. Phasellus fringilla, magna vitae dapibus dictum, lacus purus pellentesque nibh, non adipiscing velit sapien auctor ligula. Phasellus a nisl sed tortor consequat dictum. Integer a tincidunt lacus.

					Curabitur vestibulum, metus eget dapibus rhoncus, ante massa viverra est, id pretium massa purus at sem. Nulla erat urna, sollicitudin eu felis sed, egestas sodales arcu. Morbi felis metus, tempus eget lacinia nec, lobortis quis tortor. Duis aliquam nisi sapien, sit amet pharetra nunc iaculis quis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Cras ligula elit, elementum non bibendum ultrices, rutrum eu orci. Mauris nec nisi condimentum eros bibendum feugiat aliquet egestas sapien. Nam eget leo sed odio sagittis ultrices. In nibh metus, iaculis et varius eu, pharetra nec velit. Nullam ligula velit, commodo vel odio eget, tincidunt pharetra lorem. Aenean dapibus libero eget nunc consectetur, at iaculis orci cursus. Nunc sagittis tellus nec nisi lacinia mattis sit amet sit amet lectus. Pellentesque tortor odio, placerat ut tortor sit amet, volutpat mattis risus. 
				</div>
			</div>
		</div>
		<div id="footerwrap">
			<div class="container">
				<h4>Created by <a href="http://blacktie.co">BlackTie.co</a> - Copyright 2014</h4>
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</body>
</html>
