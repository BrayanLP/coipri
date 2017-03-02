// formincrip1 validation function //
function validate1(formincrip1,val) {

          var numasociado1 = formincrip1.numasociado1.value;
	  var nombres1 = formincrip1.nombres1.value;
	  var apellidos1 = formincrip1.apellidos1.value;
          var email1 = formincrip1.email1.value;
	  var telefono1 = formincrip1.telefono1.value;
	  var celular1  = formincrip1.celular1.value;      
          
	  var emailRegex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
          /*var telRegex = /^\d{7}$/;
          var movilRegex = /^\d{9}$/;*/

        if(val==1){
            if(numasociado1 == "") {		
                inlineMsg('numasociado1','Usted debe ingresar su n&uacute;mero de asociado.',2);
                return false;
            }            
            if(nombres1 == "") {		
                inlineMsg('nombres1','Usted debe ingresar su nombre.',2);
                return false;
            }
            if(apellidos1 == "") {		
                inlineMsg('apellidos1','Usted debe ingresar su apellido.',2);
                return false;
            }
            if(email1 == "") {
                inlineMsg('email1','Debe introducir su correo electr&oacute;nico.',2);
                return false;
            }
            if(!email1.match(emailRegex)) {
                inlineMsg('email1','<strong>Error</strong><br />Ha introducido una direcci&oacute;n de correo electr&oacute;nico no es v&aacute;lida.',2);
                return false;
            }          
            if(telefono1 == "") {
                inlineMsg('telefono1','Usted debe ingresar su tel&eacute;fono.',2);
                return false;
            }
            /*if(!telefono1.match(telRegex)) {	
                inlineMsg('telefono1','<strong>Error</strong><br />Usted debe ingresar su celular no menos de 7 d&iacute;gitos.');
                return false;
            }*/            
            if(celular1== "") {	
                inlineMsg('celular1','Usted debe ingresar su celular.');
                return false;
            }
            /*if(!celular1.match(movilRegex)) {	
                inlineMsg('celular1','<strong>Error</strong><br />Usted debe ingresar su celular no menos de 9 d&iacute;gitos.');
                return false;
            }*/
        }
	 	 
	/* var interval;
	$.ajax({
		  type: "POST",
  		  url: "enviar-inscritos.php",
		  data : 	
                  "&idhide1="+$('#idhide1').val()+
		  "&numasociado1="+$('#numasociado1').val()+
		  "&nombres1="+$('#nombres1').val()+		  
		  "&apellidos1="+$('#apellidos1').val()+
		  "&empresa1="+$('#empresa1').val()+		 
		  "&ruc1="+$('#ruc1').val()+
                  "&cargo1="+$('#cargo1').val()+
                  "&email1="+$('#email1').val()+
                  "&telefono1="+$('#telefono1').val()+
                  "&celular1="+$('#celular1').val()+
                  
                  "&adic1="+$('#adic1').val()+
                  "&adic2="+$('#adic2').val()+
                  "&adic3="+$('#adics2').val()+
                  
                  "&razonsocial1="+$('#razonsocial1').val()+
                  "&rucdatos1="+$('#rucdatos1').val()+
                  "&direccion1="+$('#direccion1').val()+
                  "&distrito1="+$('#distrito1').val()+
                  "&ciudad1="+$('#ciudad1').val(),
		  
		beforeSend: function(objeto){
			$(".loadingn").text('Enviando el Formulario');
			var point = ($(".loadingn").text()).length + 3;
            interval = window.setInterval(function(){
				var text = $(".loadingn").text();
				if (text.length < point){
					$(".loadingn").text(text + '.');	
				} else {
					$(".loadingn").text('Enviando el Formulario');				
				}
			}, 200);
        },
  		 success: function(msg){
   		  window.clearInterval(interval);
		  $("#formulario").slideUp("fast");
		  $("#confirmacion").slideDown("slow");
  		 },
		 complete:function(){
                     setTimeout("new_contact()",5000)
		 }
	});*/
  //return false;
}

