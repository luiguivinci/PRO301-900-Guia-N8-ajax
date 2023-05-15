<?php
class Controller
{
    public function conectarDb()
    {
        // lógica para conectar a la base de datos
        $host = "localhost"; // reemplaza con el nombre de tu servidor MySQL
        $user = "root"; // reemplaza con el nombre de usuario de tu base de datos
        $password = ""; // reemplaza con la contraseña de tu base de datos
        $database = "db_empresa_ejemplo"; // reemplaza con el nombre de tu base de datos

        $conexion = mysqli_connect($host, $user, $password, $database);

        // Verifica si se ha producido un error en la conexión
        if (!$conexion) {
            die("Error de conexión: " . mysqli_connect_error());
        } else {
            echo "<script>console.log('CONECTADO A DB: $database')</script>";
        }

        return $conexion;

        // Cierra la conexión a la base de datos cuando hayas terminado
        // mysqli_close($conexion);

        return true;
    }

    public function guardar()
    {
        // Conexion
        $conexion = $this->conectarDb();

        // Datos
        $rut = $_POST["txtRut"];
        $nombre = $_POST["txtNombre"];
        $edad = $_POST["intEdad"];
        $fechaNacimiento = $_POST["dateFNac"];
        $email = $_POST["txtEmail"];

        // sentencia SQL con los datos
        $sql = "INSERT INTO clientes (rut, nombre, edad, nacimiento, email) VALUES ('$rut', '$nombre', $edad, '$fechaNacimiento', '$email')";

        $query = mysqli_query($conexion, $sql);

        if ($query) {
            $respuesta = array("mensaje" => "RESPUESTA", "valor" => "Datos guardados con éxito.");
            echo json_encode($respuesta);
        } else {
            $error = mysqli_error($conexion);
            $respuesta = array("mensaje" => "ERROR", "valor" => $error);
            echo json_encode($respuesta);
        }

        // Cierra la conexión a la base de datos cuando hayas terminado
        mysqli_close($conexion);
    }
}

// Instanciando el controlador
$controller = new Controller();


/* Ejecutando métodos del controlador */

// Guardando datos
if (count($_POST) > 0) {
    $formularioCompleto = strlen($_POST["txtRut"] > 0 && strlen($_POST["txtNombre"]) > 0 && strlen($_POST["intEdad"]) > 0 && strlen($_POST["dateFNac"]) > 0 && strlen($_POST["txtEmail"]) > 0) ? true : false;

    if ($formularioCompleto) {
        echo "<script>console.log('POST: " . json_encode($_POST) . "')</script>";

        $controller->guardar();
    }
}
