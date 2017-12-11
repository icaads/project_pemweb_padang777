<!DOCTYPE html>
<html>
<head>
	<title>Administrator</title>
	<?php echo $css; ?>
</head>
<body>
	<div id="modal_admin" class="modal fade" role="dialog">
	<br><br><br><br><br><br><br><br><br><br><br>
	  	<div class="modal-dialog">
	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <h4 align='center'> Masuk sebagai: </h4>
	      </div>
	      <div class="modal-body">
	        <a href="<?php echo base_url('index.php/Admin/admin_website'); ?>"><button type="submit" class="btn btn-warning" style="width:100%;"> Administrator Website </button>
	        	<br><br>
	        <a href="<?php echo base_url('index.php/Admin/admin_database'); ?>"><button type="submit" class="btn btn-warning" style="width:100%;"> Administrator Database </button>
	      	<br><br>
	      </div>
	    </div>

	  </div>
</div>
	<?php echo $js; ?>
	<?php echo $js_modal; ?>
</body>
</html>