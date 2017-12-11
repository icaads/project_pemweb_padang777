<section>
<div class="container">
	<div class="row">
		<div class="col-md-12 col-md-offset-3">
        <hgroup>
          <h3>
          <?php echo $css; echo $js; ?>
            Masukan Virtual Account dan Jumlah Saldo yang ingin diisi
          </h3>
          <h1 class="free">Top Up Padang Cash</h1>
         </hgroup>
    	 <div class="inline">
             <?php echo form_open('Dummy'); ?>
              <div class="input-group" style="display: inline">
                 <input class="btn btn-lg" name="virtualaccount" id="va" type="text" placeholder="Virtual Account" required>
              </div>
              <div class="input-group" style="display: inline">
                 <input class="btn btn-lg" name="saldo" id="saldo" type="email" placeholder="Saldo" required>
                 
              </div>
              <button class="btn btn-info btn-lg" type="submit">Submit</button>
             </form>
	</div>
</div>
</section>