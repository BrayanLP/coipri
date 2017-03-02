// JavaScript Document
$(document).ready(function(){

   /* $("#rang1").click(function(){
        $(this+" a").show();
    });
    $("#rang2").click(function(){
        $(this+" a").show();
    });  */  

$('.row_h').live('mouseover',function(){
$(this).attr('bgcolor','#FEF4D8');
})

$('.row_h').live('mouseout',function(){
$(this).attr('bgcolor','#C9C9C9');
})

	
	tinyMCE.init({
			mode:"specific_textareas",
			editor_selector : "tinymce",
			theme : "advanced",
			plugins : "pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,safari,advlink,imagemanager",
			theme_advanced_buttons1 : "bold,italic,underline,|,justifyleft,justifycenter,justifyright,justifyfull,|,formatselect,fontselect,fontsizeselect",
theme_advanced_buttons2 : "tablecontrols,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,code,|,forecolor",
theme_advanced_buttons3 : "",
theme_advanced_buttons4 : "",
			theme_advanced_toolbar_location : "top",
			theme_advanced_toolbar_align : "left"
	});

	
	
	
	var dates = $('#fechai, #fechaf').datepicker({
		showOn: "button",
		buttonImage: "../aplication/webroot/imgs/calendar.png",
		buttonImageOnly: true,
		maxDate: '+3M',
		dateFormat: 'dd/mm/yy',
		onSelect: function(selectedDate) {
			var option = this.id == "fechai" ? "minDate" : "maxDate";
			var instance = $(this).data("datepicker");
			var date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);
			dates.not(this).datepicker("option", option, date);
		}
	});
	
	 $('.date').datepicker({
		 showOn: "button",
		 buttonImage: "../aplication/webroot/imgs/calendar.png",
		 buttonImageOnly: true,
		 dateFormat: 'yy/mm/dd',
		 });
	
	$(".solo_numero").keyup(function(){
      if ($(this).val() != '')
         $(this).val($(this).attr('value').replace(/[^0-9]/g, ""));
    });

    $("#precio_publico").keyup( function(){

      /*  Precio nacional =Pn
          Precio privado = PP
          Precio extranjero= Pe
          Tipo de cambio dólar = T/C dólar

Si Pn <= 10, entonces Pp = Pn + 0.5(T/C dólar)
Si  10 < Pn <= 20, entonces Pp = Pn + 0.75(T/C dólar)
Si  20 < Pn <= 30, entonces Pp =Pn + 1(T/C dólar)
Si 30 < Pn <=40, entonces Pp =Pn + 1.3(T/C dólar)
Si 40 < Pn, entonces Pp =Pn + 1.6(T/C dólar)

En todo los casos, el Pe = Pp / (T/C dólar)

Todos los resultados deberan redeondearse a enteros por exceso. Ejemplo si me sale  un valor de 5.85, debera redondearse a 6.*/

       var Pn = parseFloat($("#precio_publico").val());
       var PP = parseFloat($("#precio_privado").val());
       var Pe = parseFloat($("#precio_extranjero").val());
       var tc = parseFloat($("#tipo_cambio").val());

       if(Pn<=10){
           PP = Pn + (0.5 *tc);
       }else if(Pn > 10 && Pn <= 20 ){
           PP = Pn + (0.75 * tc);
       }else if(Pn > 20 && Pn <= 30 ){
           PP = Pn + (1* tc);
       }else if(Pn > 30 && Pn <= 40 ){
           PP = Pn + (1.3 * tc);
       }else if(Pn > 40){
           PP = Pn + (1.6 * tc);
       }

       Pe = PP / tc;

       $("#precio_privado").val(PP.toFixed(1));
       $("#precio_extranjero").val(Pe.toFixed(1));

    });
	
	 $('.edit').editable('ajax.php?action=ConfirmarSaldoCliente', {
        indicator : 'Guardando...',
        tooltip   : '',
        callback : function(data) {
            //alert(data);
            if(data==0){
                alert("ERROR: No se acepta numeros negativos")
               
            }else{
            ConfirmarRecarga(data);
            }
            
        }
    });
	 
	 //$('.edit2').editable('ajax.php?action=ingresarSaldoCliente', {
         //indicator : 'Guardando...',
         //tooltip   : '',
	////	  cancel    : 'Cancel',
        // submit    : 'OK',
     //});
	 
	 
	/*$("#listadoul").sortable({
	  handle : '.handle',
	  update : function () {
		var order = $('#listadoul').sortable('serialize');
		pintar();
		$.get("ajax.php?"+order,{action:'ordenarCatProd'},function(data){
			
		});
	  }
	});*/
	
	
	
	
	$('.chk_horario').live('click', function(){

	   if($(this).is(":checked")){
		   $.get('ajax.php',{action:'saveHorarios', id:$(this).val()},function(data){
			   
			   
			   });
		   $(this).parent().attr('bgcolor','#8DB9DC');
	   }else{
		  $.get('ajax.php',{action:'deleteHorarios', id:$(this).val()},function(data){});
		  $(this).parent().attr('bgcolor','#C9C9C9');
	   }
		
 })	
	
	
	$('.tooltip').tipsy({gravity: 'n',fade: true});
	
	
	function pintar(){
		$("#listadoul li").each(function(x) {
			$(this).removeClass("fila1").removeClass("fila2");
			var w = 0;
			if(x%2==0){w = 2;}else{w = 1;}
			$(this).addClass("fila"+w);
		});
	}	
	
	$( "button, input:submit, input:reset, input:button" ).button();
	
	$( "select" ).combobox();
	
	$("input:file").filestyle({ 
          image: "../aplication/webroot/imgs/admin/examinar.jpg",
          imageheight : 27,
          imagewidth : 92,
          width : 143
      });
	  
	
	 setInterval(function() {
		 $(".notification").fadeOut(200);
	}, 3000);

	$("#info_user").dialog({
		autoOpen: false,
		height: 300,
		width: 350,
		resizable:false,
		buttons: {
			Cerrar: function() {
				$( this ).dialog( "close" );
			}
		}
	});	
	
	$("#saldo_cliente").dialog({
		autoOpen: false,
		height: 390,
		width: 370,
		resizable:false,
		buttons: {
			Cerrar: function() {
				$( this ).dialog( "close" );
			}
		}
	});	
	
	$("#ver_horario").dialog({
		autoOpen: false,
		height: 770,
		width: 550,
		resizable:false,
		buttons: {
			Cerrar: function() {
				$( this ).dialog( "close" );
			}
		}
	});	
	
	
	
	$('#welcome a').hover(function(){
		$(this).find('img').animate({top:'-5px'},{queue:false,duration:110});
	}, function(){
		$(this).find('img').animate({top:'0px'},{queue:false,duration:110});
	});
	
});

