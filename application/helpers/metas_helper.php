<?php
 function metas($data=array()){
	foreach($data as $r){
		$def_meta=$r->default_meta;
		$fb_meta=$r->fb_meta;
		$twt_meta=$r->twt_meta;
		 //print the metas
		 get_default_meta($def_meta);
		 get_fb_meta($fb_meta);
	}
	

	/*
	$data=array(
		'title'=>'this is title',
		'description'=>'this is description',
		'keywords'=>'this is keywords',
		'author'=>'this is author',
		'robots'=>'this is robots',
		
	);
	$data=array(
		'og_title'=>'this is title',			// title ini akan muncul jika content di share menggunakan facebook;
		'og_type'=>'website',			// type ini yang menentukan bagaimana tampilan posting saat dishare;
		'og_image'=>'image.png',			// image ini ditampilkan saat facebook meload url yang dimasukkan;
		'og_url'=>'http://localhost',				// url ini akan muncul setelah judul pada content share facebook;
		'og_site_name'=>'kios27',		// untuk sitename hindarkan menulis dengan ".com/id/etc" usahakan jangan menggunakan extensi domain, cukup nama websitenya saja, ex "kios27"
		'og_description'=>'this is description'
		);
	$data=array(
		'twitter_card'=>'this is title',			//
		'twitter_url'=>'this is title',			//
		'twitter_title'=>'this is title',			// kurang lebih hampir sama dengan fb meta hanya saja ini berfungsi jika disebarkan lewat twitter.
		'twitter_description'=>'this is title',	//
		'twitter_image'=>'this is title'			//
	);
	echo json_encode($data);*/
	
 }
 
 function get_fb_meta($meta=array()){
		$k=json_decode($meta);		
			echo '	
					<meta name="og:title" content="'.$k->og_title.'" />
					<meta name="og:type" content="'.$k->og_type.'" />
					<meta name="og:image" content="'.$k->og_image.'" />
					<meta name="og:url" content="'.$k->og_url.'" />
					<meta name="og:site-name" content="'.$k->og_site_name.'" />
					<meta name="og:description" content="'.$k->og_description.'" />
				';
		
	}
 
 function get_default_meta($meta=array()){
		$k=json_decode($meta);		
			echo '	<title>'.$k->title.' - kios27</title>
					<meta name="description" content="'.$k->description.'" />
					<meta name="keywords" content="'.$k->keywords.'" />
					<meta name="author" content="'.$k->author.'" />
					<meta name="robots" content="'.$k->robots.'" />
				';
		
	}


?>