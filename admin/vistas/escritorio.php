<?php
// Activamos almacenamiento en el buffer. Esto permite almacenar el contenido en el buffer de salida antes de enviarlo al navegador.
ob_start();
session_start(); // Inicia la sesión para poder utilizar variables de sesión.

// Verifica si la variable de sesión 'nombre' está establecida. Si no está establecida, redirige al usuario a la página de inicio de sesión (login.php).
if (!isset($_SESSION['nombre'])) {
  header("Location: login.php"); // Redirige al usuario no autenticado a la página de inicio de sesión.
} else {
  // Si la sesión está activa, incluye el archivo 'header.php' que probablemente contiene el encabezado HTML común para la aplicación.
  require 'header.php';
  
  // Incluye el archivo 'Usuario.php', que parece contener la clase Usuario utilizada para interactuar con los datos de usuario.
  require_once('../modelos/Usuario.php');
  
  // Crea una instancia de la clase Usuario.
  $usuario = new Usuario();
  
  // Llama al método cantidad_usuario() de la clase Usuario para obtener el número total de usuarios.
  $rsptan = $usuario->cantidad_usuario();
  
  // Obtiene el primer objeto del resultado devuelto, que debería contener la cantidad de usuarios.
  $reg = $rsptan->fetch_object();
?>

<!-- Inicia el contenedor principal del contenido -->
<div class="content-wrapper">
  <!-- Sección principal del contenido -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- Caja principal -->
          <div class="box">
            <!-- Encabezado de la caja -->
            <div class="box-header with-border text-center">
              <h3 class="box-title">Panel de Control </h3> <!-- Título de la caja -->
            </div>
            <!-- Cuerpo de la caja -->
            <div class="box-body">
              <div class="row d-flex justify-content-center">
                <!-- Tarjetas Modernas -->
                <!-- Tarjeta para la lista de asistencias -->
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                  <div class="card border-0 shadow-lg rounded-lg overflow-hidden">
                    <div class="card-img-top bg-gradient-primary text-white p-4 text-center">
                      <i class="fa fa-list fa-4x"></i> <!-- Icono para la lista de asistencias -->
                      <h4 class="mt-2"><strong>Lista de asistencias</strong></h4> <!-- Título de la tarjeta -->
                    </div>
                    <div class="card-body text-center">
                      <p>Accede al módulo de lista de asistencias para ver y gestionar las entradas de asistencia de los empleados.</p> <!-- Descripción de la tarjeta -->
                      <a href="<?php echo ($_SESSION['tipousuario'] == 'Administrador') ? 'asistencia.php' : 'asistenciau.php'; ?>" class="btn btn-primary">
                        <i class="fa fa-arrow-right"></i> Acceder
                      </a> <!-- Botón para acceder al módulo de asistencias -->
                    </div>
                  </div>
                </div>

                <?php if ($_SESSION['tipousuario'] == 'Administrador') { ?>
                <!-- Tarjeta para la gestión de empleados, visible solo para administradores -->
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                  <div class="card border-0 shadow-lg rounded-lg overflow-hidden">
                    <div class="card-img-top bg-gradient-warning text-white p-4 text-center">
                      <i class="fa fa-users fa-4x"></i> <!-- Icono para la gestión de empleados -->
                      <h4 class="mt-2"><strong>Empleados</strong></h4> <!-- Título de la tarjeta -->
                    </div>
                    <div class="card-body text-center">
                      <p>Total de empleados registrados: <?php echo $reg->nombre; ?></p> <!-- Muestra la cantidad de empleados registrados -->
                      <p>Gestiona los datos de los empleados del sistema.</p> <!-- Descripción de la tarjeta -->
                      <a href="usuario.php" class="btn btn-warning">
                        <i class="fa fa-arrow-right"></i> Gestionar
                      </a> <!-- Botón para gestionar empleados -->
                    </div>
                  </div>
                </div>
                <?php } ?>

                <!-- Tarjeta para los reportes de asistencias -->
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                  <div class="card border-0 shadow-lg rounded-lg overflow-hidden">
                    <div class="card-img-top bg-gradient-info text-white p-4 text-center">
                      <i class="fa fa-list fa-4x"></i> <!-- Icono para el reporte de asistencias -->
                      <h4 class="mt-2"><strong>Reporte de asistencias</strong></h4> <!-- Título de la tarjeta -->
                    </div>
                    <div class="card-body text-center">
                      <p>Genera y visualiza reportes detallados de asistencias.</p> <!-- Descripción de la tarjeta -->
                      <a href="<?php echo ($_SESSION['tipousuario'] == 'Administrador') ? 'rptasistencia.php' : 'rptasistenciau.php'; ?>" class="btn btn-info">
                        <i class="fa fa-arrow-right"></i> Ver Reporte
                      </a> <!-- Botón para ver el reporte de asistencias -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Fin del cuerpo de la caja -->
          </div>
          <!-- Fin de la caja -->
        </div>
        <!-- Fin de la columna completa -->
      </div>
      <!-- Fin de la fila -->
    </div>
    <!-- Fin del contenedor fluido -->
  </section>
  <!-- Fin de la sección del contenido -->
</div>

<?php
// Incluye el archivo 'footer.php', que probablemente contiene el pie de página HTML común para la aplicación.
require 'footer.php'; 
}
// Finaliza el almacenamiento en el buffer y envía el contenido al navegador.
ob_end_flush();
?>
