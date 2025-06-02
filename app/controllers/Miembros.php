<?php
class Miembros extends Controlador{

    private $miembroModelo;

    public function __construct() {
      //1) Acceso al modelo
      $this->miembroModelo = $this->modelo('Miembro');
    }

    public function index() {
        session_start();
        // Podemos pasar parametros a la vista que queramos
        // Para ello nos creamos un array con los parámetros
        $miembros = $this->miembroModelo->obtenerMiembros();
            $datos =[
                'miembros'=> $miembros // Array con todos los clientes
            ];
            // Le pasamos a la vista los parametros
            if(isset($_SESSION['usuario2'])){
                $this->vista('miembros/inicio', $datos);
            } else {
                $this->vista('administracion/login');
            }
        
    }

    public function agregar() {
        session_start();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $siErrores = false;

            // Definir los datos que se van a procesar
            $datos = [
                'documento_identidad' => Miembros::test_input($_POST['documento_identidad']),
                'nombre' => Miembros::test_input($_POST['nombre']),
                'apellidos' => Miembros::test_input($_POST['apellidos']),
                'email' => Miembros::test_input($_POST['email']),
                'telefono' => Miembros::test_input($_POST['telefono']),
                'direccion' => Miembros::test_input($_POST['direccion']),
                'fecha_nacimiento' => Miembros::test_input($_POST['fecha_nacimiento']),
                'fotografia' => '',
                'rama' => Miembros::test_input($_POST['rama']),
                'rol' => Miembros::test_input($_POST['rol']),
                'usuario' => Miembros::test_input($_POST['usuario']),
                'contrasena' => Miembros::test_input($_POST['contrasena']),
                'dniError' => '',
                'nombreError' => '',
                'apellidosError' => '',
                'emailError' => '',
                'telefonoError' => '',
                'direccionError' => '',
                'fotografiaError' => '',
                'ramaError' => '',
                'rolError' => '',
                'usuarioError' => '',
                'contrasenaError' => ''

            ];

            // Verificar si el campo 'documento_identidad' no está vacío
            if (empty(trim($_POST['documento_identidad']))) {
                $datos['dniError'] = " El DNI es obligatorio";
                $siErrores = true;
            }

            if (!$this->miembroModelo->dniExiste($_POST['documento_identidad'])) {
                $datos['dniError'] = "El dni ya está registrado";
                $siErrores = true;
            }
            if (!preg_match('/^[0-9]{8}[A-Z]{1}$/',$_POST['documento_identidad'])) {
                $datos['dniError'] = " El DNI debe ser 8 números y 1 letra";
                $siErrores = true;
            }

            if (empty(trim($_POST['nombre']))) {
                $datos['nombreError'] = " El nombre es requerido";
                $siErrores = true;
            }
            if (empty(trim($_POST['apellidos']))) {
                $datos['apellidosError'] = " Los apellidos son requeridos";
                $siErrores = true;
            }

            // Verificar si el campo 'email' no está vacío
            if (empty(trim($_POST['email']))) {
                $datos['emailError'] = " El email es requerido";
                $siErrores = true;
            }
            if (!$this->miembroModelo->emailExiste($_POST['email'])) {
                $datos['emailError'] = " El email ya está registrado";
                $siErrores = true;
            }
            
            if (empty(trim($_POST['telefono']))) {
                $datos['telefonoError'] = " El telefono es obligatorio";
                $siErrores = true;
            }

            if (!preg_match('/^\d{9}$/',$_POST['telefono'])) {
                $datos['telefonoError'] = " El numero de telefono deben ser 9 números";
                $siErrores = true;
            }

            if (empty(trim($_POST['direccion']))) {
                $datos['direccionError'] = " La direccion es requerida";
                $siErrores = true;
            }

            if (empty(trim($_POST['rama']))) {
                $datos['ramaError'] = " La rama es requerida";
                $siErrores = true;
            }
            if (empty(trim($_POST['rol']))) {
                $datos['rolError'] = " El rol es requerido";
                $siErrores = true;
            }
            if (empty(trim($_POST['usuario']))) {
                $datos['usuarioError'] = " El login es obligatorio";
                $siErrores = true;
            }

            if (!$this->clienteModelo->loginExiste($_POST['usuario'])) {
                $datos['usuarioError'] = " El login ya está registrado.";
                $siErrores = true;
            }

            if (empty(trim($_POST['usuario']))) {
                $datos['usuarioError'] = " El login es obligatorio";
                $siErrores = true;
            }

            if (empty(trim($_POST['contrasena']))) {
                $datos['contrasenaError'] = " La contraseña es obligatoria";
                $siErrores = true;
            }

            if (!empty(trim($_POST['contrasena']))) {
                $datos['contrasena'] = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);
                $siErrores = false;
            }   

