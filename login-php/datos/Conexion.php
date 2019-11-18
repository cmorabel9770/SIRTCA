<?php

class Conexion
{

    /**
     * Conexión a la base datos
     *
     * @return PDO
     */
    public static function conectar()
    {
        try {

            $cn = new PDO("mysql:host=sql5c75f.carrierzone.com; dbname=phpmy1_enlacejuridico24h_com_co", "enlacejuri472754", "admin2019");

            return $cn;

        } catch (PDOException $ex) {
            die($ex->getMessage());
        }
    }

}
