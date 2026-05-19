<?php
/**
 * Descripción de Departamento
 * @author Óscar Pozuelo
 * @since 13/05/2026
 */
class DepartamentoPDO {
     /**
     * Busca departamentos por descripción con búsqueda parcial
     *
     * Realiza una búsqueda en la tabla T02_Departamento usando LIKE
     * para encontrar coincidencias parciales en la descripción.
     * Los resultados se ordenan alfabéticamente por descripción
     *
     * @param string|null $descDepartamento Descripción o parte de ella a buscar
     * @return array Array de objetos Departamento encontrados
     */
    public static function buscarDepartamentoPorDesc($descDepartamento=null){
        $aDepartamentos=[];
        $sql = <<<SQL
            SELECT *
            FROM T02_Departamento 
            WHERE T02_DescDepartamento LIKE :descDepartamento
            ORDER BY T02_DescDepartamento ASC;
        SQL;
        $consulta=DBPDO::ejecutarConsulta($sql,[':descDepartamento'=>"%$descDepartamento%"]);
        //Convertir cada registro en un objeto Departamento
        while ($oDepartamento=$consulta->fetchObject()) {
            $aDepartamentos[]=new Departamento(
                $oDepartamento->T02_CodDepartamento,
                $oDepartamento->T02_DescDepartamento,
                $oDepartamento->T02_FechaCreacionDepartamento,
                $oDepartamento->T02_VolumenDeNegocio,
                $oDepartamento->T02_FechaBajaDepartamento
            );
        }
        return $aDepartamentos;
    }
    /**
     * Busca un departamento específico utilizando su código identificador.
     *
     * @param string $codDepartamento Código único del departamento (PK).
     * @return Departamento|null Devuelve un objeto Departamento si lo encuentra y si no lo encuentra devuelve null.
     */
    public static function buscarDepartamentoPorCod($CodDepartamento) {
        $sql="SELECT * FROM T02_Departamento WHERE T02_CodDepartamento = :codDepartamento";
        $Parametros = [':codDepartamento' => $CodDepartamento];
        $Consulta=DBPDO::ejecutarConsulta($sql,$Parametros);
        if($Consulta->rowCount()>0){
            $oDepartamento=$Consulta->fetchObject();
            return new Departamento(
                $oDepartamento->T02_CodDepartamento,
                $oDepartamento->T02_DescDepartamento,
                $oDepartamento->T02_FechaCreacionDepartamento,
                $oDepartamento->T02_VolumenDeNegocio,
                $oDepartamento->T02_FechaBajaDepartamento
            );
        }
        return null;
    }
}
