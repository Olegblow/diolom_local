$(document).ready(function() { // вся мaгия пoсле зaгрузки стрaницы
    $('.add_mem').click( function(event){ // лoвим клик пo ссылки с id="go"
      
      var fname =  $('#f_name').val();
      var lname =  $('#l_name').val();
      var tname =  $('#t_name').val();
      var mpost =  $('.post'  ).val();
      var info = '<pre>'+ $('.suitup').val() +'</pre>';

      var fio = fname + " " + lname +" " + tname;


      // alert(title+text);
     // document.location.reload();

     //alert(fio);


   $.post(
    "../php/add_mem.php",
    {
      fio: fio,
      mpost:  mpost,
      minfo: info
   

    },
    onAjaxSuccess
  );
   
  function onAjaxSuccess(data)
  {
    // Здесь мы получаем данные, отправленные сервером и выводим их на экран.
    alert(data);
    //alert(titlep);
    // document.location.reload();



  }


   


    });



  

    });