<?php

class Miembro {
    private $db;

    public function __construct() {
        $this->db = new DataBase();
    }

    // Método para sacar todos los miembros
    public function obtenerMiembros() {
        $this->db->query("SELECT * from miembros");

        $resultados = $this->db->registros();
        return $resultados;
    }

    // Método para sacar todos los monitores
    public function obtenerMonitores() {
        $this->db->query("SELECT * from miembros WHERE rol='monitor'");

        $resultados = $this->db->registros();
        return $resultados;
    }

    // Método para sacar todos los jóvenes
    public function obtenerJovenes(){
        $this->db->query("SELECT * from miembros WHERE rol='joven'");

        $resultados = $this->db->registros();
        return $resultados;
    }

    // Método para agregar miembros
    public function agregarMiembro($datos){
        $this->db->query("INSERT INTO miembros (documento_identidad, nombre, apellidos, email, telefono, direccion, fecha_nacimiento, fotografia, rama, rol, usuario, contrasena) VALUES (:documento_identidad, :nombre, :apellidos, :email, :telefono, :direccion, :fecha_nacimiento, :fotografia, :rama, :rol, :usuario, :contrasena)");
        
        // Vinculamos los valores
        $this->db->bind(":documento_identidad", $datos["documento_identidad"]);
        $this->db->bind(":nombre", $datos["nombre"]);
        $this->db->bind(":apellidos", $datos["apellidos"]);
        $this->db->bind(":email", $datos["email"]);
        $this->db->bind(":telefono", $datos["telefono"]);
        $this->db->bind(":direccion", $datos["direccion"]);
        $this->db->bind(":fecha_nacimiento", $datos["fecha_nacimiento"]);
        $this->db->bind(":fotografia", $datos["fotografia"]);
        $this->db->bind(":rama", $datos["rama"]);
        $this->db->bind(":rol", $datos["rol"]);
        $this->db->bind(":usuario", $datos["usuario"]);
        $this->db->bind(":contrasena", $datos["contrasena"]);


        // Ejecutar la consulta
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Método para saber si el dni de un miembro existe, NO REPETIDOS
    public function dniExiste($dni) {
        $this->db->query("SELECT documento_identidad from miembros where documento_identidad = :dni");

        $this->db->bind(":dni", $dni);

        $this->db->execute();

        if ($this->db->execute()) {
            if ($this->db->rowCount() > 0) {
                return false;
            } else {
                return true;
            }
        } else {
            return false;
        }
    }
    
    // Método para saber si el email de un miembro existe, NO REPETIDOS
    public function emailExiste($email) {
        $this->db->query("SELECT email FROM miembros WHERE email = :email");

        $this->db->bind(":email", $email);

        $this->db->execute();

        if ($this->db->execute()) {
            if ($this->db->rowCount() > 0) {
                return false;
            } else {
                return true;
            }
        } else {
            return false;
        }
    }

    // Método para saber si el usuario de un miembro existe, NO REPETIDOS
    public function loginExiste($login) {
        $this->db->query("SELECT usuario FROM miembros WHERE usuario = :usuario");

        $this->db->bind(":usuario", $login);

        $this->db->execute();

        if ($this->db->execute()) {
            if ($this->db->rowCount() > 0) {
                return false;
            } else {
                return true;
            }
        } else {
            return false;
        }
    }

    // Método para obtener un miembro por su id
    public function obtenerMiembroId($id) {
        $this->db->query("SELECT * from miembros WHERE id_Miembro = :id");
        $this->db->bind(":id",$id);

        $resultados = $this->db->registro();
        return $resultados;
    }

    // Método para eliminar un miembro por su id
    public function eliminarPorId($id) {
        $this->db->query("DELETE FROM miembros WHERE id_Miembro = :id");
        $this->db->bind(":id",$id);
        
        // Ejecutar la consulta
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Método para editar un miembro por su id
    public function editarPorId($id,$datos) {
        $this->db->query("UPDATE miembros SET documento_identidad = :documento_identidad, nombre = :nombre, apellidos = :apellidos, email = :email, telefono = :telefono, direccion = :direccion, fecha_nacimiento = :fecha_nacimiento, rama = :rama, rol = :rol, usuario = :usuario WHERE id_Miembro = :id");

        // Vinculamos los valores
        $this->db->bind(":id", $id);
        $this->db->bind(":documento_identidad", $datos["documento_identidad"]);
        $this->db->bind(":nombre", $datos["nombre"]);
        $this->db->bind(":apellidos", $datos["apellidos"]);
        $this->db->bind(":email", $datos["email"]);
        $this->db->bind(":telefono", $datos["telefono"]);
        $this->db->bind(":direccion", $datos["direccion"]);
        $this->db->bind(":fecha_nacimiento", $datos["fecha_nacimiento"]);
        $this->db->bind(":rama", $datos["rama"]);
        $this->db->bind(":rol", $datos["rol"]);
        $this->db->bind(":usuario", $datos["usuario"]);
        

        // Ejecutar la consulta
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }


    // Obtener los participantes de cada rama
    public function obtenerCastores() {
        $this->db->query("SELECT * FROM `miembros` WHERE rama='Castores' AND rol='joven'");

        $resultados = $this->db->registros();
        return $resultados;
    }

    public function obtenerLobatos() {
        $this->db->query("SELECT * FROM `miembros` WHERE rama='Lobatos' AND rol='joven'");

        $resultados = $this->db->registros();
        return $resultados;
    }

    public function obtenerExploradores() {
        $this->db->query("SELECT * FROM `miembros` WHERE rama='Exploradores' AND rol='joven'");

        $resultados = $this->db->registros();
        return $resultados;
    }

    public function obtenerPioneros() {
        $this->db->query("SELECT * FROM `miembros` WHERE rama='Pioneros' AND rol='joven'");

        $resultados = $this->db->registros();
        return $resultados;
    }

    public function obtenerRutas() {
        $this->db->query("SELECT id_Miembro, nombre FROM `miembros` WHERE direccion='C / Ruta'");

        $resultados = $this->db->registros();
        return $resultados;
    }

    
}