// formincrip2 validation function //
function validate2(formincrip2, val) {

	  var nombres2 = formincrip2.nombres2.value;
	  var apellidos2 = formincrip2.apellidos2.value;
          var email2 = formincrip2.email2.value;
	  var telefono2 = formincrip2.telefono2.value;
	  var celular2  = formincrip2.celular2.value;     
          
	  var emailRegex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
          /*var telRegex = /^\d{7}$/;
          var movilRegex = /^\d{9}$/;*/

        if(val==1){        
            if(nombres2 == "") {		
                inlineMsg('nombres2','Usted debe ingresar su nombre.',2);
                return false;
            }
            if(apellidos2 == "") {		
                inlineMsg('apellidos2','Usted debe ingresar su apellido.',2);
                return false;
            }
            if(email2 == "") {
                inlineMsg('email2','Debe introducir su correo electr&oacute;nico.',2);
                return false;
            }
            if(!email2.match(emailRegex)) {
                inlineMsg('email2','<strong>Error</strong><br />Ha introducido una direcci&oacute;n de correo electr&oacute;nico no es v&aacute;lida.',2);
                return false;
            }          
            if(telefono2 == "") {
                inlineMsg('telefono2','Usted debe ingresar su tel&eacute;fono.',2);
                return false;
            }
            /*if(!telefono2.match(telRegex)) {	
                inlineMsg('telefono2','<strong>Error</strong><br />Usted debe ingresar su celular no menos de 7 d&iacute;gitos.');
                return false;
            } */           
            if(celular2 == "") {	
                inlineMsg('celular2','Usted debe ingresar su celular.');
                return false;
            }
            /*if(!celular2.match(movilRegex)) {	
                inlineMsg('celular2','<strong>Error</strong><br />Usted debe ingresar su celular no menos de 9 d&iacute;gitos.');
                return false;
            }*/
        }
	 	 
	/* var interval;
	$.ajax({
		  type: "POST",
  		  url: "enviar-inscritos.php",
		  data : 	
                  "&idhide2="+$('#idhide2').val()+
		  "&nombres2="+$('#nombres2').val()+		  
		  "&apellidos2="+$('#apellidos2').val()+
		  "&empresa2="+$('#empresa2').val()+		 
		  "&ruc2="+$('#ruc2').val()+
                  "&cargo2="+$('#cargo2').val()+
                  "&email2="+$('#email2').val()+
                  "&telefono2="+$('#telefono2').val()+
                  "&celular2="+$('#celular2').val()+
                  
                  "&asesor2="+$('#asesor2').val()+
                  "&registrado2="+$('#registrado2').val()+
                  "&nroregistro2="+$('#nroregistro2').val()+
                  
                  "&adic1="+$('#adic1').val()+
                  "&adic2="+$('#adic2').val()+
                  "&adic3="+$('#adics2').val()+
                  
                  "&razonsocial="+$('#razonsocial2').val()+
                  "&rucdatos="+$('#rucdatos2').val()+
                  "&direccion="+$('#direccion2').val()+
                  "&distrito="+$('#distrito2').val()+
                  "&ciudad="+$('#ciudad2').val(),
		  
		beforeSend: function(objeto){
			$(".loadingn").text('Enviando el Formulario');
			var point = ($(".loadingn").text()).length + 3;
            interval = window.setInterval(function(){
				var text = $(".loadingn").text();
				if (text.length < point){
					$(".loadingn").text(text + '.');	
				} else {
					$(".loadingn").text('Enviando el Formulario');				
				}
			}, 200);
        },
  		 success: function(msg){
   		  window.clearInterval(interval);
		  $("#formulario").slideUp("fast");
		  $("#confirmacion").slideDown("slow");
  		 },
		 complete:function(){
                     setTimeout("new_contact()",5000)
		 }
	});*/
  //return false;
}

