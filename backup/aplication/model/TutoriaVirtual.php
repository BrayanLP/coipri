<?php
class TutoriaVirtual{
	
	var $cliente;
	var $cuenta;
	
	function TutoriaVirtual(&$cliente){
		$this->_cliente = $cliente;
	
	}
			
	
	function listTutoriaVirtual(){
		$objcl   = new ClienteAdmin($this->_cliente->__get("_id"));
		
		$tuto_activas  = $this->getTutoriasxCliente($this->_cliente->__get("_id"),"A");
		$tuto_proximas = $this->getTutoriasxCliente($this->_cliente->__get("_id"),"E","A","C");
		$tuto_previas  = $this->getTutoriasxCliente($this->_cliente->__get("_id"),"F");
		
		?>
		  <div id="bg_cuenta">
            <div class="lista_tutorias">
                <h2>Tutoría Virtual</h2>
                <div class="contenido_not">
                
                <?php 
				if(is_array($tuto_activas)){
				foreach($tuto_activas as $value): ?>
                 <?php  if($value['fecha']==date('Y-m-d')){?>
                   <div class="repeat_tutorias_activas">
                      <div class="title">Tutoría en Curso:</div>
                      <div class="datos_tutoria">
                         <div class="imagen_tutor"><img src="aplication/utilities/img_exact.php?imagen=<?php echo $value['foto'] ?>&w=54&h=80" /></div>
                         <div class="nombre_tutor"><b>Tutor</b> <span><b><?php echo $value['tutor'] ?></b></span></div>
                         <div class="fecha"><b>El <?php echo fecha_long($value['fecha']) ?> a las <?php echo $value['hora'] ?></b></div>
                         <div class="tema"><b>Tema</b> <?php echo $value['titulo'] ?></div> 
                         <?php if($value['enlace']!=""){ ?>
                         <a id="boton_mostra_pizarra"  href="tutorias_virtuales.php?Tutoria=mostrar&src=<?php echo base64_encode($value['enlace']) ?>" title="Mostrar Pizarra Virtual"><span>Mostrar Pizarra Virtual</span></a>
                         <?php } ?>
                      </div>
                   
                   </div>
                    <?php } ?>
                  <?php endforeach;
				}
				  ?>
                   
                <p>&nbsp;</p>
                <?php if(is_array($tuto_proximas)){ ?>
                   <div class="repeat_tutorias">
                      
                      
                       <?php foreach($tuto_proximas as $value2): ?>
                          <?php  if($value2['fecha']!=date('Y-m-d') ){?>
                          <div class="title">Proximas Tutorías:</div>
                      <div class="datos_tutoria">
                         <div class="imagen_tutor"><img src="aplication/utilities/img_exact.php?imagen=<?php echo $value2['foto'] ?>&w=54&h=80" /></div>
                         <div class="nombre_tutor"><b>Tutor</b> <span><b><?php echo $value2['tutor'] ?></b></span></div>
                         <div class="fecha"><b>
                         <?php if($value2['fecha']=="0000-00-00" && $value2['hora']=="Sin Confirmar"){?>
                         Horario sin Confirmar
                         <?php }else{ ?>
                         El <?php echo fecha_long($value2['fecha']) ?> a las <?php echo $value2['hora'] ?>
                         <?php } ?>
                         </b></div>
                         <div class="tema"><b>Tema</b> <?php echo $value2['titulo'] ?></div>
                     
                         <?php if($value2['estado']=="E"){ 
						          if($value2['costo'] <= $objcl->__get("_saldo")){
						 ?> 
                           
                                  <a href="tutorias_virtuales.php?Tutoria=pagar&idt=<?php echo $value2['id'] ?>&idc=<?php echo $this->_cliente->__get("_id") ?>&costo=<?php echo $value2['costo']?>" onclick="return validar_pago()"><img src="aplication/webroot/imgs/arrow.png" /> Pagar con mi saldo</a>
                          
                            <?php }else{?>
                                  
                                  <span style="color:#D35125">No tiene suficiente saldo para pagar esta tutoría, recarga tu saldo</span> <a href="cuenta.php?cuenta=saldo"><img src="aplication/webroot/imgs/arrow.png" /> AQUI</a>
                                  
                           <?php }
						     }?>
                      </div>
                      
                      <?php } ?>
                  <?php endforeach;?>
                    
                   </div> 
                   <?php } ?>
                   
                   
                   <p>&nbsp;</p>
                
                    <?php if(is_array($tuto_previas)){ ?>
                   <div class="repeat_tutorias">
                      <div class="title">Tutorías Previas:</div>
                      
                       <?php foreach($tuto_previas as $value3): ?>
                          
                      <div class="datos_tutoria">
                         <div class="imagen_tutor"><img src="aplication/utilities/img_exact.php?imagen=<?php echo $value3['foto'] ?>&w=54&h=80" /></div>
                         <div class="nombre_tutor"><b>Tutor</b> <span><b><?php echo $value3['tutor'] ?></b></span></div>
                         <div class="fecha"><b>El <?php echo fecha_long($value3['fecha']) ?> a las <?php echo $value3['hora'] ?></b></div>
                         <div class="tema"><b>Tema</b> <?php echo $value3['titulo'] ?></div>
                     
                        
                      </div>
                      
                    
                  <?php endforeach;?>
                    
                   </div> 
                   <?php } ?>   
                    
                    
                </div>
                
            </div>
        </div> 
		<?php
	}
	
