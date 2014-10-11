<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >
<?php session_start(); ?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Cache-Control" content="max-age=3600, must-revalidate" />
  <meta name="apple-mobile-web-app-title" content="City Council candidate database">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <link rel="apple-touch-icon" href="../../common/appicon_aas.jpg">
  <link rel="icon" type="image/png" href="../../common/favicon.ico">

  <meta name="apple-mobile-web-app-capable" content="yes">
  <link rel="apple-touch-icon" href="../../common/appicon_aas.jpg">
  <meta name="apple-mobile-web-app-title" content="City Council candidate database">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">

  <title>City Council candidate database | Home</title>
  <meta name="description" content="Search for the Austin City Council candidates that will run for each of the 10-1 positions, and see their fundraising totals.">
  <meta property="og:title" content="City Council candidate database"/>
  <meta property="og:description" content="Search for the Austin City Council candidates that will run for each of the 10-1 positions, and see their fundraising totals."/>
  <meta property="og:image" content="../../common/appicon_aas.jpg"/>
  <meta property="og:url" content="http://projects.statesman.com/databases/city-council-districts/"/>

 
  <link rel="stylesheet" href="../../foundation/css/normalize.css">
  <link rel="stylesheet" href="../../foundation/css/foundation.css">
  <script src="../../foundation/js/vendor/custom.modernizr.js"></script>

<?php include "../../common/metrics-head.js";?>
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52f93567099a6a05"></script>

<!-- pr0ject specific -->
	<style type="text/css">
		table {border: none; width:100%; margin-bottom: inherit;}
		table tr td {padding: 0;}
		input[type="text"] {height:inherit !important}
		form#caspioform p {font-size: 0.875rem !important;line-height: 1.125rem !important;}
	</style>
</head>

<body>

<div class="fixed">
	<nav class="top-bar" data-topbar>
		<ul class="title-area">
			<li class="name"><h1><a href="http://www.statesman.com" target="_blank"><img src="../../common/white-logo-small.png" /></a></h1></li>
            <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
		</ul>

		<section class="top-bar-section">
			<!-- Right Nav Section -->
			<ul class="right">
                <li><a href="./">SEARCH</a></li>
			</ul>
  		</section>
	</nav>
</div>


<div class="row">
	<div class="large-12 columns">
		<h1>Austin City Council candidate search</h1>
	</div>
</div>

<div class="row">
	<div class="large-8 medium-8 columns">
		<p>Use the search below to see a list of candidates who have announced for each City Council seat and their most recent campaign finance totals. Search by council seat or by typing part of a candidate's name. Leave the fields blank to see all the candidates.</p>
		<div id="cbe76c00008e60c81cb1074a3cbeb7"></div>
		<script type="text/javascript" src="http://bridge.caspio.net/scripts/e1.js"></script>
		<script type="text/javascript">try{f_cbload("e76c00008e60c81cb1074a3cbeb7","http:");}catch(v_e){;}</script>
		<div id="cxkg"><a href="http://bridge.caspio.net/dp.asp?AppKey=e76c00008e60c81cb1074a3cbeb7">Click here</a> to load this Caspio <a href="http://www.caspio.com" title="Online Database">Online Database</a>.</div>
	</div>
	<div class="large-4 medium-4 show-for-medium-up columns">
		<a href="http://www.mystatesman.com/interactive/austin-voting-districts-final/" target="_blank"><img src="smallmap.jpg"></a>
		<p><a href="http://www.mystatesman.com/interactive/austin-voting-districts-final/" target="_blank">Click here for an interactive map of the council districts</a>. For more on Austin's new 10-1 council, visit <a href="http://www.statesman.com/s/news/news/local-govt-politics/austin-city-council-districts/" target="_blank">statesman.com/councildistricts</a>.</p>
	</div>
</div>

<div class="row show-for-small-only ">
	<div class="columns">
		<a href="http://www.mystatesman.com/interactive/austin-voting-districts-final/" target="_blank"><img src="smallmap.jpg"></a>
		<p><a href="http://www.mystatesman.com/interactive/austin-voting-districts-final/" target="_blank">Click here for an interactive map of the council districts</a>. For more on Austin's new 10-1 council, visit <a href="http://www.statesman.com/s/news/news/local-govt-politics/austin-city-council-districts/" target="_blank">statesman.com/councildistricts</a>.</p>
	</div>
</div>

<hr>

<?php include "../../common/footer.php"; ?>

		<script src="../../foundation/js/vendor/jquery.js"></script>
		<script src="../../foundation/js/foundation.min.js"></script>
		<script>
			$(document).foundation();
		</script>
<?php include "search-metrics.js"; ?>
<?php include "../../common/metrics.js"; ?>
</body>
</html>