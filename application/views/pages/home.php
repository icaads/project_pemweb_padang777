<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php $nama = $this->session->userdata('nama'); var_dump($nama);?>
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
	echo $slider;
	echo $popularitem;
	echo $artikel;
	echo $footer;
?>
</body>
</html>