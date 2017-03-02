<?php
class Categorias{
	
	private $_idioma, $_msgbox;
	
	public function __construct(Idioma $idioma, Msgbox $msg){
		$this->_idioma = $idioma ;
		$this->_msgbox = $msg ;
	}
	
	public function newCategorias(){
		$obj_idiomas = new Idiomas();
		$idiomas	 = $obj_idiomas->getIdiomas();
		?>
        <fieldset id="form">
        	<legend>Nueva Categoria</legend>
        	<form action="" method="post" name="categorias" enctype="multipart/form-data"> 
            	
            	<div class="button-actions">
                	<input type="submit" name="" value="GUARDAR" onclick="return valida_categorias('add','')"  />
               		<input type="reset" name="" value="CANCELAR" />
                </div>
                <ul>
               	 <?php 
					for($i = 0; $i < count($idiomas); $i++){
						?>
						<li><label> Nombre Categoria: </label> <input type="text" class="text ui-widget-content ui-corner-all" size="59" name="nombre_categoria[]">	<?php
					}
					?>
                    <li><label> Imagen Categoria: </label> <input type="file" size="50"  class="text ui-widget-content ui-corner-all" name="imagen_categoria"></li>
                </ul>
        	</form>
        </fieldset>
		<?php
	}
	
	public function editCategorias(){
		$obj = new Categoria($_GET['id'], $this->_idioma);
		$contenido = $obj->__get("_contenido_idiomas");
		
		$obj_idiomas = new Idiomas();
		$idiomas	 = $obj_idiomas->getIdiomas();
		
		?>
        <fieldset id="form">
        	<legend>Editar Categoria</legend>
        	<form action="" method="post" name="categorias"  enctype="multipart/form-data"> 
            	
            	<div class="button-actions">
                	<input type="submit" name="" value="ACTUALIZAR" onclick="return valida_categorias('update','<?php echo $_GET['id'] ?>&ide=<?php echo $_GET['id'] ?>')"  />
               		<input type="reset" name="" value="CANCELAR" />
                </div>
                <ul>
               	 <?php 
					for($i = 0; $i < count($idiomas); $i++){
						?>
						<li><label> Nombre Categoria: </label> <input type="text" class="text ui-widget-content ui-corner-all" size="50" name="nombre_categoria[]"  value="<?php echo $contenido[$idiomas[$i]['id']]['nombre']; ?>" >
						<?php
					}
					?>
                    <li><label> Imagen Categoria: </label> <input type="file"   class="text ui-widget-content ui-corner-all" size="50" name="imagen_categoria"></li>
                </ul>
                
                <div align="center" class="img_categoria">

                	<img src="../aplication/utilities/img.php?imagen=<?php echo $obj->__get('_imagen') ?>&w=160&h=140" />

                </div>
            	</form>
         </fieldset>
		<?php
	}
	
