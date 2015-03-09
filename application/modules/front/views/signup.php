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
				<th>NAMA LENGKAP</th>
				<td><?=form_input('name','','style="width:100%;"')?></td>
			 </tr>
			 <tr>
				<th>ALAMAT SEKARANG</th>
				<td><?=form_input('address','','style="width:100%;"')?></td>
			 </tr>
			 <tr>
				<th>KOTA SEKARANG</th>
				<td><?=form_dropdown('country',array('mlg'=>'malang','jbr'=>'jember'),'style="width:100%;"')?></td>
			 </tr>
			 <tr>
				<th>KODE POS</th>
				<td><?=form_input('postal_code','','style="width:100%;"')?></td>
			 </tr>
			 <tr>
				<th>URL STORE</th>
				<td><?=form_input('subdomain','','style="width:50%;text-align:right;"').form_label(' .kios27.com')?></td>
			 </tr>
			 <tr>
				<th>USERNAME</th>
				<td><?=form_input('username','','style="width:100%;"')?></td>
			 </tr>
			 <tr>
				<th>PASSWORD</th>
				<td><?=form_password('password','','style="width:40%;"').nbs(2).form_label('Confirm ').nbs(2).form_password('confirm','','style="width:40%;"')?></td>
			 </tr>
			 <tr>
				<th>CAPTCHA</th>
				<td><?=form_label(str_replace('-','+',date('d-m-y')).' =').nbs(2).form_input('captcha','','style="width:40%;"')?></td>
			 </tr>
			</table>
			<?=form_close()?>
		  <h2 class='btn btn-primary btn-lg active' id='signup'>DAFTAR</h2>
		  <h2 class='btn btn-warning btn-lg active' id='shop_list'>LIHAT TOKO LAIN</h2>
		</div>
	  </div>
	</div>
  
  </div>
  <div class="col-md-2"></div>
</div>
<script>
 $('#signup').click(function(){
	$('form').submit();
 });
</script>