<?php

class Fecha{
	
	var $date;

	static public function formatoDate($comodin,$fecha){
		$nfecha=explode($comodin,$fecha);
		$dia=$nfecha[0];
		$mes=$nfecha[1];
		$ano=$nfecha[2];
		$ufecha=$ano."-".$mes."-".$dia;
		return $ufecha;
	}

	function formatoSlash($comodin,$fecha){
		$nfecha=explode($comodin,$fecha);
		$dia=$nfecha[2];
		$mes=$nfecha[1];
		$ano=$nfecha[0];
		$ufecha=$dia."/".$mes."/".$ano;
		return $ufecha;
	}
        
	function formatoDia($comodin,$fecha){
		$nfecha=explode($comodin,$fecha);
		$dia=$nfecha[2];
		$ufecha=$dia;
		return $ufecha;
	}        
        
	function formatoMes($comodin,$fecha){
		$nfecha=explode($comodin,$fecha);
		$mes=$nfecha[1];
		$ufecha=$mes;
		return $ufecha;
	}          
}

 ?>