	public function addCategorias($cat=0){
		if(isset($_FILES['imagen_categoria']) && ($_FILES['imagen_categoria']['name'] != "")){
			
			$obj  = new Upload();
			$destino = "../aplication/webroot/imgs/catalogo/";
			
			$name = strtolower(date("ymdhis").$_FILES['imagen_categoria']['name']);
			$temp = $_FILES['imagen_categoria']['tmp_name'];
			$type = $_FILES['imagen_categoria']['type'];
			$size = $_FILES['imagen_categoria']['size'];
			
			$obj->upload_imagen($name, $temp, $destino, $type, $size);
		}
		$query = new Consulta("INSERT INTO  categorias 
									VALUES ('','".$name."','".$cat."','".$this->orderCategorias($cat)."')");
		$id = mysql_insert_id();
		
		//Insertando idiomas
		$obj_idiomas = new Idiomas();
		$idiomas	 = $obj_idiomas->getIdiomas();
		for($i = 0; $i < count($idiomas); $i++)
		{
			$query = new Consulta("INSERT INTO  categorias_idiomas
										VALUES ('".$id."','".$idiomas[$i]['id']."',
											    '".$_POST['nombre_categoria'][$i]."')");
		}
		
		$this->_msgbox->setMsgbox('La categoria se grabo correctamente.',2);
		location("solucionarios.php");
	}
	
	public function orderCategorias($parent=0){
		$query = new Consulta("SELECT MAX(orden_categoria) max_orden 
									FROM categorias WHERE id_parent = '".$parent."'");
		
		$row   = $query->VerRegistro();
		return (int)($row['max_orden']+1);
	}
	
	public function updateCategorias($cat=0){
		
		if(isset($_FILES['imagen_categoria']) && ($_FILES['imagen_categoria']['name'] != "")){
			
			$obj  = new Upload();
			$destino = "../aplication/webroot/imgs/catalogo/";
			
			$name = strtolower(date("ymdhis").$_FILES['imagen_categoria']['name']);
			$temp = $_FILES['imagen_categoria']['tmp_name'];
			$type = $_FILES['imagen_categoria']['type'];
			$size = $_FILES['imagen_categoria']['size'];
			
			$obj->upload_imagen($name, $temp, $destino, $type, $size);
			$update = " imagen_categoria = '".$name."'";
			$query = new Consulta("UPDATE  categorias SET ".$update."
										WHERE id_categoria = '".$_GET['id']."'");
		}
								
		//Insertando idiomas
		$obj_idiomas = new Idiomas();
		$idiomas	 = $obj_idiomas->getIdiomas();
		for($i = 0; $i < count($idiomas); $i++)
		{
			$query = new Consulta("UPDATE  categorias_idiomas
										SET nombre_categoria =  '".$_POST['nombre_categoria'][$i]."' 
										WHERE id_idioma = '".$idiomas[$i]['id']."'
											AND id_categoria = '".$_GET['id']."'");
		}						
								
		$this->_msgbox->setMsgbox('La categoria se actualizo correctamente.',2);
		location("solucionarios.php");
	}
	
	public function deleteCategorias($cat=0){
		$query = new Consulta("DELETE FROM  categorias WHERE id_categoria = '".$_GET['id']."'");

		
		$this->_msgbox->setMsgbox('La categoria se elimino con exito.',2);
		location("solucionarios.php");
	}
	
	public function getCategoriaXCriterio($cad){
		$sql = "SELECT * 
				FROM categorias 
				WHERE nombre_categoria LIKE '%$cad%'";
					
		$query = new Consulta($sql);
		$data;
		while($row = $query->VerRegistro()){
			$data[] = array(
				'id'		=> $row['id_categoria'],
				'value' 	=> $row['nombre_categoria']
			);
		}
		return $data;
	}
	
	
	
	function verificaCodigoCategorias($cod = ''){
		$query = new Consulta("SELECT * FROM categorias WHERE codigo_categoria = '".$cod."' AND codigo_categoria <> '' ");
		if($query->NumeroRegistros() > 0){
			return TRUE;
		}else{
			return FALSE;
		}
	}

	function getCategorias($id = "", $id_parent = 999999){

		$where = $id != "" ? " AND c.id_categoria = '".$id."' " : "";
		$where .= $id_parent != 999999 ? " AND c.id_parent = '".$id_parent."' " : "";

		$sql = "SELECT * FROM categorias c, categorias_idiomas ci 
					WHERE c.id_categoria = ci.id_categoria
					AND  ci.id_idioma = '".$this->_idioma->__get("_id")."' ".$where. " ORDER BY c.id_categoria";
		
		$query=new Consulta($sql);
		$retorno;
		while($row = $query->VerRegistro()){			
			$retorno[] = array(
				'id'		  =>	$row['id_categoria'],
				'nombre'	  =>	$row['nombre_categoria'],
				'imagen'	  =>	$row['imagen_categoria'],
				'id1'		  =>	$row['id_parent']				
			);
		}
		return $retorno;		
	}

}
 ?>