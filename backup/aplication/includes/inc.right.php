                            <div class="onethirdlast">
                                <h4 class="widget-title tabs">Descargas</h4>
                                <div class="descargas">
                                    <p class="preg"><a href="aplication/webroot/pdfs/funcionamiento-y-tarifas.pdf" title="Funcionamiento y tarifas" target="_blank">Funcionamiento y tarifas</a></p>
                                    <p class="preg"><a href="aplication/webroot/pdfs/formulario-de-publicacion.docx" title="Formulario de publicación" target="_blank">Formulario de publicación</a></p>
                                    <p class="preg"><a href="aplication/webroot/pdfs/datos-de-nuevos-clientes.docx" title="Datos de nuevos clientes" target="_blank">Datos de nuevos clientes</a></p>                                  
                                </div>
                                <div class="clearer"></div>
                                <h4 class="widget-title tabs">La Comunidad</h4>
                                <div class="twitter">
                                    <script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
                                    <script>
                                    new TWTR.Widget({
                                      version: 2,
                                      type: 'profile',
                                      rpp: 4,
                                      interval: 30000,
                                      width: 305,
                                      height: 300,
                                      theme: {
                                        shell: {
                                          background: '#f9c713',
                                          color: '#000000'
                                        },
                                        tweets: {
                                          background: '#ffffff',
                                          color: '#000000',
                                          links: '#6c6e6c'
                                        }
                                      },
                                      features: {
                                        scrollbar: false,
                                        loop: false,
                                        live: false,
                                        behavior: 'all'
                                      }
                                    }).render().setUser('FDS_Peru').start();
                                    </script>                                    
                                </div>
                                <div class="clearer"></div>
                                <div class="facebook">
                                    <div id="fb-root" style="display: none"></div>
                                    <script>(function(d, s, id) {
                                      var js, fjs = d.getElementsByTagName(s)[0];
                                      if (d.getElementById(id)) return;
                                      js = d.createElement(s); js.id = id;
                                      js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
                                      fjs.parentNode.insertBefore(js, fjs);
                                    }(document, 'script', 'facebook-jssdk'));</script>
                                    <div class="fb-like-box" data-href="https://www.facebook.com/FDS.Peru" data-width="305" data-height="300" data-show-faces="false" data-stream="true" data-header="true"></div>
                                </div>
                                <div class="clearer"></div>
                                <?php
                                    $bien = new BienestarSociales();
                                    $bien->listBienestarSociales();
                                ?>
                                <div class="clearer"></div>
                                <h4 class="widget-title tabs">La Encuesta</h4>
                                <?php
                                    $encuesta = new Encuestas();
                                    $encuesta->listEncuestas();
                                ?>
                                <div class="clearer"></div>
                                <h4 class="widget-title tabs">El Chat</h4>
                                <div class="chat">
                                    <object width="305" height="330" id="obj_1330447382608" style="position: relative; z-index: 10;">
                                        <param name="movie" value="http://findesemanaperu.chatango.com/group"/>
                                        <param name="quality" value="high"/>
                                        <param name="wmode" value="opaque"/>
                                        <param name="flashvars" value="cid=1330447382608&a=666666&b=100&c=FFFFFF&d=666666&g=333333&j=333333&k=666666&l=CCCCCC&n=666666&q=666666&r=100&s=1&t=0&v=0&w=0"/>
                                        <embed wmode="transparent" quality="high" id="emb_1330447382608" src="http://findesemanaperu.chatango.com/group" width="305" height="330" allowScriptAccess="always" allowNetworking="all" type="application/x-shockwave-flash" allowFullScreen="true" flashvars="cid=1330447382608&a=666666&b=100&c=FFFFFF&d=666666&g=333333&j=333333&k=666666&l=CCCCCC&n=666666&q=666666&r=100&s=1&t=0&v=0&w=0">
                                        </embed>
                                    </object>                                
                                </div>
                            </div>