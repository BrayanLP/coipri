<?php
class Tutorias{


    private $_msgbox;
	private $_sesion;
	
	public function __construct($msg='', Usuario $user)
	{
		$this->_msgbox = $msg;
		$this->_usuario = $user;
	}
	
	
	function edittutorias(){ 
			$id = $_GET['id'];
	
			$Query= new Consulta("SELECT * FROM tutorias WHERE id_tutoria ='".$id."'");
			$row= $Query->VerRegistro(); 
			
			$queryCliente = new Consulta("SELECT * FROM clientes WHERE id_cliente='".$row['id_cliente']."'");
			$rCliente	   = $queryCliente->VerRegistro();
			
			$queryTutor = new Consulta("SELECT * FROM usuarios WHERE id_rol=2");
			

			?>
            
            <fieldset id="form">

        	<legend><b>TUTORIA PARA EL CLIENTE:</b> <?php echo $rCliente['nombre_cliente'] ?> <?php echo $rCliente['apellidos_cliente'] ?></legend>

        	<form name="f1"  method="post"  action="tutorias.php?action=update&id=<?php echo $id ?>" >

           	  <div class="button-actions">

                    <input type="reset" class="button" value="CANCELAR" name="cancelar">  

                    <input type="button" class="button"  value="ACTUALIZAR" name="actualizar" onclick="validar_tutoria();">	

                </div>
<?php if($this->_usuario->getRol()->getNombre() =="Administrador"){		?>
                <ul>

                  <li><label> Tema de Tutoria : </label> <input type="text" class="text ui-widget-content ui-corner-all"  value="<?php echo $row['titulo_tutoria'] ?> "  size="59" name="titulo_tutoria">
                  </li>
                  
                  <li><label> Descripcion de Tutoria : </label> <textarea name="descripcion_tutoria" class="text ui-widget-content ui-corner-all" rows="6" cols="124"><?php echo $row['descripcion_tutoria'] ?></textarea>
                  </li>
                  
                  <li><label>Fecha de Tutoria : </label>  <input type="text" class="text ui-widget-content ui-corner-all date" value="<?php echo $row['fecha_tutoria'] ?>" readonly size="22" name="fecha_tutoria">
                  </li>
                  
                  <li><label>Hora de Tutoria (Inicio y Tiempo) : </label>  
                  
                  <input type="text" class="text ui-widget-content ui-corner-all" value="<?php echo $row['hora_tutoria'] ?>" size="22" name="hora_tutoria"> ejemplo: 07:30 am a 8:30 am
                  </li>
                  
                  <li>
                  <label>Tutor :</label> 
                
                  <select name='tutores' id='tutores'>
				     <option value=0> Seleccione Tutor</option>
                     <?php 
					
					 while($key=$queryTutor->VerRegistro()){ ?>
                     <option value='<?php echo $key['id_usuario'] ?>' <?php if($key['id_usuario']==$row['id_tutor']){ echo "selected";} ?>><?php echo $key['nombre_usuario'] ?> <?php echo $key['apellidos_usuario'] ?></option>
                     <?php } ?>
				  </select>                    
                  </li>
                  
                   <li><label> Costo de Tutoria : </label> <input type="text" class="text ui-widget-content ui-corner-all"  value="<?php echo $row['costo_tutoria'] ?>"  size="59" name="costo_tutoria" onkeydown="return validnum(event)">
                  </li>
                  
                  <li><label> Enlace de Tutoria : </label> <input type="text" class="text ui-widget-content ui-corner-all"  value="<?php echo $row['enlace_tutoria'] ?>"  size="59" name="enlace_tutoria" >
                  </li>
                  
                  
                  <li>
                  <label>Estado de Tutoria :</label>
                  <select name="estado_tutoria" id="estado_tutoria" style="width:200px">
                   <option value="E" <?php if($row['estado_tutoria'] == "E") echo 'selected="selected"'; ?>>Espera de Pago</option>
                    <option value="P" <?php if($row['estado_tutoria'] == "P") echo 'selected="selected"'; ?>>Pendiente</option>
                    <option value="A" <?php if($row['estado_tutoria'] == "A") echo 'selected="selected"'; ?>>Programado</option>
                    <option value="F" <?php if($row['estado_tutoria'] == "F") echo 'selected="selected"'; ?>>Finalizado</option>
                  </select>
                  </li>
                  
                 
      
                </ul>
<?php }else{?>

<ul>

                  <li><label> Tema de Tutoria : </label> <input type="text" class="text ui-widget-content ui-corner-all" readonly="readonly"  value="<?php echo $row['titulo_tutoria'] ?> "  size="59" name="titulo_tutoria">
                  </li>
                  
                  <li><label> Descripcion de Tutoria : </label> <textarea name="descripcion_tutoria" class="text ui-widget-content ui-corner-all" rows="6" cols="124" readonly="readonly"><?php echo $row['descripcion_tutoria'] ?></textarea>
                  </li>
                  
                  <li><label>Fecha de Tutoria : </label>  <input type="text" class="text ui-widget-content ui-corner-all " value="<?php echo $row['fecha_tutoria'] ?>" readonly size="20" name="fecha_tutoria">
                  </li>
                  
                  <li><label>Hora de Tutoria (Inicio y Tiempo) : </label>  
                  
                  <input type="text" class="text ui-widget-content ui-corner-all" value="<?php echo $row['hora_tutoria'] ?>" size="20" name="hora_tutoria" readonly="readonly"> ejemplo: 07:30 pm o am
                  </li>
                  
                  <li style="display:none">
                  <label>Tutor :</label> 
                
                  <select name='tutores' id='tutores'>
				     <option value=0> Seleccione Tutor</option>
                     <?php 
					
					 while($key=$queryTutor->VerRegistro()){ ?>
                     <option value='<?php echo $key['id_usuario'] ?>' <?php if($key['id_usuario']==$row['id_tutor']){ echo "selected";} ?>><?php echo $key['nombre_usuario'] ?> <?php echo $key['apellidos_usuario'] ?></option>
                     <?php } ?>
				  </select>                    
                  </li>
                  
                   <li><label> Costo de Tutoria : </label> <input type="text" class="text ui-widget-content ui-corner-all"  value="<?php echo $row['costo_tutoria'] ?>"  size="59" readonly="readonly" name="costo_tutoria" onkeydown="return validnum(event)">
                  </li>
                  
                  <li><label> Enlace de Tutoria : </label> <input type="text" class="text ui-widget-content ui-corner-all"  value="<?php echo $row['enlace_tutoria'] ?>"  size="59" name="enlace_tutoria" >
                  </li>
                  
                  
                  <li>
                  <label>Estado de Tutoria :</label>
                  <select name="estado_tutoria" id="estado_tutoria" style="width:200px">
                  
                    <option value="A" <?php if($row['estado_tutoria'] == "A") echo 'selected="selected"'; ?>>Programado</option>
                    <option value="F" <?php if($row['estado_tutoria'] == "F") echo 'selected="selected"'; ?>>Finalizado</option>
                  </select>
                  </li>
                  
                 
      
                </ul>

<?php } ?>
        	</form>

        </fieldset>

            
            
            
            
            
			
			  
<?php
	}

