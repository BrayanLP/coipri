<?php

class Producto{
	
	private $_id_producto, 
                $_nombre, 
                $_descripcion, 
                $_imagen_producto, 
                $_orden_producto;
	
	public function __construct($id = 0){
		$this->_id = $id;
		$this->_idioma = $idioma;
		
		if($this->_id > 0){
			 
			$sql = "SELECT * FROM productos";
			
			$query = new Consulta($sql);
			
			if($row = $query->VerRegistro()){ 
				$this->_id_producto	 	= $row['id_producto'];
				$this->_nombre	 	= $row['nombre'];
				$this->_descripcion	 	= $row['descripcion'];
				$this->_precio_extranjero	 	= $row['imagen_producto'];
				$this->_imagen_producto	 		= $row['pdf_producto'];
				$this->_orden_producto	 		= $row['orden_producto'];
			}
			
			
			
		}					
	}
	
	public function __get($attribute){
		return	$this->$attribute;
	}
	
}
 ?>