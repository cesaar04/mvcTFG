<?php
    class Actividad {
        private $db;

        public function __construct() {
            $this->db = new DataBase();
        }

        public function obtenerActividades($fechaInicio, $fechaFin) {

            $this->db->query("SELECT * FROM actividades WHERE Fecha_Inicio >= :fechaInicio AND Fecha_Fin <= :fechaFin");

            $this->db->bind(":fechaInicio", $fechaInicio);
            $this->db->bind(":fechaFin", $fechaFin);

            $resultados = $this->db->registros();
            return $resultados;
        }

        public function hacerInscripcion($datos) {
            $this->db->query("INSERT INTO participantes_actividad (id_Actividad,id_Miembro,descripcion) VALUES (:id_Actividad,:id_Miembro,:descripcion)");

            // Vinculamos los valores
            $this->db->bind(":id_Actividad", $datos["idActividad"]);
            $this->db->bind(":id_Miembro", $datos["idMiembro"]);
            $this->db->bind(":descripcion", $datos["descripcion"]);
            

             // Ejecutar la consulta
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }
    }
?>