/*---------Validar Formulario Inscripciones-----------*/
    function valida_inscritos(){ 					
        if(document.inscritos.nro_asociado.value==""){
                alert('ERROR: El campo nro asociado debe llenarse');
                document.inscritos.nro_asociado.focus(); 
                return false;
        }						

        if(document.inscritos.apellidos.value==""){
                alert('ERROR: El campo apellidos debe llenarse');
                document.inscritos.apellidos.focus(); 
                return false;
        }						

        if(document.inscritos.empresa.value==""){
                alert('ERROR: El campo empresa debe llenarse');
                document.inscritos.empresa.focus(); 
                return false;
        }						

        if(document.inscritos.ruc.value==""){
                alert('ERROR: El campo ruc debe llenarse');
                document.inscritos.ruc.focus(); 
                return false;
        }						

        if(document.inscritos.cargo.value==""){
                alert('ERROR: El campo cargo debe llenarse');
                document.inscritos.cargo.focus(); 
                return false;
        }						

        if(document.inscritos.telefono.value==""){
                alert('ERROR: El campo telefono debe llenarse');
                document.inscritos.telefono.focus(); 
                return false;
        }						

        if(document.inscritos.email.value==""){
                alert('ERROR: El campo email debe llenarse');
                document.inscritos.email.focus(); 
                return false;
        }						

        if(document.inscritos.celular.value==""){
                alert('ERROR: El campo celular debe llenarse');
                document.inscritos.celular.focus(); 
                return false;
        }						

        if(document.inscritos.asesor_inmobiliario.value==""){
                alert('ERROR: El campo asesor inmobiliario debe llenarse');
                document.inscritos.asesor_inmobiliario.focus(); 
                return false;
        }						

        if(document.inscritos.reg_ministerio_vivienda.value==""){
                alert('ERROR: El campo reg ministerio vivienda debe llenarse');
                document.inscritos.reg_ministerio_vivienda.focus(); 
                return false;
        }						

        if(document.inscritos.nro_registro.value==""){
                alert('ERROR: El campo nro registro debe llenarse');
                document.inscritos.nro_registro.focus(); 
                return false;
        }						

        if(document.inscritos.almuerzo_dia_1.value==""){
                alert('ERROR: El campo almuerzo dia 1 debe llenarse');
                document.inscritos.almuerzo_dia_1.focus(); 
                return false;
        }						

        if(document.inscritos.desayuno_dia_2.value==""){
                alert('ERROR: El campo desayuno dia 2 debe llenarse');
                document.inscritos.desayuno_dia_2.focus(); 
                return false;
        }						

        if(document.inscritos.almuerzo_dia_2.value==""){
                alert('ERROR: El campo almuerzo dia 2 debe llenarse');
                document.inscritos.almuerzo_dia_2.focus(); 
                return false;
        }						

        if(document.inscritos.razon_social.value==""){
                alert('ERROR: El campo razon social debe llenarse');
                document.inscritos.razon_social.focus(); 
                return false;
        }						

        if(document.inscritos.ruc_facturacion.value==""){
                alert('ERROR: El campo ruc facturacion debe llenarse');
                document.inscritos.ruc_facturacion.focus(); 
                return false;
        }						

        if(document.inscritos.direccion.value==""){
                alert('ERROR: El campo direccion debe llenarse');
                document.inscritos.direccion.focus(); 
                return false;
        }						

        if(document.inscritos.ciudad.value==""){
                alert('ERROR: El campo ciudad debe llenarse');
                document.inscritos.ciudad.focus(); 
                return false;
        }						

        if(document.inscritos.distrito.value==""){
                alert('ERROR: El campo distrito debe llenarse');
                document.inscritos.distrito.focus(); 
                return false;
        }		
        
        document.inscritos.action="inscritos.php?action=add&id=1";
        document.inscritos.submit();
    }			
