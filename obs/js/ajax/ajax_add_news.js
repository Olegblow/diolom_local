$(document).ready(function() { // вся мaгия пoсле зaгрузки стрaницы
    $('.add_news').click( function(event){ // лoвим клик пo ссылки с id="go"
      
       var titlep =  $('.title').val();
       var textp = '<pre>'+ $('.m_info').val() +'</pre>';

      // alert(title+text);
     // document.location.reload();


   $.post(
    "../php/add_news.php",
    {
       title: titlep,
      text:  textp
   

    },
    onAjaxSuccess
  );
   
  function onAjaxSuccess(data)
  {
    // Здесь мы получаем данные, отправленные сервером и выводим их на экран.
    //alert(data);
    //alert(titlep);
        document.location.reload();



  }


   


    });



  

    });