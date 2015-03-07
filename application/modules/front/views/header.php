<html>
<style>
.row *{
 border:0px solid;
 font-family: 'Open Sans', Segoe UI light, Tahoma,Helvetica,sans-serif;
}
.col-md-4 h1:hover{color:#F90;cursor:pointer;}
.col-md-4 h1{color:#FFF;}
.col-md-4 h2{color:#FFF;font-size:20px;text-indent:45px;}
.menu{width:100px;color:#FFF;height:100px;float:right;margin-left:2px;background:#4D197E;border:1px solid #47414C;padding: 2px 15px;}
</style>
<head>
 <title><?php if(isset($title))echo $title; else echo "untitle";?></title>
 <?php echo link_tag('assets/css_file/bootstrap.min.css'); ?>
 <?php echo link_tag("assets/css_file/style.css"); ?>
</head>
	   <?php 
	   $data=array("src"=>'assets/images/profile_pic/noimage.jpg',
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
			<div class='menu'>
			 <?=img('assets/images/favorite.png')?>
			 <span class='center'>FAVORITE</span>
			</div>
			<div class='menu'>
			 <?=img('assets/images/store.png')?>
			 <span class='center'>SHOP</span>
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
 


