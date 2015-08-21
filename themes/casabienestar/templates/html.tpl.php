<?php
/**
 * @file
 * Returns the HTML for the basic html structure of a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728208
 */
?><!DOCTYPE html>
<!--[if IEMobile 7]><html class="iem7" <?php print $html_attributes; ?>><![endif]-->
<!--[if lte IE 6]><html class="lt-ie9 lt-ie8 lt-ie7" <?php print $html_attributes; ?>><![endif]-->
<!--[if (IE 7)&(!IEMobile)]><html class="lt-ie9 lt-ie8" <?php print $html_attributes; ?>><![endif]-->
<!--[if IE 8]><html class="lt-ie9" <?php print $html_attributes; ?>><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)]><!--><html <?php print $html_attributes . $rdf_namespaces; ?>><!--<![endif]-->

<head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>

  <?php if ($default_mobile_metatags): ?>
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriendly" content="true">
    <meta name="viewport" content="width=device-width">
  <?php endif; ?>
  <meta http-equiv="cleartype" content="on">

  <?php print $styles; ?>
  <!-- Web Fonts-->
  <link href="http://fonts.googleapis.com/css?family=Varela+Round|Roboto:400italic,300,700,400" rel="stylesheet" type="text/css"><!--[if IE ]>
  <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <?php print $scripts; ?>
</head>
<body >
<div id="fb-root"></div>
  <div class="up">
    <svg id="btn-up" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
       viewBox="0 0 336 280" xml:space="preserve">

    <path fill="#15206a" d="M144.852,154.111c2.479,2.5,6.497,2.5,8.975,0l14.645-14.51l14.645,14.51c2.479,2.5,6.497,2.5,8.976,0
      c2.479-2.499,2.479-6.553,0-9.053l-19.004-19.168c-1.238-1.25-2.862-1.875-4.487-1.875c-0.043,0-0.085,0.012-0.129,0.012
      c-0.043,0-0.086-0.012-0.129-0.012c-1.624,0-3.247,0.625-4.487,1.875l-19.003,19.168
      C142.372,147.559,142.372,151.612,144.852,154.111z"/>
    </svg>


  </div>

  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
