<?php

class Login {
    private $db;

    public function __construct() {
        $this->db = new DataBase();
    }

    public function iniciarSesion($datos) {

        $this->db->query("SELECT * FROM usuarios WHERE login = :usuario");
        $this->db->bind(":usuario", $datos["usuario"]);

        $resultado = $this->db->registro();

        if ($resultado) {
            if (password_verify($datos['contrasena'], trim($resultado->password))) {
                return $resultado;
            } else {
                return false; // Contraseña incorrecta
            }
        } else {
            return false; // Usuario no encontrado
        }
    }

    public function iniciarSesion2($datos) {

        $this->db->query("SELECT * FROM miembros WHERE usuario = :usuario");
        $this->db->bind(":usuario", $datos["usuario"]);

        $resultado = $this->db->registro();
 
        if ($resultado) {
            if (password_verify($datos['contrasena'], trim($resultado->contrasena))) {
                return $resultado;
            } else {
                return false; // Contraseña incorrecta
            }
        } else {
            return false; // Usuario no encontrado
        }
    }

    public function obtenerDatosLogin() {
        $this->db->query("SELECT id_Miembro,documento_identidad,nombre,apellidos,email, telefono, direccion,fecha_nacimiento,fotografia, rama, rol FROM miembros WHERE usuario = :usuario");
        $this->db->bind(":usuario",$_SESSION['usuarioLogueado']);

        $resultados = $this->db->registro();
        return $resultados;
    }
}