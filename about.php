<?php $page = "about"; ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre mí</title>
    <script src="https://kit.fontawesome.com/6d7e9baaed.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body id="about">
    <header class="container">
        <?php include_once "menu.php"; ?>
    </header>
    <main>
        <section id="bio" class="container">    
            <div class="row">
                <div class="col-12 col-sm-7">
                    <h1 class="py-5">Sobre mí</h1>
                    <p>
                        Entusiasta de la programación; aspirante a programadora web. Soy estudiante de Desarrollo Full Stack PHP.
                    </p>
                    <a href="contact.html" class="btn btn-red my-5 d-none d-sm-block w-25 rounded-pill">Enviar mensaje</a>
                </div>
                <div class="col-10 col-sm-3 py-5 pe-5 d-none d-sm-block">
                    <img src="images/avatar.png" alt="Luana" title="Luana" class="img-fluid rounded-circle">
                </div>
                <div class="col-6 d-sm-none py-3">
                    <img src="images/avatar.png" alt="Luana" title="Luana" class="img-fluid rounded-circle">
                </div>
                <div class="col-6 d-sm-none py-3">
                    <a href="contact.html" class="btn btn-red my-5 rounded-pill">Enviar mensaje</a>
                </div>
            </div>
        </section>
        <section id="stack">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="py-5">Stack tecnológico</h2>
                    </div>
                    <div class="col-6 col-md-2">
                        <div class="tech mb-4">
                            <h3 class="pt-5 pb-1">Python</h3>
                            <i class="fa-brands fa-python pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-md-2">
                        <div class="tech mb-4">
                            <h3 class="pt-5 pb-1">PHP</h3>
                            <i class="fa-brands fa-php pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-md-2">
                        <div class="tech mb-4">
                            <h3 class="pt-5 pb-1">Javascript</h3>
                            <i class="fa-brands fa-js pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-md-2">
                        <div class="tech mb-4">
                            <h3 class="pt-5 pb-1">HTML</h3>
                            <i class="fa-brands fa-html5 pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-md-2">
                        <div class="tech mb-4">
                            <h3 class="pt-5 pb-1">CSS</h3>
                            <i class="fa-brands fa-css3-alt pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-md-2">
                        <div class="tech mb-4">
                            <h3 class="pt-5 pb-1">Bootstrap</h3>
                            <i class="fa-brands fa-bootstrap pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-md-2">
                        <div class="tech mb-4">
                            <h3 class="pt-5 pb-1">MySQL</h3>
                            <i class="fa-solid fa-database pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-md-2">
                        <div class="tech mb-4">
                            <h3 class="pt-5 pb-1">Git</h3>
                            <i class="fa-brands fa-git pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-md-2">
                        <div class="tech mb-4">
                            <h3 class="pt-5 pb-1">Linux</h3>
                            <i class="fa-brands fa-linux pb-5"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="education" class="container mb-5">
            <div class="row">
                <div class="col-12">
                    <h2 class="pt-5 pb-4">Educación</h2>
                </div>
            </div>
            <div class="row shadow bg-white rounded p-1">
                <div class="col-12 col-lg-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/logo-depcsuite.svg" class="img-fluid baw" title="depcsuite">
                        </div>
                        <div class="col-12 col-sm-10 p-3">
                            <h3>Curso de Programación Web Full Stack PHP (en progreso)</h3>
                            <h4>DePC Suite</h4>
                            <h5>Inicio: 2022</h5>
                            <p>https://depcsuite.com/</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/aplogo.png" class="img-fluid filter-black" title="depcsuite">
                        </div>
                        <div class="col-12 col-sm-10 p-3">
                            <h3>Argentina Programa - Etapa 1</h3>
                            <h4>Mumuki.io</h4>
                            <h5>Febrero 2022 - Abril 2022</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/unsam.png" class="img-fluid baw" title="depcsuite">
                        </div>
                        <div class="col-12 col-sm-10 p-3">
                            <h3>Curso de Preparación Universitaria (Tecnicatura en Programación Informática)</h3>
                            <h4>Universidad Nacional de San Martín</h4>
                            <h5>Agosto 2020 - Marzo 2021</h5>
                            <p>https://www.unsam.edu.ar/</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="langs">
            <div class="container">
                <div class="row py-5 mx-0">
                    <div class="col-12 col-sm-6 pb-3 pb-sm-0">
                        <div class="row mr-sm-1 bg-white card-langs shadow me-sm-1">
                            <div class="col-4 text-center card">
                                <i class="fa-regular fa-comments"></i>
                            </div>
                            <div class="col-8 p-5 pb-3">
                                <h2>IDIOMAS</h2>
                                <ul>
                                    <li>ESPAÑOL - Nativo</li>
                                    <li>INGLÉS - Avanzado</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="row ml-sm-1 bg-white card-langs shadow ms-sm-1">
                            <div class="col-4 text-center card">
                                <i class="fa-solid fa-guitar"></i>
                            </div>
                            <div class="col-8 p-5 pb-3">
                                <h2>HOBBIES</h2>
                                <ul>
                                    <li>Ukelele</li>
                                    <li>Videojuegos</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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