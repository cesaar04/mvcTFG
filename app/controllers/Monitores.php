<?php
class Monitores extends Controlador{

    private $miembroModelo;

    public function __construct() {
      //1) Acceso al modelo
      $this->miembroModelo = $this->modelo('Miembro');
    }

    public function index() {
        session_start();
        $monitores = $this->miembroModelo->obtenerMonitores();
        $datos =[
            'monitores'=> $monitores // Array con todos los clientes
        ];
        // Le pasamos a la vista los parametros
        if(isset($_SESSION['usuario2'])){
            $this->vista('monitores/inicio', $datos);
        } else {
            $this->vista('administracion/login');
        }

    }

    
}