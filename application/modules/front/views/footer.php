
</div> <!-- row awal -->

 <a class='glyphicon glyphicon-comment' id='linkchat'></a>
	 <div class='chat'>
	  <div style='width:100%;height:30px;background:#c0c0c0;margin:0px;'>
	   <i class='glyphicon glyphicon-remove' style='padding:7px;background:#3653E4;' id='close_chats'></i>
	   <i class='glyphicon glyphicon­pencil' style='padding:7px;background:#3653E4;' id='clear_chats'></i>
	  </div>
	 	<ul class='table' style="margin-top:5px;border:0px solid;padding-left:5px;height:80%">
	 	 <li class='bg_info'>
	 	  <i style='background:#3653E4;height:30px;float:left;margin-right:5px;'><?=img(array('src'=>'assets/images/help.png','width'=>'30px','height'=>'30px'))?></i>
	 	  <div class='list_chats' style='float:left;border:0px solid;width:85%;'>Selamat datang??Kami Siap membantu !!</div>
	 	 </li>
	 	 <li class='bg_info'>
	 	  <i style='background:#3653E4;height:30px;float:left;margin-right:5px;'><?=img(array('src'=>'assets/images/help.png','width'=>'30px','height'=>'30px'))?></i>
	 	  <div class='list_chats' style='float:left;border:0px solid;width:85%;'>masukkan nama Anda dan mulai chatting !!</div>
	 	 </li>
	 	</ul>
		<input name='text_chat' style='width:100%;' placeholder='masukkan text'/>
	 </div>
<body>

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
	$('.chat').hide();
	$('#linkchat,#bchat').click(function(){
	 $('.chat').show('slide');
	 $('#linkchat').hide('slowly');
	});
	$('#close_chats').click(function(){
	 $('.chat').hide('fade');
	 $('#linkchat').show('bounce');
	});
 </script>
