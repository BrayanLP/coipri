<?php

class Canciones{

    public function __construct() {
        
    }

    public function listCanciones() {
        $sql = 'SELECT * FROM canciones ORDER BY id ASC';
        $query = new Consulta($sql);
        $archivo = fopen('content.xml', 'w');
        $archivo = fopen('content.xml', 'a');
        fwrite ($archivo,'<?xml version="1.0" encoding="utf-8" standalone="yes"?>');
        fwrite ($archivo,'<content>'); 
        while ($row = $query->VerRegistro()) {
              fwrite ($archivo,'<mp3 Thumb="aplication/webroot/mp3/thumb1.jpg" Title="'. $row['titulo'].'" Path="aplication/webroot/mp3/' . $row['archivo'] .'"></mp3>');
        }
        fwrite ($archivo, '</content>');
        fclose ($archivo); 
    }
}