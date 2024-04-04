<?php $page = "index"; ?>

<!DOCTYPE html>
<html lang="es" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luana Passafaro</title>
    <script src="https://kit.fontawesome.com/6d7e9baaed.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body id="home" class="d-flex flex-column h-100">
    <header class="container">
        <?php include_once "menu.php"; ?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 mt-4 text-center div-rocket">
                <a href="projects.html"><img src="images/cohete.svg"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 my-4 mt-sm-5 text-center mb-3 offset-sm-3">
                <p class="p-1">
                    Bienvenid@ a mi sitio web sobre desarrollo Full Stack.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <a href="projects.html" class="btn btn-white rounded-pill">Conoce mis proyectos</a>
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