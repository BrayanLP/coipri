<?php
    include("inc.aplication_top.php");
	$face="noticia";
    include(_includes_ . "inc.header.php");
?>
<body>
        <div id="window">
            <?php
                include(_includes_ . "inc.top.php");
            ?>  
            <div id="contenedor">
                <div id="pagina">
                    <div id="contenido">
                    	<h2>Noticias</h2>
                        <div class="contens">
                            <div class="conten_noticias">
                                <?php
                                    $id = $_GET['id'];
                                ?>                                                             
                                <?php
                                    $listnot = new Noticias();
                                    $listnot->listNoticias();
                                ?>        
                                <script type="text/javascript">
                                    $(document).ready(function(){
                                        <?php
                                            if(!empty($id)){
                                        ?>
                                                $('#<?php echo $id; ?>').addClass('current');
                                        <?php
                                            }else{
                                        ?>
                                                $('.conten_noticias a').eq(0).addClass('current');
                                        <?php
                                            }
                                        ?>
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
                                    });                                   
                                </script>                                 
                            </div>                          
                            <div class="detalle_noticia">
                                <div class="css-panes">
                                  <div style="display:block">
                                    <?php
                                        $listnotId = new Noticias();
                                        if(!empty($id)){
                                            $listnotId->listDefouldOneId($id);                                            
                                        }else{
                                            $listnotId->listDefouldOne();
                                        }
                                    ?>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php 
    include(_includes_ . "inc.bottom.php"); 
?>    
