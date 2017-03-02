<?php
    include("inc.aplication_top.php");
   
 ?>
	   
	   <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
       
        <?php 
		
			/* -------------------------------expo1-------------------------------------------------- */
$titulof='COIPRI 2014: Expositores';
$imagenf='http://coipri.pe/images/face/coipri-expositores.jpg';
$descfac='Conozca a los importantes expositores para Coipri 2014 y compártalo con sus allegados.';
	
	
	
	if(isset($_GET['fk'])){
	switch($_GET['fk']){
		
		case 1:
		$titulof='Arq. Ricardo Arbulú Soto';
		$imagenf='http://coipri.pe/images/face/1.jpg';
		$descfac='El Arquitecto Ricardo Arbulú Soto es egresado de la Universidad Ricardo Palma, es Master en Dirección de Empresas Constructoras e Inmobiliarias por la Universidad Politécnica de Madrid; es Master en Dirección de Empresas por la Universidad de Piura – Medex; es Gerente General de Ciudaris S.A., es Gerente General de Conssolida S.A., es Gerente General de Plusvalía Consultores Inmobiliarios S.A. Docente en la Maestría en Dirección de Empresas Constructoras e Inmobiliarias MDI - Universidad Católica el Perú; es Consultor y Evaluador de Proyectos del Banco Continental BBVA, Banco Financiero, BANBIF e Interbank; Presidente del Comité General de Obras de Edificación de CAPECO; es Presidente de la Asociación de Empresas Inmobiliarias del Perú – ASEI.'; 
		break;
		
		case 2:
		$titulof='Jose Antonio Arbulú Soto';
		$imagenf='http://coipri.pe/images/face/2.jpg';
		$descfac='Abogado graduado por la Universidad de Lima. Postgrado de Especialización en Desarrollo y Gestión de Proyectos Inmobiliarios en la Universidad ESAN, y Postgrado de Especialización en Derecho Tributario por la Univ. de Lima.
Gerente Legal de las empresas Ciudaris Consultores Inmobiliarios y Plusvalía Consultores Inmobiliarios. Formación basada especialmente en la prevención de conflictos y técnicas de negociación. Más de dieciocho años en el ejercicio profesional relacionado con operaciones inmobiliarias, estudio de títulos y contratación en general. Profesor invitado de la Universidad ESAN, UNI, y UTP'; 
		break;
		
		case 3:
		$titulof='Steve Brown';
		$imagenf='http://coipri.pe/images/face/3.jpg';
		$descfac='Steve Brown Estudio en la Universidad de Indiana, graduado en Teología y Psicología. Presidente de NAR (NATIONAL ASSOCIATION OF REALTORS) 2014. Copropietario de IRONGATE INC REALTORS, con 6 oficinas y 300 agentes inmobiliarios.Distinguido con el premio AWARD OF DISTINTION en Ohio desde el 2002. Desde el 2005, ha mantenido un liderazgo en NAR, 2012 fue Primer Vicepresidente. '; 
		break;
		
		
		
		case 4:
		$titulof='Arq. José García Calderón';
		$imagenf='http://coipri.pe/images/face/42.jpg';
		$descfac='Arquitecto. Facultad de Arquitectura, Urbanismo y Arte de La UNI. Maestría en Arquitectura. Gestión de Proyectos para el Desarrollo en la Universidad de Turin. Consultor de entidades públicas (Instituto Metropolitano de Planificación y Serper). Profesor de la Facultad de Arquitectura de La UPC (Urbanismo y Diseño Arquitectónico). Actualmente Profesor en la Facultad de Arquitectura Urbanismo y Artes de la UNI. Y a cargo de la Dirección del Plan Metropolitano de Desarrollo Urbano 2035. Conferencias en México, Bogotá y Madrid. '; 
		break;
		
		
		
		case 5:
		$titulof='Julio Velarde';
		$imagenf='http://coipri.pe/images/face/5.jpg';
		$descfac='Preparación Académica. Economista, Universidad del Pacífico, Lima, Perú. 1974. M. A. y Ph.D (c) en Economía, Universidad de Brown, USA. 1978. Experiencia Profesional .Actualmente : Presidente del Banco Central de Reserva del Perú, desde octubre 2006. Gobernador del Fondo Monetario Internacional, Director del Fondo Latinoamericano de Reservas
Ha sido: Presidente Ejecutivo del Fondo Latinoamericano de Reservas, 2004 hasta octubre 2006.    Director del Banco Central de Reserva del Perú, 1990-1992 y de 2001 a 2003.    Director de varias empresas    Consultor de Organismos Internacionales    Universidad de Pacífico , 1986 - 2003    Decano de la Facultad de Economía,    Jefe del Departamento de Economía,    Investigador y Profesor Principal.Publicaciones y Trabajos de Investigación referidos a temas monetarios y financieros.'; 
		break;
		
		case 6:
		$titulof='Arnaldo Aguirre Brou';
		$imagenf='http://coipri.pe/images/face/6.jpg';
		$descfac='MBA con 25 años de experiencia nacional e internacional gerenciando las áreas de Marketing y Ventas en empresas nacionales y multinacionales líderes en la comercialización de productos de consumo masivo y de servicios financieros. Orientado al diseño e implementación de estrategias dirigidas a agregar valor y aumentar la rentabilidad. Experto en el diseño y dirección de canales de distribución, desarrollo y lanzamiento de nuevos productos, atención al cliente, publicidad y relaciones públicas. Bilingüe Ingles/Español. '; 
		break;
		
	case 7:
		$titulof='Percy Vigil';
		$imagenf='http://coipri.pe/images/face/7.jpg';
		$descfac='Profesor afiliado al área de Marketing de la Universidad ESAN. Ingeniero industrial con MBA, ESAN.'; 
		break;
	
	
	
	case 8:
		$titulof='Alfonso Gordon';
		$imagenf='http://coipri.pe/images/face/8.jpg';
		$descfac='Comenzó su carrera inmobiliaria en 1998 con CENTURY 21. 1999 al 2006 Primer Director de Operaciones de la marca en  España Desde 2006 a 2008  el Director de Operaciones de ERA, a cargo de todas las áreas de Servicios al Franquiciado (Marketing, tecnología, Formación, Consultoría, etc.), así como de las relaciones internacionales con el resto de Master Franquicias mundiales. Desde el 2008  a cargo de las Relaciones Internacionales de la Patronal AEGI, siendo miembro del consejo durante los años 2011 y 2012. Miembro internacional de NAR, desempeñando varios cargos como son: Instructor CIPS, miembro del Leadership Academy de NAR, miembro del Board of Directors 2013, etc... Experiencia en la creación y consolidación de Máster Franquicias, así como en el establecimiento de relaciones con asociaciones y compañías de Latino América, Europa y Estados Unidos.
'; 
		break;	
		
		
		
	case 9:
		$titulof='Enrique Cabrera Otero';
		$imagenf='http://coipri.pe/images/face/9.jpg';
		$descfac='Máster en vivienda (UNIVERSIDAD FEDERICO VILLAREAL), Postgrado en Finanzas (ESAN)'; 
		break;		
		
	
	
		
		
		
	case 10:
		$titulof='Angélica M. Portillo Flores';
		$imagenf='http://coipri.pe/images/face/10.jpg';
		$descfac='Abogada egresada de la Universidad Nacional Mayor de San Marcos. Magister en Administración y Gerencia Pública por la Universidad Alcalá de Henares (España), Postgrado de especialización en Derecho Registral por la Universidad de Córdoba (España). Postgrado de especialización en materia catastral por el Instituto de Estudios Fiscales en Madrid (España). '; 
		break;		
		
	
	
		
	case 11:
		$titulof='Mario Stefanoli';
		$imagenf='http://coipri.pe/images/face/11.jpg';
		$descfac='Presidente de la Asociación Americana de Rematadores, Corredores Inmobiliarios y Balanceadores.  Presidente de la Asociación Nacional de Rematadores, Tasadores y Corredores Inmobiliarios – ANRTCI.'; 
		break;		
		
	
		
		
	case 12:
		$titulof='Francisco Pesserl';
		$imagenf='http://coipri.pe/images/face/12.jpg';
		$descfac='Consultor – Asesor de la Presidencia de COFECI desde el 2005. Ingeniero químico y gestor de negocios inmobiliarios.'; 
		break;		
		
		
	case 13:
		$titulof='Eric Rey de Castro';
		$imagenf='http://coipri.pe/images/face/13.jpg';
		$descfac='Bachiller en Administración de Empresas en la Universidad del Pacífico. Especialización en CRE en Colliers University y la Mc Donald´s University.'; 
		break;			
		
		
		
		case 14:
		$titulof='Francisco Angulo';
		$imagenf='http://coipri.pe/images/face/14.jpg';
		$descfac='Licenciado en Administración de Empresas y Contabilidad de la Universidad Andrés Bello de Caracas.'; 
		break;			
		
		
		
		case 15:
		$titulof='Carlos María Ipuche';
		$imagenf='http://coipri.pe/images/face/15.jpg';
		$descfac='Presidente del colegio de Martilleros y Corredores Públicos de San Isidro (CMCPSI), Buenos Aires – Argentina, cargo que desempeña desde el año 2004.'; 
		break;			
		
		case 16:
		$titulof='Frederico Mendonca';
		$imagenf='http://coipri.pe/images/face/16.jpg';
		$descfac='Abogado, Corredor Inmobiliario. Experto en Valuaciones de Inmuebles.'; 
		break;			
		
		case 17:
		$titulof='Luiz Fernando Barcellos';
		$imagenf='http://coipri.pe/images/face/17.jpg';
		$descfac='Ingeniero, Empresario y Profesional Inmobiliario.'; 
		break;			
		
		case 18:
		$titulof='Aurora Rodríguez Valdivia';
		$imagenf='http://coipri.pe/images/face/43.jpg';
		$descfac='Magíster en Gestión y Desarrollo Inmobiliario'; 
		break;		
		
		case 19:
		$titulof='Philip Reiser';
		$imagenf='http://coipri.pe/images/face/19.jpg';
		$descfac='Consultor en Proyectos de Desarrollo, Infraestructura e Inmobiliarios'; 
		break;	
		
		
		case 20:
		$titulof='Carlos Paredes Rodriguez';
		$imagenf='http://coipri.pe/images/face/20.jpg';
		$descfac='Ministro de Transportes y Comunicaciones'; 
		break;	
		
	
		}			
		
	}


	?>
    
    
