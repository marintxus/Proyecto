<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portafolio personal de diseño y programación.">
    <title>Portafolio Personal</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            padding-top: 70px;
        }
        footer {
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
        }
        .project-image {
            height: 200px;
            width: 100%;
            object-fit: cover;
            display: block;
        }
        .section {
            margin-bottom: 50px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="#">Mi Portafolio</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#projects">Proyectos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#skills">Habilidades</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#bio">Biografía</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <!-- Sección de Inicio -->
        <section id="home" class="section">
            <div class="jumbotron">
                <h1 class="display-4">¡Hola! Soy Iker Marín</h1>
                <p class="lead">Soy desarrollador con experiencia en proyectos sencillos. Aquí podrás conocer algunos proyectos que he desarrollado durante mi formación.</p>
                <hr class="my-4">
                <p>Estoy estudiando en Cuatrovientos y me apasiona la programación web. A continuación, puedes ver algunos ejemplos de mis proyectos más simples.</p>
            </div>
        </section>

        <!-- Sección de Proyectos -->
        <section id="projects" class="section">
            <h2>Proyectos</h2>
            <div class="row" id="project-list">
                <!-- Proyectos Estáticos -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="./clics.webp" class="card-img-top project-image" alt="Contador de Clics">
                        <div class="card-body">
                            <h5 class="card-title">Contador de Clics</h5>
                            <p class="card-text">Esta es una aplicación web sencilla que permite al usuario incrementar un contador cada vez que hace clic en un botón.</p>
                            <p><strong>Tecnologías:</strong> HTML, CSS, JavaScript</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <img src="./termometro.webp" class="card-img-top project-image" alt="Conversor de Temperatura">
                        <div class="card-body">
                            <h5 class="card-title">Conversor de Temperatura</h5>
                            <p class="card-text">Este proyecto permite a los usuarios ingresar una temperatura en grados Celsius y convertirla a grados Fahrenheit.</p>
                            <p><strong>Tecnologías:</strong> HTML, CSS, JavaScript</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <img src="./calculadora.webp" class="card-img-top project-image" alt="Calculadora Simple">
                        <div class="card-body">
                            <h5 class="card-title">Calculadora Simple</h5>
                            <p class="card-text">Una calculadora básica que permite al usuario sumar dos números.</p>
                            <p><strong>Tecnologías:</strong> HTML, CSS, JavaScript</p>
                        </div>
                    </div>
                </div>

                <!-- Proyectos desde la Base de Datos -->
                    <?php
    // Conexión a la base de datos
    $host = "localhost";
    $user = "root"; // Usuario de MySQL
    $password = ""; // Contraseña de MySQL
    $dbname = "proyectos"; // Nombre de la base de datos

    $conexion = new mysqli($host, $user, $password, $dbname);

    // Verificar la conexión
    if ($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    }

    // Consulta para obtener los proyectos
    $sql = "SELECT nombre, descripcion, tecnologias, url FROM proyectos";
    $resultado = $conexion->query($sql);

    // Verificar si hay resultados
    if ($resultado && $resultado->num_rows > 0) {
        while ($proyecto = $resultado->fetch_assoc()) {
            echo '
            <div class="col-md-4">
                <div class="card">
                    <img src="' . htmlspecialchars($proyecto["url"]) . '" class="card-img-top project-image" alt="' . htmlspecialchars($proyecto["nombre"]) . '">
                    <div class="card-body">
                        <h5 class="card-title">' . htmlspecialchars($proyecto["nombre"]) . '</h5>
                        <p class="card-text">' . htmlspecialchars($proyecto["descripcion"]) . '</p>
                        <p><strong>Tecnologías:</strong> ' . htmlspecialchars($proyecto["tecnologias"]) . '</p>
                    </div>
                </div>
            </div>';
        }
    } else {
        echo "<p>No hay proyectos adicionales en la base de datos.</p>";
    }

    // Cerrar conexión a la base de datos
    $conexion->close();
    ?>


            </div>
        </section>

        <!-- Sección de Habilidades -->
        <section id="skills" class="section">
            <h2>Habilidades</h2>
            <ul class="list-group">
                <li class="list-group-item">HTML5</li>
                <li class="list-group-item">CSS3</li>
                <li class="list-group-item">JavaScript</li>
                <li class="list-group-item">Bootstrap</li>
                <li class="list-group-item">React (en aprendizaje)</li>
                <li class="list-group-item">Git & GitHub</li>
            </ul>
        </section>
        
        <!-- Sección de Biografía -->
        <section id="bio" class="section">
            <h2>Biografía</h2>
            <p>Desde joven, siempre me ha fascinado la tecnología y cómo funciona el mundo digital. Comencé a aprender a programar por curiosidad y rápidamente descubrí que es una de mis pasiones. Actualmente, estoy estudiando en Cuatrovientos y he trabajado en varios proyectos simples que me han permitido desarrollar mis habilidades técnicas.</p>
        </section>
    </div>

    <footer>
        <p>© 2024 - Iker Marín. Todos los derechos reservados.</p>
    </footer>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#home').show();
            $('#projects').show();
            $('#skills').show();
            $('#bio').show();
        });
    </script>
</body>
</html>
