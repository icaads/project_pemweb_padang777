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
?>
<br>
<div class="container">
    <h2 class="h1 m-0">Hubungi Kami</h2>
		<p class="pb-4">Silahkan hubungi kami jika anda memiliki pertanyaan, kritik dan saran.</p>
    <div class="row">

        <div class="col-lg-5 mb-4">

            <div class="card border-dark rounded-0">

                <div class="card-header p-0">
                    <div class="bg-dark text-white text-center py-2">
                        <h3 style="color:white"><i class="fa fa-envelope"></i> Hubungi Kami:</h3>
                    </div>
                </div>
                <div class="card-body p-3">
                <? echo form_open('contactform/index');?>
                    <div class="form-group">
                        <label>Nama</label>
                        <div class="input-group">
                            <div class="input-group-addon bg-light"><i class="fa fa-user text-info"></i></div>
                            <input type="text" class="form-control" id="namalegkap" name="name" placeholder="Nama Lengkap Anda" value="<?php echo set_value('name'); ?>">
                        </div>
                        <span class="text-danger"><?php echo form_error('name'); ?></span>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <div class="input-group mb-2 mb-sm-0">
                            <div class="input-group-addon bg-light"><i class="fa fa-envelope text-info"></i></div>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email Anda" value="<?php echo set_value('email'); ?>">
                        </div>
                        <span class="text-danger"><?php echo form_error('email'); ?></span>
                    </div>
                    <div class="form-group">
                        <label>Subject</label>
                        <div class="input-group mb-2 mb-sm-0">
                            <div class="input-group-addon bg-light"><i class="fa fa-pencil text-info"></i></div>
                            <input type="text-area" class="form-control" id="subject" name="subject" placeholder="Subjek Pesan" value="<?php echo set_value('subject'); ?>">
                        </div>
                        <span class="text-danger"><?php echo form_error('subject'); ?></span>
                    </div>
                    <div class="form-group">
                        <label>Message</label>
                        <div class="input-group mb-2 mb-sm-0">
                            <div class="input-group-addon bg-light"><i class="fa fa-pencil text-info"></i></div>
                            <input type="text-area" class="form-control" id="message" name="message" placeholder="Pesan" value="<?php echo set_value('message'); ?>">
                        </div>
                        <span class="text-danger"><?php echo form_error('message'); ?></span>
                    </div>

                    <div class="text-center">
                        <button class="btn btn-info btn-block rounded-0 py-2">Submit</button>
                    </div>

                </div>
                <?php echo form_close(); ?>
                <?php echo $this->session->flashdata('msg'); ?>
            </div>


        </div>

        <?php echo $alamat ?>


    </div>

</div>

<?php
	echo $footer;
?>
</body>
</html>