<meta property="og:title" content="<?php echo htmlspecialchars($titulof); ?>"/>
<meta property="og:image" content="<?php echo $imagenf; ?>"/>
<meta property="og:description" content="<?php echo htmlspecialchars($descfac); ?>"/>
	

	
		
		
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo NOMBRE_SITIO ?></title>
           
        <link href="aplication/webroot/css/core.css" rel="stylesheet" type="text/css" />
        <link href="aplication/webroot/css/message.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="aplication/webroot/js/jquery-1.4.2.min.js"></script>
        <script type="text/javascript" src="aplication/webroot/js/js.js"></script>
        <script type="text/javascript" src="aplication/webroot/js/messages.js"></script>
        <script type="text/javascript" src="aplication/webroot/js/AC_RunActiveContent.js"></script>
        
        <!--Intro-->
        <script type='text/javascript' src='aplication/webroot/js/jquery.cookies.js'></script>        
        <script type="text/javascript">
            $(document).ready(function() {
                //Intro una vez
                if( $.cookie('intro') ){
                    $("#intro").hide();
                    $("#banner .expose-banner").removeAttr("style")
                    $("#loading-image").show();
                    $("#window,#footer").show();                    
                } else {

                }                
            });          
        </script>
        <!-- Slider -->
        <link rel="stylesheet" type="text/css" media="all" href="aplication/webroot/css/slider.css" />       
        <script type="text/javascript" src="aplication/webroot/js/jquery.nivo.slider.pack.js"></script>        
        
        <!--Varios-->
        <script type='text/javascript' src='aplication/webroot/js/jquery.easing.1.3.js'></script>
        <script type='text/javascript' src='aplication/webroot/js/bxSlider.js'></script>
        <link rel="stylesheet" type="text/css" media="all" href="aplication/webroot/css/bxSlider.css"/>	     
        <script type="text/javascript">
        (function($){	
          $(function(){
              
            /*-------Auspiciadores--------*/
            $('#auxpix').bxSlider({
               mode: 'fade',
               auto: true,
               controls: false,
               randomStart: true
            });              
              
            /*-------Rotator News------*/  
            $('#rotatenews').bxSlider({
                speed: 1000,
                pause: 5000,
                auto: true,
               randomStart: true              
            });
                        
            /*-----Expositores-----*/
           
		   
			
		    $('#slider1').bxSlider({
              displaySlideQty: 3,
              moveSlideQty: 1,
              speed: 1000,
              autoHover:true,
              tickerHover: true,
              auto: false,
              randomStart: true               
            });       
            
            /*-------Auspiciadores--------*/
            $('#auxpix2').bxSlider({
               mode: 'fade',
               auto: true,
               controls: false,
               randomStart: true
            });
          });	
        }(jQuery))
        </script>  
        <?php
		 if((strstr($_SERVER['PHP_SELF'], 'index.php'))){
		
           
        ?>    
        <!--Contador-->        
        <link href="aplication/webroot/css/jquery.countdown.css" rel="stylesheet" type="text/css" />
        <link href="aplication/webroot/css/style.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="aplication/webroot/js/jquery.countdown.js"></script>
        <script type="text/javascript">
        var endDay = new Date();
        endDay = new Date(2014, 12-7, 3);
        </script>
        <script language="JavaScript" src="aplication/webroot/js/script.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){
            applyCountDown();
			
        });
        </script>           
        
        <!--Despues de Cargado pagina-->
        <script>
            $(window).load(function() {
                if( $.cookie('intro') ){

                } else {
                    $("#loading-image").hide();
                    $("#window,#footer").hide();                    
                    $("#ingresar").click(function(){
                        var date = new Date();
                        date.setTime(date.getTime() + (5 * 60 * 1000));			
                        $.cookie('intro', 'intro');                        
                        $("#banner .expose-banner").animate({left: "-150px"}, 1500);
                        $("#intro").animate({margin: "-870px 0 0 0"}, 1500);
                        $("#window").show();
                        $("#footer").show();
                    }); 
                }

            });            
        </script>
        <?php
            }else{
        ?>
        <script type="text/javascript">
            $(document).ready(function(){
                setTimeout(function(){ 
                        $('body,html').animate({
                            scrollTop: 500
                        },1000);
                }, 900);                 
            })
        </script>       
        <?php
            }
        ?>              
        <?php
            if((strstr($_SERVER['PHP_SELF'], 'expositores.php'))){
        ?>
        <link href="aplication/webroot/css/jsScrollbar.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="aplication/webroot/js/jsScroller.js"></script>
        <script type="text/javascript" src="aplication/webroot/js/jsScrollbar.js"></script>
        <script type="text/javascript">
            var scroller  = null;
            var scrollbar = null;
            window.onload = function () {
                scroller  = new jsScroller(document.getElementById("Scroller"), 500, 355);
                scrollbar = new jsScrollbar(document.getElementById("Scrollbar-Container"), scroller, false);
            }
        </script>        
        <?php
            }
        ?>          
        <?php
            if((strstr($_SERVER['PHP_SELF'], 'inscribete.php'))){
        ?>
        <!-- Formulario Inscríbete -->
        <script type='text/javascript' src='aplication/webroot/js/messages.js'></script>
        
        <link rel="stylesheet" type="text/css" media="all" href="aplication/webroot/css/form-inscribete.css" />
        <link rel="stylesheet" type="text/css" media="all" href="aplication/webroot/css/jqtransform.css"/>
        <script type='text/javascript' src='aplication/webroot/js/jqtransform.js'></script>	
        <script type="text/javascript">
            /*-----Formulario Incrírbete--------*/
            $('#formincrip').jqTransform({imgPath:'aplication/webroot/imgs/img-forms/'});          
        </script>
        <?php
            }
        ?>  
        <?php
            if((strstr($_SERVER['PHP_SELF'], 'noticias.php'))){
        ?>        
        <!-- Noticias Efectos 
        <link rel="stylesheet" type="text/css" media="all" href="aplication/webroot/css/jquery.tools.css" /> 
        <script type="text/javascript" src="http://cdn.jquerytools.org/1.2.6/full/jquery.tools.min.js"></script>     
        <script>
          $(function() {
              $("ul.css-tabs").tabs("div.css-panes > div", {effect: 'ajax'});
          });
        </script>  -->      
        <?php
            }
        ?>   
        
        <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49507226-1', 'coipri.pe');
  ga('send', 'pageview');

</script>  

	 <script>

   
	   window.onload=function(){setTimeout("Movimiento(<?php echo ($_GET['fk']); ?>)",1500)};
	   
	 
   
   </script>      
    </head>
       
       
       

<body>
  <style>
  #cajafk1{opacity:0.3}
  #cajafk2{opacity:0.3}
  #cajafk3{opacity:0.3}
  #cajafk4{opacity:0.3}
  #cajafk5{opacity:0.3}
  #cajafk6{opacity:0.3}
  #cajafk7{opacity:0.3}
  #cajafk8{opacity:0.3}
  #cajafk9{opacity:0.3}
  #cajafk10{opacity:0.3}
  #cajafk11{opacity:0.3}
  #cajafk12{opacity:0.3}
  #cajafk13{opacity:0.3}
  #cajafk14{opacity:0.3}
  #cajafk15{opacity:0.3}
  #cajafk16{opacity:0.3}
  #cajafk17{opacity:0.3}
  #cajafk18{opacity:0.3}
  #cajafk19{opacity:0.3}
  #cajafk20{opacity:0.3}

  
  .flechaactiva{ 
    background: url("lineselect.png") no-repeat scroll 0 0 rgba(0, 0, 0, 0);
    display: none;
    height: 95px;
    margin-left: 256px;
    margin-top: -33px;
    position: absolute;
    width: 26px;}
  
  
/* ----------------------------------sidebar-left----------------------------------------*/

.sidebar-left{width:290px;min-height:500px;float:left;}




