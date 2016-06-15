
 //   $login  ='qqqq';
//    $name   ='qqqq';
//    $phon   ='1488';
//    $em     ='qqq';
//    $pwd    ='qqq';

$(document).ready(function() { // вся мaгия пoсле зaгрузки стрaницы
    $('#ajax').click( function(event){ // лoвим клик пo ссылки с id="go"
      //  alert('?');
      var aaa= $("#text1");
      //alert(aaa.val());


    $.post(
  "addp.php",
  {
    //param1: "param1",
    // param2: 2
    
    text: aaa.val()   

  },
  onAjaxSuccess
);
 
function onAjaxSuccess(data)
{
  // Здесь мы получаем данные, отправленные сервером и выводим их на экран.
  // alert(data);
  //alert($("text1").val());
}

$.ajax({
  url: "newotz.php",
  cache: false,
  success: function(html){
    $("#results").append(html);
  }
});






    });
    
});