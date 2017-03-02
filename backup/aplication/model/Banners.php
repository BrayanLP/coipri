<?php 
class Banners{
	
	private $_msgbox;
	
	public function __construct($msg='')
	{
		$this->_msgbox = $msg;
	}
	
		
	public function editBanners(){
		echo "<div class='success' style='padding:10px;'>&nbsp;&nbsp;Subir imagenes con tamaño aproximado w = 200 x h = 200  pixeles.</div>";
		$query = new Consulta("SELECT * FROM banners WHERE id_banner = '".$_GET['id']."'");
		Form::getForm($query, "edit", "banners.php",'','','img');
	} 
	
    public function updateBanners() {
        $destino = '../aplication/webroot/imgs/catalogo/';
        if (isset($_FILES['imagen_banner']['name']) && $_FILES['imagen_banner']['name'] != "") {
            $nombre = $_FILES['imagen_banner']['name'];
            $tamano = $_FILES['imagen_banner']['size'];
            $tarchivo = $_FILES['imagen_banner']['type'];
            $temp = $_FILES['imagen_banner']['tmp_name'];
            if (move_uploaded_file($temp, $destino . $nombre)) {
                $update = ",imagen_banner = '" . $nombre . "' ";
				
            }
			
        }
		
		$query = new Consulta("UPDATE banners SET titulo_banner='".$_POST['titulo_banner']."',enlace_banner='".$_POST['enlace_banner']."'" . $update . " WHERE id_banner = '" . $_GET['id'] . "'");
		$this->_msgbox->setMsgbox('Banner actualizado correctamente.',2);
		location("banners.php");
    }
	
	public function deleteBanners(){
		$this->_msgbox->setMsgbox('Esta opción no esta permitida.',2);
		location("banners.php");
	}
	
	public function listBanners(){
        
		if (!isset($_GET['pag'])) {
            $_GET['pag'] = 1;
        }
        $tampag = 20;
        $reg1 = ($_GET['pag'] - 1) * $tampag;
        $sql = "SELECT id_banner, titulo_banner, enlace_banner FROM banners ";
        $queryt = new Consulta($sql);
        $num = $queryt->NumeroRegistros();
        $limit = $sql_pag . " LIMIT " . $reg1 . "," . $tampag . "";
        $sql.= $limit;
        $query = new Consulta($sql);
        echo Listado::VerListado($query, "banners.php");
		
	} 
	
	public function getBanners(){
		$sql   = " SELECT * FROM banners";
		$query = new Consulta($sql);
		
		while($row = $query->VerRegistro()){
			$datos[] = array(
				'id' 		=> $row['id_banner'],
				'imagen' 	=> $row['imagen_banner'],
				'enlace' 	=> $row['enlace_banner'],
				'titulo' 	=> $row['titulo_banner']
			);
		}
		return $datos;	
	} 
}
?>