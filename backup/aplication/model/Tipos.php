<?php
class Tipos 
{
	private $_msgbox;
	private $_usuario;
	
	public function __construct($msg='',Usuario $user)
	{
		$this->_msgbox = $msg;
		$this->_usuario = $user;
	}
	
	
	public function getTipos()
	{
		$query = new Consulta("SELECT * FROM tipos order by 1");
		while($row = $query->VerRegistro())
		{
			$datos[] = array(
				'id_tipo' 	 => $row['id_tipo'],
				'tipo' => $row['tipo']
			);	
		}
		
		return $datos;
	}
	
}
 ?>