.active-list a{font-weight:bold;color:#043567 !important;font-size:13px;text-shadow:0px 1px 1px #FFF;margin-left:10px;background:url(../images/un-bullet.png) no-repeat center left !important;width:150px;height:14px}

.list-sidebar li{height:27px;}

.list-sidebar a{font-family:DroidSansRegular !important;color:#043567;font-size:12px;text-shadow:0px 1px 1px #FFF;margin-left:10px;background:url(../images/do-bullet.png) no-repeat center left;width:150px;height:14px;padding-left:19px;text-decoration:none !important;}


.list-sidebar li:hover a{color:#043567 !important;font-size:13px;text-shadow:0px 1px 1px #FFF;margin-left:10px;background:url(../images/un-bullet2.png) no-repeat center left !important;width:150px;height:14px;}


/* ----------------------------------contetnt-right----------------------------------------*/

.content-right{width:630px;min-height:500px;float:left;margin-left:30px;padding-top:20px;}

.titulo-content-r{font-family:kenyancoffeerg !important;font-size:26px;color:#E3001D;text-shadow:0px 1px 1px #FFF;width:100%;height:30px;margin-bottom:45px;}


/*promocion*/
.titulo-content-rp{font-family:kenyancoffeerg !important;font-size:26px;color:#E3001D;text-shadow:0px 1px 1px #FFF;background:url(../images/content-line.png) repeat-x bottom left;width:940px;height:30px;margin:0 auto;margin-bottom:45px;}

.subtitulo-content-rp{font-family:Arial, Helvetica, sans-serif !important;font-size:12px;color:#777777;text-shadow:0px 1px 1px #FFF;width:940px;height:30px;margin:0 auto;margin-bottom:45px;}

.titpromoc{font-family:kenyancoffeerg !important;font-size:22px;color:#4C4C4C;text-shadow:0px 1px 1px #FFF;text-align:center;padding-bottom:15px;}

.fancybox img{width:400px;padding:6px 6px 40px 6px;}

.imagpromo{background:url(../images/bg-promo.png) repeat !important;width:400px;min-height:400px;position:absolute;margin-top:12px;margin-left:12px;display:none;}


.bxslider li:hover > .imagpromo,.vermas {display:block;}

.menufixe{ background: url("linea-noticias.png") repeat-y scroll right top rgba(0, 0, 0, 0);
    height: auto;
    margin-top: 20px;
    position: absolute;
    width: 290px;
    z-index: 1;
}
.menufixe1{background: url("linea-noticias1.png") no-repeat scroll right top rgba(0, 0, 0, 0);
    height: 23px;
    margin-top: -3px;
    position: absolute;
    width: 289px;
    z-index: 1;}
	
.menufixe2 {
    background: url("linea-noticias2.png") no-repeat scroll right top rgba(0, 0, 0, 0);
    height: 46px;
    position: absolute;
    width: 289px;
    z-index: 1;
}	
	.active-list .flechaactiva{display:block}
	
.list-sidebar li{padding-top:5px;padding-left:15px;}

.alto10{height:10px;width:100%;}




#menuside1{list-style:none !important;background:url(images/thumbs/1.jpg) 0 2px  no-repeat !important;}
#menuside2{list-style:none !important;background:url(images/thumbs/2.jpg) 0 2px  no-repeat !important;}
#menuside3{list-style:none !important;background:url(images/thumbs/3.jpg) 0 2px  no-repeat !important;}
#menuside4{list-style:none !important;background:url(images/thumbs/4.jpg) 0 2px  no-repeat !important;}
#menuside5{list-style:none !important;background:url(images/thumbs/5.jpg) 0 2px  no-repeat !important;}
#menuside6{list-style:none !important;background:url(images/thumbs/6.jpg) 0 2px  no-repeat !important;}
#menuside7{list-style:none !important;background:url(images/thumbs/7.jpg) 0 2px  no-repeat !important;}
#menuside8{list-style:none !important;background:url(images/thumbs/8.jpg) 0 2px  no-repeat !important;}
#menuside9{list-style:none !important;background:url(images/thumbs/9.jpg) 0 2px  no-repeat !important;}
#menuside10{list-style:none !important;background:url(images/thumbs/10.jpg) 0 2px  no-repeat !important;}
#menuside11{list-style:none !important;background:url(images/thumbs/11.jpg) 0 2px  no-repeat !important;}
#menuside12{list-style:none !important;background:url(images/thumbs/12.jpg) 0 2px  no-repeat !important;}
#menuside13{list-style:none !important;background:url(images/thumbs/13.jpg) 0 2px  no-repeat !important;}
#menuside14{list-style:none !important;background:url(images/thumbs/14.jpg) 0 2px  no-repeat !important;}
#menuside15{list-style:none !important;background:url(images/thumbs/15.jpg) 0 2px  no-repeat !important;}
#menuside16{list-style:none !important;background:url(images/thumbs/16.jpg) 0 2px  no-repeat !important;}
#menuside17{list-style:none !important;background:url(images/thumbs/17.jpg) 0 2px  no-repeat !important;}
#menuside18{list-style:none !important;background:url(images/thumbs/43.jpg) 0 2px  no-repeat !important;}
#menuside19{list-style:none !important;background:url(images/thumbs/19.jpg) 0 2px  no-repeat !important;}
#menuside20{list-style:none !important;background:url(images/thumbs/20.jpg) 0 2px  no-repeat !important;}



.peru{ background: url("images/peru.jpg") no-repeat scroll 0 0 rgba(0, 0, 0, 0);
    height: 11px;
    margin-left: 203px;
    margin-top: 2px;
    position: absolute;
    width: 20px;}
.eeuu{ background: url("images/eeuu.jpg") no-repeat scroll 0 0 rgba(0, 0, 0, 0);
   
    height: 12px;
    margin-left: 203px;
    margin-top: 2px;
    position: absolute;
    width: 20px;}
	
.espa{ background: url("images/espa.jpg") no-repeat scroll 0 0 rgba(0, 0, 0, 0);
   
    height: 12px;
    margin-left: 203px;
    margin-top: 2px;
    position: absolute;
    width: 20px;}	
	
.urug{ background: url("images/urug.jpg") no-repeat scroll 0 0 rgba(0, 0, 0, 0);
   
    height: 12px;
    margin-left: 203px;
    margin-top: 2px;
    position: absolute;
    width: 20px;}	

.bras{ background: url("images/bras.jpg") no-repeat scroll 0 0 rgba(0, 0, 0, 0);
   
    height: 12px;
    margin-left: 203px;
    margin-top: 2px;
    position: absolute;
    width: 20px;}	

.colo{ background: url("images/colo.jpg") no-repeat scroll 0 0 rgba(0, 0, 0, 0);
   
    height: 12px;
    margin-left: 203px;
    margin-top: 2px;
    position: absolute;
    width: 20px;}	

.arge{ background: url("images/arge.jpg") no-repeat scroll 0 0 rgba(0, 0, 0, 0);
   
    height: 12px;
    margin-left: 203px;
    margin-top: 2px;
    position: absolute;
    width: 20px;}	
			
	
	
	
	
	
.img-expositor{width:150px;height:220px;float:left;}	
.datos-expositor{width:480px;height:220px;float:left;}
	
.datos-expositor p{text-align:right}
.clear{clear:left;}
.titulo-expositor{font-family:DroidSansRegular;
font-size:33px;
line-height:127%;
color:rgb(4,53,103);
text-align:right;
}
.cargo-expositor{font-family:Arial, Helvetica, sans-serif;
font-size:18px;
font-style:italic;
line-height:100%;
color:rgb(46,153,178);
text-align:right;
}

.h35{width:100%;height:35px;}

	.texto-content-r{font-family:DroidSansRegular;
font-size:13px;
line-height:146%;
color:rgb(89,89,89);
text-align:justify;
}

.linea{background:url(images/linea.png) no-repeat;width:630px;height:2px;margin:0 auto;}

.bulletfk1 li{background:url(images/bullet.png) no-repeat 17px 6px;list-style:none !important;   padding-left: 35px;}
.bulletfk2 li{background:url(images/bullet2.png) no-repeat 58px 6px;list-style:none !important;   padding-left: 73px;}

.redesexpositores p{text-align:right;margin-top:40px;}


  </style>   
     
     
        <div id="window">
            <?php
                include(_includes_ . "inc.top.php");
            ?>  
            <div id="contenedor" style="overflow:visible">
                <div id="pagina" style="overflow:visible">
                    <div id="contenido" style="overflow:visible">
                    	<h2 style="margin: 0 0 10px -25px">Expositores</h2>
                        
                        
                        
                        
                        
                        <div class="sidebar-left">


<div id="sidebar" class="colno1">

<div class="menufixe1"></div>
<div class="menufixe">
<ul class="list-sidebar">


<li id="menuside20" class="active-list fkli"><span class="peru"></span><a  href="javascript:void(0)"  onclick="Movimiento(20)">Carlos Paredes Rodriguez</a><span class="flechaactiva"></span></li>

<li id="menuside5" class="active-list fkli"><span class="peru"></span><a  href="javascript:void(0)"  onclick="Movimiento(5)">Julio Velarde </a><span class="flechaactiva"></span></li>

<li id="menuside6" class="fkli"><span class="peru"></span><a  href="javascript:void(0)"  onclick="Movimiento(6)">Arnaldo Aguirre Brou</a><span class="flechaactiva"></span></li>

<li id="menuside8" class="fkli"><span class="espa"></span><a  href="javascript:void(0)"  onclick="Movimiento(8)">Alfonso Gordon</a><span class="flechaactiva"></span></li>

<li id="menuside10" class="fkli"><span class="peru"></span><a  href="javascript:void(0)"  onclick="Movimiento(10)">Angélica M. Portillo Flores</a><span class="flechaactiva"></span></li>

<li id="menuside18" class="fkli"><span class="peru"></span><a  href="javascript:void(0)"  onclick="Movimiento(18)">Aurora Rodríguez Valdivia</a><span class="flechaactiva"></span></li>

<li id="menuside15" class="fkli"><span class="arge"></span><a  href="javascript:void(0)"  onclick="Movimiento(15)">Carlos María Ipuche</a><span class="flechaactiva"></span></li>

<li id="menuside9" class="fkli"><span class="peru"></span><a  href="javascript:void(0)"  onclick="Movimiento(9)">Enrique Cabrera Otero</a><span class="flechaactiva"></span></li>

<li id="menuside13" class="fkli"><span class="peru"></span><a  href="javascript:void(0)"  onclick="Movimiento(13)">Eric Rey de Castro</a><span class="flechaactiva"></span></li>

<li id="menuside14" class="fkli"><span class="eeuu"></span><a  href="javascript:void(0)"  onclick="Movimiento(14)">Francisco Angulo</a><span class="flechaactiva"></span></li>

<li id="menuside12" class="fkli"><span class="bras"></span><a  href="javascript:void(0)"  onclick="Movimiento(12)">Francisco Pesserl</a><span class="flechaactiva"></span></li>

<li id="menuside16" class="fkli"><span class="bras"></span><a  href="javascript:void(0)"  onclick="Movimiento(16)">Frederico Mendonca</a><span class="flechaactiva"></span></li>

<li id="menuside2" class="fkli"><span class="peru"></span><a  href="javascript:void(0)"  onclick="Movimiento(2)">Jose Antonio Arbulú Soto</a><span class="flechaactiva"></span></li>

<li id="menuside4" class="fkli"><span class="peru"></span><a  href="javascript:void(0)"  onclick="Movimiento(4)">Arq. José García Calderón</a><span class="flechaactiva"></span></li>

<li id="menuside17" class="fkli"><span class="bras"></span><a  href="javascript:void(0)"  onclick="Movimiento(17)">Luiz Fernando Barcellos</a><span class="flechaactiva"></span></li>

<li id="menuside11" class="fkli"><span class="urug"></span><a  href="javascript:void(0)"  onclick="Movimiento(11)">Mario Stefanoli</a><span class="flechaactiva"></span></li>

<li id="menuside7" class="fkli"><span class="peru"></span><a  href="javascript:void(0)"  onclick="Movimiento(7)">Percy Vigil</a><span class="flechaactiva"></span></li>

<li id="menuside19" class="fkli"><span class="peru"></span><a  href="javascript:void(0)"  onclick="Movimiento(19)">Philip Reiser</a><span class="flechaactiva"></span></li>

<li id="menuside1" class="fkli"><span class="peru"></span><a href="javascript:void(0)" onClick="Movimiento(1)">Arq. Ricardo Arbulú Soto </a><span class="flechaactiva"></span></li>

<li id="menuside3" class="fkli"><span class="eeuu"></span><a  href="javascript:void(0)"  onclick="Movimiento(3)">Steve Brown</a><span class="flechaactiva"></span></li>

</ul>
</div>
<div style="margin-top:<?php echo 33*20; ?>px"  class="menufixe2"></div>
</div>

</div>

    
    
   
    
    <div class="content-right">
    
<!-- 20-------------------------------------------------------------------------------------- -->

<div id="cajafk20" class="cafk">
<a id="20" name="20"></a>


<div class="img-expositor"><img src="images/20.jpg"></div>




<div class="datos-expositor">
<div class="h35"></div>
<p><img src="images/peru2.jpg"></p>

<p class="titulo-expositor">Carlos Paredes Rodriguez</p>
<p class="cargo-expositor">Ministro de Transportes y Comunicaciones</p>

</div>


<div class="clear"></div>

<div class="texto-content-r caja1">
  <p>
<strong>Hoja de vida y Biografía</strong>
<br><br>
Administrador de Empresas formado en la Universidad Católica Santa María, con Maestría en Administración de Empresas por la Universidad ESAN, con más de 26 años de experiencia ocupando cargos gerenciales en empresas comerciales, industriales y de servicios, además de cargos directivos en asociaciones y gremios, con conocimientos focalizados en las áreas financiera y comercial.
<br><br>
<strong>Grados y Títulos</strong>
<br><br>
Licenciado en Administración de Empresas por la Universidad Católica Santa María (1979 -1983).
<br><br>
Magíster en Administración de Empresas por la Universidad ESAN (1986-1987).
<br><br>
Con estudios en CEO Management Program-Northwestern University, J. L. Kellog Graduate School of Management (1988).
<br><br>
<strong>Experiencia profesional</strong>
<br><br>
Ministro de Transportes y Comunicaciones del Perú (desde julio del 2011 a la fecha).
<br><br>
Alimentos Procesados S.A. ALPROSA - Corporación Cervesur Gerente General (1990-Julio 2011).
<br><br>
Presidente del Directorio de la Caja Municipal de Arequipa (2007- Julio 2011).
<br><br>
Presidente del Directorio del Centro de Eventos y Convenciones “Cerro Juli” (1995-Julio 2011).
<br><br>
Vice-Presidente, Presidente del Comité de Industriales, Tesorero  y Vocal de la Cámara de Comercio e Industria de Arequipa (1994-Julio 2011).
<br><br>
Presidente del Sub-Comité de Fabricantes de Alimentos Proteicos y Enriquecidos de la Sociedad Nacional de Industrias (1999).
<br><br>
Director del Programa Profesional de Administración Bancaria y Financiera del Instituto del Sur (1988-1992).
<br><br>
Ha ocupado cargos directivos en el Comité Nacional y en el Comité Local de Arequipa; y luego como miembro del Comité Consultor de la Asociación Internacional de Estudiantes de Ciencias Económicas y Comerciales-AIESEC.
<br><br>
Conferencista en instituciones nacionales e internacionales de temas vinculados a Planeamiento Estratégico, Desarrollo Organizacional, Liderazgo, Gestión Gerencial, etc.
</p>

</div>


<div class="redesexpositores">
<p><a style="margin-right:5px;" href="javascript: void(0);" onClick="window.open('http://www.facebook.com/share.php?u=http://coipri.pe/expositores.php?fk=20','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');"><img src="images/f.png"></a>
  
                      
<a  href="javascript: void(0);"  onclick="window.open('http://twitter.com/home?status=<?php  echo urlencode('Carlos Paredes Rodriguez') ?> - http://coipri.pe/expositores.php?fk=20','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');" ><img src="images/t.png"></a></p>
</div>



<div class="h35"></div><div class="h35"></div>
<div class="linea"></div>
<div class="h35"></div><div class="h35"></div>

</div>
    
    
    
 <!-- 5-------------------------------------------------------------------------------------- -->

<div id="cajafk5" class="cafk">
<a id="5" name="5"></a>

<div class="img-expositor"><img src="images/5.jpg"></div>




<div class="datos-expositor">
<div class="h35"></div>
<p><img src="images/peru2.jpg"></p>

<p class="titulo-expositor">Julio Velarde</p>
<p class="cargo-expositor">Presidente del Banco Central de Reserva<br>
del Perú, desde octubre 2006 </p>

</div>


<div class="clear"></div>

<div class="texto-content-r caja1">
  <p><strong>Preparación Académica</strong>
<br><br>
Economista, Universidad del Pacífico, Lima, Perú. 1974.<br>
M. A. y  Ph.D (c)  en Economía, Universidad de Brown, USA. 1978<br>
<br><br>
<strong>Experiencia Profesional</strong>
<br><br>
Actualmente :
<br><br>
	<ul class="bulletfk1">
    <li>Presidente del Banco Central de Reserva del Perú, desde octubre 2006 </li>
	<li>Gobernador del Fondo Monetario Internacional</li>
	<li>Director del Fondo Latinoamericano de Reservas</li>
    </ul>
<br><br>
Ha sido:
<br><br>
<ul class="bulletfk1">
	<li>Presidente Ejecutivo del Fondo Latinoamericano de Reservas, 2004 hasta octubre 2006.</li>
	<li>Director del Banco Central de Reserva del Perú,  1990-1992 y de 2001 a 2003.</li>
	<li>Director  de varias empresas</li>
	<li>Consultor de Organismos Internacionales </li>
	<li>Universidad de Pacífico ,  1986 - 2003</li>
</ul>   

<ul class="bulletfk2"> 
		<li>Decano de la Facultad de Economía,</li>
		<li>Jefe del Departamento de Economía,</li>
		<li>Investigador  y Profesor Principal.</li>
</ul>        
        
<br><br>
<strong>Publicaciones y Trabajos de Investigación</strong> referidos a temas monetarios y financieros.</p>
</div>

<div class="redesexpositores">
<p><a style="margin-right:5px;" href="javascript: void(0);" onClick="window.open('http://www.facebook.com/share.php?u=http://coipri.pe/expositores.php?fk=5','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');"><img src="images/f.png"></a>
  
                      
<a  href="javascript: void(0);"  onclick="window.open('http://twitter.com/home?status=<?php  echo urlencode('Julio Velarde') ?> - http://coipri.pe/expositores.php?fk=5','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');" ><img src="images/t.png"></a></p>
</div>


<div class="h35"></div><div class="h35"></div>
<div class="linea"></div>
<div class="h35"></div><div class="h35"></div>

</div>


<!-- 6-------------------------------------------------------------------------------------- -->

<div id="cajafk6" class="cafk">
<a id="6" name="6"></a>

<div class="img-expositor"><img src="images/6.jpg"></div>




<div class="datos-expositor">
<div class="h35"></div>
<p><img src="images/peru2.jpg"></p>

<p class="titulo-expositor">Arnaldo Aguirre Brou</p>
<p class="cargo-expositor">Gerente de Estudios Multiclientes de Arellano Marketing</p>

</div>


<div class="clear"></div>

<div class="texto-content-r caja1">
MBA con 25 años de experiencia nacional e internacional gerenciando las áreas de Marketing y Ventas en empresas nacionales y multinacionales líderes en la comercialización de productos de consumo masivo y de servicios financieros. Orientado al diseño e implementación de estrategias dirigidas a agregar valor y aumentar la rentabilidad. Experto en el diseño y dirección de canales de distribución, desarrollo y lanzamiento de nuevos productos, atención al cliente, publicidad y relaciones públicas. Bilingüe Ingles/Español.


</div>

<div class="redesexpositores">
<p><a style="margin-right:5px;" href="javascript: void(0);" onClick="window.open('http://www.facebook.com/share.php?u=http://coipri.pe/expositores.php?fk=6','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');"><img src="images/f.png"></a>
  
                      
<a  href="javascript: void(0);"  onclick="window.open('http://twitter.com/home?status=<?php  echo urlencode('Arnaldo Aguirre Brou') ?> - http://coipri.pe/expositores.php?fk=6','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');" ><img src="images/t.png"></a></p>
</div>


<div class="h35"></div><div class="h35"></div>
<div class="linea"></div>
<div class="h35"></div><div class="h35"></div>

</div>   
    
<!-- 8-------------------------------------------------------------------------------------- -->

<div id="cajafk8" class="cafk">
<a id="8" name="8"></a>

<div class="img-expositor"><img src="images/8.jpg"></div>




<div class="datos-expositor">
<div class="h35"></div>
<p><img src="images/espa2.jpg"></p>

<p class="titulo-expositor">Alfonso Gordon</p>
<p class="cargo-expositor">Experto en Inmobiliaria Internacional - Instructor CIPS</p>

</div>


<div class="clear"></div>

<div class="texto-content-r caja1">
Comenzó su carrera inmobiliaria en 1998 con CENTURY 21.
<br /><br />
1999 al 2006 Primer Director de Operaciones de la marca en  España 
<br /><br />
Desde 2006 a 2008  el Director de Operaciones de ERA, a cargo de todas las áreas de Servicios al Franquiciado (Marketing, tecnología, Formación, Consultoría, etc.), así como de las relaciones internacionales con el resto de Master Franquicias mundiales.
<br /><br />
Desde el 2008  a cargo de las Relaciones Internacionales de la Patronal AEGI, siendo miembro del consejo durante los años 2011 y 2012. 
<br /><br />
Miembro internacional de NAR, desempeñando varios cargos como son: Instructor CIPS, miembro del Leadership Academy de NAR, miembro del Board of Directors 2013, etc...
<br /><br />
Experiencia en la creación y consolidación de Máster Franquicias, así como en el establecimiento de relaciones con asociaciones y compañías de Latino América, Europa y Estados Unidos.
</div>

<div class="redesexpositores">
<p><a style="margin-right:5px;" href="javascript: void(0);" onClick="window.open('http://www.facebook.com/share.php?u=http://coipri.pe/expositores.php?fk=8','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');"><img src="images/f.png"></a>
  
                      
<a  href="javascript: void(0);"  onclick="window.open('http://twitter.com/home?status=<?php  echo urlencode('Alfonso Gordon') ?> - http://coipri.pe/expositores.php?fk=8','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');" ><img src="images/t.png"></a></p>
</div>


<div class="h35"></div><div class="h35"></div>
<div class="linea"></div>
<div class="h35"></div><div class="h35"></div>

</div>
    

<!-- 10-------------------------------------------------------------------------------------- -->

<div id="cajafk10" class="cafk">
<a id="10" name="10"></a>

<div class="img-expositor"><img src="images/10.jpg"></div>

<div class="datos-expositor">
<div class="h35"></div>
<p><img src="images/peru2.jpg"></p>

<p class="titulo-expositor">Angélica M. Portillo Flores</p>
<p class="cargo-expositor">Especialista en Catastro</p>

</div>


<div class="clear"></div>

<div class="texto-content-r caja1">
Abogada egresada de la Universidad Nacional Mayor de San Marcos. Magister en Administración y Gerencia Pública por la Universidad Alcalá de Henares (España), Postgrado de especialización en Derecho Registral por la Universidad de Córdoba (España). Postgrado de especialización en materia catastral por el Instituto de Estudios Fiscales en Madrid (España). Postgrado de especialización en Infraestructura de Datos Espaciales  organizado por KRIHS en Seúl (Korea). Ha participado en diversos cursos internacionales en materia catastral y registral desarrollados en Montevideo (Uruguay) y en Cartagena de Indias.<br />
<br />
En materia  catastral, se ha desempeñado, en su oportunidad, como Gerente de Catastro de la  SUNARP y Secretaría Técnica del Sistema Nacional Integrado de Información  Catastral Predial (SNCP).<br />
<br />
Autora del Libro “El Catastro en el Perú: Estudio Teórico, Jurídico y de Gestión”, publicado por la Editorial Palestra. </div>

<div class="redesexpositores">
<p><a style="margin-right:5px;" href="javascript: void(0);" onClick="window.open('http://www.facebook.com/share.php?u=http://coipri.pe/expositores.php?fk=10','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');"><img src="images/f.png"></a>
  
                      
<a  href="javascript: void(0);"  onclick="window.open('http://twitter.com/home?status=<?php  echo urlencode('Angélica M. Portillo Flores') ?> - http://coipri.pe/expositores.php?fk=10','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');" ><img src="images/t.png"></a></p>
</div>


<div class="h35"></div><div class="h35"></div>
<div class="linea"></div>
<div class="h35"></div><div class="h35"></div>

</div>   
    
<!-- 18-------------------------------------------------------------------------------------- -->

<div id="cajafk18" class="cafk">
<a id="18" name="18"></a>

<div class="img-expositor"><img src="images/18.jpg"></div>

<div class="datos-expositor">
<div class="h35"></div>
<p><img src="images/peru2.jpg"></p>

<p class="titulo-expositor">Aurora Rodríguez Valdivia</p>
<p class="cargo-expositor">Magíster en Gestión y Desarrollo Inmobiliario</p>

</div>


<div class="clear"></div>

<div class="texto-content-r caja1">
  <p>
  Segunda Especialización en Ordenamiento Territorial y Ambiental,  experiencia dirigido a la planificación concertada del territorio y suelo,  ejecución de obras de edificaciones y relaciones intersectoriales.<br />
  <br />
  
  <p> <strong>Preparación Académica</strong>
  <br><br>  
  <ul class="bulletfk1">
    <li><strong>Universidad ESAN</strong><br />
      Maestría en Gestión y Desarrollo Inmobiliario – 2010  </li>
    <li><strong>Universidad Nacional Federico  Villarreal</strong><br />
      Segunda Especialización en Ordenamiento Territorial y Medio Ambiental -  2004 </li>
    <li><strong>Universidad Nacional San Agustín de  Arequipa</strong><br />
      Grado Profesional de Arquitecto - 1994 </li>
  </ul>
  <p><br>
    <strong>Experiencia</strong><br><br>
  <ul class="bulletfk1">
    <li><strong>Ministerio  de Vivienda Construcción y Saneamiento 2013 - Abril 2014</strong><br />
      Cargo: Directora Ejecutiva del  programa Generación de Suelo Urbano </li>
    <li><strong>Colegio  de Arquitectos del Perú</strong><br />
      Representante CAP ante Comisión  Técnica Calificadora de Habilitaciones Urbanas – 2013.</li>
    <li><strong>Municipalidad  se Cieneguilla - Enero 2013</strong><br />
      Sub Gerente de Obras Públicas,  Privada, Transporte y Catastro</li>
    <li><strong>Municipalidad  Distrital San Martín de Porres – Lima 2007</strong><br />
      Jefe de División de  Habilitaciones Urbanas y Catastro, </li>
    <li><strong>Municipalidad  Santa Rosa de Lima – 2001-2012</strong><br />
      Asesora del Comité Pro Inversión  Privada – CEPRI – SANTA ROSA (iniciativa privada habilitación urbana El  Autódromo), </li>
    <li><strong>Consultoría  Sobre Gestión de Riesgos en Municipalidades:</strong></li>
    </ul>
    <ul class="bulletfk2">
        <li>Municipalidad Distrital San Pedro de Huanacayre –  Huarochiri - Lima</li>
        <li>Municipalidad distrital San Bartolomé – Huarochiri  - Lima</li>
        <li>Municipalidad Distrital de Tupicocha – Huarochiri -  Lima</li>
        <li>Municipalidad distrital de Huaros – Canta – Lima</li>
        <li>Municipalidad de Capillas – Castrovirreyna-  Huancavelica</li>
      </ul>
    <ul class="bulletfk1">
    <li><strong>Ministerio  de Economía y Finanzas. Mayo – Agosto 2011 - 2012</strong><br />
      Consultorías: Evaluación y Capacitación en:  Identificación de Zonas de  Vulnerabilidad y Riesgos de Desastres dirigidas a la gestión del desarrollo  territorial </li>
    <li><strong>Municipalidad  Distrital de Comas – Lima</strong></li>
    </ul>
    <ul class="bulletfk2">
        <li>2011 - Gerente  de Desarrollo Urbano. </li>
        <li>2001  - 2003. Presidenta del Comité Ejecutivo  de Planeamiento Urbano y Coordinadora del Proceso de Formulación y Consulta del  Plan de Desarrollo Urbano Participativo de Comas (PDUP) al 2010.</li>
        <li>Acciones  Pro-Vivienda para la gestión de planeamiento integral y habilitación urbana.</li>
      </ul>
</div>

<div class="redesexpositores">
<p><a style="margin-right:5px;" href="javascript: void(0);" onClick="window.open('http://www.facebook.com/share.php?u=http://coipri.pe/expositores.php?fk=18','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');"><img src="images/f.png"></a>
  
                      
<a  href="javascript: void(0);"  onclick="window.open('http://twitter.com/home?status=<?php  echo urlencode('Aurora Rodríguez Valdivia') ?> - http://coipri.pe/expositores.php?fk=18','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');" ><img src="images/t.png"></a></p>
</div>


<div class="h35"></div><div class="h35"></div>
<div class="linea"></div>
<div class="h35"></div><div class="h35"></div>

</div>
    
<!-- 15-------------------------------------------------------------------------------------- -->

<div id="cajafk15" class="cafk">
<a id="15" name="15"></a>

<div class="img-expositor"><img src="images/15.jpg"></div>

<div class="datos-expositor">
<div class="h35"></div>
<p><img src="images/arge2.jpg"></p>

<p class="titulo-expositor">Carlos María Ipuche</p>
<p class="cargo-expositor">Presidente del colegio de Martilleros y Corredores Públicos de San Isidro (CMCPSI) de Buenos Aires</p>

</div>


<div class="clear"></div>

<div class="texto-content-r caja1">


Presidente del colegio de Martilleros y Corredores Públicos de San Isidro (CMCPSI), Buenos Aires – Argentina, cargo que desempeña desde el año 2004.
<br /><br />
Martillero y Corredor Universitario, actualmente director de la firma familiar C&R Ipuche Bienes Raíces internacional promoviendo Alianzas Estratégicas Internacionales con National Association of Realtors (NAR) en noviembre de 2006, Asociación Americana de Rematadores y Corredores Inmobiliarios en agosto de 2011 y con Miami Association of Realtors en diciembre de 2012.


</div>

<div class="redesexpositores">
<p><a style="margin-right:5px;" href="javascript: void(0);" onClick="window.open('http://www.facebook.com/share.php?u=http://coipri.pe/expositores.php?fk=15','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');"><img src="images/f.png"></a>
  
                      
<a  href="javascript: void(0);"  onclick="window.open('http://twitter.com/home?status=<?php  echo urlencode('Carlos María Ipuche') ?> - http://coipri.pe/expositores.php?fk=15','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');" ><img src="images/t.png"></a></p>
</div>


<div class="h35"></div><div class="h35"></div>
<div class="linea"></div>
<div class="h35"></div><div class="h35"></div>

</div>  
    
<!-- 9-------------------------------------------------------------------------------------- -->

<div id="cajafk9" class="cafk">
<a id="9" name="9"></a>

<div class="img-expositor"><img src="images/9.jpg"></div>

<div class="datos-expositor">
<div class="h35"></div>
<p><img src="images/peru2.jpg"></p>

<p class="titulo-expositor">Enrique Cabrera Otero</p>
<p class="cargo-expositor">Presidente CBRE PERÚ</p>

</div>


<div class="clear"></div>

<div class="texto-content-r caja1">
Máster en  vivienda (UNIVERSIDAD FEDERICO VILLAREAL)<br /><br />
Postgrado en Finanzas (ESAN)<br /><br />
Licenciado en Administración de Empresas y  Colegiado <br /><br />
Agente Inmobiliario <br /><br />
Fundó SOPECO EN 1981, Empresa Líder en el mercado inmobiliario en  las décadas de los 80 y parte del 90. <br /><br />
En  1997, nace ECO & ASOCIADOS y  posteriormente CBRE PERU, parte de la red afiliada a corporación CBRE, empresa dedicada a brindar consultoría inmobiliaria a nivel mundial, cargo: PRESIDENTE EJECUTIVO.<br /><br />
Más de 30 años de experiencia en el mercado inmobiliario local.


</div>

<div class="redesexpositores">
<p><a style="margin-right:5px;" href="javascript: void(0);" onClick="window.open('http://www.facebook.com/share.php?u=http://coipri.pe/expositores.php?fk=9','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');"><img src="images/f.png"></a>
  
                      
<a  href="javascript: void(0);"  onclick="window.open('http://twitter.com/home?status=<?php  echo urlencode('Enrique Cabrera Otero') ?> - http://coipri.pe/expositores.php?fk=9','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');" ><img src="images/t.png"></a></p>
</div>


<div class="h35"></div><div class="h35"></div>
<div class="linea"></div>
<div class="h35"></div><div class="h35"></div>

</div>
 
    
<!-- 13-------------------------------------------------------------------------------------- -->

<div id="cajafk13" class="cafk">
<a id="13" name="13"></a>

<div class="img-expositor"><img src="images/13.jpg"></div>

<div class="datos-expositor">
<div class="h35"></div>
<p><img src="images/peru2.jpg"></p>

<p class="titulo-expositor">Eric Rey de Castro</p>
<p class="cargo-expositor">Director Gerente en Colliers Perú</p>

</div>


<div class="clear"></div>

<div class="texto-content-r caja1">


<strong>Educación</strong>
<br /><br />
Bachiller en Administración de Empresas en la Universidad del Pacífico.
Especialización en CRE en Colliers University y la Mc Donald´s University.
<br /><br />
<strong>Experiencia Profesional</strong>
<br /><br />
Presidente del Fondo de Inversión en Bienes Raíces Larraín Vial - Colliers (FIBRA),  Fue fundador y primer Presidente (actual Director) del Capítulo Peruano del Green Building Council (Peru GBC), Delegado del Capítulo Peruano del Urban Land Institute (ULI), Delegado de RICS (Royal Institution of Chartered Surveyors) y Miembro del Directorio de Colliers Latinoamérica y varias empresas del sector.
</div>

<div class="redesexpositores">
<p><a style="margin-right:5px;" href="javascript: void(0);" onClick="window.open('http://www.facebook.com/share.php?u=http://coipri.pe/expositores.php?fk=13','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');"><img src="images/f.png"></a>
  
                      
<a  href="javascript: void(0);"  onclick="window.open('http://twitter.com/home?status=<?php  echo urlencode('Eric Rey de Castro') ?> - http://coipri.pe/expositores.php?fk=13','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');" ><img src="images/t.png"></a></p>
</div>


<div class="h35"></div><div class="h35"></div>
<div class="linea"></div>
<div class="h35"></div><div class="h35"></div>

</div>


<!-- 14-------------------------------------------------------------------------------------- -->

<div id="cajafk14" class="cafk">
<a id="14" name="14"></a>

<div class="img-expositor"><img src="images/14.jpg"></div>

<div class="datos-expositor">
<div class="h35"></div>
<p><img src="images/eeuu2.jpg"></p>

<p class="titulo-expositor">Francisco Angulo</p>
<p class="cargo-expositor">Licenciado en Administración de Empresas y Contabilidad de la Universidad Andrés Bello de Caracas.</p>

</div>


<div class="clear"></div>

<div class="texto-content-r caja1">
Licenciado en Administración de Empresas y Contabilidad de la Universidad Andrés Bello de Caracas.
<br /><br />
Gerente broker de Coldwell Banker Coconut Grove.
<br /><br />
Certificado Internacional Property Specialist (CIPS).
<br /><br />
Transnational Referral Certification (TRC).
<br /><br />
Certificado de Corretaje Inmobiliario Manager (CRB).




</div>

<div class="redesexpositores">
<p><a style="margin-right:5px;" href="javascript: void(0);" onClick="window.open('http://www.facebook.com/share.php?u=http://coipri.pe/expositores.php?fk=14','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');"><img src="images/f.png"></a>
  
                      
<a  href="javascript: void(0);"  onclick="window.open('http://twitter.com/home?status=<?php  echo urlencode('Francisco Angulo') ?> - http://coipri.pe/expositores.php?fk=14','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');" ><img src="images/t.png"></a></p>
</div>


<div class="h35"></div><div class="h35"></div>
<div class="linea"></div>
<div class="h35"></div><div class="h35"></div>

</div>

   
<!-- 12-------------------------------------------------------------------------------------- -->

<div id="cajafk12" class="cafk">
<a id="12" name="12"></a>

<div class="img-expositor"><img src="images/12.jpg"></div>

<div class="datos-expositor">
<div class="h35"></div>
<p><img src="images/bras2.jpg"></p>

<p class="titulo-expositor">Francisco Pesserl</p>
<p class="cargo-expositor">Secretario Ejecutivo de CILA</p>

</div>


<div class="clear"></div>

<div class="texto-content-r caja1">
Consultor – Asesor de la Presidencia de COFECI desde el 2005.
<br /><br />
Ingeniero químico y gestor de negocios inmobiliarios.
<br /><br />
Asesor de la Presidencia de COFECI para coordinar el programa nacional de inserción tecnológica (PRONIT).
<br /><br />
Miembro activo de la comunidad IRM (International Realtor Member) conectado al Mercado Internacional de Inmuebles.


</div>

<div class="redesexpositores">
<p><a style="margin-right:5px;" href="javascript: void(0);" onClick="window.open('http://www.facebook.com/share.php?u=http://coipri.pe/expositores.php?fk=12','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');"><img src="images/f.png"></a>
  
                      
<a  href="javascript: void(0);"  onclick="window.open('http://twitter.com/home?status=<?php  echo urlencode('Francisco Pesserl') ?> - http://coipri.pe/expositores.php?fk=12','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');" ><img src="images/t.png"></a></p>
</div>


<div class="h35"></div><div class="h35"></div>
<div class="linea"></div>
<div class="h35"></div><div class="h35"></div>

</div>

<!-- 16-------------------------------------------------------------------------------------- -->

<div id="cajafk16" class="cafk">
<a id="16" name="16"></a>

<div class="img-expositor"><img src="images/16.jpg"></div>

<div class="datos-expositor">
<div class="h35"></div>
<p><img src="images/bras2.jpg"></p>

<p class="titulo-expositor">Frederico Mendonca</p>
<p class="cargo-expositor">Abogado, Corredor Inmobiliario.</p>

</div>


<div class="clear"></div>

<div class="texto-content-r caja1">
Abogado, Corredor Inmobiliario.
<br /><br />
Experto en Valuaciones de Inmuebles.
<br /><br />
Consejero Federal del Sistema Cofeci-Creci  (Brasil).
<br /><br />
Director Pedagógico del Consejo Regional de Inmuebles de Pernambuco, Brasil.
<br /><br />
Maestro en la Facultad de Economía de la Universidad Estatal de Pernambuco.
<br /><br />
Director de la Cámara de Valuaciones Inmobiliarias de Brasil.



</div>

<div class="redesexpositores">
<p><a style="margin-right:5px;" href="javascript: void(0);" onClick="window.open('http://www.facebook.com/share.php?u=http://coipri.pe/expositores.php?fk=16','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');"><img src="images/f.png"></a>
  
                      
<a  href="javascript: void(0);"  onclick="window.open('http://twitter.com/home?status=<?php  echo urlencode('Frederico Mendonca') ?> - http://coipri.pe/expositores.php?fk=16','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');" ><img src="images/t.png"></a></p>
</div>


<div class="h35"></div><div class="h35"></div>
<div class="linea"></div>
<div class="h35"></div><div class="h35"></div>

</div> 
    
<!-- 2-------------------------------------------------------------------------------------- -->

<div id="cajafk2" class="cafk">
<a id="2" name="2"></a>

<div class="img-expositor"><img src="images/2.jpg"></div>




<div class="datos-expositor">
<div class="h35"></div>
<p><img src="images/peru2.jpg"></p>

<p class="titulo-expositor">Jose Antonio Arbulú Soto</p>
<p class="cargo-expositor">Gerente Legal de Ciudaris Consultores Inmobiliarios</p>

</div>


<div class="clear"></div>

<div class="texto-content-r caja1">
Abogado graduado por la Universidad de Lima. Postgrado de Especialización en Desarrollo y Gestión de Proyectos Inmobiliarios en la Universidad ESAN, y Postgrado de Especialización en Derecho Tributario por la Univ. de Lima.
<br><br>
Gerente Legal de las empresas Ciudaris Consultores Inmobiliarios y Plusvalía Consultores Inmobiliarios. Formación basada especialmente en la prevención de conflictos y técnicas de negociación. Más de dieciocho años en el ejercicio profesional relacionado con operaciones inmobiliarias, estudio de títulos y contratación en general. Profesor invitado de la Universidad ESAN, UNI, y UTP.


</div>
<div class="redesexpositores">
<p><a style="margin-right:5px;" href="javascript: void(0);" onClick="window.open('http://www.facebook.com/share.php?u=http://coipri.pe/expositores.php?fk=2','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');"><img src="images/f.png"></a>
  
                      
<a  href="javascript: void(0);"  onclick="window.open('http://twitter.com/home?status=<?php  echo urlencode('Jose Antonio Arbulú Soto') ?> - http://coipri.pe/expositores.php?fk=2','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');" ><img src="images/t.png"></a></p>
</div>



<div class="h35"></div><div class="h35"></div>
<div class="linea"></div>
<div class="h35"></div><div class="h35"></div>

</div>  
  
<!-- 4-------------------------------------------------------------------------------------- -->

<div id="cajafk4" class="cafk">
<a id="4" name="4"></a>

<div class="img-expositor"><img src="images/4.jpg"></div>




<div class="datos-expositor">
<div class="h35"></div>
<p><img src="images/peru2.jpg"></p>

<p class="titulo-expositor">Arq. José García Calderón</p>
<p class="cargo-expositor">Jefe del  PLAM, Plan Urbano de Lima y Callao al 2035.<br>
</p>

</div>


<div class="clear"></div>

<div class="texto-content-r caja1">
Arquitecto.<br>
Facultad de Arquitectura, Urbanismo y Arte de La UNI.<br>
Maestría en Arquitectura. Gestión de Proyectos para el Desarrollo en la Universidad de Turin.<br>
Consultor de entidades públicas (Instituto Metropolitano de Planificación y Serper).<br>
Profesor de la Facultad de Arquitectura de La UPC (Urbanismo y Diseño Arquitectónico).<br>
Actualmente Profesor en la Facultad de Arquitectura Urbanismo y Artes de la UNI. Y a cargo de la Dirección del Plan Metropolitano de Desarrollo Urbano 2035.<br>
Conferencias en México, Bogotá y Madrid.

</div>

<div class="redesexpositores">
<p><a style="margin-right:5px;" href="javascript: void(0);" onClick="window.open('http://www.facebook.com/share.php?u=http://coipri.pe/expositores.php?fk=4','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');"><img src="images/f.png"></a>
  
                      
<a  href="javascript: void(0);"  onclick="window.open('http://twitter.com/home?status=<?php  echo urlencode('Arq. José García Calderón') ?> - http://coipri.pe/expositores.php?fk=4','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');" ><img src="images/t.png"></a></p>
</div>


<div class="h35"></div><div class="h35"></div>
<div class="linea"></div>
<div class="h35"></div><div class="h35"></div>

</div>  
    
<!-- 17-------------------------------------------------------------------------------------- -->

<div id="cajafk17" class="cafk">
<a id="17" name="17"></a>

<div class="img-expositor"><img src="images/17.jpg"></div>

<div class="datos-expositor">
<div class="h35"></div>
<p><img src="images/bras2.jpg"></p>

<p class="titulo-expositor">Luiz Fernando Barcellos</p>
<p class="cargo-expositor">Ingeniero, Empresario y Profesional Inmobiliario.</p>

</div>


<div class="clear"></div>

<div class="texto-content-r caja1">


Ingeniero, Empresario y Profesional Inmobiliario.
<br /><br />
Vice-Presidente de Valuaciones Inmobiliarias del Sistema Cofeci-Creci (Brasil).
<br /><br />
Consejero Federal del Sistema Cofeci-Creci (Brasil).
<br /><br />
Membresía de Appraisal Institute, USA.
<br /><br />
Membresía de NAR – National Association of Realtors.
<br /><br />
Director de Barcellos & Cia – Inteligencia Inmobiliaria.


</div>

<div class="redesexpositores">
<p><a style="margin-right:5px;" href="javascript: void(0);" onClick="window.open('http://www.facebook.com/share.php?u=http://coipri.pe/expositores.php?fk=17','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');"><img src="images/f.png"></a>
  
                      
<a  href="javascript: void(0);"  onclick="window.open('http://twitter.com/home?status=<?php  echo urlencode('Luiz Fernando Barcellos') ?> - http://coipri.pe/expositores.php?fk=17','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');" ><img src="images/t.png"></a></p>
</div>


<div class="h35"></div><div class="h35"></div>
<div class="linea"></div>
<div class="h35"></div><div class="h35"></div>

</div>
 
<!-- 11-------------------------------------------------------------------------------------- -->

<div id="cajafk11" class="cafk">
<a id="11" name="11"></a>

<div class="img-expositor"><img src="images/11.jpg"></div>

<div class="datos-expositor">
<div class="h35"></div>
<p><img src="images/urug2.jpg"></p>

<p class="titulo-expositor">Mario Stefanoli</p>
<p class="cargo-expositor">Presidente de la Asociación Americana de Rematadores, Corredores Inmobiliarios y Balanceadores - período 2012 - 2014</p>

</div>


<div class="clear"></div>

<div class="texto-content-r caja1">
Administrador – Facultad de Ciencias Económicas.
<br /><br />
Técnico en Administración de Empresas.
<br /><br />
Rematador Público y Perito Tasador.
<br /><br />
2012 – 2014 Presidente de la Asociación Americana de Rematadores, Corredores Inmobiliarios y Balanceadores.
<br /><br />
2011-2013 Presidente de la Asociación Nacional de Rematadores, Tasadores y Corredores Inmobiliarios – ANRTCI.
<br /><br />
Docente de Práctica Profesional en la Universidad del Trabajo del Uruguay.
<br /><br />
Docente de Tasaciones en la Universidad del Trabajo del Uruguay.
<br /><br />
Docente en carrera Tasaciones en Instituto Bios.



</div>

<div class="redesexpositores">
<p><a style="margin-right:5px;" href="javascript: void(0);" onClick="window.open('http://www.facebook.com/share.php?u=http://coipri.pe/expositores.php?fk=11','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');"><img src="images/f.png"></a>
  
                      
<a  href="javascript: void(0);"  onclick="window.open('http://twitter.com/home?status=<?php  echo urlencode('Mario Stefanoli') ?> - http://coipri.pe/expositores.php?fk=11','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');" ><img src="images/t.png"></a></p>
</div>


<div class="h35"></div><div class="h35"></div>
<div class="linea"></div>
<div class="h35"></div><div class="h35"></div>

</div>


<!-- 7-------------------------------------------------------------------------------------- -->

<div id="cajafk7" class="cafk">
<a id="7" name="7"></a>

<div class="img-expositor"><img src="images/7.jpg"></div>




<div class="datos-expositor">
<div class="h35"></div>
<p><img src="images/peru2.jpg"></p>

<p class="titulo-expositor">Percy Vigil</p>
<p class="cargo-expositor">Gerente General de C.C. Mega Plaza</p>

</div>


<div class="clear"></div>

<div class="texto-content-r caja1">
Profesor afiliado al área de Marketing de la Universidad  ESAN. Ingeniero industrial con MBA, ESAN.  Actualmente es Gerente General y responsable de la dirección estratégica del C.C. MegaPlaza. Ejecutivo senior, especializado en los campos de marketing y ventas y en el desarrollo de planes de negocios.
<br /><br />
Cuenta con una importante trayectoria docente y ha ejercido la Presidencia de la Asociación de Centros Comerciales y de Entretenimiento del Perú, y de la Sociedad Peruana de Marketing.


</div>

<div class="redesexpositores">
<p><a style="margin-right:5px;" href="javascript: void(0);" onClick="window.open('http://www.facebook.com/share.php?u=http://coipri.pe/expositores.php?fk=7','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');"><img src="images/f.png"></a>
  
                      
<a  href="javascript: void(0);"  onclick="window.open('http://twitter.com/home?status=<?php  echo urlencode('Percy Vigil') ?> - http://coipri.pe/expositores.php?fk=7','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');" ><img src="images/t.png"></a></p>
</div>


<div class="h35"></div><div class="h35"></div>
<div class="linea"></div>
<div class="h35"></div><div class="h35"></div>

</div>

<!-- 19-------------------------------------------------------------------------------------- -->

<div id="cajafk19" class="cafk">
<a id="19" name="19"></a>

<div class="img-expositor"><img src="images/19.jpg"></div>

<div class="datos-expositor">
<div class="h35"></div>
<p><img src="images/peru2.jpg"></p>

<p class="titulo-expositor">Philip Reiser</p>
<p class="cargo-expositor">Consultor en Proyectos de Desarrollo, Infraestructura e Inmobiliarios</p>

</div>


<div class="clear"></div>

<div class="texto-content-r caja1">
Consultor en Proyectos de Desarrollo, Infraestructura e Inmobiliarios.
<br /><br />
Bachiller En Negocios Internacionales.
<br /><br />
Especialización en Ciencias Políticas en la Universidad de Tulsa.
<br /><br />
Posgrado en Gestión de Asociaciones Público-Privadas en la Universidad del Pacífico.
<br /><br />
Consultor  Especializado en Proyectos de Desarrollo, Infraestructura e Inmobiliarios.
<br /><br />
Trabajó en Constructora Andrade y Gutiérrez como Gerente Comercial. 
<br /><br />
Coordinador de Proyectos de la Fundación Konrad Adenauer.
</div>

<div class="redesexpositores">
<p><a style="margin-right:5px;" href="javascript: void(0);" onClick="window.open('http://www.facebook.com/share.php?u=http://coipri.pe/expositores.php?fk=19','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');"><img src="images/f.png"></a>
  
                      
<a  href="javascript: void(0);"  onclick="window.open('http://twitter.com/home?status=<?php  echo urlencode('Philip Reiser') ?> - http://coipri.pe/expositores.php?fk=19','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');" ><img src="images/t.png"></a></p>
</div>


<div class="h35"></div><div class="h35"></div>
<div class="linea"></div>
<div class="h35"></div><div class="h35"></div>

</div>


<!-- 1-------------------------------------------------------------------------------------- -->

<div id="cajafk1" class="cafk">
<a id="1" name="1"></a>

<div class="img-expositor"><img src="images/1.jpg"></div>




<div class="datos-expositor">
<div class="h35"></div>
<p><img src="images/peru2.jpg"></p>

<p class="titulo-expositor">Arq. Ricardo Arbulú Soto</p>
<p class="cargo-expositor">Gerente General de Consultaría Plusvalía</p>

</div>


<div class="clear"></div>

<div class="texto-content-r caja1">
El Arquitecto Ricardo Arbulú Soto es egresado de la Universidad Ricardo Palma, es Master en Dirección de Empresas Constructoras e Inmobiliarias por la Universidad Politécnica de Madrid; es Master en Dirección de Empresas por la Universidad de Piura – Medex; es Gerente General de Ciudaris S.A., es Gerente General de Conssolida S.A., es Gerente General de Plusvalía Consultores Inmobiliarios S.A.
<br><br>
Docente en la Maestría en Dirección de Empresas Constructoras e Inmobiliarias MDI - Universidad Católica el Perú; es Consultor y Evaluador de Proyectos del Banco Continental BBVA, Banco Financiero, BANBIF e Interbank; Presidente del Comité General de Obras de Edificación de CAPECO; es Presidente de la Asociación de Empresas Inmobiliarias del Perú – ASEI.


</div>


<div class="redesexpositores">
<p><a style="margin-right:5px;" href="javascript: void(0);" onClick="window.open('http://www.facebook.com/share.php?u=http://coipri.pe/expositores.php?fk=1','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');"><img src="images/f.png"></a>
  
                      
<a  href="javascript: void(0);"  onclick="window.open('http://twitter.com/home?status=<?php  echo urlencode('Arq. Ricardo Arbulú Soto') ?> - http://coipri.pe/expositores.php?fk=1','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');" ><img src="images/t.png"></a></p>
</div>



<div class="h35"></div><div class="h35"></div>
<div class="linea"></div>
<div class="h35"></div><div class="h35"></div>

</div>



<!-- 3-------------------------------------------------------------------------------------- -->

<div id="cajafk3" class="cafk">
<a id="3" name="3"></a>

<div class="img-expositor"><img src="images/3.jpg"></div>




<div class="datos-expositor">
<div class="h35"></div>
<p><img src="images/eeuu2.jpg"></p>

<p class="titulo-expositor">Steve Brown</p>
<p class="cargo-expositor">Presidente de NAR<br>
(National Association Of Realtors) 2014</p>

</div>


<div class="clear"></div>

<div class="texto-content-r caja1">
Steve Brown Estudio en la Universidad de Indiana, graduado en Teología y Psicología<br>
Presidente de NAR (NATIONAL ASSOCIATION OF REALTORS) 2014<br>
Copropietario de IRONGATE INC REALTORS, con 6 oficinas y 300 agentes inmobiliarios<br>
Distinguido con el premio AWARD OF DISTINTION en Ohio desde el 2002<br>
Desde el 2005, ha mantenido un liderazgo en NAR, <br>
2012 fue Primer Vicepresidente.



</div>

<div class="redesexpositores">
<p><a style="margin-right:5px;" href="javascript: void(0);" onClick="window.open('http://www.facebook.com/share.php?u=http://coipri.pe/expositores.php?fk=3','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');"><img src="images/f.png"></a>
  
                      
<a  href="javascript: void(0);"  onclick="window.open('http://twitter.com/home?status=<?php  echo urlencode('Steve Brown') ?> - http://coipri.pe/expositores.php?fk=3','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');" ><img src="images/t.png"></a></p>
</div>


<div class="h35"></div><div class="h35"></div>
<div class="linea"></div>
<div class="h35"></div><div class="h35"></div>

</div>



<!-- -------------------------------------------------------------------------------------- -->



<script>
alto3=555;
var c1=($("#cajafk20").height()+alto3-200);
var c2=($("#cajafk5").height());
var c3=($("#cajafk6").height());
var c4=($("#cajafk8").height());
var c5=($("#cajafk10").height());
var c6=($("#cajafk18").height());
var c7=($("#cajafk15").height());
var c8=($("#cajafk9").height());
var c9=($("#cajafk13").height());
var c10=($("#cajafk14").height());
var c11=($("#cajafk12").height());
var c12=($("#cajafk16").height());
var c13=($("#cajafk2").height());
var c14=($("#cajafk4").height());
var c15=($("#cajafk17").height());
var c16=($("#cajafk11").height());
var c17=($("#cajafk7").height());
var c18=($("#cajafk19").height());
var c19=($("#cajafk1").height());
var c20=($("#cajafk3").height());
var c21=($("#cajafk21").height());
var c22=($("#cajafk22").height());
var c23=($("#cajafk23").height());
var c24=($("#cajafk24").height());
var c25=($("#cajafk25").height());


var sumah=c1+c2+c3+c4+c5+c6+c7+c8+c9+c10+c11+c12+c13+c14+c15+c16+c17+c18+c19+c20-(33*13);

$(document).ready(function(){
 $(function(){

 var obj = $(document);         
 var obj_top = obj.scrollTop() ;  
 obj.scroll(function(){

 var obj_act_top =$(this).scrollTop();  
alto=555;	
 var obj_act_top2 = $(this).scrollLeft(); 
          

	

            if(obj_act_top > (615) && obj_act_top<(sumah-1)){
               
			   
			  $(".colno1").css('position','fixed');             
               $(".colno1").css('margin-top','-615px'); 
           
			}
			
			if(obj_act_top<(614)){
				
				
				$(".colno1").css('position','absolute');
				$(".colno1").css('margin-top','0px'); 
				}
       
	
	
	if(obj_act_top>(sumah)){
				
				
				$(".colno1").css('position','absolute');
				$(".colno1").css('margin-top',sumah-615+'px'); 
				}

	
		if(obj_act_top2>0){
		$(".colno1").css('position','absolute');             
               $(".colno1").css('margin-top','0px'); 
		}
	
	
	
	$(".cafk").removeAttr('style');
	$(".fkli").removeClass('active-list');
	if(obj_act_top>=0 && obj_act_top<=(c1)){$("#menuside20").addClass('active-list');$("#cajafk20").css('opacity','1');}
	
	if(obj_act_top>(c1) && obj_act_top<=(c1+c2)){$("#menuside5").addClass('active-list');$("#cajafk5").css('opacity','1');}
	
	if(obj_act_top>(c1+c2) && obj_act_top<=(c1+c2+c3)){$("#menuside6").addClass('active-list');$("#cajafk6").css('opacity','1');}
	
	if(obj_act_top>(c1+c2+c3) && obj_act_top<=(c1+c2+c3+c4)){$("#menuside8").addClass('active-list');$("#cajafk8").css('opacity','1');}
	
	if(obj_act_top>(c1+c2+c3+c4) && obj_act_top<=(c1+c2+c3+c4+c5)){$("#menuside10").addClass('active-list');$("#cajafk10").css('opacity','1');}
	
	if(obj_act_top>(c1+c2+c3+c4+c5) && obj_act_top<=(c1+c2+c3+c4+c5+c6)){$("#menuside18").addClass('active-list');$("#cajafk18").css('opacity','1');}
	
if(obj_act_top>(c1+c2+c3+c4+c5+c6) && obj_act_top<=(c1+c2+c3+c4+c5+c6+c7)){$("#menuside15").addClass('active-list');$("#cajafk15").css('opacity','1');}	

if(obj_act_top>(c1+c2+c3+c4+c5+c6+c7) && obj_act_top<=(c1+c2+c3+c4+c5+c6+c7+c8)){$("#menuside9").addClass('active-list');$("#cajafk9").css('opacity','1');}	


if(obj_act_top>(c1+c2+c3+c4+c5+c6+c7+c8) && obj_act_top<=(c1+c2+c3+c4+c5+c6+c7+c8+c9)){$("#menuside13").addClass('active-list');$("#cajafk13").css('opacity','1');}	

if(obj_act_top>(c1+c2+c3+c4+c5+c6+c7+c8+c9) && obj_act_top<=(c1+c2+c3+c4+c5+c6+c7+c8+c9+c10)){$("#menuside14").addClass('active-list');$("#cajafk14").css('opacity','1');}

if(obj_act_top>(c1+c2+c3+c4+c5+c6+c7+c8+c9+c10) && obj_act_top<=(c1+c2+c3+c4+c5+c6+c7+c8+c9+c10+c11)){$("#menuside12").addClass('active-list');$("#cajafk12").css('opacity','1');}


if(obj_act_top>(c1+c2+c3+c4+c5+c6+c7+c8+c9+c10+c11) && obj_act_top<=(c1+c2+c3+c4+c5+c6+c7+c8+c9+c10+c11+c12)){$("#menuside16").addClass('active-list');$("#cajafk16").css('opacity','1');}


if(obj_act_top>(c1+c2+c3+c4+c5+c6+c7+c8+c9+c10+c11+c12) && obj_act_top<=(c1+c2+c3+c4+c5+c6+c7+c8+c9+c10+c11+c12+c13)){$("#menuside2").addClass('active-list');$("#cajafk2").css('opacity','1');}


if(obj_act_top>(c1+c2+c3+c4+c5+c6+c7+c8+c9+c10+c11+c12+c13) && obj_act_top<=(c1+c2+c3+c4+c5+c6+c7+c8+c9+c10+c11+c12+c13+c14)){$("#menuside4").addClass('active-list');$("#cajafk4").css('opacity','1');}


if(obj_act_top>(c1+c2+c3+c4+c5+c6+c7+c8+c9+c10+c11+c12+c13+c14) && obj_act_top<=(c1+c2+c3+c4+c5+c6+c7+c8+c9+c10+c11+c12+c13+c14+c15)){$("#menuside17").addClass('active-list');$("#cajafk17").css('opacity','1');}


if(obj_act_top>(c1+c2+c3+c4+c5+c6+c7+c8+c9+c10+c11+c12+c13+c14+c15) && obj_act_top<=(c1+c2+c3+c4+c5+c6+c7+c8+c9+c10+c11+c12+c13+c14+c15+c16)){$("#menuside11").addClass('active-list');$("#cajafk11").css('opacity','1');}


if(obj_act_top>(c1+c2+c3+c4+c5+c6+c7+c8+c9+c10+c11+c12+c13+c14+c15+c16) && obj_act_top<=(c1+c2+c3+c4+c5+c6+c7+c8+c9+c10+c11+c12+c13+c14+c15+c16+c17)){$("#menuside7").addClass('active-list');$("#cajafk7").css('opacity','1');}


if(obj_act_top>(c1+c2+c3+c4+c5+c6+c7+c8+c9+c10+c11+c12+c13+c14+c15+c16+c17) && obj_act_top<=(c1+c2+c3+c4+c5+c6+c7+c8+c9+c10+c11+c12+c13+c14+c15+c16+c17+c18)){$("#menuside19").addClass('active-list');$("#cajafk19").css('opacity','1');}


if(obj_act_top>(c1+c2+c3+c4+c5+c6+c7+c8+c9+c10+c11+c12+c13+c14+c15+c16+c17+c18) && obj_act_top<=(c1+c2+c3+c4+c5+c6+c7+c8+c9+c10+c11+c12+c13+c14+c15+c16+c17+c18+c19)){$("#menuside1").addClass('active-list');$("#cajafk1").css('opacity','1');}


if(obj_act_top>(c1+c2+c3+c4+c5+c6+c7+c8+c9+c10+c11+c12+c13+c14+c15+c16+c17+c18+c19) && obj_act_top<=(c1+c2+c3+c4+c5+c6+c7+c8+c9+c10+c11+c12+c13+c14+c15+c16+c17+c18+c19+c20)){$("#menuside3").addClass('active-list');$("#cajafk3").css('opacity','1');}



	})
		})
		
})




function Movimiento(fk){

$('html').stop();
$('html,body').stop();


$(".fkli").removeClass('active-list');

$("#menuside"+fk).addClass('active-list');



if($.browser.opera){
	$('html').animate({scrollTop: $('#'+fk).offset().top-15}, 1000,'easeOutQuart');}
	 else $('html,body').animate({scrollTop: $('#'+fk).offset().top-15}, 1000,'easeOutQuart');
}






</script>









</div>                    
                        
       
                        <!--<div class="scroll">
                            <div id="Scrollbar-Container">
                                <div class="Scrollbar-Track" style="height:355px; background:url(aplication/webroot/imgs/line-scroll.png) no-repeat 5px top">
                                    <img src="aplication/webroot/imgs/control-scroll.png" class="Scrollbar-Handle" /> 
                                </div>
                            </div>
                        </div>-->                        
                    </div>
                </div><br/><br/>
            </div>
<?php 
    include(_includes_ . "inc.bottom.php"); 
?> 


