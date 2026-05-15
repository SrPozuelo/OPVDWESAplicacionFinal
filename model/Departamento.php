<?php
/**
 * Descripción de Departamento
 * @author Óscar Pozuelo
 * @since 13/05/2026
 */
class Departamento {
    private $CodDepartamento;
    private $DescDepartamento;
    private $FechaCreacionDepartamento;
    private $VolumenDeNegocio;
    private $FechaBajaDepartamento;
    public function __construct($CodDepartamento,$DescDepartamento,$FechaCreacionDepartamento,$VolumenDeNegocio,$FechaBajaDepartamento=null) {
        $this->CodDepartamento           = $CodDepartamento;
        $this->DescDepartamento          = $DescDepartamento;
        $this->FechaCreacionDepartamento = $FechaCreacionDepartamento;
        $this->VolumenDeNegocio          = $VolumenDeNegocio;
        $this->FechaBajaDepartamento     = $FechaBajaDepartamento;
    }
    public function getCodDepartamento(){
        return $this->CodDepartamento;
    }
    public function getDescDepartamento(){
        return $this->DescDepartamento;
    }
    public function getFechaCreacionDepartamento(){
        return $this->FechaCreacionDepartamento;
    }
    public function getVolumenDeNegocio(){
        return $this->VolumenDeNegocio;
    }
    public function getFechaBajaDepartamento(){
        return $this->FechaBajaDepartamento;
    }
    public function setCodDepartamento($CodDepartamento){
        $this->CodDepartamento=$CodDepartamento;
    }
    public function setDescDepartamento($DescDepartamento){
        $this->DescDepartamento=$DescDepartamento;
    }
    public function setFechaCreacionDepartamento($FechaCreacionDepartamento){
        $this->FechaCreacionDepartamento=$FechaCreacionDepartamento;
    }
    public function setVolumenDeNegocio($VolumenDeNegocio){
        $this->VolumenDeNegocio=$VolumenDeNegocio;
    }
    public function setFechaBajaDepartamento($FechaBajaDepartamento){
        $this->FechaBajaDepartamento=$FechaBajaDepartamento;
    }
}
?>