// formincrip3 validation function //
function validate3(formincrip3, val) {

	  var nombres3 = formincrip3.nombres3.value;
	  var apellidos3 = formincrip3.apellidos3.value;
          var email3 = formincrip3.email3.value;
	  var telefono3 = formincrip3.telefono3.value;
	  var celular3  = formincrip3.celular3.value;  
          
	  var nombres23 = formincrip3.nombres23.value;
	  var apellidos23 = formincrip3.apellidos23.value;
          var email23 = formincrip3.email23.value;
	  var telefono23 = formincrip3.telefono23.value;
	  var celular23  = formincrip3.celular23.value; 

	  var nombres33 = formincrip3.nombres33.value;
	  var apellidos33 = formincrip3.apellidos33.value;
          var email33 = formincrip3.email33.value;
	  var telefono33 = formincrip3.telefono33.value;
	  var celular33  = formincrip3.celular33.value; 
          
          var razonsocial3  = formincrip3.razonsocial3.value; 
          var rucdatos3  = formincrip3.rucdatos3.value; 
          var correoempre3 = formincrip3.correoempre3.value;
          var telefonoempre3 = formincrip3.telefonoempre3.value;
          var direccion3  = formincrip3.direccion3.value; 
          var distrito3  = formincrip3.distrito3.value; 
          var ciudad3  = formincrip3.ciudad3.value; 
          
	  var emailRegex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
          /*var telRegex = /^\d{7}$/;
          var movilRegex = /^\d{9}$/;*/
          var rucRegex = /^\d{11}$/;

        if(val==1){         
            if(nombres3 == "") {		
                inlineMsg('nombres3','Usted debe ingresar su nombre.',2);
                return false;
            }
            if(apellidos3 == "") {		
                inlineMsg('apellidos3','Usted debe ingresar su apellido.',2);
                return false;
            }
            if(email3 == "") {
                inlineMsg('email3','Debe introducir su correo electr&oacute;nico.',2);
                return false;
            }
            if(!email3.match(emailRegex)) {
                inlineMsg('email3','<strong>Error</strong><br />Ha introducido una direcci&oacute;n de correo electr&oacute;nico no es v&aacute;lida.',2);
                return false;
            }          
            if(telefono3 == "") {
                inlineMsg('telefono3','Usted debe ingresar su tel&eacute;fono.',2);
                return false;
            }
            /*if(!telefono3.match(telRegex)) {	
                inlineMsg('telefono3','<strong>Error</strong><br />Usted debe ingresar su celular no menos de 7 d&iacute;gitos.');
                return false;
            } */           
            if(celular3== "") {	
                inlineMsg('celular3','Usted debe ingresar su celular.');
                return false;
            }
            /*if(!celular3.match(movilRegex)) {	
                inlineMsg('celular3','<strong>Error</strong><br />Usted debe ingresar su celular no menos de 9 d&iacute;gitos.');
                return false;
            }*/
            //-------------------------------------
            if(nombres23 == "") {		
                inlineMsg('nombres23','Usted debe ingresar su nombre.',2);
                return false;
            }
            if(apellidos23 == "") {		
                inlineMsg('apellidos23','Usted debe ingresar su apellido.',2);
                return false;
            }
            if(email23 == "") {
                inlineMsg('email23','Debe introducir su correo electr&oacute;nico.',2);
                return false;
            }
            if(!email23.match(emailRegex)) {
                inlineMsg('email23','<strong>Error</strong><br />Ha introducido una direcci&oacute;n de correo electr&oacute;nico no es v&aacute;lida.',2);
                return false;
            }          
            if(telefono23 == "") {
                inlineMsg('telefono23','Usted debe ingresar su tel&eacute;fono.',2);
                return false;
            }
            /*if(!telefono23.match(telRegex)) {	
                inlineMsg('telefono23','<strong>Error</strong><br />Usted debe ingresar su celular no menos de 7 d&iacute;gitos.');
                return false;
            } */             
            if(celular23== "") {	
                inlineMsg('celular23','Usted debe ingresar su celular.');
                return false;
            }
            /*if(!celular23.match(movilRegex)) {	
                inlineMsg('celular23','<strong>Error</strong><br />Usted debe ingresar su celular no menos de 9 d&iacute;gitos.');
                return false;
            }*/ 
            //--------------------------------
            if(nombres33 == "") {		
                inlineMsg('nombres33','Usted debe ingresar su nombre.',2);
                return false;
            }
            if(apellidos33 == "") {		
                inlineMsg('apellidos33','Usted debe ingresar su apellido.',2);
                return false;
            }
            if(email33 == "") {
                inlineMsg('email33','Debe introducir su correo electr&oacute;nico.',2);
                return false;
            }
            if(!email33.match(emailRegex)) {
                inlineMsg('email33','<strong>Error</strong><br />Ha introducido una direcci&oacute;n de correo electr&oacute;nico no es v&aacute;lida.',2);
                return false;
            }          
            if(telefono33 == "") {
                inlineMsg('telefono33','Usted debe ingresar su tel&eacute;fono.',2);
                return false;
            }
            /*if(!telefono33.match(telRegex)) {	
                inlineMsg('telefono33','<strong>Error</strong><br />Usted debe ingresar su celular no menos de 7 d&iacute;gitos.');
                return false;
            }*/            
            if(celular33== "") {	
                inlineMsg('celular33','Usted debe ingresar su celular.');
                return false;
            }
            /*if(!celular33.match(movilRegex)) {	
                inlineMsg('celular33','<strong>Error</strong><br />Usted debe ingresar su celular no menos de 9 d&iacute;gitos.');
                return false;
            }*/

            //---------------------------------------
            
            if(razonsocial3== "") {	
                inlineMsg('razonsocial3','Usted debe ingresar su razon social.');
                return false;
            }
            if(rucdatos3== "") {	
                inlineMsg('rucdatos3','Usted debe ingresar su ruc.');
                return false;
            }            
            if(!rucdatos3.match(rucRegex)) {	
                inlineMsg('rucdatos3','<strong>Error</strong><br />Usted debe ingresar su celular no menos de 11 d&iacute;gitos.');
                return false;
            }           
            if(correoempre3== "") {	
                inlineMsg('correoempre3','Usted debe ingresar un correo de empresa.');
                return false;
            }  
            if(telefonoempre3== "") {	
                inlineMsg('telefonoempre3','Usted debe ingresar su telefono de empresa.');
                return false;
            }              
            if(direccion3== "") {	
                inlineMsg('direccion3','Usted debe ingresar su direccion.');
                return false;
            }
            if(distrito3== "") {	
                inlineMsg('distrito3','Usted debe ingresar su distrito.');
                return false;
            }
            if(ciudad3== "") {	
                inlineMsg('ciudad3','Usted debe ingresar su ciudad.');
                return false;
            }            
            
        }
	 	 
	 /*var interval;
	$.ajax({
		  type: "POST",
  		  url: "enviar-inscritos.php",
		  data : 	
                  "&idhide3="+$('#idhide3').val()+
		  "&nombres3="+$('#nombres3').val()+		  
		  "&apellidos3="+$('#apellidos3').val()+
		  "&empresa3="+$('#empresa3').val()+		 
		  "&ruc3="+$('#ruc3').val()+
                  "&cargo3="+$('#cargo3').val()+
                  "&email3="+$('#email3').val()+
                  "&telefono3="+$('#telefono3').val()+
                  "&celular3="+$('#celular3').val()+
                  
                  "&asesor3="+$('#asesor3').val()+
                  "&registrado3="+$('#registrado3').val()+
                  "&nroregistro3="+$('#nroregistro3').val()+
                  
                  "&adic1="+$('#adic1').val()+
                  "&adic2="+$('#adic2').val()+
                  "&adic3="+$('#adics2').val()+
                  
                  "&nombres23="+$('#nombres23').val()+		  
		  "&apellidos23="+$('#apellidos23').val()+
		  "&empresa23="+$('#empresa23').val()+		 
		  "&ruc23="+$('#ruc23').val()+
                  "&cargo23="+$('#cargo23').val()+
                  "&email23="+$('#email23').val()+
                  "&telefono23="+$('#telefono23').val()+
                  "&celular23="+$('#celular23').val()+
                  
                  "&asesor23="+$('#asesor23').val()+
                  "&registrado23="+$('#registrado3').val()+
                  "&nroregistro23="+$('#nroregistro23').val()+
                  
                  "&nombres33="+$('#nombres33').val()+		  
		  "&apellidos33="+$('#apellidos33').val()+
		  "&empresa33="+$('#empresa33').val()+		 
		  "&ruc33="+$('#ruc33').val()+
                  "&cargo33="+$('#cargo33').val()+
                  "&email33="+$('#email33').val()+
                  "&telefono33="+$('#telefono33').val()+
                  "&celular33="+$('#celular33').val()+
                  
                  "&asesor33="+$('#asesor33').val()+
                  "&registrado33="+$('#registrado3').val()+
                  "&nroregistro33="+$('#nroregistro33').val()+
                  
                  "&razonsocial3="+$('#razonsocial3').val()+
                  "&rucdatos3="+$('#rucdatos3').val()+
                  "&direccion3="+$('#direccion3').val()+
                  "&distrito3="+$('#distrito3').val()+
                  "&ciudad3="+$('#ciudad3').val(),
		  
		beforeSend: function(objeto){
			$(".loadingn").text('Enviando el Formulario');
			var point = ($(".loadingn").text()).length + 3;
            interval = window.setInterval(function(){
				var text = $(".loadingn").text();
				if (text.length < point){
					$(".loadingn").text(text + '.');	
				} else {
					$(".loadingn").text('Enviando el Formulario');				
				}
			}, 200);
        },
  		 success: function(msg){
   		  window.clearInterval(interval);
		  $("#formulario").slideUp("fast");
		  $("#confirmacion").slideDown("slow");
  		 },
		 complete:function(){
                     setTimeout("new_contact()",5000)
		 }
	});*/
  //return false;
}

