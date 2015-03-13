/*
 function is required jquery.js file;
*/

//for sms compose and reply

  $('#submit').click(function(){
	$('#form_compose').submit()  
  });
 function norec(){
	$('#pesan_text').val("rohman");
 }
 
 function add_penerima(){
   $('#penerima').append('<br /><input name="pengirim[]" style="width:90%;margin-top:2px;" id="autocomplete"/>');
  }
  
 $('#signup').click(function(){
	$('form').submit();
 });
  
 $('#login').click(function(){
	document.location="index.php/front/login_member";
 });
 
 // for chat window
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
