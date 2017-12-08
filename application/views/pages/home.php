<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	echo $css;
	echo $js;
	if($this->session->userdata('status')=='member'){
		echo $navigation_login;
	}
	else if($this->session->userdata('status')=='guest'){
		echo $navigation_guest;
	}
	else{
		echo $navigation;
	}
	echo $slider;
	echo $popularitem;
	echo $artikel;
	echo $footer;
?>
</body>
</html>