	function deleteTutorias(){
		$Query= new Consulta("DELETE FROM tutorias WHERE id_tutoria='".$_GET['id']."'");
		echo "<div id=error>Se elimino el registro Correctamente </div><br>";
		location("tutorias.php");
	}
	
	function updateTutorias(){
	
		$query=new Consulta("SELECT id_cliente FROM tutorias WHERE id_tutoria='".$_GET['id']."'");
        $row=$query->VerRegistro();
		
		
		$queryC=new Consulta("SELECT * FROM clientes WHERE id_cliente='".$row['id_cliente']."'");
        $rowC=$queryC->VerRegistro();
		
		$queryT=new Consulta("SELECT * FROM usuarios WHERE id_usuario='".$_POST['tutores']."'");
        $rowT=$queryT->VerRegistro();
		
		 if($_POST['estado_tutoria']=="E") // espera de pago
		{
			 
		   $email=$rowC['email_cliente'];
		   $subject="Confirmación de Tutoria - QukTeach";
		   $msg="
Sr(a) ".$rowC['nombre_cliente']." ".$rowC['apellidos_cliente']." hemos recibido los datos que enviaste de tu solicitud de una Tutoria.

Tema de Tutoria: ".$_POST['titulo_tutoria']."
Descrición de Tutoria: ".$_POST['descripcion_tutoria']."

El costo de esta Tutoria es de S/. ".$_POST['costo_tutoria']." 

Para pagar esta tutoria Ingresa  nuestro sitio web / Mi Cuenta / Tutoria Virtual/
y realiza el pago.
Una vez que efectue el pago, le enviaremos un email confirmando la fecha, hora y tutor de la Tutoria.
			

ATENTAMENTE
-----------
http://www.qukteach.com           
		   
		   
		   ";
		
		   @mail($email,$subject,$msg,"from: ".EMAIL_TUTORIAS."");
	    }else if($_POST['estado_tutoria']=="A"){ // Estado Programado
			
		   $email=$rowC['email_cliente'];
		   $subject="Confirmación de Tutoria - QukTeach";
		   $msg="
Sr(a) ".$rowC['nombre_cliente']." ".$rowC['apellidos_cliente']." a continuación le mostramos los datos de confirmación de su tutoria.

Tema de Tutoria: ".$_POST['titulo_tutoria']."
Descrición de Tutoria: ".$_POST['descripcion_tutoria']."
Fecha de Tutoria: ".fecha_long($_POST['fecha_tutoria'])."
Hora de Tutoria: ".$_POST['hora_tutoria']."

El costo de esta Tutoria es de S/. ".$_POST['costo_tutoria']." 

Tutor Encargado: ".$rowT['nombre_usuario']." ".$rowT['apellidos_usuario']."


Para ver esta tutoria Ingresa  nuestro sitio web / Mi Cuenta / Tutoria Virtual/
e ingrese a ver la tutoria.



ATENTAMENTE
-----------
http://www.qukteach.com           
		   
		   
		   ";
		
		
		 $email2=$rowT['email_usuario'];
		   $subject2="Confirmación de Tutoria - QukTeach";
		   $msg2="
Sr(a) ".$rowT['nombre_usuario']." ".$rowT['apellidos_usuario']." ha sido asigando para dictar una tutoria,
 a continuación le envio los datos de la tutoria.

Tema de Tutoria: ".$_POST['titulo_tutoria']."
Descrición de Tutoria: ".$_POST['descripcion_tutoria']."
Fecha de Tutoria: ".fecha_long($_POST['fecha_tutoria'])."
Hora de Tutoria: ".$_POST['hora_tutoria']."



Alumno: ".$rowC['nombre_cliente']." ".$rowC['apellidos_cliente']."


Para ver esta tutoria Ingresa  a la su panel administrativo en la sección Tutorias.



ATENTAMENTE
-----------
http://www.qukteach.com           
		   
		   
		   ";
		
		
		   @mail($email,$subject,$msg,"from: ".EMAIL_TUTORIAS."");
		   @mail($email2,$subject2,$msg2,"from: ".EMAIL_TUTORIAS."");
			
		}
				
		$Query= new Consulta("UPDATE tutorias SET 
		                             titulo_tutoria      = '".$_POST['titulo_tutoria']."',
									 descripcion_tutoria = '".$_POST['descripcion_tutoria']."',
		                             estado_tutoria      = '".$_POST['estado_tutoria']."',
		                             fecha_tutoria       = '".$_POST['fecha_tutoria']."',
									 hora_tutoria        = '".$_POST['hora_tutoria']."',
									 id_tutor            = '".$_POST['tutores']."',
									 enlace_tutoria      = '".$_POST['enlace_tutoria']."',
									 costo_tutoria       = '".$_POST['costo_tutoria']."'
							  WHERE id_tutoria='".$_GET['id']."'");
									
		
		$this->_msgbox->setMsgbox('La actualizacion se realizo Correctamente',2);
		location("tutorias.php");
	}

	function listTutorias(){
		
		if(!isset($_GET['pag'])){ $_GET['pag'] = 1; } 
		$tampag = 20;
		$reg1 = ($_GET['pag']-1) * $tampag;	 
	
		if($this->_usuario->getRol()->getNombre() =="Administrador"){		
		$sql = "SELECT t.id_tutoria, t.titulo_tutoria, t.fecha_tutoria, t.hora_tutoria, t.estado_tutoria, c.nombre_cliente, c.apellidos_cliente  
				FROM tutorias t, clientes c
				WHERE c.id_cliente=t.id_cliente
				GROUP BY t.id_tutoria
				ORDER BY t.id_tutoria DESC";
		}else{
			
		$sql = "SELECT t.id_tutoria, t.titulo_tutoria, t.fecha_tutoria, t.hora_tutoria, t.estado_tutoria, c.nombre_cliente, c.apellidos_cliente  
				FROM tutorias t, clientes c
				WHERE c.id_cliente=t.id_cliente
				AND t.id_tutor='".$this->_usuario->getid()."'
				GROUP BY t.id_tutoria
				ORDER BY t.id_tutoria DESC";	
		
		}
		$queryt= new Consulta($sql);	 
		$num=$queryt->NumeroRegistros();	
		$limit=$sql_pag." LIMIT ".$reg1.",".$tampag."";
		
		$sql .= $limit ;		

		$Query = new Consulta($sql);	 ?>	
        <div id="content-area">			
		<table  cellspacing="1" cellpading="1"   class='listado' >	
			<thead>
            <tr class="head">
				<th class='titulo'>Tema Tutoria </th>
                <th class='titulo'>Cliente </th>
				<th class='titulo' align="center">Fecha Tutoria </th>
				<th class='titulo' align="center">Hora Tutoria </th>
				<th class='titulo' align="center">Estado Tutoria </th>
				<th class='titulo' align="center">Opciones </th>
			</tr>
			</thead>
            <tbody>
			<?php
		$x=1;
		$z=0;
		while ($row = mysql_fetch_array($Query->Consulta_ID)){?>	
			<tr class="row <?php echo ($x % 2 == 0) ? 'odl' : ''; ?>">
				<td align="left" class='celda'> <?php echo $row['titulo_tutoria']?></td>
                <td align="left" class='celda'> <?php echo $row['nombre_cliente']?> <?php echo $row['apellidos_cliente']?></td>
				<td align="center" class='celda'><?php  if($row['fecha_tutoria'] == "0000-00-00"){ echo "Sin Confirmar";}else{echo fecha_long($row['fecha_tutoria']);}?>   </td>
				<td align="center" class='celda'> <?php echo $row['hora_tutoria']?> </td>
				<td align="center" class='celda'> <?php if($row['estado_tutoria'] == "P"){ echo "<b style='background:#F1CCC7; padding:3px; font-size:10px; color:#999'>Pendiente</b>";}else if($row['estado_tutoria'] == "A"){ echo "<b style='background:#FFFF97; padding:3px; font-size:10px; color:#999'>Programada</b>"; }else if($row['estado_tutoria'] == "E"){ echo "<b style='background:#CCC; padding:3px; font-size:10px; color:#999'>Espera de Pago</b>"; }else if($row['estado_tutoria'] == "C"){ echo "<b style='background:#FFCC66; padding:3px; font-size:10px; color:#999'>Pagada</b>"; }else{ echo "<b style='background:#B7E19B; padding:5px; font-size:10px; color:#999'>Finalizada</b>"; } ?> </td>
				<td align="center">	
                <?php if($this->_usuario->getRol()->getNombre() !="Administrador" && $row['estado_tutoria'] == "A"){ ?>		
				<a href='tutorias.php?id=<?php echo $row['id_tutoria']?>&action=edit') title="Editar Tutoria"  class="tooltip" ><img src="<?php echo _icons_ ?>button_edit.png" border="0" /></a>	&nbsp;&nbsp;		
				 <?php
		}else if($this->_usuario->getRol()->getNombre() =="Administrador"){
			?>
            <a href='tutorias.php?id=<?php echo $row['id_tutoria']?>&action=edit') title="Editar Tutoria"  class="tooltip" ><img src="<?php echo _icons_ ?>button_edit.png" border="0" /></a>	&nbsp;&nbsp;		
				<a href='tutorias.php?id=<?php echo $row['id_tutoria']?>&action=delete') onclick="return validar_delete()" title="Eliminar Tutoria" class="tooltip"><img src="<?php echo _icons_ ?>button_drop.png" border="0"  /></a> <?php
		}?>
				</td>
            </tr>
			<?php						
			if($x==0){$x++;}else{$x=0;}
			$z++;
		}?>
        </tbody>
		</table>
		</div>
		<?php	
		 
		if( $num > $tampag ){ echo paginar($_GET['pag'], $num, $tampag, "tutorias.php?pag="); }	
	}
	
	function PedidosMonto($id){
		(float)$monto=0;
		$queryP = new Consulta("SELECT * FROM pedidos WHERE id_pedido = '".$id."'"); 	
		$rowP = $queryP -> VerRegistro();
			
		$sql="SELECT * FROM pedidos_productos pp, productos p 
			WHERE pp.id_pedido='".$id."' AND pp.id_producto=p.id_producto ";			
		$query=new Consulta($sql);
		while($row=$query->VerRegistro()){	
			$sq_opciones=" SELECT * FROM pedidos_productos_opciones 
								WHERE id_pedido_producto = '".$row['id_pedido_producto']."' ";								
			$query_opciones = new Consulta($sq_opciones);
			
			while($rop=$query_opciones->VerRegistro()){							
				
				if ($rop['prefijo_precio'] == '+') {			  	
					$atributo_precio += $rop['producto_opcion_precio'];
				} else {
					$atributo_precio -= $rop['producto_opcion_precio'];
				}
			}
			$precio = $row['precio_final_pedido_producto'];
			$precio = $precio + $atributo_precio;

			$monto+=($row['cantidad_pedido_producto'] * $precio);
			
			$atributo_precio = 0;
		}
		
		
							
		return ($monto + $rowP['monto_envio']);
	}
	
	function getPedidosXOrden($orden=0){

		$sql = new Consulta("SELECT DATEDIFF(CURDATE(),fecha_pedido)as tiempo_restante, id_pedido,fecha_pedido, id_estado_pedido FROM pedidos WHERE codigos_pedido = '".$orden."'  ORDER BY fecha_pedido DESC");
		
		while($row = $sql->VerRegistro())
		{
			$datos[] = array(
				'id' 	          => $row['id_pedido'],
				'fecha'           => $row['fecha_pedido'],
				'tiempo_restante' => $row['tiempo_restante'],
				'estado'          => $row['id_estado_pedido']
			);	
		}
		
		return $datos;

		
	}
	
	
	function getTutoriasxCliente($idc=0, $estado="", $extra=""){

		$OR = ($extra!="")? "OR c.id_cliente=t.id_cliente
				             AND u.id_usuario=t.id_tutor
				             AND c.id_cliente='".$idc."' 
							 AND t.estado_tutoria='".$extra."'" : "" ;
		
		$sql = new Consulta("SELECT t.id_tutoria, t.titulo_tutoria, t.fecha_tutoria, t.hora_tutoria, t.estado_tutoria,t.costo_tutoria,t.enlace_tutoria, u.nombre_usuario, u.apellidos_usuario , u.foto_usuario 
				FROM tutorias t, clientes c, usuarios u
				WHERE c.id_cliente=t.id_cliente
				AND u.id_usuario=t.id_tutor
				AND c.id_cliente='".$idc."'
				AND t.estado_tutoria='".$estado."' ".$OR."
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