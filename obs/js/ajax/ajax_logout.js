$(document).ready(function() { // вся мaгия пoсле зaгрузки стрaницы
    $('a#logout').click( function(event){ // лoвим клик пo ссылки с id="logout"
     // alert('?');


 $.ajax({
   url: "php/logout.php",
   cache: false,
   success: function(){
     
     //alert("vishli");
     document.location.reload();
   }
 });


    });
    
});