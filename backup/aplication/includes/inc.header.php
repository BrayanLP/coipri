<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
       
        
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo NOMBRE_SITIO ?></title>
       
       
       <?php 
      
		if($face!=""){
		
		if($face=="programa"){
		$titulof='Programa';
		$imagenf='http://coipri.pe/aplication/webroot/imgs/logo.jpg';
		$descfac=''; 
		}
		
		
		
		if($face=="noticia"){
		
		
		
		
	 $listnotId = new Noticias();
          if(!empty($_GET['id'])){
                     $listnotId->listfacebookfk($_GET['id']);   
           }else{
           
             }
		
		
		
		
		
		
		
		
		
		
		}
		
		
		
		
		
		
		
		
		
		}			else{
			
			
		$titulof='';
		$imagenf='';
		$descfac=''; 
			}
		
	

	
if($face!="noticia"){
	?>
    
    
<meta property="og:title" content="<?php echo htmlspecialchars($titulof); ?>"/>
<meta property="og:image" content="<?php echo $imagenf; ?>"/>
<meta property="og:description" content="<?php echo htmlspecialchars($descfac); ?>"/>
	
<?php } ?>
       
       
       
       
       
       
           
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
        endDay = new Date(2014, 12-7, 3, 8,30);
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
    </head>