/*---------Fin Validadar-------------*/
function search_cliente(){
	var r = window.prompt('Buscar Cliente - Ingresa (apellido, nombre, email, universidad, especialidad)','');
	if(r != null){
		location.href = 'clientes.php?q='+r;
	}
}

function search_cliente_recarga(){
	var r = window.prompt('Buscar Cliente - Ingresa (Apellido o Nombre)','');
	if(r != null){
		location.href = 'historial_recargas.php?q='+r;
	}
}

function view_user(user){
	$.get('ajax.php',{action:'viewUser', id:user},function(data){
		$( "#info_user" ).html( data );
		$( "#info_user" ).dialog( "open" );
	});
}

function valida_solucionarios(opcion, id){
	var nombre = document.solucionarios.elements['nombre[]'];
	
	if(nombre.value == ""){ 
		alert("Ingrese el titulo");
		nombre.focus();
		return false;
	}else if(document.solucionarios.precio_publico.value == ""){
		alert("Ingrese el precio");
		document.solucionarios.precio_publico.focus();
		return false;
	}
	
	document.solucionarios.action="solucionarios.php?action="+opcion+"&id="+id;
	document.solucionarios.submit();
}	

function valida_categorias(opcion, id){
	var nombre = document.categorias.elements['nombre_categoria[]'];
	if(nombre.length > 0){
		for(i = 0; i< nombre.length; i++){
			if(nombre[i].value == ""){ 
				alert("Ingrese el nombre de la categoria");
				nombre[i].focus();
				return false;
			}
		}
	}else{
		if(nombre.value == ""){ 
			alert("Ingrese el nombre de la categoria");
			nombre.focus();
			return false;
		}
	}
	
	document.categorias.action="solucionarios.php?actioncat="+opcion+"&id="+id;
	document.categorias.submit();
}	

