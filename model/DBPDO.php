<?php
    /**
    * @author: Óscar Pozuelo
    * @since: 22/04/2026
    */
    class DBPDO{
        public static function ejecutarConsulta($sentenciaSQL,$aParametros=null){
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
                $_SESSION['paginaAnterior']=$_SESSION['paginaEnCurso'];
                $_SESSION['paginaEnCurso']='error';
                $_SESSION['error']=new AppError($e->getCode(),$e->getMessage(),$e->getFile(),$e->getLine(),$_SESSION['paginaAnterior']);
                header('Location: indexLoginLogoff.php');
                exit;
            }
        }
    }
?>