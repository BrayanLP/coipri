
    <!--footer-->
  <footer id="footer" class="row padding-none"> 
    
      <div class="sub-menu">
        <a href="">Inicio</a>
        <a href="">Programa</a>
        <a href="">Expositores</a>
        <a href="">Auspiciadores</a>
        <a href="">Contáctenos</a>
      </div>
                           

      <div class="container">
        <div class="col l4 s12 m12">
          <div class="cont-img">
            <span class="az-message"> 
            </span>

          </div>
          <div class="cont-info">
            <h3>Contáctenos:</h3>
            <p>
              Correo: <a href="mailto:coipri@coipri.pe">coipri@coipri.pe </a><br>
              Cel: <a href="tel:(+51) (1) 422-0171">+51 (1) 422-0171 / +51 (1) 222-1856 </a> 
            </p>
          </div>
        </div>
        <div class="col l4 s12 m12">
          <div class="cont-img">
            <span class="az-thumb_up">
              
            </span>

          </div>
          <div class="cont-info">
            <h3>Visitanos:</h3>
            <div class="redes">
            <a href="https://www.facebook.com/COIPRI-2016-1425366394155862/" target="_blank">
              <span class="az-facebook"></span>
            </a>
            <a href="" target="_blank">
              <span class="az-twitter"></span>
            </a>
            <a href=" " target="_blank">
              <span class="az-linkedin2"></span>
            </a> 
          </div>
          </div>
        </div>
        <div class="col l4 s12 m12">
          <div class="cont-img">
            <span class="az-location_on">
              
            </span>

          </div>
          <div class="cont-info">
            <h3>Ubicanos</h3>
            <p>
              <a target="_blank" href=" ">Direccion de la Empresa</a><br> 
            </p>
          </div>
        </div>
      </div>
      <div class="copy">
        <p> <a href="http://www.grupoaizen.com">Desarrollado por: Grupo Aizen</a></p>
      </div>
                    
  </footer>    

      
     
     
     <!--Import jQuery before materialize.js-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/owl.carousel.js"></script>
      <script type="text/javascript" src="js/scroll.js"></script>
      <script type="text/javascript" src="js/general.js"></script>
      <script type="text/javascript" src="js/validate.js"></script>      
       

      <script type="text/javascript">
          $(document).ready(function(){
              $('#baner').css({'height':$(window).height() +'px'});
            

          });
        </script>
        
        <script type="text/javascript">
         
            $(document).ready(function(){
               $(".dropdown-button").dropdown(); 
            });
            
         </script>

     
        <script type="text/javascript">
        $(document).ready(function() { 
          var owl = $("#owl-demo");
         
          owl.owlCarousel({
            autoPlay: 3000, 
              items : 7, //10 items above 1000px browser width
              itemsDesktop : [1000,5], //5 items between 1000px and 901px
              itemsDesktopSmall : [900,3], // betweem 900px and 601px
              itemsTablet: [600,2], //2 items between 600 and 0
              itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
          });
        });
        </script>

         
         <!-- TESTIMONIALES -->
         <script type="text/javascript">
      $(document).ready(function() {
     
      var owl = $("#owl-blog");
     
      owl.owlCarousel({
          items : 1,  
          itemsDesktop : [1000,1], 
          itemsDesktopSmall : [992,2], 
          itemsTablet: [600,1],  
          itemsMobile : false  
      });
     
      // Custom Navigation Events
      $(".slider-news .next").click(function(){
        owl.trigger('owl.next');
      })
      $(".slider-news .prev").click(function(){
        owl.trigger('owl.prev');
      })
     
    });
    </script>
     
     
     
     </body>
 </html>    