$(document).ready(function() { // вся мaгия пoсле зaгрузки стрaницы
    $('.go').click( function(event){ // лoвим клик пo ссылки с id="go"


    	$( '.bold' ).on( 'click', function() {
   			document.execCommand( 'bold', null, null ); 
		});
       var title = '<H1>'+ $('.title').val() +'</H1>';
alert(title);


    });
});