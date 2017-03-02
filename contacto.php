<?php 
  include 'header.php';
?>
    <!-- //////////////////////////////-->
    
    
    <section class="contacto">
            <div class="container_fluid">
                <div class="row titlegeneral">
                  <div class="col s12 title">
                    <h2>Contacto</h2>
                  </div>
                </div>
            </div>
            <div class="container"> 
                  
                <div class="row">
                    <div class="col l7 m6 s12"> 
                      <div class="box">
                          <div class="titulo"> 
                              <h2>INFORMES E INSCRIPCIONES: ASPAI</h2>  
                          </div>
                          <div class="ins info-contacto">  
                               
                            <p><i class="material-icons az-location"></i> Miguel Dasso 134 Of. 202 - San Isidro</p>
                            <p><i class="material-icons az-phone"></i> +51 (1) 422-0171 / +51 (1) 222-1856</p>
                            <p><i class="material-icons az-email2"></i> aspai@aspai.org.pe / coipri@coipri.pe</p>
                            <p><i class="material-icons az-language"></i> www.coipri.pe / www.aspai.org.pe</p> 
                          </div>
                      </div> 
                      <!-- <div class="box"> 
                          <div class="titulo"> 
                              <h2>INFORMES</h2>  
                          </div>   
                          <div class="ins info-contacto">   
                            <p><b>GRUPO MILENIUM</b>
                            <p><i class="material-icons az-contact_phone"></i> (01) 422-4591</p>
                            <p><i class="material-icons az-phone"></i> 999854435</p>
                            <p><i class="material-icons az-email2"></i> informes2@grupomilenium.pe</p>
                          </div> 
                      </div> --> 
                    </div>
                    <div class="col l5 m6 s12">
                        <div class="box">
                          <div class="titulo">
                            <h2>INFORMATE YA!</h2> 
                          </div>
                          <div class="col s12 formulario">
                            <form method="post" action="contact-form-handler.php" id="formid">
                              <div class="input-field col s12">
                                  <i class="material-icons prefix az-account_circle"></i>
                                  <input id="icon_prefix" name="nombres" type="text" class="validate">
                                  <label for="icon_prefix" class="">Nombres Completo *</label>
                                </div>
                                <div class="input-field col s12">
                                  <i class="material-icons prefix az-email2"></i>
                                   <input id="email" type="email" name="correo" class="validate">
                                    <label for="email" class="">Correo Electronico *</label>
                                </div>
                                <div class="input-field col s12">
                                  <i class="material-icons prefix az-phone"></i>
                                    <input id="icon_telephone" name="telefono" type="tel" class="validate"> 
                                  <label for="icon_telephone" class="">Celular *</label>
                                </div>
                                <div class="input-field col s12">
                                  <i class="material-icons prefix az-contact_phone"></i>
                                    <input id="icon_telephone1" name="celular" type="tel" class="validate"> 
                                  <label for="icon_telephone1" class="">Teléfono *</label>
                                </div>
                                <div class="input-field col s12">
                                 <i class="material-icons prefix az-comment"></i>
                                  <textarea id="textarea1" name="mensaje" class="materialize-textarea"></textarea>
                                  <label for="textarea1" class="">Escribe tu Comentario *</label>
                                </div>
                                <p class="center">
                                  <button class="btn waves-effect waves-light" style="margin:1rem 0;" type="submit" name="action">Enviar 
                                       <i class="material-icons right az-send"></i>
                                  </button><br>
                                  <p class="center">Colocar todos los campos importantes *</p>
                                </p>
                            </form>
                          </div>
                        </div> 
                    </div>
                </div>
                     
            </div>

    
    <!-- INICIO DE MAPA UBICACION-->

      <section class="mapa-ubicacion">
      <div class="container_fluid">
            <div class="row titlegeneral">
              <div class="col s12 title">
                <h2>MAPA DE UBICACION OFICINA ASPAI</h2>
              </div>
            </div>
          </div>
        <div class="container">
          <div class="row">
            <div class="box-map">
              <div id="map" class="col s12 m12 s12 mapa">              
              </div>
            </div>
          </div>
        </div>
      </section>
      </section>    
     <!-- FIN DE MAPA UBICACION-->
      
<?php 
  include 'footer.php';
?>
     
     <script type="text/javascript">
       function initMap() {
          // Create a map object and specify the DOM element for display.
          var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: -12.1063628, lng:-77.0400419},
            scrollwheel: false,
            zoom: 17
          });
          var placetienda = new google.maps.LatLng( -12.1063628, -77.0400419);
          marker = new google.maps.Marker({
            position: placetienda,
            title: 'ASAPAI',
            map: map
          });
        }
     </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCsSh2nozqleTxAA95TcHn4tQf-PtT5K5Q&signed_in=true&callback=initMap"></script>
 