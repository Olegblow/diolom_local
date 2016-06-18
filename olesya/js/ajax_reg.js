//   var reg_log = { 
//         rlogin: $("#login"),
//         rpwd: $("#pwd")
//         //name: $("#fname"),
//        //phone: $("#phone"),
//         //em: $("#email")
//   };
                      

var login_pwd = {        
        
        login: $("#login"),
        pwd: $("#pwd")            
                      
    };
//alert('aaaaaa');


$(document).ready(function() { // вся мaгия пoсле зaгрузки стрaницы
    $('#ajax_reg').click( function(event){ // лoвим клик пo ссылки с id="go"
     //alert('?');

    alert(login_pwd.pwd.val());
    // alert( reg_log.rlogin. val());

    //----------//
//    $.ajax({
//    url: "regs.php",
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