// formincrip4 validation function //
function validate4(formincrip4, val) {
	  var nombres4 = formincrip4.nombres4.value;
	  var apellidos4 = formincrip4.apellidos4.value;
          var email4 = formincrip4.email4.value;
	  var telefono4 = formincrip4.telefono4.value;
	  var celular4  = formincrip4.celular4.value;

	  var emailRegex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
          /*var telRegex = /^\d{7}$/;
          var movilRegex = /^\d{9}$/;*/

        if(val==1){         
            if(nombres4 == "") {		
                inlineMsg('nombres4','Usted debe ingresar su nombre.',2);
                return false;
            }
            if(apellidos4 == "") {		
                inlineMsg('apellidos4','Usted debe ingresar su apellido.',2);
                return false;
            }
            if(email4 == "") {
                inlineMsg('email4','Debe introducir su correo electr&oacute;nico.',2);
                return false;
            }
            if(!email4.match(emailRegex)) {
                inlineMsg('email4','<strong>Error</strong><br />Ha introducido una direcci&oacute;n de correo electr&oacute;nico no es v&aacute;lida.',2);
                return false;
            }          
            if(telefono4 == "") {
                inlineMsg('telefono4','Usted debe ingresar su tel&eacute;fono.',2);
                return false;
            }
            /*if(!telefono4.match(movilRegex)) {	
                inlineMsg('telefono4','<strong>Error</strong><br />Usted debe ingresar su celular no menos de 7 d&iacute;gitos.');
                return false;
            }*/            
            if(celular4== "") {	
                inlineMsg('celular4','Usted debe ingresar su celular.');
                return false;
            }
            /*if(!celular4.match(movilRegex)) {	
                inlineMsg('celular4','<strong>Error</strong><br />Usted debe ingresar su celular no menos de 9 d&iacute;gitos.');
                return false;
            }*/
        }
	 	 
	/* var interval;
	$.ajax({
		  type: "POST",
  		  url: "enviar-inscritos.php",
		  data : 	
                  "&idhide4="+$('#idhide4').val()+
		  "&numasociado4="+$('#numasociado4').val()+
		  "&nombres4="+$('#nombres4').val()+		  
		  "&apellidos4="+$('#apellidos4').val()+
		  "&empresa4="+$('#empresa4').val()+		 
		  "&ruc4="+$('#ruc4').val()+
                  "&cargo4="+$('#cargo4').val()+
                  "&email4="+$('#email4').val()+
                  "&telefono4="+$('#telefono4').val()+
                  "&celular4="+$('#celular4').val()+
                  
                  "&asesor4="+$('#asesor4').val()+
                  
                  "&adic1="+$('#adic1').val()+
                  "&adic2="+$('#adic2').val()+
                  "&adic3="+$('#adics2').val()+
                  
                  "&razonsocial4="+$('#razonsocial4').val()+
                  "&rucdatos4="+$('#rucdatos4').val()+
                  "&direccion4="+$('#direccion4').val()+
                  "&distrito4="+$('#distrito4').val()+
                  "&ciudad4="+$('#ciudad4').val(),
		  
		beforeSend: function(objeto){
			$(".loadingn").text('Enviando el Formulario');
			var point = ($(".loadingn").text()).length + 3;
            interval = window.setInterval(function(){
				var text = $(".loadingn").text();
				if (text.length < point){
					$(".loadingn").text(text + '.');	
				} else {
					$(".loadingn").text('Enviando el Formulario');				
				}
			}, 200);
        },
  		 success: function(msg){
   		  window.clearInterval(interval);
		  $("#formulario").slideUp("fast");
		  $("#confirmacion").slideDown("slow");
  		 },
		 complete:function(){
                     setTimeout("new_contact()",5000)
		 }
	});*/
  //return false;
}