var testresults
function checkemail(value){
	var str = value
	var filter=/^.+@.+\..{2,3}$/
		if (filter.test(str))
		testresults=true
	else{
		alert("Por favor ingrese un e-mail valido...");
		testresults=false
	}
	return (testresults)
}


function mantenimiento(url,id,opcion){
	if(opcion!="delete"){ 
		location.replace(url+'?action='+opcion+'&id='+id);			
	}else if(opcion=="delete"){
		if(!confirm("Esta Seguro que desea Eliminar el Registro")){
			return false;	
		}else{
			location.replace(url+'?action='+opcion+'&id='+id);			
		}		
	}
}

function ConfirmarRecarga(datos){
            $(".edit").html("0.00");
            if(!confirm("Esta seguro de realizar la recarga de S/. "+datos.split('-')[2]+".00")){
                return false;
            }else{

                $.post("ajax.php?action=editarSaldoCliente",{data:datos},function(data){
                    $(".edit2").html();
                    $(".edit2").html(data);
                });
                
            }
}


function mantenimiento_cat(url,id,opcion){
	if(!confirm("Esta Seguro que desea Eliminar el Registro")){
		return false;	
	}else{
		location.replace(url+'?actioncat='+opcion+'&id='+id);			
	}		
}

function mantenimiento_det(url, id1){	
	location.replace(url+'?id1='+id1);			
}


function validar_delete(){
	if(!confirm("Esta Seguro que desea Eliminar el Registro")){
		return false;	
	}else{
		return true;	
	}	
}



function validnum(e) { 
	tecla = (document.all) ? e.keyCode : e.which; 
	//alert(tecla)
    if (tecla == 8 || tecla == 46 || tecla == 0) return true; //Tecla de retroceso (para poder borrar) 
    // dejar la l�nea de patron que se necesite y borrar el resto 
    //patron =/[A-Za-z]/; // Solo acepta letras 
     patron = /[\d]/; // Solo acepta n�meros
    //patron = /\w/; // Acepta n�meros y letras 
    //patron = /\D/; // No acepta n�meros 
    // patron = /[\d.-]/; numeros el punto y el signo -
    te = String.fromCharCode(tecla); 
    return patron.test(te);  
	// uso  onKeyPress="return validnum(event)"
}

function validar_tutoria(){
  if(document.f1.tutores.value==0){
	 alert("Asigne un Tutor");
	 return false;  
  }
  document.f1.submit();
}


function valida_usuarios(action,id){ 					
								if(document.usuarios.id_rol.value==""){
									alert('ERROR: El campo  rol debe llenarse');
									document.usuarios.id_rol.focus(); 
									return false;
								}						
													
								if(document.usuarios.nombre_usuario.value==""){
									alert('ERROR: El campo nombre usuario debe llenarse');
									document.usuarios.nombre_usuario.focus(); 
									return false;
								}						
													
								if(document.usuarios.apellidos_usuario.value==""){
									alert('ERROR: El campo apellidos usuario debe llenarse');
									document.usuarios.apellidos_usuario.focus(); 
									return false;
								}						
													
								if(document.usuarios.email_usuario.value==""){
									alert('ERROR: El campo email usuario debe llenarse');
									document.usuarios.email_usuario.focus(); 
									return false;
								}						
													
								if(document.usuarios.login_usuario.value==""){
									alert('ERROR: El campo login usuario debe llenarse');
									document.usuarios.login_usuario.focus(); 
									return false;
								}						
								if(action=="add"){					
								if(document.usuarios.password_usuario.value==""){
									alert('ERROR: El campo password usuario debe llenarse');
									document.usuarios.password_usuario.focus(); 
									return false;
								}						
								}
								document.usuarios.action="usuarios.php?action="+action+"&id="+id;
				document.usuarios.submit();
			}			

