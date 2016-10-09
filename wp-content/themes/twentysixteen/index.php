<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Strona projekt1</title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<!-- <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" /> -->
	<link rel="stylesheet" href="wp-content\themes\twentysixteen\css\style.css">
	<link rel="stylesheet" href="wp-content\themes\twentysixteen\css\fontello.css">
	<link rel="stylesheet" href="wp-content\themes\twentysixteen\bower_components\bootstrap\dist\css\bootstrap.min.css">

</head>
<body>
		<header>
			<div class="container menu">
				<h1>
					<a href="#sek1"><img src="wp-content/themes/twentysixteen/images/logo.png" alt="Sointeractive" /></a>
				</h1>
				<nav>
					<ul>
						<li><a href="">strona1</a></li>
						<li><a href="">strona2</a></li>
						<li><a href="">strona3</a></li>
						<li><a href="">strona4</a></li>
						<li><a href="">strona5</a></li>
					</ul>
				</nav>
			</div>

			<div class="container-fluid ham">
				<div class="ham_icon">
					<i class="demo-icon icon-menu"></i>
				</div>
				<h1>
					<a href="#sek1"><img src="wp-content/themes/twentysixteen/images/logo.png" alt="Sointeractive" /></a>
				</h1>
			</div>
			<div class="ham_menu">
				<div class="col-md-6 col-sm-6 col-xs-6">
					<ul class="ham">
						<a href=""><li>strona 1</li></a>
						<a href=""><li>strona 2</li></a>
						<a href=""><li>strona 3</li></a>
						<a href=""><li>strona 4</li></a>
						<a href=""><li>strona 5</li></a>
					</ul>
				</div>
			</div>
		</header>

		<section id="sek1" class="sek1">
			<div id="myCarousel" class="carousel slide main1 container" data-ride="carousel">
			  <div class="carousel-inner row" role="listbox">
			    <div class="item active">
						<h2>Kasztelan</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
						labore et dolore magna aliqua. Ut enim ad minim veniam</p>
			    </div>

			    <div class="item">
						<h2>Warka</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut<br/>
						labore et dolore magna aliqua. Ut enim ad minim veniam</p>
			    </div>

			    <div class="item">
						<h2>Muszynianka</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut<br/>
						labore et dolore magna aliqua. Ut enim ad minim veniam</p>
			    </div>
			  </div>

				<div class="row">
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>
				</div>

			</div>
			<video src="wp-content/themes/twentysixteen/images/office.mp4" autoplay loop></video>
			<!-- <a href="#sek2" class="arrow-down">
				<div class="arrow-down-btn">

				</div>
			</a> -->
		</section>

		<section id="sek2" class="sek2">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-8 col-xs-offset-2">
						<h2>Firma</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-8 col-xs-offset-2 firma_element">
						<img src="wp-content/themes/twentysixteen/images/obrazek.jpg" />
						<h3>Nagłówek h3</h3>
						<article>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
							labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
							nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
							velit esse cillum dolore eu fugiat nulla pariatur.
						</article>
						<button type="button" class="btn btn-success">Przycisk</button>
					</div>
					<div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-8 col-xs-offset-2 firma_element">
						<img src="wp-content/themes/twentysixteen/images/obrazek.jpg" />
						<h3>Nagłówek h3</h3>
						<article>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
							labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
							nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
							velit esse cillum dolore eu fugiat nulla pariatur.
						</article>
						<button type="button" class="btn btn-success">Przycisk</button>
					</div>
					<div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-8 col-xs-offset-2 firma_element">
						<img src="wp-content/themes/twentysixteen/images/obrazek.jpg" />
						<h3>Nagłówek h3</h3>
						<article>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
							labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
							nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
							velit esse cillum dolore eu fugiat nulla pariatur.
						</article>
						<button type="button" class="btn btn-success">Przycisk</button>
					</div>
				</div>
			</div>
		</section>

		<section id="sek3" class="sek3">
			<div class="container">

				<div class="row rn">
					<div class="col-md-10 col-md-offset-1 col-sm-4 col-sm-offset-2">
						<h2>Oferta</h2>
					</div>
				</div>

				<div class="row rn">
					<div class="col-md-4 col-md-offset-1 col-sm-4 col-sm-offset-2">
						<div class="productImg">
							<img src="wp-content/themes/twentysixteen/images/ide.jpg" />
						</div>
						<h3>Produkt 1</h3>
						<article>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
							labore et dolore magna aliqua.
						</article>
					</div>
					<div class="col-md-4 col-md-offset-1 col-sm-4 col-sm-offset-2">
						<div class="productImg">
							<img src="wp-content/themes/twentysixteen/images/obrazek.jpg" />
						</div>
						<h3>Produkt 2</h3>
						<article>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
							labore et dolore magna aliqua.
						</article>
					</div>
				</div>

				<div class="row rn">
					<div class="col-md-4 col-md-offset-1 col-sm-4 col-sm-offset-2">
						<div class="productImg">
							<img src="wp-content/themes/twentysixteen/images/obrazek.jpg" />
						</div>
						<h3>Produkt 3</h3>
						<article>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
							labore et dolore magna aliqua.
						</article>
					</div>
					<div class="col-md-4 col-md-offset-1 col-sm-4 col-sm-offset-2">
						<div class="productImg">
							<img src="wp-content/themes/twentysixteen/images/camera.jpg" />
						</div>
						<h3>Produkt 4</h3>
						<article>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
							labore et dolore magna aliqua.
						</article>
					</div>
				</div>

			</div>
		</section>

		<section id="sek4" class="sek4">
						<div id="map"></div>
						<div class="info_box">
							<h3>Sointeractive</h3>
							<p>
								adres siedziby.
							</p>
						</div>
		</section>

		<div class="navPoints menu">
			<nav>
				<ul>
					<li><a href="#sek1">Section 1</a></li>
					<li><a href="#sek2">Section 2</a></li>
					<li><a href="#sek3">Section 3</a></li>
					<li><a href="#sek4">Section 4</a></li>
				</ul>
			</nav>
		</div>

		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB4mQOVnUq-g7wemS2NcbSehF63xFLw87w&callback=initMap"></script>
		<script type="text/javascript" src="wp-content\themes\twentysixteen\bower_components\jquery\dist\jquery.min.js"></script>
		<script type="text/javascript" src="wp-content\themes\twentysixteen\bower_components\bootstrap\dist\js\bootstrap.min.js"></script>
		<script type="text/javascript" src="wp-content\themes\twentysixteen\js\map.js"></script>
		<script type="text/javascript" src="wp-content\themes\twentysixteen\js\main.js"></script>
</body>
</html>