function validate5(formincrip5, val) {
	  var nombres5 = formincrip5.nombres5.value;
	  var apellidos5 = formincrip5.apellidos5.value;
          var email5 = formincrip5.email5.value;
	  var telefono5 = formincrip5.telefono5.value;
	  var celular5  = formincrip5.celular5.value;

	  var emailRegex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
          /*var telRegex = /^\d{7}$/;
          var movilRegex = /^\d{9}$/;*/

        if(val==1){         
            if(nombres5 == "") {		
                inlineMsg('nombres5','Usted debe ingresar su nombre.',2);
                return false;
            }
            if(apellidos5 == "") {		
                inlineMsg('apellidos5','Usted debe ingresar su apellido.',2);
                return false;
            }
            if(email5 == "") {
                inlineMsg('email5','Debe introducir su correo electr&oacute;nico.',2);
                return false;
            }
            if(!email5.match(emailRegex)) {
                inlineMsg('email5','<strong>Error</strong><br />Ha introducido una direcci&oacute;n de correo electr&oacute;nico no es v&aacute;lida.',2);
                return false;
            }          
            if(telefono5 == "") {
                inlineMsg('telefono5','Usted debe ingresar su tel&eacute;fono.',2);
                return false;
            }
          
		         
            if(celular5== "") {	
                inlineMsg('celular5','Usted debe ingresar su celular.');
                return false;
            }
           
        }
	 	 
	
}














