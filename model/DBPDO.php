<?php
    /**
    * @author: Óscar Pozuelo
    * @since: 22/04/2026
    */
    class DBPDO{
        public static function ejecutarConsulta($sentenciaSQL,$aParametros=null){
            $sIndex='indexAplicacionFinal.php';
            try{
                //Conexión a la base de datos.
                $conexion=new PDO(DSN,USERNAME,PASSWORD);
                //Se configura el modo errores.
                $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                //Se prepara y ejecuta la consulta.
                $consulta=$conexion->prepare($sentenciaSQL);
                $consulta->execute($aParametros);
                return $consulta;
            }
            catch(PDOException $e){
                $_SESSION['PaginaAnterior']=$_SESSION['PaginaEnCurso'];
                $_SESSION['PaginaEnCurso']='error';
                $_SESSION['error']=new AppError($e->getCode(),$e->getMessage(),$e->getFile(),$e->getLine(),$_SESSION['PaginaAnterior']);
                header('Location: '.$sIndex);
                exit;
            }
        }
    }
?>