var login_pwd = {        
        
        login: $("#login"),
        pwd: $("#pwd")            
                      
    };


$(document).ready(function() { // вся мaгия пoсле зaгрузки стрaницы
    $('#ajax_aut').click( function(event){ // лoвим клик пo ссылки с id="go"
        //alert('?');
      //var aaa= $("#text1");
    
     $.post(
      "login.php",
      {
        //param1: "param1",
        // param2: 2
    
         login: login_pwd.login.val(),
         pass: login_pwd.pwd.val()  //

      },
    onAjaxSuccess
    );
 
    function onAjaxSuccess(data)
    {
      // Здесь мы получаем данные, отправленные сервером и выводим их на экран.
     // alert(data);
      document.location.reload();
      //alert($("text1").val());
    }

    //----------//
//    $.ajax({
//    url: "newotz.php",
//    cache: false,
//    success: function(html){
//    $("#results").append(html);
//    //alert("Отзыв успешно добавлен");
//    document.location.reload();
//    }
//    });



   // document.location.reload();


    });
    
});