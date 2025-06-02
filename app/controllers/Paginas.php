<?php
class Paginas extends Controlador{
    private $miembroModelo;

    public function __construct() {
      //1) Acceso al modelo
      $this->miembroModelo = $this->modelo('Miembro');
    }

    public function historia() {
        $this->vista('archivos/historia');
    }
    
    public function castores() {
        $castores = $this->miembroModelo->obtenerCastores();
        $numCastores = 0;

        foreach ($castores as $castor) {
            $numCastores++; 
        }
            $datos = [
                'castores' => $castores,
                'numCastores' => $numCastores
            ];
        $this->vista('archivos/castores',$datos);
    }
    
    public function lobatos() {
        $lobatos = $this->miembroModelo->obtenerLobatos();
        $numlobatos = 0;

        foreach ($lobatos as $lobato) {
            $numlobatos++; 
        }
            $datos = [
                'lobatos' => $lobatos,
                'numLobatos' => $numlobatos
            ];
        $this->vista('archivos/lobatos',$datos);
    }

    public function exploradores() {
        $exploradores = $this->miembroModelo->obtenerExploradores();
        $numExploradores = 0;

        foreach ($exploradores as $explorador) {
            $numExploradores++; 
        }
            $datos = [
                'exploradores' => $exploradores,
                'numExploradores' => $numExploradores
            ];
        $this->vista('archivos/exploradores',$datos);
    }
    
    public function pioneros() {
        $pioneros = $this->miembroModelo->obtenerPioneros();
        $numPioneros = 0;

        foreach ($pioneros as $pionero) {
            $numPioneros++; 
        }
            $datos = [
                'pioneros' => $pioneros,
                'numPioneros' => $numPioneros
            ];
        $this->vista('archivos/pioneros',$datos);
    }

    public function rutas() {
        $rutas = $this->miembroModelo->obtenerRutas();
        $numRutas = 0;

        foreach ($rutas as $ruta) {
            $numRutas++; 
        }
            $datos = [
                'rutas' => $rutas,
                'numRutas' => $numRutas
            ];
       $this->vista('archivos/rutas', $datos);
        
    }

    public function monitores() {
        $monitores = $this->miembroModelo->obtenerMonitores();
        $numMonitores = 0;

        foreach ($monitores as $monitor) {
            $numMonitores++;
        }
        $datos = [
                'monitores' => $monitores,
                'numMonitores' => $numMonitores
            ];
        $this->vista('archivos/monitores', $datos);
    }

    public function galeria() {
        $this->vista('archivos/galeria');
    }

    public function dondeEstamos() {
        $this->vista('archivos/dondeEstamos');
    }

    public function quienesSomos() {
        $this->vista('archivos/quienesSomos');
    }
    
    public function actividades() {
        $this->vista('archivos/actividades');
    }

    public function contacto() {
        $this->vista('archivos/contacto');
    }

    public function home() {
        $this->vista('administracion/home');
    }

    
}