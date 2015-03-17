<head>
 <?php echo link_tag('assets/css_file/bootstrap.min.css'); ?>
 <?php echo link_tag("assets/css_file/style.css"); ?>
 <link rel="icon" type="image/x-icon" href="<?=base_url('assets/images/icon.png')?>">
 <script src="<?=base_url('assets/js_file/jquery.js')?>">//http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js</script>
 <?=metas($metadatas)?><?php //print_t($metadatas);?>
<title>Login Member - kios27</title>
</head>
<body>
	<div class="row">
	  <div class="col-md-4">&nbsp;</div>
	  <div class="col-md-4" style='padding-top:10%'>
	   <div class='text-center' style='background:blue;color:white;font-size:20px;padding:10px 0px;'> Login Member</div><br/>
	  	<form class="form-horizontal" method='POST'>
		  <div class="form-group">
		    <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
		    <div class="col-sm-10">
		      <input type="text" name='userkios' class="form-control" id="inputEmail3" placeholder="Username">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
		    <div class="col-sm-10">
		      <input type="password" name='passkios' class="form-control" id="inputPassword3" placeholder="Password">
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <div class="checkbox">
			<label>
			  <input type="checkbox"> Ingatkan Saya!
			</label><br/><br/>
			Tidak punya akun? <?=anchor('front/signup','daftar')?>
		      </div>
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" class="btn btn-default">Sign in</button>
		    </div>
		  </div>
		</form>
	  </div>
	  <div class="col-md-4">&nbsp;</div>
	</div>
</body>
