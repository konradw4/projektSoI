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
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
</head>
<body>
		<header>
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
		</header>

		<section id="sek1" class="sek1">
			<div class="main">
				<h2>Nagłówek h2</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut<br/>
				labore et dolore magna aliqua. Ut enim ad minim veniam</p>
			</div>
			<video src="wp-content/themes/twentysixteen/images/office.mp4" autoplay loop></video>
		</section>

		<span id="arrow-down">
			<a href="#sek2"><img src="wp-content/themes/twentysixteen/images/Arrow-Down-icon.png" alt="arrow" /></a>
		</span>

		<section id="sek2" class="sek2">
			<div class="main">
				<h2>Firma</h2>
				<div class="contentdiv">
					<img src="wp-content/themes/twentysixteen/images/obrazek.jpg" />
					<h3>Nagłówek h3</h3>
					<article>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
						labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
						nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
						velit esse cillum dolore eu fugiat nulla pariatur.
					</article>
					<button type="button" name="button">Przycisk</button>
				</div>
				<div class="contentdiv">
					<img src="wp-content/themes/twentysixteen/images/obrazek.jpg" />
					<h3>Nagłówek h3</h3>
					<article>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
						labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
						nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
						velit esse cillum dolore eu fugiat nulla pariatur.
					</article>
					<button type="button" name="button">Przycisk</button>
				</div>
				<div class="contentdiv">
					<img src="wp-content/themes/twentysixteen/images/obrazek.jpg" />
					<h3>Nagłówek h3</h3>
					<article>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
						labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
						nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
						velit esse cillum dolore eu fugiat nulla pariatur.
					</article>
					<button type="button" name="button">Przycisk</button>
				</div>
			</div>
		</section>

		<section id="sek3"></section>
		<section id="sek4"></section>
		<section id="sek5"></section>

		<div class="navPoints">
			<nav>
				<ul>
					<li><a href="#sek1">Section 1</a></li>
					<li><a href="#sek2">Section 2</a></li>
					<li><a href="#sek3">Section 3</a></li>
					<li><a href="#sek4">Section 4</a></li>
					<li><a href="#sek5">Section 5</a></li>
				</ul>
			</nav>
		</div>

</body>
</html>
