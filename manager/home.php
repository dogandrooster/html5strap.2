<? 
	$root = '1';
	require_once "_control.php";
	require_once "_inheritance.php";
?>
<!doctype html>
<!--[if lte IE 8]><html class="msie no-js" lang="en"><![endif]-->
<!--[if gte IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">
<title>HTML5 Framework</title>
<meta name="description" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="shortcut icon" href="assets/images/ico/favicon.ico">
<link rel="stylesheet" href="assets/css/strap.css.php?css=<?=$css?>">
<!-- <link rel="stylesheet" href="assets/css/responsive.css"> -->
<?=emptyblock('head');?>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="assets/js/modernizr.js"></script>
</head>
<body>
<div class="wrap header">
	<header>
		<a id="hdr-logo" href="#" title="go back to Homepage"></a>
		<button type="button" class="media-btn btn">
			<i class="icon-align-justify"></i>
		</button>
		<nav>
			<ul>
				<li><a href="index.php" title="Home">Home</a></li>
				<li><a href="page.php" title="Page">Sample Page</a></li>
				<li><a href="http://phpti.com/" title="PHP Template Inheritance">PHP Inheritance</a></li>
				<li><a href="http://twitter.github.com/bootstrap/" title="Twitter Bootstrap">Bootstrap</a></li>
				<li><a href="http://aristath.github.com/elusive-iconfont/" title="Elusive Web Icons/Fonts">Elusive WebFont</a></li>
				<li><a href="http://css-tricks.com/css-variables-with-php/" title="CSS Variable with PHP">CSSTricks CSS & PHP</a></li>
			</ul>
		</nav>
	</header>
</div>
<!--/ HEADER -->
<div class="wrap content">
	<div id="main" class="clearfix">
	<?=emptyblock('content');?>
	</div>
</div>
<!--/ CONTENT -->
<div class="wrap footer">
	<footer class="clearfix">
		<ul class="unstyled">
			<li class="pull-left">Copyright 2013. DNR Team by M.Rivera & R.Hilton</li>
			<li class="pull-right">All Rights Reserved.</li>
		</ul>
	</footer>
</div>
<!--/ FOOTER -->
<!-- INT/EXT JAVASCRIPT -->
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/plugins.js"></script>
<!--[if (gte IE 6)&(lte IE 8)]>
<script src="assets/js/selectivizr.min.js"></script>
<![endif]-->
<?=emptyblock('script');?>
</body>
</html>