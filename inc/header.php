<?php 
date_default_timezone_set('America/Los_Angeles');
include($path . "login/members-page.php");
include($path . "login/header.php");
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Colorama Online</title>
    <link rel="stylesheet" href="/css/foundation.css" />
    <link rel="stylesheet" type="text/css" href="/css/user_styles.css">
    <link rel="stylesheet" type="text/css" href="/css/foundation-icons.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    
  </head>
  <body>

	<nav class="top-bar margin_push_bot" data-topbar role="navigation">
	  <ul class="title-area">
	    <li class="name">
	      <h1><a href="#">Colorama Organics</a></h1>
	    </li>
	     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
	    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
	  </ul>

	  <section class="top-bar-section">
	    <!-- Right Nav Section -->
	    <ul class="right">
	      <li><a href="#">Home</a></li>
	      <li><a href="/login/logout.php">Logout</a></li>
	    </ul>
	  </section>
	</nav>