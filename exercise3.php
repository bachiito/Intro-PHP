<?php 
    $meses = array(
        0 => "enero",
        1 => "febrero",
        2 => "marzo",
        3 => "abril",
        4 => "mayo",
        5 => "junio",
        6 => "julio",
        7 => "agosto",
        8 => "septiembre",
        9 => "octubre",
        10 => "noviembre",
        11 => "diciembre",
    );
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Ejercicio III</title>

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
        div#month {
            --bs-card-bg: transparent;
        }
    </style>
  </head>
  
  <body class="bg-dark py-4">
    <div class="container text-bg-dark">
        <div class="col-md-10 col-lg-8 mx-auto">
            <div 
                id="month"
                class="card col-sm-8 col-md-7 col-lg-6 border border-light mx-auto"
                style="max-width: 400px;"
            >
                <div class="p-3">
                    <img 
                        src=""
                        class="card-img-top rounded-3" 
                        alt="Abraham Rivera profile photo"
                    >
                </div>
                <div class="card-body">
                    <p class="card-title h4">
                        <?php 
                            global $meses;
                        ?>
                    </p>
                    <p class="card-text">

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
