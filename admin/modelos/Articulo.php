<?php 
// Incluir la conexión de base de datos
require "../config/Conexion.php";

class Articulo {

    // Constructor
    public function __construct() {}

    // Método para insertar un nuevo artículo
    public function insertar($nombre, $codigo, $descripcion, $marca, $modelo, $puerto, $generacion, $ram, $rom, $categoria, $idusuario) {
        date_default_timezone_set('America/Mexico_City');
        $fechacreada = date('Y-m-d H:i:s');
        $sql = "INSERT INTO articulo (nombre, codigo, descripcion, marca, modelo, puerto, generacion, ram, rom, categoria, fechacreada, idusuario) 
                VALUES ('$nombre', '$codigo', '$descripcion', '$marca', '$modelo', '$puerto', '$generacion', '$ram', '$rom', '$categoria', '$fechacreada', '$idusuario')";
        return ejecutarConsulta($sql);
    }

    // Método para editar un artículo existente
    public function editar($idarticulo, $nombre, $codigo, $descripcion, $marca, $modelo, $puerto, $generacion, $ram, $rom, $categoria, $idusuario) {
        $sql = "UPDATE articulo 
                SET nombre='$nombre', codigo='$codigo', descripcion='$descripcion', marca='$marca', modelo='$modelo', 
                    puerto='$puerto', generacion='$generacion', ram='$ram', rom='$rom', categoria='$categoria', idusuario='$idusuario' 
                WHERE idarticulo='$idarticulo'";
        return ejecutarConsulta($sql);
    }

    // Método para desactivar un artículo
    public function desactivar($idarticulo) {
        $sql = "UPDATE articulo SET estado='0' WHERE idarticulo='$idarticulo'";
        return ejecutarConsulta($sql);
    }

    // Método para activar un artículo
    public function activar($idarticulo) {
        $sql = "UPDATE articulo SET estado='1' WHERE idarticulo='$idarticulo'";
        return ejecutarConsulta($sql);
    }

    // Método para mostrar un artículo específico
    public function mostrar($idarticulo) {
        $sql = "SELECT * FROM articulo WHERE idarticulo='$idarticulo'";
        return ejecutarConsultaSimpleFila($sql);
    }

    // Método para listar todos los artículos
    public function listar() {
        $sql = "SELECT * FROM articulo";
        return ejecutarConsulta($sql);
    }

    // Método para listar artículos en un select (dropdown)
    public function selectCategoria() {
        $sql = "SELECT * FROM categoria";
        return ejecutarConsulta($sql);
    }

    // Método para eliminar un artículo
    public function eliminar($idarticulo) {
        $sql = "DELETE FROM articulo WHERE idarticulo='$idarticulo'";
        return ejecutarConsulta($sql);
    }
}
?>
