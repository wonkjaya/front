<html>
<style>
.row *{
 border:0px solid;
 font-family: 'Open Sans', Segoe UI light, Tahoma,Helvetica,sans-serif;
}
.col-md-4 h1:hover{color:#F90;cursor:pointer;}
.col-md-4 h1{color:#FFF;}
.col-md-4 h2{color:#FFF;font-size:20px;text-indent:45px;}
.menu{width:100px;color:#FFF;height:100px;float:right;text-align:center;margin-left:2px;background:#4E0098;border:1px solid #47414C;padding: 2px 15px;}
.menu:hover{background:#6211B0;}
#active{background:#F90;}
.menu img{height:40px;width:40px;margin:17px 14px;}
.li{height:30px;font-size:20px;}
</style>
<head>
 <title><?php if(isset($title))echo $title; else echo "untitle";?></title>
 <?php echo link_tag('assets/css_file/bootstrap.min.css'); ?>
 <?php echo link_tag("assets/css_file/style.css"); ?>
 <link rel="icon" type="image/x-icon" href="<?=base_url('assets/images/icon.png')?>">
</head>
	   <?php 
	   $data=array("src"=>'assets/images/logo.png',
				   "class"=>'img img-circle',
				   'width'=>'50px','height'=>'50px',
				   'style'=>'margin-top: -15px;'
				   );
	    ?>
<body>
 <div class="row" style="background:#470E7C;min-height:110px;">
  <div class="col-xs-12 col-md-12">
	<div class="row">
	  <div class="col-md-2"> </div>
	  <div class="col-md-4">
	   <h1 style="font-family: 'Open Sans', Segoe UI light, Tahoma,Helvetica,sans-serif;font-size:50px;">
		<?=img($data);?>KIOS 27</h1>
		<h2>Buat Toko Online Terpercaya Itu Mudah!!</h2>
	  
	  </div>
	  <div class="col-md-6">
		<div class="row">
		  <div class="col-md-8">
			<div class='menu' id="active" active>
			 <?=img('assets/images/help.png')?>
			 <span class='center'>HELP</span>
			</div>
			<div class='menu'>
			 <?=img('assets/images/blog.png')?>
			 <span class='center'>BLOG</span>
			</div>
			<div class='menu'>
			 <?=img('assets/images/store.png')?>
			 <span class='center'>SHOP LIST</span>
			</div>
			<div class='menu'>
			 <?=img('assets/images/home.png')?>
			 <span class='center'>HOME</span>
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </div>
 </div>
</div>
 