            // Verificar la imagen
            if (isset($_FILES['fotografia']) && $_FILES['fotografia']['error'] == UPLOAD_ERR_OK) {
                $tiposPermitidos = ['image/jpeg', 'image/png', 'image/jpg', 'image/webp'];
                $archivoImagen = $_FILES['fotografia'];
                $tipoArchivo = $archivoImagen['type'];
                $extension = strtolower(pathinfo($archivoImagen['name'], PATHINFO_EXTENSION));
                if ($datos['rol'] == "Joven") {
                    $directorioDestino = dirname(RUTA_APP) . "/public/img/miembros/jovenes/";
                } else if ($datos['rol'] == "Monitor") {
                    $directorioDestino = dirname(RUTA_APP) . "/public/img/miembros/monitores/";
                }
                

                // Asegurarse de que el directorio de destino exista
                if (!is_dir($directorioDestino)) {
                    mkdir($directorioDestino, 0777, true);
                }

                // Verificar el tipo de archivo
                if (!in_array($tipoArchivo, $tiposPermitidos)) {
                    $datos['fotografiaError'] = "Formato de imagen no permitido. Usa JPG, PNG o WEBP.";
                    $siErrores = true;
                }

                // Definir el nombre del archivo de la imagen
                $nombreImagen = $datos['documento_identidad'] . '.' . $extension;
                $rutaDestino = $directorioDestino . $nombreImagen;

                // Verificar el tamaño de la imagen (por ejemplo, 5MB como límite)
                $maxTamano = 5 * 1024 * 1024; // 5MB en bytes
                if ($archivoImagen['size'] > $maxTamano) {
                    $datos['fotografiaError'] = "El archivo de imagen es demasiado grande. El tamaño máximo permitido es 5MB.";
                    $siErrores = true;
                } else {
                    // Mover el archivo a la carpeta destino
                    if (move_uploaded_file($archivoImagen['tmp_name'], $rutaDestino)) {
                        // Si la imagen se sube correctamente, se guarda la ruta
                        if ($datos['rol'] == "Joven") {
                            $datos['fotografia'] = "/public/img/miembros/jovenes/" . $nombreImagen;
                        } else {
                            $datos['fotografia'] = "/public/img/miembros/monitores/" . $nombreImagen;
                        }
                        
                    } else {
                        $datos['fotografiaError'] = "Error al subir la imagen.";
                        $siErrores = true;
                    }
                }
                } else {
                    // Si no se sube una imagen, mostrar un error
                    if ($_FILES['fotografia']['error'] != UPLOAD_ERR_NO_FILE) {
                        $datos['fotografiaError'] = "Hubo un error al intentar cargar la imagen: " . $_FILES['fotografia']['error'];
                        $siErrores = true;
                    } else {
                        $datos['fotografiaError'] = "La imagen es requerida";
                        $siErrores = true;
                    }
                }
                 // Si hay errores, se vuelve a cargar la vista con los datos y los errores
                if ($siErrores) {
                    $this->vista('miembros/agregar', $datos);
                } else {
                    // Si no hay errores, se agrega el vehículo
                    if ($this->miembroModelo->agregarMiembro($datos)) {
                        redireccionar('/miembros');
                    } else {
                        die("No se pudo realizar el alta del vehículo.");
                    }
                }
        } else {
            // Le pasamos a la vista los parametros
            if(isset($_SESSION['usuario2'])){
                $datos =[
                    'documento_identidad' => '',
                    'nombre' => '',
                    'apellidos' => '',
                    'email' => '',
                    'telefono' => '',
                    'direccion' => '',
                    'fecha_nacimiento' => '',
                    'fotografia' => '',
                    'rama' => '',
                    'rol' => '',
                    'usuario' => '',
                    'contrasena' => '',
                    'dniError' => '',
                    'nombreError' => '',
                    'apellidosError' => '',
                    'emailError' => '',
                    'telefonoError' => '',
                    'direccionError' => '',
                    'fotografiaError' => '',
                    'ramaError' => '',
                    'rolError' => '',
                    'usuarioError' => '',
                    'contrasenaError' => ''
                    ];
                $this->vista('miembros/agregar', $datos);
            } else {
                $this->vista('administracion/login');
            }
        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    public function mostrarPorId($id) {
        session_start();
        $miembro = $this->miembroModelo->obtenerMiembroId($id);
        if(isset($_SESSION['usuario2'])){
            $this->vista('miembros/mostrarPorId',$miembro);
        } else {
            $this->vista('administracion/login');
        }
    }

    public function eliminarPorId($id) {
        if ($this->miembroModelo->eliminarPorId($id)){
            redireccionar("/miembros/inicio");
        } else {
            die("No se puede eliminar el cliente");
        }
    }

    public function editarPorId($id) {
        session_start();
        $miembro = $this->miembroModelo->obtenerMiembroId($id);

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $siErrores = false;

            // Preparamos los datos
            $datos = [
                'id' => $id,
                'documento_identidad' => Miembros::test_input($_POST['documento_identidad']),
                'nombre' => Miembros::test_input($_POST['nombre']),
                'apellidos' => Miembros::test_input($_POST['apellidos']),
                'email' => Miembros::test_input($_POST['email']),
                'telefono' => Miembros::test_input($_POST['telefono']),
                'direccion' => Miembros::test_input($_POST['direccion']),
                'fecha_nacimiento' => Miembros::test_input($_POST['fecha_nacimiento']),
                'rama' => Miembros::test_input($_POST['rama']),
                'rol' => Miembros::test_input($_POST['rol']),
                'usuario' => Miembros::test_input($_POST['usuario']),
                'dniError' => '',
                'nombreError' => '',
                'apellidosError' => '',
                'emailError' => '',
                'telefonoError' => '',
                'direccionError' => '',
                'ramaError' => '',
                'rolError' => '',
                'usuarioError' => '',
            ];
            // Verificar si el campo 'documento_identidad' no está vacío
            if (empty(trim($_POST['documento_identidad']))) {
                $datos['dniError'] = " El DNI es obligatorio";
                $siErrores = true;
            }
            if (!preg_match('/^[0-9]{8}[A-Z]{1}$/',$_POST['documento_identidad'])) {
                $datos['dniError'] = " El DNI debe ser 8 números y 1 letra";
                $siErrores = true;
            }

            if (empty(trim($_POST['nombre']))) {
                $datos['nombreError'] = " El nombre es requerido";
                $siErrores = true;
            }
            if (empty(trim($_POST['apellidos']))) {
                $datos['apellidosError'] = " Los apellidos son requeridos";
                $siErrores = true;
            }

            // Verificar si el campo 'email' no está vacío
            if (empty(trim($_POST['email']))) {
                $datos['emailError'] = " El email es requerido";
                $siErrores = true;
            }
            
            if (empty(trim($_POST['telefono']))) {
                $datos['telefonoError'] = " El telefono es obligatorio";
                $siErrores = true;
            }

            if (!preg_match('/^\d{9}$/',$_POST['telefono'])) {
                $datos['telefonoError'] = " El numero de telefono deben ser 9 números";
                $siErrores = true;
            }

            if (empty(trim($_POST['direccion']))) {
                $datos['direccionError'] = " La direccion es requerida";
                $siErrores = true;
            }

            if (empty(trim($_POST['rama']))) {
                $datos['ramaError'] = " La rama es requerida";
                $siErrores = true;
            }

            if (empty(trim($_POST['rol']))) {
                $datos['rolError'] = " El rol es requerido";
                $siErrores = true;
            }

            if (empty(trim($_POST['usuario']))) {
                $datos['usuarioError'] = " El login es obligatorio";
                $siErrores = true;
            }

            if ($siErrores) {
                $this->vista('miembros/modificar', $datos);

            } else {
                // no hay errores
                $miemrbo = $this->miembroModelo->editarPorId($id, $datos); // Modiciacion con datos nuevos
                if ($miembro){
                    redireccionar('/miembros');
                }
                else {
                    die ("No se pudo realizar el alta");
                }
            }
        } else {
            // Le pasamos a la vista los parametros
            if(isset($_SESSION['usuario2'])){
                $datos =[
                    'id' => $id,
                    'documento_identidad' => $miembro->documento_identidad,
                    'nombre' => $miembro->nombre,
                    'apellidos' => $miembro->apellidos,
                    'email' => $miembro->email,
                    'telefono' => $miembro->telefono,
                    'direccion' => $miembro->direccion,
                    'fecha_nacimiento' => $miembro->fecha_nacimiento,
                    'rama' => $miembro->rama,
                    'rol' => $miembro->rol,
                    'usuario' => $miembro->usuario,
                    'dniError' => '',
                    'nombreError' => '',
                    'apellidosError' => '',
                    'emailError' => '',
                    'telefonoError' => '',
                    'direccionError' => '',
                    'fotografiaError' => '',
                    'ramaError' => '',
                    'rolError' => '',
                    'usuarioError' => '',
                    ];
                $this->vista('miembros/modificar', $datos);
            } else {
                $this->vista('administracion/login');
            }
        }
    }
}