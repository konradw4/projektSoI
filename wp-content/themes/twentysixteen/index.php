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
				<img src="wp-content/themes/twentysixteen/images/logo.png" alt="Sointeractive" />
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
			<div>
				<h2>Nagłówek h2</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut<br/>
				labore et dolore magna aliqua. Ut enim ad minim veniam</p>
			</div>
			<video src="wp-content/themes/twentysixteen/images/office.mp4" autoplay loop></video>
		</section>

		<section id="sek2"></section>
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
