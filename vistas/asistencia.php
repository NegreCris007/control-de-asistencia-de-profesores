<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Definición del conjunto de caracteres y compatibilidad con navegadores antiguos -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Título de la página -->
    <title>Control de Asistencia</title>

    <!-- Configuración de la vista para dispositivos móviles -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Enlace a la hoja de estilos de Bootstrap -->
    <link rel="stylesheet" href="../admin/public/css/bootstrap.min.css">

    <!-- Enlace a la hoja de estilos de Font Awesome para iconos -->
    <link rel="stylesheet" href="../admin/public/css/font-awesome.css">

    <!-- Estilos personalizados para el formulario y la página -->
    <style>
        /* Fondo de la página */
        body {
            background: url('../vistas/images.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
            font-family: 'Arial', sans-serif;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Estilo para el contenedor del formulario de bloqueo */
        .lockscreen-wrapper {
            background: rgba(0, 0, 0, 0.7); /* Fondo semitransparente */
            border-radius: 10px; /* Bordes redondeados */
            padding: 30px 20px; /* Espaciado interno */
            width: 100%;
            max-width: 400px; /* Ancho máximo del contenedor */
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.5); /* Sombra */
            text-align: center; /* Centrar texto */
        }

        /* Estilo para el logo en la pantalla de bloqueo */
        .lockscreen-logo img {
            max-width: 80px; /* Ancho máximo de la imagen */
            border-radius: 50%; /* Imagen circular */
            border: 3px solid #007bff; /* Borde azul */
            margin-bottom: 20px; /* Espaciado inferior */
        }

        .lockscreen-logo a {
            color: #fff; /* Color del texto del logo */
            font-size: 24px; /* Tamaño de fuente del logo */
            text-decoration: none; /* Sin subrayado */
        }

        /* Estilo para el nombre de la pantalla de bloqueo */
        .lockscreen-name {
            font-size: 22px; /* Tamaño de fuente del nombre */
            margin-bottom: 10px; /* Espaciado inferior */
            color: #fff; /* Color del texto */
        }

        /* Estilo para el contenedor del formulario de bloqueo */
        .lockscreen-item {
            margin-bottom: 30px; /* Espaciado inferior */
            text-align: center; /* Centrar texto */
        }

        /* Estilo para la imagen del usuario en la pantalla de bloqueo */
        .lockscreen-image img {
            max-width: 70px; /* Ancho máximo de la imagen */
            border-radius: 50%; /* Imagen circular */
            border: 3px solid #007bff; /* Borde azul */
        }

        /* Estilo para el grupo de entradas */
        .input-group {
            text-align: left; /* Alinear texto a la izquierda */
            margin-bottom: 20px; /* Espaciado inferior */
        }

        /* Estilo para el campo de entrada */
        .input-group input {
            width: calc(100% - 40px); /* Ancho del campo de entrada */
            padding: 10px; /* Espaciado interno */
            border-radius: 5px; /* Bordes redondeados */
            border: none; /* Sin borde */
            font-size: 16px; /* Tamaño de fuente */
            background-color: #333; /* Fondo gris oscuro */
            color: #fff; /* Color del texto */
        }

        /* Estilo para el botón dentro del grupo de entradas */
        .input-group-btn {
            padding: 0; /* Sin espaciado interno */
            background-color: #007bff; /* Fondo azul */
            border-radius: 0 5px 5px 0; /* Bordes redondeados a la derecha */
        }

        /* Estilo para el botón primario */
        .btn-primary {
            width: 40px; /* Ancho del botón */
            height: 40px; /* Altura del botón */
            border-radius: 0 5px 5px 0; /* Bordes redondeados a la derecha */
            background-color: #007bff; /* Fondo azul */
            border: none; /* Sin borde */
        }

        .btn-primary i {
            color: #fff; /* Color del icono */
        }

        /* Estilo para el bloque de ayuda */
        .help-block {
            color: #ccc; /* Color del texto de ayuda */
        }

        /* Estilo para el pie de página */
        .lockscreen-footer a {
            color: #00bfff; /* Color del enlace */
            text-decoration: none; /* Sin subrayado */
        }

        .lockscreen-footer a:hover {
            text-decoration: underline; /* Subrayado en el hover */
        }
    </style>
</head>
<body class="hold-transition lockscreen">

    <!-- Contenedor principal de la pantalla de bloqueo -->
    <div class="lockscreen-wrapper">
        <!-- Espacio para posibles movimientos u otros elementos -->
        <div name="movimientos" id="movimientos">
            <!-- Espacio para movimientos si es necesario -->
        </div>

        <!-- Elemento de la pantalla de bloqueo -->
        <div class="lockscreen-item">
            <!-- Imagen del usuario en la pantalla de bloqueo -->
            <div class="lockscreen-image">
                <img src="../admin/files/negocio/default1.png" alt="User Image">
            </div>

            <!-- Logo en la pantalla de bloqueo -->
            <div class="lockscreen-logo">
                <a href="#"><b>U.E.P.</b> Flor de María Vásquez</a>
            </div>

            <!-- Nombre en la pantalla de bloqueo -->
            <div class="lockscreen-name">Asistencia de profesores</div>

            <!-- Formulario de entrada de datos -->
            <form action="" class="lockscreen-credentials" name="formulario" id="formulario" method="POST">
                <div class="input-group">
                    <input type="password" class="form-control" name="codigo_persona" id="codigo_persona" placeholder="ID de asistencia">
                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-arrow-right text-muted"></i></button>
                    </div>
                </div>
            </form>
        </div>

        <!-- Mensaje de ayuda -->
        <div class="help-block text-center">
            Ingresa tu ID de asistencia
        </div>
        
        <!-- Enlace de pie de página -->
        <div class="lockscreen-footer text-center">
            <a href="../admin/">Iniciar Sesión</a>
        </div>
    </div>

    <!-- Enlace a jQuery -->
    <script src="../admin/public/js/jquery-3.1.1.min.js"></script>
    <!-- Enlace a Bootstrap -->
    <script src="../admin/public/js/bootstrap.min.js"></script>
    <!-- Enlace a Bootbox -->
    <script src="../admin/public/js/bootbox.min.js"></script>
    <!-- Enlace al script de asistencia -->
    <script type="text/javascript" src="scripts/asistencia.js"></script>

</body>
</html>
