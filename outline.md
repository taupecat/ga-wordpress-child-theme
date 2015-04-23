## About Me

* Lead Web Developer, RP3
* Front-end Architect
* WordPress Core Contributor
* Email, Twitter, GitHub

## About WordPress

* Fully-featured CMS Platform
* Powers 23% of the Internet
* Show RP3 WordPress Projects

## Class Agenda

* Installation
	* [MAMP](https://www.mamp.info/en/)
	* [WordPress Core](https://wordpress.org/) & Development Plugins
	* [Theme Unit Test](https://codex.wordpress.org/Theme_Unit_Test)
* Explore the file structure of a default theme
	* [Template hierarchy](http://codex.wordpress.org/Template_Hierarchy)
	* Key files
		* [style.css](https://codex.wordpress.org/Theme_Development#Theme_Stylesheet)
		* [functions.php](https://codex.wordpress.org/Functions_File_Explained)

## Why a child theme?

* Building a child theme will introduce us to key WordPress development characteristics without having to deal with all the intracacies that go along with developing from scratch. Think of it as "developing with a net."
* Certain popular frameworks operate under a child theme model; you purchase the theme framework and build child themes to operate on top of them.
* It's a digestable task for a two hour class.

## Installation

1. Install and run MAMP
1. Create database via **phpMyAdmin** called "wordpress"
1. Extract wordpress.zip archive and place files in MAMP/htdocs
1. Go to http://localhost:8888/ in your web browser and follow the WordPress installation instructions
	* Database Name: **wordpress**
	* User Name: **root**
	* Password: **root**
	* Table Prefix: **wp_**
1. Install and activate the following plugins:
	* [Show Template](https://wordpress.org/plugins/show-template/)
	* [Debug Bar](https://wordpress.org/plugins/debug-bar/)
	* [Theme Check](https://wordpress.org/plugins/theme-check/)
	* [WordPress Importer](https://wordpress.org/plugins/wordpress-importer/)
1. Import the [Theme Unit Test](https://codex.wordpress.org/Theme_Unit_Test)

## Activate Twenty Thirteen

Admin -> Appearance -> Themes

## Turn on WP_DEBUG

* Open "wp-config.php"
* Change WP_DEBUG to true, then add the following lines:

	define('WP_DEBUG_DISPLAY', false);
	define('WP_DEBUG_LOG', true);

## Create the Child Theme Directory

* `wp-content/themes/ga`

## Child Themes Need ONE Thing

* `style.css`

1. Template Hierarchy
1. WordPress Loop
1. Next Steps



## Goals of the Class

* Proper CSS & JS enqueuing
* Altering parent theme behavior via a child theme
* Understanding template hierarchy
* Where to go for help (Codex, function reference, support forum)
