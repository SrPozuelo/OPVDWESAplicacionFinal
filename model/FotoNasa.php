<?php
/**
 * Clase FotoNasa.
 * Representa la información de la Fotografía Astronómica del Día (APOD) extraída 
 * a través de la API REST de la NASA. Sirve como objeto de transferencia de datos (DTO)
 * para encapsular la respuesta y enviarla a la vista.
 * @author Óscar Pozuelo
 * @since 21/05/2026
 */
class FotoNasa {
    private $sTitulo;
    private $sUrl;
    private $sFecha;
    private $sDescripcion;
    private $sUrlHD;
    public function __construct($sTitulo,$sUrl,$sFecha,$sDescripcion,$sUrlHD){
        $this->sTitulo=$sTitulo;
        $this->sUrl=$sUrl;
        $this->sFecha=$sFecha;
        $this->sDescripcion=$sDescripcion;
        $this->sUrlHD=$sUrlHD;
    }
    public function getTitulo(){
        return $this->sTitulo;
    }
    public function getUrl(){
        return $this->sUrl;
    }
    public function getFecha(){
        return $this->sFecha;
    }
    public function getDescripcion(){
        return $this->sDescripcion;
    }
    public function getUrlHD(){
        return $this->sUrlHD;
    }
}
