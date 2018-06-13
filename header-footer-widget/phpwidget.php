
<html>
<head>

<!-- JavaScript libraries of PhpFiddle Widgets -->
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<link type="text/css" href="css/1.css" rel="stylesheet">
<link type="text/css" href="css/2.css" rel="stylesheet">
<script type="text/javascript" src="//phpfiddle.org/js/codemirror5.21.1/lib/codemirror.js"></script>
<script type="text/javascript" src="//phpfiddle.org/js/codemirror5.21.1/mode/pf/allmixed.min.js"></script>
<script type="text/javascript" src="//phpfiddle.org/js/codemirror5.21.1/addon/pf/js_set.min.js"></script>
<script type="text/javascript" src="//phpfiddle.org/js/codemirror5.21.1/addon/pf/js_set_ext.min.js"></script>
<style>
img {
	float:right;
	height:0;
}

#runcode{
	margin-left:0;
	    margin-right: 157px;
}
#clearview{
	margin-left:0;
}

</style>
</head>

<body id="dev">

<!--	
	Run mixed code widget
	
	Run PHP/MySQL, HTML/CSS and JavaScript code with PhpFiddle services
	
	Widget parameters 
		widget_width_percentage from 25 to 100 in percentage, other with 60 always
		widget_height_pixels from 50 to 650 in pixels, other with 260 always 
		editor_width_percentage from 20 to 80 in percentage, other with 62 always
		eitor_placeholder with a string
	
	Keyboard shortcuts
		F8		Clear
		F9		Run
		Ctrl-Z	Undo
		Ctrl-Y	Redo
		Ctrl-[	Decrease indent ( Shift left )
		Ctrl-]	Increase indent ( Shift right )
		Alt-1	PHP autocomplete 
		Alt-2	JavaScript autocomplete
        Alt-3	MySQL autocomplete 
		Alt-4	jQuery v3.0 autocomplete	
	
	Version 
		2.0
	
	copyright
		Copyright (c) 2012-2017 PhpFiddle.org
	
	License
		http://opensource.org/licenses/MIT  The MIT License (MIT)		
-->
<table align="right">
<script src="//phpfiddle.org/deposit/widget_001.php
		?widget_width_percentage=60
		&widget_height_percentage=20
		&editor_width_percentage=60
		&editor_placeholder=Enter PHP code here..."
	type="text/javascript">
</script>
</table>

<div id="phpfiddle_widget_001" ></div>
<form action ="..\cgi_tester.py" method="GET">
	<input type="submit" value="submit">
</form>>
</body>
</html>