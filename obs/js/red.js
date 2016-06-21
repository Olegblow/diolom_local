$(document).ready(function() { // вся мaгия пoсле зaгрузки стрaницы
    $('.add_news').click( function(event){ // лoвим клик пo ссылки с id="go"



    });





// работа с блоком новостей //
	var state = false;
	var state1 =false;

$('#news').click(function(){

	if(state==false) {
  $('.dei2').slideDown('fast', function() {
  	  state = true;

   }); 
} else {

	  $('.dei2').slideUp('fast', function() {
	  		  state= false;

	}); 
}

});

$('#modal_close').click(function(){
	$('.dei2').css('display', 'none')
		state= false;

});

//-------------члены палаты
$('#mem').click(function(){

	if(state1==false) {
  $('.dei3').slideDown('fast', function() {
   }); 
  state1 = true;
} else {

	  $('.dei3').slideUp('fast', function() {
	}); 
	  state1= false;
}

});

$('#modal_close1').click(function(){
	$('.dei3').css('display', 'none')
		state1= false;

});



});