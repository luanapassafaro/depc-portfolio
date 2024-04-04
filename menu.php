<?php
$aNavLinks = [];
$aNavLinks[] = [
    "page" => "index",
    "href" => "index.php",
    "name" => "Inicio"
];
$aNavLinks[] = [
    "page" => "about",
    "href" => "about.php",
    "name" => "Sobre mí"
];
$aNavLinks[] = [
    "page" => "projects",
    "href" => "projects.php",
    "name" => "Proyectos"
];
$aNavLinks[] = [
    "page" => "contact",
    "href" => "contact.php",
    "name" => "Contacto"
];
?>

<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <?php foreach ($aNavLinks as $link) {
                    if ($page === $link["page"]) { ?>
                        <li class="nav-item"><a class="nav-link px-4 active" aria-current="page" href="<?php echo $link["href"]; ?>"><?php echo $link["name"]; ?></a></li>
                    <?php } else { ?>
                        <li class="nav-item"><a class="nav-link px-4" href="<?php echo $link["href"]; ?>"><?php echo $link["name"]; ?></a></li>
                    <?php }
                } ?>
            </ul>
            <ul class="navbar-nav">
                <li class="float-sm-end"><a class="btn btn-red rounded-pill" href="#">Descargar mi CV <i class="fa-solid fa-download"></i></a></li>
            </ul>
        </div>
    </div>
</nav>