/*---------READY------------*/
$(document).ready(function(){        
    
    //$("#window,#footer").hide(); 
    $("#loading-image").css("height",$("html").height());
    $("#loading-image").css("width",$("html").width());
    //$("#ingresar").click(function(){
     //      $("#banner .expose-banner").animate({left: "-150px"}, 1500);
       // $("#intro").animate({margin: "-870px 0 0 0"}, 1500);
          // $("#window").show();
        //   $("#footer").show();
    //});                
                
  
   
   
    $("#menu_conten .nosot").children("#submen").hide();
    $("#menu_conten .progr").children("#submen").hide();
    $("#menu_conten li").click(function() {  
            $("#menu_conten ."+$(this).attr("class")+"").children("#submen").slideDown("fast");
          //  $(this).addClass("active");
        }, function(){
            //$(this).removeClass("active");
    });  

    $("#menu_conten .nosot").hover(function() {
		 $("#menu_conten ."+$(this).attr("class")+"").children("#submen").removeAttr('style').stop();
           $("#menu_conten ."+$(this).attr("class")+"").children("#submen").slideDown("fast");
		
        }, function(){
		$("#menu_conten ."+$(this).attr("class")+"").children("#submen").removeAttr('style').stop();
            $("#menu_conten ."+$(this).attr("class")+"").children("#submen").slideUp("fast");
				
    }); 
    
    $("#menu_conten .progr").hover(function() {
		$("#menu_conten ."+$(this).attr("class")+"").children("#submen").removeAttr('style').stop();
            $("#menu_conten ."+$(this).attr("class")+"").children("#submen").slideDown("fast");
        }, function(){
			$("#menu_conten ."+$(this).attr("class")+"").children("#submen").removeAttr('style').stop();
            $("#menu_conten ."+$(this).attr("class")+"").children("#submen").slideUp("fast");
    });     

    /*Banner-Slider*/  
    $('#slider').nivoSlider({
        effect: 'fade',
        animSpeed: 1000,
        pauseTime: 8000,
        controlNav: false,
        directionNavHide: false
    });           
        
    /*----------Noticias------------   
    $('.conten_noticias a').eq(0).addClass('current');
    $('.conten_noticias a').click(function() {  
            $('.conten_noticias a').removeClass('current');
            $(this).addClass('current');
            $.ajax({  
                url: 'noticias-descripcion.php',
                data:  {id: $(this).attr('id')},
                method: 'get',
                success: function(data) {  
                    $('.css-panes div').html(data);
                }
            });
        });
            */
    /*------Form---------*/  
   
    $("input[name$='tarifa']").click(function() {
        
            var test = $(this).attr("id");
             $(".cont-form form").hide();
             $("#bloquea").show();
             
             //alert(test.lengt)
            if(test == "1"){
                $("#formincrip1").show();
                $("#formincrip1 .idhide1").attr("value",test);
                $("#bloquea").hide();
                //llevar valor
                var valor1 = $("#1").attr("value");
                $("#tarifas1").attr("value",valor1);
                
                 var tarifas = $("#tarifas1").attr("value");
                 var adicionales = $("#adicionales1").attr("value");
                 var total = parseInt(tarifas) + parseInt(adicionales);
                 $("#totalpagar1").attr("value",total.toFixed(2));   
            }
            
            if(test == "2"){
                $("#formincrip2").show();
                $("#formincrip2 .idhide2").attr("value",test);
                $("#bloquea").hide();
                //llevar valor
                var valor2 = $("#2").attr("value");
                $("#tarifas2").attr("value",valor2);    
                
                 var tarifas = $("#tarifas2").attr("value");
                 var adicionales = $("#adicionales2").attr("value");
                 var total = parseInt(tarifas) + parseInt(adicionales);
                 $("#totalpagar2").attr("value",total.toFixed(2));                
            }
            
            if(test == "3"){
                $("#formincrip3").show();
                $("#formincrip3 .idhide3").attr("value",test);
                $("#bloquea").hide();
                //llevar valor
                var valor3 = $("#3").attr("value");
                $("#tarifa3").attr("value",valor3);    
                
                 var tarifas = $("#tarifa3").attr("value");
                 var adicionales = $("#adicionales3").attr("value");
                 var total = parseInt(tarifas) + parseInt(adicionales);
                 $("#totalpagar3").attr("value",total.toFixed(2));              
            }
            
            if(test == "4"){
                $("#formincrip4").show();
                $("#formincrip4 .idhide4").attr("value",test);
                $("#bloquea").hide();
                //llevar valor
                var valor4 = $("#4").attr("value");
                $("#tarifas4").attr("value",valor4);     
                
                 var tarifas = $("#tarifas4").attr("value");
                 var adicionales = $("#adicionales4").attr("value");
                 var total = parseInt(tarifas) + parseInt(adicionales);
                 $("#totalpagar4").attr("value",total.toFixed(2));                
            }
            
            
            if(test == "5"){
                $("#formincrip1").show();
                $("#formincrip1 .idhide1").attr("value",test);
                $("#bloquea").hide();
                //llevar valor
                var valor5 = $("#5").attr("value");
                $("#tarifas1").attr("value",valor5);       
                
                 var tarifas = $("#tarifas1").attr("value");
                 var adicionales = $("#adicionales1").attr("value");
                 var total = parseInt(tarifas) + parseInt(adicionales);
                 $("#totalpagar1").attr("value",total.toFixed(2));                
            }
            
            if(test == "6"){
                $("#formincrip2").show();
                $("#formincrip2 .idhide2").attr("value",test);
                $("#bloquea").hide();
                //llevar valor
                var valor6 = $("#6").attr("value");
                $("#tarifas2").attr("value",valor6);         
                
                 var tarifas = $("#tarifas2").attr("value");
                 var adicionales = $("#adicionales2").attr("value");
                 var total = parseInt(tarifas) + parseInt(adicionales);
                 $("#totalpagar2").attr("value",total.toFixed(2));                
            }
            
            if(test == "7"){
                $("#formincrip3").show();
                $("#formincrip3 .idhide3").attr("value",test);
                $("#bloquea").hide();
                //llevar valor
                var valor7 = $("#7").attr("value");
                $("#tarifa3").attr("value",valor7);      

                 var tarifas = $("#tarifa3").attr("value");
                 var adicionales = $("#adicionales3").attr("value");
                 var total = parseInt(tarifas) + parseInt(adicionales);
                 $("#totalpagar3").attr("value",total.toFixed(2));
            }     
            
            if(test == "8"){
                $("#formincrip4").show();
                $("#formincrip4 .idhide4").attr("value",test);
                $("#bloquea").hide();
                //llevar valor
                var valor8 = $("#8").attr("value");
                $("#tarifas4").attr("value",valor8);   
                
                 var tarifas = $("#tarifas4").attr("value");
                 var adicionales = $("#adicionales4").attr("value");
                 var total = parseInt(tarifas) + parseInt(adicionales);
                 $("#totalpagar4").attr("value",total.toFixed(2));                
            }    
			
			
			
			 if(test == "9"){
                $("#formincrip5").show();
                $("#formincrip5 .idhide5").attr("value",test);
                $("#bloquea").hide();
                //llevar valor
                var valor9 = $("#9").attr("value");
                $("#tarifas5").attr("value",valor9);   
                
                 var tarifas = $("#tarifas5").attr("value");
                 var adicionales = $("#adicionales5").attr("value");
                 var total = parseInt(tarifas) + parseInt(adicionales);
                 $("#totalpagar5").attr("value",total.toFixed(2)); 
				             
            }    
           
        });
        
    
        
    $("input[name$='registrado1']").click(function() {
        var yesno = $(this).val();
        if(yesno == "si"){
            $("#numreg1").show();
        }else{
            $("#numreg1").hide();
        }
    });    
    
    $("input[name$='registrado2']").click(function() {
        var yesno = $(this).val();
        if(yesno == "si"){
            $("#numreg").show();
        }else{
            $("#numreg").hide();
        }
    }); 

    $("input[name$='registrado3']").click(function() {
        var yesno = $(this).val();
        if(yesno == "yes"){
            $("#numreg3").show();
        }else{
            $("#numreg3").hide();
        }
    }); 
    
    $("input[name$='registrado23']").click(function() {
        var yesno = $(this).val();
        if(yesno == "yes"){
            $("#numreg4").show();
        }else{
            $("#numreg4").hide();
        }
    }); 

    $("input[name$='registrado33']").click(function() {
        var yesno = $(this).val();
        if(yesno == "yes"){
            $("#numreg5").show();
        }else{
            $("#numreg5").hide();
        }
    }); 
        
    $("#deposito1").click(function(){
            if ($("#deposito1").is(":checked")){
                $("#boucher1").show("fast");
            }else{
                $("#boucher1").hide("fast");
            }
        });
        
    $("#deposito2").click(function(){
            if ($("#deposito2").is(":checked")){
                $("#boucher2").show("fast");
            }else{
                $("#boucher2").hide("fast");
            }
        });

    $("#deposito3").click(function(){
            if ($("#deposito3").is(":checked")){
                $("#boucher3").show("fast");
            }else{
                $("#boucher3").hide("fast");
            }
        });
        
    $("#deposito4").click(function(){
            if ($("#deposito4").is(":checked")){
                $("#boucher4").show("fast");
            }else{
                $("#boucher4").hide("fast");
            }
        });        
        
/*------Expositores------*/
        
    $("#slider1 .expocit").click(function(){
        $("#Scroller .Scroller-Container").hide();
        $(".pager div").removeClass("active");
        $("#expocit"+$(this).attr("id")).show();
        $("#"+$(this).attr("id")+" div").addClass("active");
    });
        
/*---Programa conferencia-----*/

    $("#contenido .btn_miercoles").click(function(){
        $("#seccuadro").show();
        $("#pricuadro").hide();
        $("#contenido .btn_martes").removeAttr("id","active_2");
        $(this).attr("id","active_2");
    });
    $("#contenido .btn_martes").click(function(){
        $("#pricuadro").show();
        $("#seccuadro").hide();     
        $(this).attr("id","active_2");
        $("#contenido .btn_miercoles").removeAttr("id","active_2");
    });        
    
});

