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
		echo $navbar_guest;
	}
	else{
		echo $navigation;
	}
	echo $about;
	echo $footer;
?>
</body>
</html>