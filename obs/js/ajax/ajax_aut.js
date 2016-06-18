var login_pwd = {        
        
        login: $("#login"),
        pwd: $("#pwd")            
                      
    };


$(document).ready(function() { // вся мaгия пoсле зaгрузки стрaницы
    $('#ajax_aut').click( function(event){ // лoвим клик пo ссылки с id="go"
      //  alert('?');
    
     $.post(
      "php/login.php",
      {
            
         login: login_pwd.login.val(),
         pass: login_pwd.pwd.val()  //

      },
    onAjaxSuccess
    );
 
    function onAjaxSuccess(data)
    {
      
    // alert(data);

      document.location.reload();
      
    }


    });
    
});