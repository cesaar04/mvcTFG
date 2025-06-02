<?php

class Logins extends Controlador {
    
    public function __construct() {
        // Acceso al modelo
        $this->loginModelo = $this->modelo('Login');
    }

    public function index() {
        $this->vista('administracion/home');
    }

    public function acceder() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            session_start();
            $siErrores = false;

            $user = isset($_POST['usuario']) ? Logins::test_input($_POST['usuario']) : '';
            $contrasena = isset($_POST['contrasena']) ? Logins::test_input($_POST['contrasena']) : '';

            $datos = [
                'usuario' => $user,
                'contrasena' => $contrasena,
                'usuarioError' => '',
                'contrasenaError' => '',
                'uniqueError' => '',
            ];

            if (empty($user)) {
                $siErrores = true;
                $datos['usuarioError'] = "Usuario es necesario";
            }
            if (empty($contrasena)) {
                $siErrores = true;
                $datos['contrasenaError'] = "Contraseña es obligatoria";
            }

            if ($siErrores == false) {
                $userAutenticado = $this->loginModelo->iniciarSesion($datos);
                if ($userAutenticado) {
                    $_SESSION['usuario'] = $userAutenticado;

                    // Verificar si el usuario es admin
                    if ($userAutenticado->rol === 'admin') {
                        $_SESSION['usuario2'] = true;
                        $this->vista('administracion/panelControl');
                        exit();
                    } else {
                        $_SESSION['permisoError'] = "No tienes permisos para acceder al área de administración.";
                        $this->vista('administracion/login', $datos);
                        exit();
                    }
                } else {
                    $datos['uniqueError'] = 'Usuario o contraseña incorrectos.';
                    $this->vista('administracion/login', $datos);
                }
            } else {
                $this->vista('administracion/login', $datos);
            }
        } else {
            $datos = [
                'usuario' => '',
                'contrasena' => '',
                'usuarioError' => '',
                'contrasenaError' => '',
                'uniqueError' => '',
            ];
            $this->vista('administracion/login');
        }
    }

    public function accederMiembro() {
        session_start();
        if(isset($_POST['id'],$_POST['nombre'],$_POST['lugar'],$_POST['fecha_inicio'],$_POST['fecha_fin'],$_POST['cantidad_personas'],$_POST['descripcion'])) {
            $_SESSION['id'] = $_POST['id'];
            $_SESSION['nombreActividad'] = $_POST['nombre'];
            $_SESSION['lugar'] = $_POST['lugar'];
            $_SESSION['fecha_inicio'] = $_POST['fecha_inicio'];
            $_SESSION['fecha_fin'] = $_POST['fecha_fin'];
            $_SESSION['cantidad_personas'] = $_POST['cantidad_personas'];
            $_SESSION['descripcion'] = $_POST['descripcion'];
            
            redireccionar('/logins/accederMiembro');
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $siErrores = false;

            $user = isset($_POST['usuario']) ? Logins::test_input($_POST['usuario']) : '';
            $contrasena = isset($_POST['contrasena']) ? Logins::test_input($_POST['contrasena']) : '';
             
            $datos = [
               'usuario' => $user,
               'contrasena' => $contrasena,
               'usuarioError' => '',
               'contrasenaError' => '',
               'uniqueError' => '',
            ];

            if (empty($user)) {
                $siErrores = true;
                $datos['usuarioError'] = "Usuario es necesario";
            }
            if (empty($contrasena)) {
                $siErrores = true;
                $datos['contrasenaError'] = "Contraseña es obligatoria";
            }

            if($siErrores == false) {
                $userAutenticado = $this->loginModelo->iniciarSesion2($datos);

                if ($userAutenticado) {
                    $_SESSION['usuario2'] = true;

                    $_SESSION['usuarioLogueado'] = $user;

                    $datosUsuario = $this->loginModelo->obtenerDatosLogin($user);

                    if ($datosUsuario) {
                        $_SESSION['idMiembro'] = $datosUsuario->id_Miembro;
                        $_SESSION['dni'] = $datosUsuario->documento_identidad;
                        $_SESSION['nombre'] = $datosUsuario->nombre;
                        $_SESSION['apellidos'] = $datosUsuario->apellidos;
                        $_SESSION['email'] = $datosUsuario->email;
                        $_SESSION['telefono'] = $datosUsuario->telefono;
                        $_SESSION['direccion'] = $datosUsuario->direccion;
                        $_SESSION['fechaNacimiento'] = $datosUsuario->fecha_nacimiento;
                        $_SESSION['foto'] = $datosUsuario->fotografia;
                        $_SESSION['rama'] = $datosUsuario->rama;
                        $_SESSION['rol'] = $datosUsuario->rol;
                    }
                    $this->vista('administracion/inscripcion');
                    exit(); 
                } else {
                   $_SESSION['permisoError'] = 'No tienes permisos para acceder al área de inscripción';
                   $this->vista('administracion/login2', $datos);
                   exit(); 
                }
            } else {
                $this->vista('administracion/login2', $datos);
            }
        } else {
            $datos = [
                'usuario' => '',
                'contrasena' => '',
                'usuarioError' => '',
                'contrasenaError' => '',
                'uniqueError' => '',
            ];
            $this->vista('administracion/login2');
        }
    }

    public function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    public function salir() {
        session_start();
        $_SESSION = [];
        session_unset();
        session_destroy();
        header("Location: " . RUTA_URL . "/logins/index");
        exit();
    }
}
?>