<?php

ob_start("compress");
  
  header("Content-type: text/css; charset: UTF-8");
	
	## DECLARE EXECUTED CSS FROM PARENT FILE	
  $css = $_GET['css'];

	function compress($buffer) {
		# REMOVE CSS COMMENTS
		$buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);
		# REMOVE TABS, SPACES, NEWLINES
		$buffer = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $buffer);
		
		return $buffer;
	}
	
	## START IMPORTING & COMPRESSING
	
	# SCAFFOLDING
	include('scaffolding.css');
	
	# BASE CSS
	include('base.css');
	
	# CORE
	include('core.css');

	# VECTOR ICONS
	include('elusive-webfont.css');


	## BELOW THIS LINE IS OPTIONAL

	# COMPONENTS
	# include('components.css');

	# JS COMPONENTS
	# include('jscomponents.css');

	# MISCELLANEOUS
	include('misc.css');

	## BELOW THIS LINE IS BASE ON PAGE CONDITION

	# CSS HOME
	if($css=='home') {
		include ('home.css');
	} elseif($css=='page') {
		include ('page.css');
	}

	## IF RESPONSIVE CSS IS ENABLE IT MUST BE AT THE LAST
	## RULE TO OVERRIDE STYLES

	# RESPONSIVE CSS
	include('@media480.css');
	include('@media767.css');
	include('@media979.css');
	include('@media1200.css');
	
	# COMBINED MEDIA FILES
	include('responsive.css');

ob_end_flush();

?>