function removerDiv(HijoE){
	$("#"+HijoE).fadeOut('slow', function() {$(this).remove();}); 
}

function delete_imagen(opcion){
	var f1 = eval("document.f1");
	$("#msg_delete").hide();
	if(f1.chkimag.length > 0){
		for(var i=0; i < f1.chkimag.length; i++){
			if(f1.chkimag[i].checked == 1){			
				var id = f1.chkimag[i].value;
				$(".imagen" + id).fadeOut('slow');
				$("#msg_delete").load("delete_imagen.php?id="+id+"&opcion="+opcion).fadeIn("slow");
				$("#imgp").fadeOut("slow");
			}
		}
	}else{
		if(f1.chkimag.checked == 1){			
			var id = f1.chkimag.value;
			$(".imagen" + id).fadeOut('slow');
			$("#msg_delete").load("delete_imagen.php?id="+id+"&opcion="+opcion).fadeIn("slow");
			$("#imgp").fadeOut("slow");
		}	
	}	 			
}

function saldo_cliente(id, name){
	$.get('ajax.php',{action:'viewSaldoCliente', id:id},function(data){
		
		$( "#saldo_cliente" ).html( data );
		$( "#saldo_cliente" ).dialog( "open" );
		$( "#saldo_cliente" ).attr( "title", name );
	});
}

function verHorario(id){
	$.get('ajax.php',{action:'viewHorario', id:id},function(data){
		
		$( "#ver_horario" ).html( data );
		$( "#ver_horario" ).dialog( "open" );
		$( "#ver_horario" ).attr( "title", name );
	});
}

function searchPedidos(){
	$.post('ajax.php?action=reportePedidos',{numero:$("#numero").val(), estado:$("#estado").val(), fechai:$("#fechai").val(),  fechaf:$("#fechaf").val()} ,function(data){
           
		$("#listado_pedidos").html(data);
	});		
}


function searchPedidosExt(){
	$.post('ajax.php?action=reportePedidosExt',{numero:$("#numero").val(), estado:$("#estado").val(), fechai:$("#fechai").val(),  fechaf:$("#fechaf").val()} ,function(data){

		$("#listado_pedidos").html(data);
	});
}

function searchProductos(){
	$.post('ajax.php?action=reporteProductos',{nombre:$("#nombre").val(), categorias:$("#categorias").val(), signo:$("#signo").val(), precio:$("#precio").val()} ,function(data){
		$("#listado_prods").html(data);
	});		
}

function searchTutorias(){
	$.post('ajax.php?action=reporteTutorias',{estado:$("#estado").val(), fechai:$("#fechai").val(),  fechaf:$("#fechaf").val()} ,function(data){
		$("#listado_tutorias").html(data);
	});
}


function cargarProducto(){ 
	//var d1,contenedor; 
	alert("hola");
	contenedor = document.getElementById('listado_prods'); 
	d1 = $("#categorias").val(); 
	ajax = nuevoAjax(); 
	ajax.open("GET", "procesa_categoria.php?edo="+d1+"&id="+$("#id_producto").val(),true); 
	ajax.onreadystatechange=function(){ 
		if (ajax.readyState==4) { 
		   contenedor.innerHTML = ajax.responseText 
		} 
	} 
	ajax.send(null)
} 


function saveRelacion(val){
	$.post('ajax.php?action=saveRelacion',{id:$("#id_producto").val(), id_p:val} ,function(data){
			
	});
}

function guardaValor(id){
	
	/*if($('#'+id).is(":checked")){
		$('#CELDA-'+id).attr('bgcolor','#000000');
	}else{
		$('#CELDA-'+id).attr('bgcolor','#C9C9C9');
	}*/
	
}