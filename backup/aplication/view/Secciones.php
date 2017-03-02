<?php 
class Secciones{

	public function home()
	{
		
	}
	
	public function nosotros(){
		?>
		<h1><?php echo _web03_ ?></h1>
        <div class="linea"><img src="aplication/webroot/imgs/line.png" alt="" /></div>
        <div class="text">
            <p>
            <img src="aplication/webroot/imgs/img_nosotros.png" align="right">
            <?php
                echo _web11_
             ?>
            </p>
           
           <div class="bg_mision_vision">
                <div class="left">
                    <h2>VISION </h2>
                    <p>
                    	<?php echo _web12_ ?>
                    </p>
                </div>
                <div class="right">
                    <h2><?php echo _web13_ ?></h2>
                    <p>
                    	<?php echo _web14_ ?>
                    </p>                       
                </div>
           </div>
       </div>
		<?php
	}

	public function clientes(){
		?>
		
		<?php
	}
	
	public function contactenos(){
		if(isset($_GET['id'])){
			$producto = new Producto($_GET['id'], $this->_idioma);
			$text = $producto->__get("_nombre");
		}
		?>
      <div id="contactenos">
                    <h1><?php echo _web06_ ?></h1>
                    <div class="linea"><img src="aplication/webroot/imgs/line.png" alt="" /></div>
                    <div class="fleft">
                    	<div><img src="aplication/webroot/imgs/form_contact_top.jpg"></div>
                        <div class="bg">
                        <form action="enviar.php" method="post" name="form" id="form" onsubmit="return validate(this,'<?php echo ID?>')">
                            <ol>
                                <li>
                               		<label><?php echo _web07_ ?></label> <input type="text" name="nombre" id="nombre">
                          		</li>
                                <li>
                               		<label><?php echo _web08_ ?></label> <input type="text" name="telefono">
                          		</li>
                                <li>
                               		<label>E-mail :</label> <input type="text" name="email" id="email">
                          		</li>
                                <li>
                               		<label><?php echo _web09_ ?></label> <div class="area"><textarea name="mensaje" id="mensaje"><?php echo $text?></textarea></div>
                          		</li>
                                
                            </ol>
                            <div class="boton">
                            	<input type="image" src="aplication/webroot/imgs/btn_enviar<?php echo ID?>.png">
                            </div>
                        </form>
                        </div>
                        <div><img src="aplication/webroot/imgs/form_contact_bottom.jpg"></div>
                    </div>
                    <div class="finfo">
                    	<h4><img src="aplication/webroot/imgs/t_info.jpg"></h4>
                        <p><span>Casa Matriz</span><br />
                         Calle  Las Flores  370 -Iquitos/Loreto  - Maynas  - San Juan Bautista</p>
                        <p><span><?php echo _web08_ ?></span> - </p>
                        
                        <p><span>Oficina Comercial</span><br />
                        	Calle Pisano  141 Oficina 302   San Borja - Lima 041</p>
                        <p><span><?php echo _web08_ ?></span><br />
                        FIJO 1: 00511  783-7517<br />
                        FIJO 2: 00511 224-0703<br />
                        MOVIL: 0051 96850-4877
                        
                        </p>
                        <p><span>Agente Comercial    Venezuela </span><br />
                        	0058-424564446</p>
                        <p><span>Agente Comercial   EEUU </span><br />
                        	001-909992-0465</p>    
                        <p><span>E-mail</span><br />
                        	<a href="mailto:informes@worldfishexp.com">informes@worldfishexp.com</a>
							<a href="mailto:ventas@worldfishexp.com">ventas@worldfishexp.com</a>
							<a href="mailto:world.fishexp@gmail.com">world.fishexp@gmail.com</a>
							<a href="mailto:worldfishexp@hotmail.com">worldfishexp@hotmail.com </a>
                        </p>
                        <p><span>SKYPE </span><br />
                        	<a href="skype:world.fishexp?call">world.fishexp</a>
                        </p>	
                        
                    </div>
                </div>
		<?php	
	}
	public function confirmacion(){
		?>
        <div id="confirmacion">
            <h1><?php echo _web19_ ?></h1>
            <div class="linea"><img src="aplication/webroot/imgs/line.png" alt="" /></div>
           	<div class="text_confirmacion">
            	<img src="aplication/webroot/imgs/mail.png" /> &nbsp;&nbsp; Su mensaje fue enviado correctamente.
            </div>
        </div>
		<?php
	}
} ?>
