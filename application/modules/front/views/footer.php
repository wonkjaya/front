
</div> <!-- row awal -->

 <a class='glyphicon glyphicon-comment' id='linkchat'></a>
	 <div class='chat'>
	  <div style='width:100%;height:30px;background:#c0c0c0;margin:0px;'>
	   <i class='glyphicon glyphicon-remove' style='padding:7px;background:#3653E4;'></i>
	  </div>
	 	<ul class='table' style="margin-top:5px;border:0px solid;">
	 	 <li class=''>
	 	  <i style='background:#3653E4;height:30px;'><?=img(array('src'=>'assets/images/help.png','width'=>'30px','height'=>'30px'))?></i>
	 	  <div class='list_chats'></div>
	 	 </li>
	 	</ul>
	 </div>
<body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
 <script>
  	$( window ).resize(function() {
	  change_position('#linkchat');
	});
	function change_position(id){
	 var width = document.getElementById('body').offsetWidth;
	  if(width <= 992){
	  	$(id).attr('style','top:0px');
	  }else{
	  	$(id).attr('style','top:20%');
	  }
	}
 </script>
