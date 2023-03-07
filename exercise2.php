<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Ejercicio II</title>

    <!-- Icon -->
    <link 
        rel="icon" 
        type="image/svg+xml" 
        sizes="any" 
        href="https://www.php.net/favicon.svg?v=2"
    >

    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
        crossorigin="anonymous"
    />
    <script
        defer
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"
    ></script>

    <!-- Styles -->
    <style>
        div#about-me {
            --bs-card-bg: transparent;
        }
    </style>
  </head>
  
  <body class="text-bg-dark py-4">
    <div class="container">
        <div class="col-md-10 col-lg-8 mx-auto">
            <div 
                id="about-me"
                class="card col-sm-8 col-md-7 col-lg-6 border border-light mx-auto"
                style="max-width: 400px;"
            >
                <div class="p-3">
                    <img 
                        src="https://orbi.edu.do/orbi/imagenes/img_usuario/166798.jpeg"
                        class="card-img-top rounded-3" 
                        alt="Abraham Rivera profile photo"
                    >
                </div>
                <div class="card-body">
                    <p class="card-title text-center h5">
                        <?php 
                            $name = "Abraham Rivera Domínguez";
                            $edad = 21;
                            echo "Mi nombre es $name y tengo ". $edad . " años";
                        ?>
                    </p>
                    <p class="card-text">
                        Me apasiona crear sitios web y aplicaciones web visualmente
                        atractivos y fáciles de usar. Disfruto experimentando con 
                        diferentes elementos de diseño y siempre estoy buscando formas de
                        mejorar la experiencia del usuario. Asimismo, tengo una sólida 
                        comprensión de los conceptos de desarrollo web como HTML, CSS y
                        JavaScript. Conozco bien los principios y las mejores prácticas del
                        diseño web, como el diseño receptivo. Tengo sólidas habilidades 
                        para resolver problemas y la capacidad de pensar creativamente. 
                        Además, disfruto trabajar en un entorno de equipo y poder 
                        comunicarme de manera efectiva con diseñadores, desarrolladores y
                        gerentes de proyectos.
                    </p>
                </div>
            </div>

            <a class="btn btn-primary mt-5" href="index.php">
                Volver
            </a>
        </div>
    </div>
  </body>
</html>
