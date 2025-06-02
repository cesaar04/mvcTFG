<?php
class Jovenes extends Controlador{

    private $miembroModelo;

    public function __construct() {
      //1) Acceso al modelo
      $this->miembroModelo = $this->modelo('Miembro');
    }

    public function index() {
        session_start();
        $jovenes = $this->miembroModelo->obtenerJovenes();
        $datos =[
            'jovenes'=> $jovenes // Array con todos los clientes
        ];
        // Le pasamos a la vista los parametros
        if(isset($_SESSION['usuario2'])){
            $this->vista('jovenes/inicio', $datos);
        } else {
            $this->vista('administracion/login');
        }

    }

    
}