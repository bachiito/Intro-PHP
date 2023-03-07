<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Ejercicio I</title>

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

        ol#differences {
            --bs-list-group-bg: transparent;
            --bs-list-group-color: snow;
        }
    </style>

  </head>
  
  <body class="text-light bg-dark py-4">
    <div class="container">
        <div class="col-md-10 col-lg-8 mx-auto">
            <div class="text-center">
                <h1 class="h2">Bienvenido 👋👋👋</h1>
                <p>Me presento ...</p>
            </div>
            
            <section class="mb-5">
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
                        <p class="card-title h4">
                        <?php 
                            $name = "Abraham Rivera Domínguez";
                            echo "$name";
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
            </section>

            <hr>

            <section class="mt-5">
                <article>
                    <p class="text-center lead">
                        En PHP, las comillas simples y las comillas dobles se utilizan para
                        definir cadenas de texto, pero tienen algunas diferencias clave:
                    </p>

                    <ol id="differences" class="list-group list-group-numbered">
                        <li class="list-group-item">
                            <strong>Comillas simples</strong>: cualquier texto que 
                            esté encerrado entre comillas simples se considera una
                            cadena literal. Esto significa que el texto se mostrará
                            exactamente como está escrito, sin interpretar ninguna 
                            variable o secuencia de escape. Por ejemplo:

                            <div class="bg-black p-4 my-3 rounded-4">
                                <p class="m-0">
                                    <span class="text-danger">$nombre</span> = 
                                    <span class="text-success">'Juan'</span>;
                                </p>
                                <p class="m-0">
                                    <span class="text-primary">echo</span>
                                    <span class="text-success">'Hola $nombre'</span>; &nbsp;
                                    <span class="text-secondary">// muestra 'Hola $nombre'</span>
                                </p>
                            </div>


                            En este ejemplo, la variable $nombre no se interpreta 
                            dentro de las comillas simples.
                        </li>
                        
                        <li class="list-group-item">
                            <strong>Comillas dobles</strong>: cualquier texto que 
                            esté encerrado entre comillas dobles se considera una
                            cadena interpretada. Esto significa que PHP interpretará
                            cualquier variable o secuencia de escape dentro de las
                            comillas dobles antes de mostrar el resultado. Por ejemplo:

                            <div class="bg-black p-4 my-3 rounded-4">
                                <p class="m-0">
                                    <span class="text-danger">$nombre</span> = 
                                    <span class="text-success">'Juan'</span>;
                                </p>
                                <p class="m-0">
                                    <span class="text-primary">echo</span>
                                    <span class="text-success">"Hola $nombre"</span>; &nbsp;
                                    <span class="text-secondary">// muestra 'Hola Juan'</span>
                                </p>
                            </div>

                            En este ejemplo, la variable $nombre se interpreta
                            dentro de las comillas dobles y se muestra su valor.

                            En resumen, las comillas simples se utilizan para cadenas
                            literales y las comillas dobles se utilizan para cadenas
                            interpretadas. Es importante tener en cuenta estas 
                            diferencias al trabajar con cadenas en PHP.
                        </li>
                    </ol>
                </article>
            </section>


            <a class="btn btn-primary mt-5" href="index.php">
                Volver
            </a>
        </div>
    </div>
  </body>
</html>
