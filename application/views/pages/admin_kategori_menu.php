<!DOCTYPE html>
<html>
<head>
	<title> Administrator Database - Kategori Menu </title>
	<?php echo $css_crud; ?>
	<?php echo $css; ?>
</head>
<body>
	<?php echo $navigation_admin_database; ?>
	<br>
	<div class="container-fluid">
		<div style="border-bottom: 3px solid rgb(218, 55, 72);">
			<p style="text-align: center;"> 
				<font size="7" style="color:rgb(218, 55, 72);"> Kategori Menu </font>
				<br>
				<font size="5" color="black"> Administrator Database </font>
			</p>
		</div>
		<br>
		<div cass="row">
			<div class="col-md-12">
				<?php echo $crud['output']; ?>
			</div>
		</div>
	</div>
	<br><br>
	<?php echo $footer; ?>
	<?php echo $js; ?>
	<?php echo $js_crud; ?>
	
</body>
</html>