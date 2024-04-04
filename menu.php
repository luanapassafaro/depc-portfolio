<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item"><a class="nav-link px-4<?php echo $page === "index" ? " active" : ""; ?>" href="index.php">Inicio</a></li>
                <li class="nav-item"><a class="nav-link px-4<?php echo $page === "about" ? " active" : ""; ?>" href="about.php">Sobre mí</a></li>
                <li class="nav-item"><a class="nav-link px-4<?php echo $page === "projects" ? " active" : ""; ?>" href="projects.php">Proyectos</a></li>
                <li class="nav-item"><a class="nav-link px-4<?php echo $page === "contact" ? " active" : ""; ?>" href="contact.php">Contacto</a></li>
            </ul>
            <ul class="navbar-nav">
                <li class="float-sm-end"><a class="btn btn-red rounded-pill" href="#">Descargar mi CV <i class="fa-solid fa-download"></i></a></li>
            </ul>
        </div>
    </div>
</nav>