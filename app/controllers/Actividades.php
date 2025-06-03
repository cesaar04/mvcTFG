<?php
// Incluir los archivos necesarios de PHPMailer manualmente
require_once RUTA_APP . '/../public/PHPMailer-master/src/PHPMailer.php';
require_once RUTA_APP . '/../public/PHPMailer-master/src/SMTP.php';
require_once RUTA_APP . '/../public/PHPMailer-master/src/Exception.php';


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Actividades extends Controlador {
    private $actividadModelo;

    public function __construct() {
        $this->actividadModelo = $this->modelo('Actividad');
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // Método para mostrar todas las actividades disponibles
    public function mostrarActividades() {
        if ($_SERVER['REQUEST_METHOD']=='POST') {
            $siErrores = false;

            $fechaInicio = isset($_POST['fecha_inicio']) ? Actividades::test_input($_POST['fecha_inicio']) : '';
            $fechafin = isset($_POST['fecha_fin']) ? Actividades::test_input($_POST['fecha_fin']) : '';

            if($fechaInicio && $fechafin) {
                $actividadesGuardadas = $this->actividadModelo->obtenerActividades($fechaInicio,$fechafin);
            } else {
                $actividadesGuardadas = [];
            }

            $datos = [
                'actividades' => '',
                'fechaInicio' => $fechaInicio,
                'fechaFin' => $fechafin,
                'errorFecha' => '',
            ];

            $fechaPrincipio = new DateTime($fechaInicio);
            $fechaFinal = new DateTime($fechafin);

            if ($fechaFinal < $fechaPrincipio) {
                $datos['errorFecha'] = "Pon fechas correctas";
                $siErrores = true;
            }
            if ($siErrores) {
                $this->vista('archivos/actividades',$datos);
            } else {
                $datos['actividades'] = $actividadesGuardadas;
                $this->vista('archivos/actividades',$datos);
            }
        }  else {
            $datos = [
                'actividades' => [],
                'fechaInicio' => '',
                'fechaFin' => '',
                'errorFecha' => '',
            ];
            $this->vista('administracion/home',$datos);
        }
    }

    // Método para realizar la inscripcion y enviar un correo con los datos de la actividad y del miembro que la elige
    public function hacerInscripcion(){
        session_start();
        if ($_SERVER['REQUEST_METHOD']=='POST') {
            $datos =[
                'idActividad' => $_SESSION['id'],
                'idMiembro' => $_SESSION['idMiembro'],
                'descripcion' => $_SESSION['descripcion']
            ];
            if($this->actividadModelo->hacerInscripcion($datos)) {
                $this->enviarCorreo();
                redireccionar('/administracion/home');
            }
            else {
                die ("No se pudo realizar el alta");
            }
        } else {
            // Le pasamos a la vista los parametros
            if(isset($_SESSION['usuario2'])){
                $datos =[
                    'idActividad' => '',
                    'idMiembro' => '',
                    'descripcion' => ''
                ];
                $this->vista('miembros/agregar', $datos);
            } else {
                $this->vista('administracion/login');
            }
        }
    }

    // Método para enviar el correo
    public function enviarCorreo() {
        $mail = new PHPMailer(true);
        try {
            // Configuración SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'cdmuro44@gmail.com'; // Tu dirección de correo
            $mail->Password = 'qocw vlac gqiu kvdr'; // Contraseña o app password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;
    
            $mail->setFrom('cdmuro44@gmail.com', 'GS 7 Valles de la Vid');
            $mail->addAddress($_SESSION['email']); // Correo destino
            $mail->Subject = 'Informacion actividad inscripcion';

            // Cuerpo del correo
            $cuerpo = "<h2>Informacion actividad inscripcion:</h2>";
            $cuerpo .= "<h3>Datos del Miembro</h3>";
            $cuerpo .= "<p><strong>DNI:</strong> " . $_SESSION['dni'] . "<br>";
            $cuerpo .= "<strong>Nombre:</strong> ". $_SESSION['nombre'] ."<br>";
            $cuerpo .= "<strong>Apellidos:</strong>". $_SESSION['apellidos'] ."<br>";
            $cuerpo .= "<strong>Email:</strong>". $_SESSION['email']. "<br>";
            $cuerpo .= "<strong>Teléfono:</strong>". $_SESSION['telefono'] ."<br>";
            $cuerpo .= "<strong>Dirección:</strong> ". $_SESSION['direccion'] ."<br>";
            $cuerpo .= "<strong>Fecha de Nacimiento:</strong>". $_SESSION['fechaNacimiento']. "<br>";
            $cuerpo .= "<strong>Rama:</strong>". $_SESSION['rama']. "<br>";
            $cuerpo .= "</p>";
            $cuerpo .= "<h3>Características de la actividad:</h3>";
            $cuerpo .= "<p><strong>Nombre de la actividad:</strong> " . $_SESSION['nombreActividad'] . "<br>";
            $cuerpo .= "<strong>Lugar:</strong> " . $_SESSION['lugar'] . "<br>";
            $cuerpo .= "<strong>Fecha inicio:</strong> " . $_SESSION['fecha_inicio'] . "<br>";
            $cuerpo .= "<strong>Fecha final:</strong> " . $_SESSION['fecha_fin'] . "<br>";
            $cuerpo .= "<strong>Maxima participantes:</strong> " . $_SESSION['cantidad_personas'] . "<br>";            
            $cuerpo .= "<strong>Descripción:</strong> " .  $_SESSION['descripcion'] . "<br>";
            $cuerpo .= "</p>";
            $mail->isHTML(true);
            $mail->Body = $cuerpo;
    
            $mail->send();
        } catch (Exception $e) {
            // Mostrar el error si falla el envío
            echo "No se pudo enviar el correo. Error: {$mail->ErrorInfo}";
        }
    }
}