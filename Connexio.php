<?php

/**
 * Classe per gestionar la connexió a la base de dades MySQL.
 */
class Connexio {
    //Dades de la connexió a la base de dades la_meva_botiga.
    /** @var string Host de la base de dades */
    private $host = "localhost";

    /** @var string Usuari de la base de dades */
    private $usuario = "root";
    /** @var string Contrasenya de la base de dades */
    private $contraseña = "";
    /** @var string Nom de la base de dades */
    private $baseDatos = "la_meva_botiga";

    /**
     * Obté la connexió a la base de dades.
     *
     * @return mysqli Connexió a la base de dades
     */
    
    public function obtenirConnexio() {
        $conexion = new mysqli($this->host, $this->usuario, $this->contraseña, $this->baseDatos);

        if ($conexion->connect_error) {
            die("Error de conexión: " . $conexion->connect_error);
        }

        return $conexion;
    }
}

?>
