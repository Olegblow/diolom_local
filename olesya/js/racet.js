btr=0;
$(document).ready(function(){
     var rashet = {
        tippot: $("#tipp"),
        ploshad: $("#pl"),
        ugli: $("#ug"),
        obtryb: $("#ob"), 
        declenta: $("#de"),
        lustra: $("#lus"),
        svetil: $("#svet")
        
                      
    };


    var cena = {        
        
        ugli: 100,
        obtryb: 200, 
        declenta: 50,
        lustra: 500,
        svetil: 350      
                      
    };

    var ploshad ={
        
        a1: 440, // матовый белый
        a8: 510, // матовый цветно
        a3: 450, // Сатиновый белый
        a4: 500, // Сатиновый цветной
        a5: 450, // лаковый белый
        a6: 500, // лаковый цветной
        a7: 650  // полупрозрачный
      };


    sum=0;

    N=1;
    
     
    



    $('#ras').click(function(event){


     switch(Number (rashet.tippot.val()))
    {
    
    case 1: sum=   //матовый белый  
                    Number(rashet.ploshad.val())  * ploshad.a1    +   //площадь
                    Number(rashet.ugli.val())     * cena.ugli     +   //углы
                    Number(rashet.obtryb.val())   * cena.obtryb   +   //трубы
                    Number(rashet.declenta.val()) * cena.declenta +   //лета
                    Number(rashet.lustra.val())   * cena.lustra   +   //люстра
                    Number(rashet.svetil.val())   * cena.svetil   ;   //светильник
                     
        break 

    case 2: sum=    //матовый цветной
                    Number(rashet.ploshad.val())  * ploshad.a8    +   //площадь
                    Number(rashet.ugli.val())     * cena.ugli     +   //углы
                    Number(rashet.obtryb.val())   * cena.obtryb   +   //трубы
                    Number(rashet.declenta.val()) * cena.declenta +   //лета
                    Number(rashet.lustra.val())   * cena.lustra   +   //люстра
                    Number(rashet.svetil.val())   * cena.svetil   ;   //светильник  

    case 3: sum=   //Сатиновый белый  
                    Number(rashet.ploshad.val())  * ploshad.a3    +   //площадь
                    Number(rashet.ugli.val())     * cena.ugli     +   //углы
                    Number(rashet.obtryb.val())   * cena.obtryb   +   //трубы
                    Number(rashet.declenta.val()) * cena.declenta +   //лета
                    Number(rashet.lustra.val())   * cena.lustra   +   //люстра
                    Number(rashet.svetil.val())   * cena.svetil   ;   //светильник
                     
        break
    case 4: sum=   //Сатиновый цветной 
                    Number(rashet.ploshad.val())  * ploshad.a4    +   //площадь
                    Number(rashet.ugli.val())     * cena.ugli     +   //углы
                    Number(rashet.obtryb.val())   * cena.obtryb   +   //трубы
                    Number(rashet.declenta.val()) * cena.declenta +   //лета
                    Number(rashet.lustra.val())   * cena.lustra   +   //люстра
                    Number(rashet.svetil.val())   * cena.svetil   ;   //светильник
                     
        break

    case 5: sum=   //лаковый белый  
                    Number(rashet.ploshad.val())  * ploshad.a5    +   //площадь
                    Number(rashet.ugli.val())     * cena.ugli     +   //углы
                    Number(rashet.obtryb.val())   * cena.obtryb   +   //трубы
                    Number(rashet.declenta.val()) * cena.declenta +   //лета
                    Number(rashet.lustra.val())   * cena.lustra   +   //люстра
                    Number(rashet.svetil.val())   * cena.svetil   ;   //светильник
                     
        break

    case 6: sum=   //лаковый цветной  
                    Number(rashet.ploshad.val())  * ploshad.a6    +   //площадь
                    Number(rashet.ugli.val())     * cena.ugli     +   //углы
                    Number(rashet.obtryb.val())   * cena.obtryb   +   //трубы
                    Number(rashet.declenta.val()) * cena.declenta +   //лета
                    Number(rashet.lustra.val())   * cena.lustra   +   //люстра
                    Number(rashet.svetil.val())   * cena.svetil   ;   //светильник
                     
        break
    case 7: sum=   //полупрозрачный 
                    Number(rashet.ploshad.val())  * ploshad.a7    +   //площадь
                    Number(rashet.ugli.val())     * cena.ugli     +   //углы
                    Number(rashet.obtryb.val())   * cena.obtryb   +   //трубы
                    Number(rashet.declenta.val()) * cena.declenta +   //лета
                    Number(rashet.lustra.val())   * cena.lustra   +   //люстра
                    Number(rashet.svetil.val())   * cena.svetil   ;   //светильник
              

    }


            $('#summa').html(sum+" рублей");
           
      
             



    })

       




}); 


