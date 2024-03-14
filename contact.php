<!DOCTYPE html>
<html class="h-100" lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <script src="https://kit.fontawesome.com/6d7e9baaed.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body id="contact" class="d-flex flex-column h-100">
    <header class="container">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item"><a class="nav-link px-4" href="index.php">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link px-4" href="about.php">Sobre mí</a></li>
                        <li class="nav-item"><a class="nav-link px-4" href="projects.php">Proyectos</a></li>
                        <li class="nav-item"><a class="nav-link px-4 active" href="contact.php">Contacto</a></li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="float-sm-end"><a class="btn btn-red rounded-pill" href="#">Descargar mi CV <i class="fa-solid fa-download"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 py-3 py-sm-5">
                <h1>Contacto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 pb-3">
                <p>Te invito a que te contactes enviándome un mensaje o bien por whatsapp.</p>
            </div>
            <div class="col-12 col-sm-6">
                <form action="" method="POST">
                    <div class="pb-3">
                        <input type="text" name="txtName" id="txtName" class="form-control shadow" placeholder="Nombre *" required>
                    </div>
                    <div class="pb-3">
                        <input type="email" name="txtEmail" id="txtEmail" class="form-control shadow" placeholder="Correo *" required>
                    </div>
                    <div class="pb-3">
                        <input type="tel" name="txtPhone" id="txtPhone" class="form-control shadow" placeholder="Teléfono/Whatsapp">
                    </div>
                    <div class="pb-3">
                        <textarea name="txtMessage" id="txtMessage" class="form-control shadow" placeholder="Escribe aquí tu mensaje" required></textarea>
                    </div>
                    <div class="pb-3">
                        <button type="submit" class="btn btn-white rounded-pill px-3">ENVIAR</button>
                    </div>
                </form>
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