	public function pagar_tutoria($idt=0,$idc=0, $costo=0){
		
			$QueryT= new Consulta("SELECT * FROM tutorias WHERE id_tutoria='".$idt."'");
			$row=$QueryT->VerRegistro();
			
			
			$Query= new Consulta("UPDATE tutorias SET estado_tutoria = 'C' WHERE id_tutoria='".$idt."'");
			
			$Query2= new Consulta("UPDATE clientes SET saldo_cliente = saldo_cliente-$costo WHERE id_cliente='".$idc."'");
			
			
			$email="jvasquez@develoweb.net";
			$subject="Pago de Tutoria - Qukteach";
			$msg="
El Cliente(a) ".$this->_cliente->__get("_nombre")." ".$this->_cliente->__get("_apellidos").". 
Ha pagado la tutoria  con dinero que tiene en su cuenta.


La tutoria Pagada es: ".$row['titulo_tutoria']." 
	
www.qukteach.com				
";	
			@mail($email,$subject,$msg,"from: ".$this->_cliente->__get('_email'));	
			
				
	}	

	function getTutoriasxCliente($idc=0, $estado="", $extra="", $otro=""){

		$OR = ($extra!="")? "OR c.id_cliente=t.id_cliente
				             AND u.id_usuario=t.id_tutor
				             AND c.id_cliente='".$idc."' 
							 AND t.estado_tutoria='".$extra."'" : "" ;
							 
		$OR2 = ($otro!="")? "OR c.id_cliente=t.id_cliente
				             AND u.id_usuario=t.id_tutor
				             AND c.id_cliente='".$idc."' 
							 AND t.estado_tutoria='".$otro."'" : "" ;		
							 		 
		
		$sql = new Consulta("SELECT t.id_tutoria, t.titulo_tutoria, t.fecha_tutoria, t.hora_tutoria, t.estado_tutoria,t.costo_tutoria,t.enlace_tutoria, u.nombre_usuario, u.apellidos_usuario , u.foto_usuario 
				FROM tutorias t, clientes c, usuarios u
				WHERE c.id_cliente=t.id_cliente
				AND u.id_usuario=t.id_tutor
				AND c.id_cliente='".$idc."'
				AND t.estado_tutoria='".$estado."' ".$OR." ".$OR2."
				GROUP BY t.id_tutoria
				ORDER BY t.id_tutoria DESC");
				
				
		
      
		while($row = $sql->VerRegistro())
		{
			$datos[] = array(
				'id' 	      => $row['id_tutoria'],
				'titulo'      => $row['titulo_tutoria'],
				'fecha'       => $row['fecha_tutoria'],
				'hora'        => $row['hora_tutoria'],
				'estado'      => $row['estado_tutoria'],
				'hora'        => $row['hora_tutoria'],
				'costo'       => $row['costo_tutoria'],
				'enlace'      => $row['enlace_tutoria'],
				'tutor'       => $row['nombre_usuario']." ".$row['apellidos_usuario'],
				'foto'        => $row['foto_usuario'],
			
			);	
		}
		
		return $datos;

		
	}
	
}
?>