/*---------LOAD------------*/
$(window).load(function() {
    setTimeout(function(){ 
        $("#confirmacion").fadeOut() 
    }, 10000);
});


    function preload(arrayOfImages) {
            $(arrayOfImages).each(function(){
                     (new Image()).src = this;
            });
    }
    preload([
    'aplication/webroot/imgs/banner-one.gif',
    'aplication/webroot/imgs/banner-two.gif',
    'aplication/webroot/imgs/expose-banner.png'
    ]);
        

/*-----form Insribete------*/
	/*Primera operaciones*/
    var total1=0;
	var a1,a2,a3;
    function sumarCheck1(valor,cod) {   
       
	  
	   /* total1 += valor;
		document.formincrip1.adicionales1.value = total1.toFixed(2);
        var tarifas1 = document.getElementById("tarifas1").value;
        var adicionales1 = document.getElementById("adicionales1").value;
        var total = parseInt(tarifas1) + parseInt(adicionales1);
        
		document.formincrip1.totalpagar1.value = total.toFixed(2);*/
	   
	  
	  a1=$("#adic1").is(':checked')?$("#adic1").val():0;
	  a2=$("#adic2").is(':checked')?$("#adic2").val():0;
	  a3=$("#adic3").is(':checked')?$("#adic3").val():0;
	  
	  
	
	  
	 
	 if($("#adic1").is(':checked') && $("#adic3").is(':checked')){

			a1=$("#adic1").val();a2=0;a3=0;
		}
	 
	
	
	  if($("#adic2").is(':checked') && $("#adic3").is(':checked')){
		
			a1=0;a2=0;a3=$("#adic3").val();
			$("#adic2").attr('checked', false);
		}
	
	if($("#adic1").is(':checked') && $("#adic3").is(':checked')){
		
			a1=0;a2=0;a3=$("#adic3").val();
			$("#adic1").attr('checked', false);
		}
	
	
	if(a3>0 && cod==1){
		a1=$("#adic1").val();a2=0;a3=0;
			$("#adic3").attr('checked', false);
			$("#adic1").attr('checked', true);
		}
	
	if(a3>0 && cod==2){
		a1=0;a2=$("#adic2").val();a3=0;
			$("#adic3").attr('checked', false);
			$("#adic2").attr('checked', true);
		}
	 if(a1!=0 && a2!=0){
			$("#adic1").attr('checked', false);
			$("#adic2").attr('checked', false);
			$("#adic3").attr('checked', true);
			
			a1=0;a2=0;a3=$("#adic3").val();
			
		}
	
	
	
	  $("#adicionales1").val((parseInt(a1)+parseInt(a2)+parseInt(a3)).toFixed(2))
	
	var tarifas1 = document.getElementById("tarifas1").value;
	   var adicionales1 = document.getElementById("adicionales1").value;
	  var total = parseInt(tarifas1) + parseInt(adicionales1);
        document.formincrip1.totalpagar1.value = total.toFixed(2);   
	  
	
	
	  }
 
 function restarCheck1(valor,cod) {
     	  
	  a1=$("#adic1").is(':checked')?$("#adic1").val():0;
	  a2=$("#adic2").is(':checked')?$("#adic2").val():0;
	  a3=$("#adic3").is(':checked')?$("#adic3").val():0;
	  
	 
		
	
	  if(a1!=0 && a2!=0){
			$("#adic1").attr('checked', false);
			$("#adic2").attr('checked', false);
			$("#adic3").attr('checked', true);
			a1=0;a2=0;a3=$("#adic3").val();
		}
	 
	 
	 
	
	 
	 
	 
	  $("#adicionales1").val((parseInt(a1)+parseInt(a2)+parseInt(a3)).toFixed(2));
	 
	 
	  
	  
	   var tarifas1 = document.getElementById("tarifas1").value;
	   var adicionales1 = document.getElementById("adicionales1").value;
	  var total = parseInt(tarifas1) + parseInt(adicionales1);
        document.formincrip1.totalpagar1.value = total.toFixed(2);   
	  
	  
	  
	  
	   /* total1 -= valor; 
        document.formincrip1.adicionales1.value=total1.toFixed(2);
        
        var tarifas1 = document.getElementById("tarifas1").value;
        var adicionales1 = document.getElementById("adicionales1").value;
        var total = parseInt(tarifas1) + parseInt(adicionales1);
        document.formincrip1.totalpagar1.value = total.toFixed(2); 
		*/
		
		     
    }
    
	
	
	
	
	
	
    var total2=0;
    function sumarCheck2(valor) {   
        total2 += valor;
        document.formincrip2.adicionales2.value=total2.toFixed(2);
        
        var tarifas2 = document.getElementById("tarifas2").value;
        var adicionales2 = document.getElementById("adicionales2").value;
        var total = parseInt(tarifas2) + parseInt(adicionales2);
        document.formincrip2.totalpagar2.value = total.toFixed(2);        
    }
    function restarCheck2(valor) {
        total2 -= valor; 
        document.formincrip2.adicionales2.value=total2.toFixed(2);
        
        var tarifas2 = document.getElementById("tarifas2").value;
        var adicionales2 = document.getElementById("adicionales2").value;
        var total = parseInt(tarifas2) + parseInt(adicionales2);
        document.formincrip2.totalpagar2.value = total.toFixed(2);        
    }
    
    var total3=0;
    function sumarCheck3(valor) {  
        total3 += valor;
        document.formincrip3.adicionales3.value=total3.toFixed(2);
        
        var tarifas3 = document.getElementById("tarifa3").value;
        var adicionales3 = document.getElementById("adicionales3").value;
        var total = parseInt(tarifas3) + parseInt(adicionales3);
        document.formincrip3.totalpagar3.value = total.toFixed(2);        
    }
    function restarCheck3(valor) {
        total3 -= valor; 
        document.formincrip3.adicionales3.value=total3.toFixed(2);
        
        var tarifas3 = document.getElementById("tarifa3").value;
        var adicionales3 = document.getElementById("adicionales3").value;
        var total = parseInt(tarifas3) + parseInt(adicionales3);
        document.formincrip3.totalpagar3.value = total.toFixed(2);        
    }
    
    var total4=0;
    function sumarCheck4(valor) {
        total4 += valor;
        document.formincrip4.adicionales4.value=total4.toFixed(2);
        
        var tarifas4 = document.getElementById("tarifas4").value;
        var adicionales4 = document.getElementById("adicionales4").value;
        var total = parseInt(tarifas4) + parseInt(adicionales4);
        document.formincrip4.totalpagar4.value = total.toFixed(2);        
    }

    function restarCheck4(valor) {
        total4 -= valor; 
        document.formincrip4.adicionales4.value=total4.toFixed(2);
        
        var tarifas4 = document.getElementById("tarifas4").value;
        var adicionales4 = document.getElementById("adicionales4").value;
        var total = parseInt(tarifas4) + parseInt(adicionales4);
        document.formincrip4.totalpagar4.value = total.toFixed(2);        
    }  

	
	/*Segunda operaciones*/
    var total5=0;
    function sumarCheck5(valor) {   
        total5 += valor;
        document.formincrip1.adicionales1.value = total5.toFixed(2);
        
        var tarifas1 = document.getElementById("tarifas1").value;
        var adicionales1 = document.getElementById("adicionales1").value;
        var total = parseInt(tarifas1) + parseInt(adicionales1);
        document.formincrip1.totalpagar1.value = total.toFixed(2);
    }
    function restarCheck5(valor) {
        total5 -= valor; 
        document.formincrip1.adicionales1.value=total5.toFixed(2);
        
        var tarifas1 = document.getElementById("tarifas1").value;
        var adicionales1 = document.getElementById("adicionales1").value;
        var total = parseInt(tarifas1) + parseInt(adicionales1);
        document.formincrip1.totalpagar1.value = total.toFixed(2);        
    }
    
    var total6=0;
    function sumarCheck6(valor) {   
        total6 += valor;
        document.formincrip2.adicionales2.value=total6.toFixed(2);
        
        var tarifas2 = document.getElementById("tarifas2").value;
        var adicionales2 = document.getElementById("adicionales2").value;
        var total = parseInt(tarifas2) + parseInt(adicionales2);
        document.formincrip2.totalpagar2.value = total.toFixed(2);        
    }
    function restarCheck6(valor) {
        total6 -= valor; 
        document.formincrip2.adicionales2.value=total6.toFixed(2);
        
        var tarifas2 = document.getElementById("tarifas2").value;
        var adicionales2 = document.getElementById("adicionales2").value;
        var total = parseInt(tarifas2) + parseInt(adicionales2);
        document.formincrip2.totalpagar2.value = total.toFixed(2);        
    }
    
    var total7=0;
    function sumarCheck7(valor) {  
        total7 += valor;
        document.formincrip3.adicionales3.value=total7.toFixed(2);
        
        var tarifas3 = document.getElementById("tarifa3").value;
        var adicionales3 = document.getElementById("adicionales3").value;
        var total = parseInt(tarifas3) + parseInt(adicionales3);
        document.formincrip3.totalpagar3.value = total.toFixed(2);        
    }
    function restarCheck7(valor) {
        total7 -= valor; 
        document.formincrip3.adicionales3.value=total7.toFixed(2);
        
        var tarifas3 = document.getElementById("tarifa3").value;
        var adicionales3 = document.getElementById("adicionales3").value;
        var total = parseInt(tarifas3) + parseInt(adicionales3);
        document.formincrip3.totalpagar3.value = total.toFixed(2);        
    }
    
    var total8=0;
    function sumarCheck8(valor) {
        total8 += valor;
        document.formincrip4.adicionales4.value=total8.toFixed(2);
        
        var tarifas4 = document.getElementById("tarifas4").value;
        var adicionales4 = document.getElementById("adicionales4").value;
        var total = parseInt(tarifas4) + parseInt(adicionales4);
        document.formincrip4.totalpagar4.value = total.toFixed(2);        
    }

    function restarCheck8(valor) {
        total8 -= valor; 
        document.formincrip4.adicionales4.value=total8.toFixed(2);
        
        var tarifas4 = document.getElementById("tarifas4").value;
        var adicionales4 = document.getElementById("adicionales4").value;
        var total = parseInt(tarifas4) + parseInt(adicionales4);
        document.formincrip4.totalpagar4.value = total.toFixed(2);        
    }    	
	
	
	
	
	
	
	
	
	
	
	  var total9=0;
    function sumarCheck9(valor) {
        total9 += valor;
        document.formincrip5.adicionales5.value=total9.toFixed(2);
        
        var tarifas5 = document.getElementById("tarifas5").value;
        var adicionales5 = document.getElementById("adicionales5").value;
        var total = parseInt(tarifas5) + parseInt(adicionales5);
        document.formincrip5.totalpagar5.value = total.toFixed(2);        
    }

    function restarCheck9(valor) {
        total9 -= valor; 
        document.formincrip5.adicionales5.value=total9.toFixed(2);
        
        var tarifas5 = document.getElementById("tarifas5").value;
        var adicionales5 = document.getElementById("adicionales5").value;
        var total = parseInt(tarifas5) + parseInt(adicionales5);
        document.formincrip5.totalpagar5.value = total.toFixed(2);        
    }    	
	
	
	
	
	
	