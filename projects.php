<?php $page = "projects"; ?>

<!DOCTYPE html>
<html class="h-100" lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
    <script src="https://kit.fontawesome.com/6d7e9baaed.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body id="projects" class="d-flex flex-column h-100">
    <header class="container">
        <?php include_once "menu.php"; ?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 py-3 py-sm-5">
                <h1>Proyectos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 pb-3">
                <p>Los siguientes son algunos de los trabajos que he realizado:</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-4 mb-3">
                <div class="project">
                    <img src="images/abmclientes.png" alt="ABM Clientes" class="img-fluid">
                    <h2 class="px-3 py-2">ABM Clientes</h2>
                    <p class="px-3 py-1">Alta, baja y modificación de un registro de clientes. Realizado en HTML, CSS, PHP, Bootstrap y Json.</p>
                    <div class="row py-4 pb-3 px-3">
                        <div class="col-6">
                            <a href="#" class="btn btn-red rounded-pill">Ver online</a>
                        </div>
                        <div class="col-6 text-center">
                            <a href="#" class="link-red">Código fuente</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 mb-3">
                <div class="project">
                    <img src="images/abmventas.png" alt="ABM Ventas" class="img-fluid">
                    <h2 class="px-3 py-2">Sistema de Gestión de Ventas</h2>
                    <p class="px-3 py-1">Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC, Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.</p>
                    <div class="row py-4 pb-3 px-3">
                        <div class="col-6">
                            <a href="#" class="btn btn-red rounded-pill">Ver online</a>
                        </div>
                        <div class="col-6 text-center">
                            <a href="#" class="link-red">Código fuente</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 mb-3">
                <div class="project">
                    <img src="images/proyecto-integrador.png" alt="Proyecto integrador" class="img-fluid">
                    <h2 class="px-3 py-2">Proyecto integrador</h2>
                    <p class="px-3 py-1">Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS, Mercadopago con panel administrador, gestor de usuarios, módulo de permisos y funcionalidades a fines.</p>
                    <div class="row py-4 pb-3 px-3">
                        <div class="col-6">
                            <a href="#" class="btn btn-red rounded-pill">Ver online</a>
                        </div>
                        <div class="col-6 text-center">
                            <a href="#" class="link-red">Código fuente</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="container mt-auto py-4">
        <div class="row">
            <div class="col-12 col-sm-3">
                <a href="https://github.com" target="_blank"><i class="fa-brands fa-github"></i></a>
                <a href="https://linkedin.com/in/luana-passafaro" target="_blank"><i class="fa-brands fa-linkedin-in rounded-circle"></i></a>
            </div>
            <div class="col-12 col-sm-3">
                Hecho para <a href="https://depcsuite.com">DePC Suite</a>
            </div>
            <div class="col-12 col-sm-3">
                <a href="mailto:luana.c.passafaro@gmail.com">luana.c.passafaro@gmail.com</a>
            </div>
        </div>
        <a href="#" target="_blank">
            <i class="fa-brands fa-whatsapp px-3 pt-3 pb-4"></i>
        </a>
    </footer>
</body>

</html>