<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8" style="margin-top:5px;">
	<div class="row">
	  <div class="col-md-12" style="margin-top:5px;text-align:center;">`
		<div class="jumbotron" style="padding:10px;">
		  <h1>SIGN UP!!</h1>
		  <h3 class='text-left'>Masukkan Sesuai Kolom yang disediakan:</h3>
		  <?=form_open()?>
			<table class='table' style='width:70%'>
			 <tr>
				<td></td>
				<td style="color:red"><?php if($error != '') echo 'ERROR : '.$error;?></td>
			 </tr>
			 <tr>
				<td>NAMA LENGKAP</td>
				<td><?=form_input('name','','style="width:100%;" class="form-control"')?></td>
			 </tr>
			 <tr>
				<td>ALAMAT</td>
				<td><?=form_input('address','','style="width:100%;" class="form-control"')?></td>
			 </tr>
			 <tr>
				<td>KOTA</td>
				<td><?=form_dropdown('country',array('mlg'=>'malang','jbr'=>'jember'),'','style="width:100%;" class="form-control"')?></td>
			 </tr>
			 <tr>
				<td>KODE POS</td>
				<td><?=form_input('postal_code','','style="width:100%;" class="form-control"')?></td>
			 </tr>
			 <tr>
				<td>URL STORE</td>
				<td><?=form_input('subdomain','','style="width:50%;float:left;text-align:right;" class="form-control"').
					form_dropdown('',array('kios27.com'),'','class="form-control" style="width:50%;"')?></td>
			 </tr>
			 <tr>
				<td>USERNAME</td>
				<td><?=form_input('username','','style="width:100%;" class="form-control"')?></td>
			 </tr>
			 <tr>
				<td>PASSWORD</td>
				<td><?=form_password('password','',' class="form-control"') ?></td>
			 </tr>
			 <tr>
				<td>CONFIRM</td>
				<td><?=form_password('confirm','','class="form-control"')?></td>
			 </tr>
			 <tr>
				<td>CAPTCHA</td>
				<td><?php echo ucfirst($captcha).'. Berapa nilai (...) disamping?'.br().
					form_input('captcha','','style="width:100%;" class="form-control"')?></td>
			 </tr>
			 <tr>
				<td></td>
				<td><h2 class='btn btn-primary btn-lg active' id='signup'>DAFTAR</h2>
				</td>
			 </tr>
			</table>
			<?=form_close()?>
		   
		</div>
	  </div>
	</div>
  
  </div>
  <div class="col-md-2"></div>
</div>