function new_contact(){
	
	$("#confirmacion").slideUp("slow",function(){
		$("#formulario").slideDown("fast",function(){
			$('#nombre').val("");
			$('#direccion').val("");
			$('#telefono').val("");
			$('#email').val("");
			$('#message').val("");
			$(".loadingn").text('');
		});	
	});
}
// START OF MESSAGE SCRIPT //

var MSGTIMER = 20;
var MSGSPEED = 5;
var MSGOFFSET = 3;
var MSGHIDE = 3;

// build out the divs, set attributes and call the fade function //
function inlineMsg(target,string,autohide) {
  var msg;
  var msgcontent;
  if(!document.getElementById('msg')) {
    msg = document.createElement('div');
    msg.id = 'msg';
    msgcontent = document.createElement('div');
    msgcontent.id = 'msgcontent';
    document.body.appendChild(msg);
    msg.appendChild(msgcontent);
    msg.style.filter = 'alpha(opacity=0)';
    msg.style.opacity = 0;
    msg.alpha = 0;
  } else {
    msg = document.getElementById('msg');
    msgcontent = document.getElementById('msgcontent');
  }
  msgcontent.innerHTML = string;
  msg.style.display = 'block';
  var msgheight = msg.offsetHeight;
  var targetdiv = document.getElementById(target);
  targetdiv.focus();
  var targetheight = targetdiv.offsetHeight;
  var targetwidth = targetdiv.offsetWidth;
  var topposition = topPosition(targetdiv) - ((msgheight - targetheight) / 2);
  var leftposition = leftPosition(targetdiv) + targetwidth + MSGOFFSET;
  msg.style.top = topposition + 'px';
  msg.style.left = leftposition + 'px';
  clearInterval(msg.timer);
  msg.timer = setInterval("fadeMsg(1)", MSGTIMER);
  if(!autohide) {
    autohide = MSGHIDE;  
  }
  window.setTimeout("hideMsg()", (autohide * 1000));
}

// hide the form alert //
function hideMsg(msg) {
  var msg = document.getElementById('msg');
  if(!msg.timer) {
    msg.timer = setInterval("fadeMsg(0)", MSGTIMER);
  }
}

// face the message box //
function fadeMsg(flag) {
  if(flag == null) {
    flag = 1;
  }
  var msg = document.getElementById('msg');
  var value;
  if(flag == 1) {
    value = msg.alpha + MSGSPEED;
  } else {
    value = msg.alpha - MSGSPEED;
  }
  msg.alpha = value;
  msg.style.opacity = (value / 100);
  msg.style.filter = 'alpha(opacity=' + value + ')';
  if(value >= 99) {
    clearInterval(msg.timer);
    msg.timer = null;
  } else if(value <= 1) {
    msg.style.display = "none";
    clearInterval(msg.timer);
  }
}

// calculate the position of the element in relation to the left of the browser //
function leftPosition(target) {
  var left = 10;
  if(target.offsetParent) {
    while(1) {
      left += target.offsetLeft;
      if(!target.offsetParent) {
        break;
      }
      target = target.offsetParent;
    }
  } else if(target.x) {
    left += target.x;
  }
  return left;
}

// calculate the position of the element in relation to the top of the browser window //
function topPosition(target) {
  var top = 0;
  if(target.offsetParent) {
    while(1) {
      top += target.offsetTop;
      if(!target.offsetParent) {
        break;
      }
      target = target.offsetParent;
    }
  } else if(target.y) {
    top += target.y;
  }
  return top;
}

// preload the arrow //
//if(document.images) {
//  arrow = new Image(7,80); 
//  arrow.src = "../imgs/msg_arrow.gif"; 
//}