<?php 
class Ajax{
	
	private $_idioma;
	
	public function __construct(Idioma $idioma){
		$this->_idioma = $idioma ;
	}
		
	function ordenarCatProdAjax(){
		foreach($_GET['list_item'] as $position => $item){
			$type_val = explode("|",$item);
			
			if($type_val[1] == 'cat'){
				$objc  = new Categoria($type_val[0], $this->_idioma);
				$query = new Consulta("UPDATE  categorias SET orden_categoria = $position 
											WHERE id_categoria = $type_val[0] AND id_parent = '".$objc->__get("_parent")."'"); 	
			}else{
				$obju  = new Producto($type_val[0], $this->_idioma);
				$query = new Consulta("UPDATE  productos SET orden_producto = $position 
											WHERE id_producto = $type_val[0] 
											AND id_categoria = '".$obju->__get("_categoria")->__get("_id")."'"); 		
											
			}
		}
	}
	
	function autocompleteCategoriasAjax(){
		$obj_cat = new Categorias();
		$data =  $obj_cat->getCategoriaXCriterio($_GET['term']);
		if(count($data) != 0){
			echo encode_json($data);
		}else{
			echo "[ ]";
		}			
	}
	
	function viewUserAjax()
	{
		if($_GET['id']){
			$obj = new Usuario($_GET['id']);
		?>
        
       	<ul id="datos_usuario">
       		 <li><label>Nombre:</label> <div class="value_field"><?php echo $obj->getNombre(); ?></div></li>
             <li><label>Apellidos:</label> <div class="value_field"><?php echo $obj->getApellidos(); ?></div></li>
             <li><label>Cargo:</label> <div class="value_field"><?php echo $obj->getRol()->getNombre(); ?></div></li>
             <li><label>Email:</label> <div class="value_field"><?php echo $obj->getEmail(); ?></div></li>
             <li><label>Login:</label> <div class="value_field"><?php echo $obj->getLogin(); ?></div></li>
       	</ul>
		<?php
		}
	}
	
	function viewSaldoClienteAjax()
	{
		if($_GET['id']){
			$obj = new ClienteAdmin($_GET['id']);
		?>
        <script type="text/javascript" src="../aplication/webroot/js/admin/jquery.jeditable.mini.js"></script>
<script type="text/javascript" src="../aplication/webroot/js/admin/admin.js"></script>
       	<ul id="datos_usuario">
       		 <li><label style="width:130px;">Nombre:</label> <div class="value_field"><?php echo $obj->__get('_nombre'); ?></div></li>
             <li><label style="width:130px;">Apellidos:</label> <div class="value_field"><?php echo $obj->__get('_apellidos'); ?></div></li>
             <li><label style="width:130px;">Email:</label> <div class="value_field"><?php echo $obj->__get('_email'); ?></div></li>
             <li><label style="width:130px;">Especialidad:</label> <div class="value_field"><?php echo $obj->__get('_especialidad'); ?></div></li>
              <li><label style="width:130px;">Saldo Actual: S/.</label> <div style="font: bold 14px Arial, Helvetica, sans-serif;"><span class="edit2 tooltip" id="saldo_cliente-<?php echo $obj->__get('_id'); ?>_actual"> <?php echo $obj->__get('_saldo'); ?></span></div></li> 
             <li  class="fondo_saldo"><label style="width:130px;">Monto a Recargar: S/.</label> <div class="value_field edit tooltip" id="saldo_cliente-<?php echo $obj->__get('_id'); ?>">0.00</div></li>
             <li style="font: bold 10px Arial, Helvetica, sans-serif; color:#BC1F16;">* ingrese el monto a recargar y luego presione enter.</li>
       	</ul>
		<?php
		}
	}
	
	
	
	function viewHorarioAjax(){
		if($_GET['id']){
	       $obj = new Usuario($_GET['id']);
		   $sql = new Consulta("SELECT * from horarios WHERE id_tutor='".$_GET['id']."'"); 
		  
		   while($row = $sql->VerRegistro()){
			  $data[] = array(
				'dia'		=> $row['dia'],
				'hora'   	=> $row['hora']
			);	
		   }
		 
	?>
      


<div align="center" style="padding:10px; color:#069; font:14px Arial, Helvetica, sans-serif;">Horarios del Tutor: <b><?php echo $obj->__toString();?></b> </div>
<table width="500" align="center" cellpadding="0" cellspacing="0" style="border:solid 1px #8DB9DC; font:12px Arial, Helvetica, sans-serif;">
  <tr align="center" bgcolor="#8DB9DC">
    <td width="73">HORAS</td>
    <td width="61">LUN</td>
    <td width="60">MAR</td>
    <td width="66">MIE</td>
    <td width="58">JUE</td>
    <td width="63">VIE</td>
    <td width="58">SAB</td>
    <td width="59">DOM</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr align="center" height="20px" bgcolor="#C9C9C9" class="row_h">
    <td>08:00</td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="LUN08:00"){echo 'bgcolor="#8DB9DC"';}} ?>>
    <input type="checkbox" value="LUN0800-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="LUN08:00"){echo "checked";}} ?> /></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MAR08:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="MAR0800-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MAR08:00"){echo "checked";}} ?> /></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MIE08:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="MIE0800-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MIE08:00"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="JUE08:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="JUE0800-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="JUE08:00"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="VIE08:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="VIE0800-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="VIE08:00"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="SAB08:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="SAB0800-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="SAB08:00"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="DOM08:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="DOM0800-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="DOM08:00"){echo "checked";}} ?>/></td>
  </tr>
  <tr align="center" height="20px" bgcolor="#C9C9C9" class="row_h">
    <td>08:30</td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="LUN08:30"){echo 'bgcolor="#8DB9DC"';}} ?>>
    <input type="checkbox" value="LUN0830-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="LUN08:30"){echo "checked";}} ?> /></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MAR08:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="MAR0830-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MAR08:30"){echo "checked";}} ?> /></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MIE08:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="MIE0830-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MIE08:30"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="JUE08:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="JUE0830-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="JUE08:30"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="VIE08:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="VIE0830-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="VIE08:30"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="SAB08:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="SAB0830-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="SAB08:30"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="DOM08:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="DOM0830-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="DOM08:30"){echo "checked";}} ?>/></td>
  </tr>
  <tr align="center" height="20px" bgcolor="#C9C9C9" class="row_h">
    <td>09:00</td>
     <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="LUN09:00"){echo 'bgcolor="#8DB9DC"';}} ?>>
    <input type="checkbox" value="LUN0900-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="LUN09:00"){echo "checked";}} ?> /></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MAR09:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="MAR0900-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MAR09:00"){echo "checked";}} ?> /></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MIE09:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="MIE0900-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MIE09:00"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="JUE09:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="JUE0900-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="JUE09:00"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="VIE09:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="VIE0900-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="VIE09:00"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="SAB09:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="SAB0900-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="SAB09:00"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="DOM09:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="DOM0900-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="DOM09:00"){echo "checked";}} ?>/></td>
  </tr>
  <tr align="center" height="20px" bgcolor="#C9C9C9" class="row_h">
    <td>09:30</td>
     <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="LUN09:30"){echo 'bgcolor="#8DB9DC"';}} ?>>
    <input type="checkbox" value="LUN0930-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="LUN09:30"){echo "checked";}} ?> /></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MAR09:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="MAR0930-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MAR09:30"){echo "checked";}} ?> /></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MIE09:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="MIE0930-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MIE09:30"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="JUE09:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="JUE0930-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="JUE09:30"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="VIE09:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="VIE0930-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="VIE09:30"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="SAB09:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="SAB0930-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="SAB09:30"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="DOM09:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="DOM0930-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="DOM09:30"){echo "checked";}} ?>/></td>
  </tr>
  <tr align="center" height="20px" bgcolor="#C9C9C9" class="row_h">
    <td>10:00</td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="LUN10:00"){echo 'bgcolor="#8DB9DC"';}} ?>>
    <input type="checkbox" value="LUN1000-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="LUN10:00"){echo "checked";}} ?> /></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MAR10:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="MAR1000-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MAR10:00"){echo "checked";}} ?> /></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MIE10:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="MIE1000-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MIE10:00"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="JUE10:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="JUE1000-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="JUE10:00"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="VIE10:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="VIE1000-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="VIE10:00"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="SAB10:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="SAB1000-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="SAB10:00"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="DOM10:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="DOM1000-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="DOM10:00"){echo "checked";}} ?>/></td>
  </tr>
  <tr align="center" height="20px" bgcolor="#C9C9C9" class="row_h">
    <td>10:30</td>
     <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="LUN10:30"){echo 'bgcolor="#8DB9DC"';}} ?>>
    <input type="checkbox" value="LUN1030-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="LUN10:30"){echo "checked";}} ?> /></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MAR10:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="MAR1030-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MAR10:30"){echo "checked";}} ?> /></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MIE10:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="MIE1030-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MIE10:30"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="JUE10:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="JUE1030-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="JUE10:30"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="VIE10:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="VIE1030-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="VIE10:30"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="SAB10:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="SAB1030-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="SAB10:30"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="DOM10:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="DOM1030-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="DOM10:30"){echo "checked";}} ?>/></td>
  </tr>
  <tr align="center" height="20px" bgcolor="#C9C9C9" class="row_h">
    <td>11:00</td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="LUN11:00"){echo 'bgcolor="#8DB9DC"';}} ?>>
    <input type="checkbox" value="LUN1100-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="LUN11:00"){echo "checked";}} ?> /></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MAR11:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="MAR1100-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MAR11:00"){echo "checked";}} ?> /></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MIE11:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="MIE1100-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MIE11:00"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="JUE11:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="JUE1100-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="JUE11:00"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="VIE11:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="VIE1100-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="VIE11:00"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="SAB11:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="SAB1100-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="SAB11:00"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="DOM11:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="DOM1100-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="DOM11:00"){echo "checked";}} ?>/></td>
  </tr>
  <tr align="center" height="20px" bgcolor="#C9C9C9" class="row_h">
    <td>11:30</td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="LUN11:30"){echo 'bgcolor="#8DB9DC"';}} ?>>
    <input type="checkbox" value="LUN1130-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="LUN11:30"){echo "checked";}} ?> /></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MAR11:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="MAR1130-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MAR11:30"){echo "checked";}} ?> /></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MIE11:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="MIE1130-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MIE11:30"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="JUE11:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="JUE1130-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="JUE11:30"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="VIE11:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="VIE1130-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="VIE11:30"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="SAB11:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="SAB1130-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="SAB11:30"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="DOM11:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="DOM1130-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="DOM11:30"){echo "checked";}} ?>/></td>
  </tr>
  <tr align="center" height="20px" bgcolor="#C9C9C9" class="row_h">
    <td>12:00</td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="LUN12:00"){echo 'bgcolor="#8DB9DC"';}} ?>>
    <input type="checkbox" value="LUN1200-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="LUN12:00"){echo "checked";}} ?> /></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MAR12:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="MAR1200-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MAR12:00"){echo "checked";}} ?> /></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MIE12:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="MIE1200-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MIE12:00"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="JUE12:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="JUE1200-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="JUE12:00"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="VIE12:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="VIE1200-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="VIE12:00"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="SAB12:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="SAB1200-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="SAB12:00"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="DOM12:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="DOM1200-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="DOM12:00"){echo "checked";}} ?>/></td>
  </tr>
  <tr align="center" height="20px" bgcolor="#C9C9C9" class="row_h">
    <td>12:30</td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="LUN12:30"){echo 'bgcolor="#8DB9DC"';}} ?>>
    <input type="checkbox" value="LUN1230-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="LUN12:30"){echo "checked";}} ?> /></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MAR12:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="MAR1230-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MAR12:30"){echo "checked";}} ?> /></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MIE12:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="MIE1230-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MIE12:30"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="JUE12:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="JUE1230-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="JUE12:30"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="VIE12:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="VIE1230-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="VIE12:30"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="SAB12:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="SAB1230-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="SAB12:30"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="DOM12:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="DOM1230-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="DOM12:30"){echo "checked";}} ?>/></td>
  </tr>
  <tr align="center" height="20px" bgcolor="#C9C9C9" class="row_h">
    <td>13:00</td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="LUN13:00"){echo 'bgcolor="#8DB9DC"';}} ?>>
    <input type="checkbox" value="LUN1300-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="LUN13:00"){echo "checked";}} ?> /></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MAR13:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="MAR1300-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MAR13:00"){echo "checked";}} ?> /></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MIE13:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="MIE1300-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MIE13:00"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="JUE13:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="JUE1300-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="JUE13:00"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="VIE13:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="VIE1300-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="VIE13:00"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="SAB13:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="SAB1300-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="SAB13:00"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="DOM13:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="DOM1300-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="DOM13:00"){echo "checked";}} ?>/></td>
  </tr>
  <tr align="center" height="20px" bgcolor="#C9C9C9" class="row_h">
    <td>13:30</td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="LUN13:30"){echo 'bgcolor="#8DB9DC"';}} ?>>
    <input type="checkbox" value="LUN1330-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="LUN13:30"){echo "checked";}} ?> /></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MAR13:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="MAR1330-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MAR13:30"){echo "checked";}} ?> /></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MIE13:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="MIE1330-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MIE13:30"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="JUE13:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="JUE1330-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="JUE13:30"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="VIE13:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="VIE1330-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="VIE13:30"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="SAB13:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="SAB1330-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="SAB13:30"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="DOM13:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="DOM1330-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="DOM13:30"){echo "checked";}} ?>/></td>
  </tr>
  <tr align="center" height="20px" bgcolor="#C9C9C9" class="row_h">
    <td>14:00</td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="LUN14:00"){echo 'bgcolor="#8DB9DC"';}} ?>>
    <input type="checkbox" value="LUN1400-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="LUN14:00"){echo "checked";}} ?> /></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MAR14:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="MAR1400-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MAR14:00"){echo "checked";}} ?> /></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MIE14:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="MIE1400-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MIE14:00"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="JUE14:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="JUE1400-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="JUE14:00"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="VIE14:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="VIE1400-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="VIE14:00"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="SAB14:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="SAB1400-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="SAB14:00"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="DOM14:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="DOM1400-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="DOM14:00"){echo "checked";}} ?>/></td>
  </tr>
  <tr align="center" height="20px" bgcolor="#C9C9C9" class="row_h">
    <td>14:30</td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="LUN14:30"){echo 'bgcolor="#8DB9DC"';}} ?>>
    <input type="checkbox" value="LUN1430-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="LUN14:30"){echo "checked";}} ?> /></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MAR14:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="MAR1430-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MAR14:30"){echo "checked";}} ?> /></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MIE14:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="MIE1430-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MIE14:30"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="JUE14:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="JUE1430-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="JUE14:30"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="VIE14:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="VIE1430-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="VIE14:30"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="SAB14:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="SAB1430-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="SAB14:30"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="DOM14:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="DOM1430-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="DOM14:30"){echo "checked";}} ?>/></td>
  </tr>
  <tr align="center" height="20px" bgcolor="#C9C9C9" class="row_h">
    <td>15:00</td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="LUN15:00"){echo 'bgcolor="#8DB9DC"';}} ?>>
    <input type="checkbox" value="LUN1500-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="LUN15:00"){echo "checked";}} ?> /></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MAR15:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="MAR1500-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MAR15:00"){echo "checked";}} ?> /></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MIE15:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="MIE1500-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MIE15:00"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="JUE15:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="JUE1500-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="JUE15:00"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="VIE15:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="VIE1500-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="VIE15:00"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="SAB15:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="SAB1500-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="SAB15:00"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="DOM15:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="DOM1500-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="DOM15:00"){echo "checked";}} ?>/></td>
  </tr>
  <tr align="center" height="20px" bgcolor="#C9C9C9" class="row_h">
    <td>15:30</td>
     <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="LUN15:30"){echo 'bgcolor="#8DB9DC"';}} ?>>
    <input type="checkbox" value="LUN1530-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="LUN15:30"){echo "checked";}} ?> /></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MAR15:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="MAR1530-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MAR15:30"){echo "checked";}} ?> /></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MIE15:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="MIE1530-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MIE15:30"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="JUE15:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="JUE1530-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="JUE15:30"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="VIE15:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="VIE1530-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="VIE15:30"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="SAB15:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="SAB1530-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="SAB15:30"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="DOM15:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="DOM1530-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="DOM15:30"){echo "checked";}} ?>/></td>
  </tr>
  <tr align="center" height="20px" bgcolor="#C9C9C9" class="row_h">
    <td>16:00</td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="LUN16:00"){echo 'bgcolor="#8DB9DC"';}} ?>>
    <input type="checkbox" value="LUN1600-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="LUN16:00"){echo "checked";}} ?> /></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MAR16:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="MAR1600-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MAR16:00"){echo "checked";}} ?> /></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MIE16:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="MIE1600-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MIE16:00"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="JUE16:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="JUE1600-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="JUE16:00"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="VIE16:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="VIE1600-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="VIE16:00"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="SAB16:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="SAB1600-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="SAB16:00"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="DOM16:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="DOM1600-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="DOM16:00"){echo "checked";}} ?>/></td>
  </tr>
  <tr align="center" height="20px" bgcolor="#C9C9C9" class="row_h">
    <td>16:30</td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="LUN16:30"){echo 'bgcolor="#8DB9DC"';}} ?>>
    <input type="checkbox" value="LUN1630-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="LUN16:30"){echo "checked";}} ?> /></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MAR16:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="MAR1630-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MAR16:30"){echo "checked";}} ?> /></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MIE16:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="MIE1630-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MIE16:30"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="JUE16:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="JUE1630-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="JUE16:30"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="VIE16:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="VIE1630-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="VIE16:30"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="SAB16:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="SAB1630-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="SAB16:30"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="DOM16:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="DOM1630-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="DOM16:30"){echo "checked";}} ?>/></td>
  </tr>
  <tr align="center" height="20px" bgcolor="#C9C9C9" class="row_h">
    <td>17:00</td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="LUN17:00"){echo 'bgcolor="#8DB9DC"';}} ?>>
    <input type="checkbox" value="LUN1700-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="LUN17:00"){echo "checked";}} ?> /></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MAR17:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="MAR1700-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MAR17:00"){echo "checked";}} ?> /></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MIE17:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="MIE1700-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MIE17:00"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="JUE17:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="JUE1700-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="JUE17:00"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="VIE17:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="VIE1700-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="VIE17:00"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="SAB17:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="SAB1700-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="SAB17:00"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="DOM17:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="DOM1700-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="DOM17:00"){echo "checked";}} ?>/></td>
  </tr>
  <tr align="center" height="20px" bgcolor="#C9C9C9" class="row_h">
    <td>17:30</td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="LUN17:30"){echo 'bgcolor="#8DB9DC"';}} ?>>
    <input type="checkbox" value="LUN1730-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="LUN17:30"){echo "checked";}} ?> /></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MAR17:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="MAR1730-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MAR17:30"){echo "checked";}} ?> /></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MIE17:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="MIE1730-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MIE17:30"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="JUE17:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="JUE1730-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="JUE17:30"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="VIE17:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="VIE1730-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="VIE17:30"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="SAB17:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="SAB1730-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="SAB17:30"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="DOM17:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="DOM1730-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="DOM17:30"){echo "checked";}} ?>/></td>
  </tr>
  <tr align="center" height="20px" bgcolor="#C9C9C9" class="row_h">
    <td>18:00</td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="LUN18:00"){echo 'bgcolor="#8DB9DC"';}} ?>>
    <input type="checkbox" value="LUN1800-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="LUN18:00"){echo "checked";}} ?> /></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MAR18:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="MAR1800-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MAR18:00"){echo "checked";}} ?> /></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MIE18:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="MIE1800-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MIE18:00"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="JUE18:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="JUE1800-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="JUE18:00"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="VIE18:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="VIE1800-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="VIE18:00"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="SAB18:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="SAB1800-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="SAB18:00"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="DOM18:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="DOM1800-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="DOM18:00"){echo "checked";}} ?>/></td>
  </tr>
  <tr align="center" height="20px" bgcolor="#C9C9C9" class="row_h">
    <td>18:30</td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="LUN18:30"){echo 'bgcolor="#8DB9DC"';}} ?>>
    <input type="checkbox" value="LUN1830-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="LUN18:30"){echo "checked";}} ?> /></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MAR18:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="MAR1830-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MAR18:30"){echo "checked";}} ?> /></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MIE18:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="MIE1830-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MIE18:30"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="JUE18:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="JUE1830-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="JUE18:30"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="VIE18:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="VIE1830-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="VIE18:30"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="SAB18:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="SAB1830-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="SAB18:30"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="DOM18:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="DOM1830-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="DOM18:30"){echo "checked";}} ?>/></td>
  </tr>
  <tr align="center" height="20px" bgcolor="#C9C9C9" class="row_h">
    <td>19:00</td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="LUN19:00"){echo 'bgcolor="#8DB9DC"';}} ?>>
    <input type="checkbox" value="LUN1900-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="LUN19:00"){echo "checked";}} ?> /></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MAR19:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="MAR1900-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MAR19:00"){echo "checked";}} ?> /></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MIE19:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="MIE1900-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MIE19:00"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="JUE19:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="JUE1900-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="JUE19:00"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="VIE19:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="VIE1900-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="VIE19:00"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="SAB19:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="SAB1900-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="SAB19:00"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="DOM19:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="DOM1900-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="DOM19:00"){echo "checked";}} ?>/></td>
  </tr>
  <tr align="center" height="20px" bgcolor="#C9C9C9" class="row_h">
    <td>19:30</td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="LUN19:30"){echo 'bgcolor="#8DB9DC"';}} ?>>
    <input type="checkbox" value="LUN1930-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="LUN19:30"){echo "checked";}} ?> /></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MAR19:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="MAR1930-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MAR19:30"){echo "checked";}} ?> /></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MIE19:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="MIE1930-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MIE19:30"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="JUE19:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="JUE1930-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="JUE19:30"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="VIE19:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="VIE1930-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="VIE19:30"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="SAB19:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="SAB1930-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="SAB19:30"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="DOM19:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="DOM1930-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="DOM19:30"){echo "checked";}} ?>/></td>
  </tr>
  <tr align="center" height="20px" bgcolor="#C9C9C9" class="row_h">
    <td>20:00</td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="LUN20:00"){echo 'bgcolor="#8DB9DC"';}} ?>>
    <input type="checkbox" value="LUN2000-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="LUN20:00"){echo "checked";}} ?> /></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MAR20:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="MAR2000-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MAR20:00"){echo "checked";}} ?> /></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MIE20:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="MIE2000-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MIE20:00"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="JUE20:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="JUE2000-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="JUE20:00"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="VIE20:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="VIE2000-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="VIE20:00"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="SAB20:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="SAB2000-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="SAB20:00"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="DOM20:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="DOM2000-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="DOM20:00"){echo "checked";}} ?>/></td>
  </tr>
  <tr align="center" height="20px" bgcolor="#C9C9C9" class="row_h">
    <td>20:30</td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="LUN20:30"){echo 'bgcolor="#8DB9DC"';}} ?>>
    <input type="checkbox" value="LUN2030-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="LUN20:30"){echo "checked";}} ?> /></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MAR20:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="MAR2030-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MAR20:30"){echo "checked";}} ?> /></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MIE20:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="MIE2030-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MIE20:30"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="JUE20:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="JUE2030-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="JUE20:30"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="VIE20:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="VIE2030-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="VIE20:30"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="SAB20:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="SAB2030-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="SAB20:30"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="DOM20:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="DOM2030-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="DOM20:30"){echo "checked";}} ?>/></td>
  </tr>
  <tr align="center" height="20px" bgcolor="#C9C9C9" class="row_h">
    <td>21:00</td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="LUN21:00"){echo 'bgcolor="#8DB9DC"';}} ?>>
    <input type="checkbox" value="LUN2100-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="LUN21:00"){echo "checked";}} ?> /></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MAR21:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="MAR2100-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MAR21:00"){echo "checked";}} ?> /></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MIE21:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="MIE2100-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MIE21:00"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="JUE21:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="JUE2100-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="JUE21:00"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="VIE21:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="VIE2100-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="VIE21:00"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="SAB21:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="SAB2100-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="SAB21:00"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="DOM21:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="DOM2100-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="DOM21:00"){echo "checked";}} ?>/></td>
  </tr>
  <tr align="center" height="20px" bgcolor="#C9C9C9" class="row_h">
    <td>21:30</td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="LUN21:30"){echo 'bgcolor="#8DB9DC"';}} ?>>
    <input type="checkbox" value="LUN2130-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="LUN21:30"){echo "checked";}} ?> /></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MAR21:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="MAR2130-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MAR21:30"){echo "checked";}} ?> /></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MIE21:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="MIE2130-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MIE21:30"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="JUE21:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="JUE2130-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="JUE21:30"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="VIE21:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="VIE2130-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="VIE21:30"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="SAB21:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="SAB2130-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="SAB21:30"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="DOM21:30"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="DOM2130-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="DOM21:30"){echo "checked";}} ?>/></td>
  </tr>
  <tr align="center" height="20px" bgcolor="#C9C9C9" class="row_h">
    <td>22:00</td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="LUN22:00"){echo 'bgcolor="#8DB9DC"';}} ?>>
    <input type="checkbox" value="LUN2200-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="LUN22:00"){echo "checked";}} ?> /></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MAR22:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="MAR2200-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MAR22:00"){echo "checked";}} ?> /></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MIE22:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="MIE2200-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="MIE22:00"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="JUE22:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="JUE2200-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="JUE22:00"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="VIE22:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="VIE2200-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="VIE22:00"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="SAB22:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="SAB2200-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="SAB22:00"){echo "checked";}} ?>/></td>
    <td <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="DOM22:00"){echo 'bgcolor="#8DB9DC"';}} ?>><input type="checkbox" value="DOM2200-<?php echo $_GET['id']?>" class="chk_horario" <?php for($i=0; $i<count($data); $i++){if($data[$i]['dia'].$data[$i]['hora']=="DOM22:00"){echo "checked";}} ?>/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<?php
		
		}
		
		
		
	}
	
	function saveHorariosAjax(){
		
	$data     = explode("-",$_GET['id']);
    $datos    = $data[0]; 
    $id_tutor = $data[1]; 
	
	$dia = substr($datos,0,3);
	$hora = substr($datos,3);
	$nueva_hora = substr($hora,0,2).":".substr($hora,2);
	
	$sql = new Consulta("INSERT INTO horarios VALUES('','".$id_tutor."', '".$dia."', '".$nueva_hora."')");
	
	
	}
	
	
	function deleteHorariosAjax(){
		
	$data     = explode("-",$_GET['id']);
    $datos    = $data[0]; 
    $id_tutor = $data[1]; 
	
	$dia = substr($datos,0,3);
	$hora = substr($datos,3);
	$nueva_hora = substr($hora,0,2).":".substr($hora,2);
	
	$sql = new Consulta("DELETE FROM horarios WHERE id_tutor='".$id_tutor."' AND dia='".$dia."' AND hora='".$nueva_hora."'");
	
	
	}
	
	function editarSaldoClienteAjax()

	{

         $data  = explode("-",$_POST['data']);
         $campo = $data[0]; // nombre del campo
         $id    = $data[1]; // id del registro
         $value = $data[2]; // valor por el cual reemplazar

	$update = new Consulta("UPDATE clientes SET $campo =saldo_cliente+".$value." WHERE id_cliente='".$id."'");
	$sql = new Consulta("SELECT saldo_cliente from clientes WHERE id_cliente='".$id."'");
        $row = $sql->VerRegistro();
        $sql_rec = new Consulta("INSERT INTO recargas_clientes VALUES('','".$id."','".$value."','".date('Y-m-d')."','".date('H:m:s')."')");


	echo $row['saldo_cliente'];
       
	
	
	}

        function ConfirmarSaldoClienteAjax()

	{
             $val = strstr($_POST['value'],"-") ;
         if($val){
	    echo 0;
	}else{
            echo $_POST['id']."-".$_POST['value'];
        }
        }
	
	function ingresarSaldoClienteAjax()
	{
	$data  = explode("-",$_POST['id']);
    $campo = $data[0]; // nombre del campo
    $id    = $data[1]; // id del registro
    $value = $_POST['value']; // valor por el cual reemplazar	
	$update = new Consulta("UPDATE clientes SET $campo =".$value." WHERE id_cliente='".$id."'");
	$sql = new Consulta("SELECT saldo_cliente from clientes WHERE id_cliente='".$id."'");
    $row = $sql->VerRegistro();
	echo $row['saldo_cliente'];
	}
	
	function reportePedidosAjax(){
		$where = '';
		if($_POST['numero'] != ""){
			$q 	   = str_replace($espacio, "(.*)", $_POST['numero']);
			$where = "AND codigos_pedido REGEXP '$q' ";
		}
		$where .= ($_POST['estado'] != "") ? " AND id_estado_pedido = '".$_POST['estado']."'" : "";	
		$where .= ($_POST['fechai'] != "") ? " AND fecha_pedido BETWEEN   '".formato_date("/",$_POST['fechai'])."' AND  '".formato_date("/",$_POST['fechaf'])."'" : "";	
		
		$queryp = new Consulta("SELECT * FROM pedidos WHERE id_pedido > 0 AND simbolo_moneda='S/.'".$where);
		
		
		$y = 1;
		if($queryp -> NumeroRegistros() > 0){
                    $costo_total_pedidos = 0;
			while($rowp = $queryp->VerRegistro()){
				$cliente = new ClienteAdmin($rowp['id_cliente']);
				$pedidos = new Pedidos();
				?>
                <tr class="row <?php echo ($y % 2 == 0) ? 'odl' : ''; ?>">
		    <td><img src="<?php echo _icons_."ps.gif"?>" /> <?php echo $rowp['codigos_pedido'] ?></td>
                    <td> <?php echo $cliente->__get("_nombre")." ".$cliente->__get("_apellidos") ?></td>
                    <td align="center"> <?php echo $rowp['simbolo_moneda'] ?> <?php echo number_format($pedidos->PedidosMonto($rowp['id_pedido']),2);?></td>
                    <td align="center"><?php echo formato_slash('-',$rowp['fecha_pedido'])?>  </td>
                    <td align="center"><?php if($rowp['id_estado_pedido'] == "P"){ echo "<font color='#FF0000'>Pendiente</font>";}else{ echo "<font color='#009900'>Finalizado</font>"; } ?></td>
                    <td align="center"> <a href="pedidos.php?action=edit&id=<?php echo $rowp['id_pedido'] ?>"><img src="<?php echo _icons_."zoom.png" ?>" /></a></td>
		</tr>
				 
				<?php 
                $y++;
                $costo_total_pedidos = $costo_total_pedidos + $pedidos->PedidosMonto($rowp['id_pedido']);
			}
                        ?>
                 <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr bgcolor="#CCCCCC">
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><b>MONTO TOTAL DE PEDIDOS</b></td>
                    <td style="color:darkblue; font: bold 16px Arial;">S/. <?php echo number_format($costo_total_pedidos,2); ?></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                
		<?php
                }else{
		?><tr class="fila2"><td colspan="6" align="center" style="color:#D04320;">No se encontrarón registros con estos datos!</td></tr><?php	
		}	
	}



        function reportePedidosExtAjax(){
		$where = '';
		if($_POST['numero'] != ""){
			$q 	   = str_replace($espacio, "(.*)", $_POST['numero']);
			$where = "AND codigos_pedido REGEXP '$q' ";
		}
		$where .= ($_POST['estado'] != "") ? " AND id_estado_pedido = '".$_POST['estado']."'" : "";
		$where .= ($_POST['fechai'] != "") ? " AND fecha_pedido BETWEEN   '".formato_date("/",$_POST['fechai'])."' AND  '".formato_date("/",$_POST['fechaf'])."'" : "";

		$queryp = new Consulta("SELECT * FROM pedidos WHERE id_pedido > 0 AND simbolo_moneda='$'".$where);


		$y = 1;
		if($queryp -> NumeroRegistros() > 0){
                    $costo_total_pedidos = 0;
			while($rowp = $queryp->VerRegistro()){
				$cliente = new ClienteAdmin($rowp['id_cliente']);
				$pedidos = new Pedidos();
				?>
                <tr class="row <?php echo ($y % 2 == 0) ? 'odl' : ''; ?>">
		    <td><img src="<?php echo _icons_."ps.gif"?>" /> <?php echo $rowp['codigos_pedido'] ?></td>
                    <td> <?php echo $cliente->__get("_nombre")." ".$cliente->__get("_apellidos") ?></td>
                    <td align="center"> <?php echo $rowp['simbolo_moneda'] ?> <?php echo number_format($pedidos->PedidosMonto($rowp['id_pedido']),2);?></td>
                    <td align="center"><?php echo formato_slash('-',$rowp['fecha_pedido'])?>  </td>
                    <td align="center"><?php if($rowp['id_estado_pedido'] == "P"){ echo "<font color='#FF0000'>Pendiente</font>";}else{ echo "<font color='#009900'>Finalizado</font>"; } ?></td>
                    <td align="center"> <a href="pedidos.php?action=edit&id=<?php echo $rowp['id_pedido'] ?>"><img src="<?php echo _icons_."zoom.png" ?>" /></a></td>
		</tr>

				<?php
                $y++;
                $costo_total_pedidos = $costo_total_pedidos + $pedidos->PedidosMonto($rowp['id_pedido']);
			}
                        ?>
                 <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr bgcolor="#CCCCCC">
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><b>MONTO TOTAL DE PEDIDOS</b></td>
                    <td style="color:darkblue; font: bold 16px Arial;">$ <?php echo number_format($costo_total_pedidos,2); ?></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>

		<?php
                }else{
		?><tr class="fila2"><td colspan="6" align="center" style="color:#D04320;">No se encontrarón registros con estos datos!</td></tr><?php
		}
	}


        function reporteTutoriasAjax(){
		$where = '';
		
		$where .= ($_POST['estado'] != "") ? " AND estado_tutoria = '".$_POST['estado']."'" : "";
		$where .= ($_POST['fechai'] != "") ? " AND fecha_tutoria BETWEEN   '".formato_date("/",$_POST['fechai'])."' AND  '".formato_date("/",$_POST['fechaf'])."'" : "";

		$queryp = new Consulta("SELECT * FROM tutorias WHERE id_tutoria > 0 ".$where);


		$y = 1;
		if($queryp -> NumeroRegistros() > 0){
                    $costo_total_tutorias = 0;
			while($rowp = $queryp->VerRegistro()){
				$cliente = new ClienteAdmin($rowp['id_cliente']);
				
				?>
                <tr class="row <?php echo ($y % 2 == 0) ? 'odl' : ''; ?>">
		    
                    <td> <?php echo $cliente->__get("_nombre")." ".$cliente->__get("_apellidos") ?></td>
                    <td> <?php echo $rowp['titulo_tutoria'];?></td>
                    <td align="center"><?php echo formato_slash('-',$rowp['fecha_tutoria'])?>  </td>
                    <td> <?php echo $rowp['hora_tutoria'];?></td>
                    <td align="center"><?php if($rowp['estado_tutoria'] == "P"){ echo "<font color='#FF0000'>Pendiente</font>";}else if($rowp['estado_tutoria'] == "A"){ echo "<font color='#26B'>Programado</font>";}else if($rowp['estado_tutoria'] == "E"){ echo "<font color='#666666'>Espera de Pago</font>";}else{ echo "<font color='#009900'>Finalizado</font>"; } ?></td>
                    <td align="center"> <?php echo number_format($rowp['costo_tutoria'],2);?></td> 
        
		</tr>

				<?php
                $y++;
                $costo_total_tutorias = $costo_total_tutorias + $rowp['costo_tutoria'] ;
			}
                        ?>
                 <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr bgcolor="#CCCCCC">
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><b>MONTO TOTAL DE TUTORIAS</b></td>
                    <td style="color:darkblue; font: bold 16px Arial;">S/. <?php echo number_format($costo_total_tutorias,2); ?></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>

		<?php
                }else{
		?><tr class="fila2"><td colspan="6" align="center" style="color:#D04320;">No se encontrarón registros con estos datos!</td></tr><?php
		}
	}
	
	
	
	function reporteProductosAjax(){
		$where = '';
		if($_POST['nombre'] != ""){
			$q 	   = str_replace($espacio, "(.*)", $_POST['nombre']);
			$where = "AND nombre_producto REGEXP '$q' ";
		}
		$where .= ($_POST['categorias'] != "") ? " AND id_categoria = '".$_POST['categorias']."'" : "";	
		$where .= ($_POST['precio'] != "") ? " AND p.precio_producto ".$_POST['signo']." '".$_POST['precio']."'" : "";	
		
		$queryp = new Consulta("SELECT * FROM productos p, productos_idiomas pi WHERE p.id_producto=pi.id_producto AND p.id_producto > 0 ".$where); 
		
		echo "SELECT * FROM productos p, productos_idiomas pi WHERE p.id_producto=pi.id_producto AND p.id_producto > 0 ".$where; 

		$y = 1;
		if($queryp -> NumeroRegistros() > 0){
			while($rowp = $queryp->VerRegistro()){
				$cat = new Categoria($rowp['id_categoria'],$this->_idioma);
				$producto = new Producto($rowp['id_producto'], $this->_idioma);
				
				?>
				<tr class="row <?php echo ($y % 2 == 0) ? 'odl' : ''; ?>">
					<td><img src="<?php echo _icons_."ps.gif"?>" /> <?php echo $rowp['nombre_producto'] ?></td>
                    <td> <?php echo $cat->__get("_nombre") ?></td>
                    <td align="right"> <?php echo $rowp['precio_producto'] ?></td>
				</tr>
				 
				<?php 
                $y++;                   	
			}
		}else{
		?><tr class="fila2"><td colspan="6" align="center" style="color:#D04320;">No se encontrarón registros con estos datos!</td></tr><?php	
		}	
	}
	
	function saveRelacionAjax(){
		$querys = new Consulta("SELECT * FROM productos_relacionados 
										WHERE id_producto = '".$_POST['id']."' 
											AND id_producto_relacionado = '".$_POST['id_p']."'");
		if($querys->NumeroRegistros() > 0){														
			$query = new Consulta("DELETE FROM productos_relacionados WHERE id_producto = '".$_POST['id']."' 
											AND id_producto_relacionado = '".$_POST['id_p']."'");
		}else{
			$query = new Consulta("INSERT INTO productos_relacionados 
											VALUES('".$_POST['id']."','".$_POST['id_p']."')");
		}
	}
	
	
}

?>