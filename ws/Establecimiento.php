<?php
/**
 * Representa el la estructura de los usuarios
 * almacenadas en la base de datos
 */
require 'DatabasePro.php';

class Establecimiento
{
    function __construct()
    {
    }

    /**
     * Retorna en la fila especificada de la tabla 'Establecimiento'
     *
     * @param $idUsuario Identificador del registro
     * @return array Datos del registro
     */
    public static function getAll()
    {
        $consulta = "SELECT * FROM establecimiento WHERE ID_ESTADO=1";
        try {
            // Preparar sentencia
            $comando = Database::getInstance()->getDb()->prepare($consulta);
            // Ejecutar sentencia preparada
            $comando->execute();

            return $comando->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            return false;
        }
    }
    /**
     * Retorna en la fila especificada de la tabla 'Establecimiento'
     *
     * @param $idUsuario Identificador del registro
     * @return array Datos del registro
     */
    public static function getAllUsuarios()
    {
        $consulta = "SELECT * FROM usuario";
        try {
            // Preparar sentencia
            $comando = Database::getInstance()->getDb()->prepare($consulta);
            // Ejecutar sentencia preparada
            $comando->execute();

            return $comando->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            return false;
        }
    }


    /**
     * Insertar un nuevo Establecimiento
     *
     * @param $nombre      nombre del nuevo registro
     * @param $direccion dirección del nuevo registro
     * @return PDOStatement
     */
    public static function insert( $nombre,$argumentos
    )
    {

    date_default_timezone_set('America/Bogota');
    $fecha= date("Y-m-d");
    $hora= date("H:i:s");
    $fechaActual=$fecha.' '.$hora;

        $args = explode("|", $argumentos);
        $apellido=$args[0];
        $nroDocumento=$args[1];
        $celular=$args[2];
        $correo=$args[3];
        $programa=$args[4];
        $fechaNac = explode("/", $args[5]);
        $d=mktime(0, 0, 0, $fechaNac[0], $fechaNac[1], $fechaNac[2]);
        $fechaNacimiento=date("Y-m-d", $d);
        // Sentencia INSERT
        $comando = "INSERT INTO usuario  VALUES( NULL,3,1,1,1,3,?,?,?,?,?,?,
            'NO_APLICA','{$fechaActual}',?,60,'{$fechaNacimiento}'
                )";
        
        // Preparar la sentencia
        $sentencia = Database::getInstance()->getDb()->prepare($comando);

        return $sentencia->execute(
            array(
                $nombre,
                $apellido,
                $nroDocumento,
                $nroDocumento,
                $celular,
                $correo,
                $programa
            )
        );

    }



}

?>