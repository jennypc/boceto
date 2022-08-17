<!doctype html>
<html>

<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pagina</title>
    <link rel="icon" href="../icono/icon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <style>
        .fondo {
            background-image: url("./images/44.jpg");
            background-size: 100vmax;
            background-repeat: no-repeat;
        }

        #home {
            height: 100vh;
        }

        h1 {
            color: white;
            position: relative;
            font-size: 50pt;
            margin-block-start: 200px;
            margin-inline-start: 200px;
        }

        .fixed-top {
            position: inherit;
        }

        a {
            font-size: 20pt;
            color: white;
            font-style: bold;
        }

        .opc {
            background-color: #003971;
            height: 100vh;
        }

        .section {
            height: 100vh;
            background-color: none;
        }

        .col--no-gutters {
            padding-left: 0;
            padding-right: 0;
        }

        .feature {
            /*display: grid;*/
            grid-template-columns: 1fr;

            margin-block-start: -320px;
        }

        .row {
            flex-direction: row;
            justify-content: center;
        }

        #fondo {
            background-image: url("./images/99.jpg");
            margin-top: -155px;
            height: 60vh;
            z-index: -1;
        }

        #start {
            height: 40vh;
            margin-top: -200px;
        }

        h7 {
            color: black;
            position: relative;
            font-size: 50pt;
            margin-block-start: 150px;
            margin-inline-start: 200px;
        }

        #mapa {
            height: 100vh;

        }

        .col {
            flex-grow: 0;
        }

        h3 {
            text-align: center;
            font-size: 12px;
        }

        h2 {
            text-align: center;
        }


        .slider {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
            padding-top: 120px;
            padding-block-end: 120px;
        }

        .slider img {
            max-width: 50%;
            justify-content: center;
        }

        .slideshow {
            display: flex;
            transform: translate3d(0, 0, 0);
            transition: all 2500ms;
            animation-name: autoplay;
            animation-duration: 25s;
            animation-direction: alternate;
            animation-fill-mode: forwards;
            animation-iteration-count: infinite;
        }

        .item-slide {
            position: relative;
            display: flex;
            width: 100%;
            flex-direction: column;
            flex-shrink: 0;
            flex-grow: 0;
            align-items: center;
        }

        .pagination {
            position: absolute;
            bottom: 20px;
            left: 0;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            width: 100%;
        }

        .pag-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            border: 2px solid #CCC;
            width: 16px;
            height: 16px;
            border-radius: 5px;
            overflow: hidden;
            cursor: pointer;
            background: rgba(255, 255, 255, 0.5);
            margin: 0 10px;
            text-align: center;
            transition: all 800ms;
        }

        .pag-item:hover {
            transform: scale(2);
        }

        .pag-item img {
            display: inline-block;
            max-width: none;
            height: 100%;
            transform: scale(1);
            opacity: 0;
            transition: all 300ms;
        }

        .pag-item:hover img {
            opacity: 1;
        }

        input[id="1"]:checked~.slideshow {
            animation: none;
            transform: translate3d(cal(-100% * 0), 0, 0);
        }

        input[id="1"]:checked~.pagination .pag-item[for="1"] {
            background: #FFF;
        }

        input[id="2"]:checked~.slideshow {
            animation: none;
            transform: translate3d(calc(-100% * 1), 0, 0);
        }

        input[id="2"]:checked~.pagination .pag-item[for="2"] {
            background: #FFF;
        }

        input[id="3"]:checked~.slideshow {
            animation: none;
            transform: translate3d(calc(-100% * 2), 0, 0);
        }

        input[id="3"]:checked~.pagination .pag-item[for="3"] {
            background: #FFF;
        }

        @keyframes autoplay {
            20% {
                transform: translate3d(calc(-100% * 0), 0, 0);
            }

            40% {
                transform: translate3d(calc(-100% * 1), 0, 0);
            }

            60% {
                transform: translate3d(calc(-100% * 2), 0, 0);
            }
        }

        #slider {
            background-image: url("./images/32.jpg");
        }

        .bg-light {
            background-color: transparent !important;
        }

        .custom-btn.custom-btn--style-3 {
            background-color: #3277F4;
            color: #fff;

        }

        .custom-btn {
            box-sizing: border-box;
        }

        #Quienes_somos {
            height: 70vh;

        }

        h8 {
            text-align: center;
            font-size: 4rem;
            color: #00004E;
        }

        #contacto{
            height: 50vh;
            background-color: #CCC;
        }
    </style>
</head>

<body>
    <div class="fondo">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="./images/logoBotton.png" width="190px" height="75px" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#"><b>Plataformas</b></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><b>Mapas</b></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#team"><b>¿Quienes somos?</b></a>
                            <li><a class="btn btn-primary" href="#" role="button">Contacto</a></li>
                            </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!--<ul class="nav justify-content-center">
                <a class="navbar-brand" href="#">
                    <img src="./images/logoBotton.png" width="200" height="100" alt="">
                </a>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#"><i class="fa-solid fa-phone"></i>Call center</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Reportes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Ticket Web</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Kpis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Alcaldes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">Directorio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">FIDI</a>
                </li>
            </ul>-->
        </header>
        <section id="home">
            <h1><b>Centro de Inteligencia<br>Informatica y Geografia<br>Aplicada</b></h1>
        </section>
    </div>
    <section id="start">
        <div>
            <div class="section-heading section-heading--center  col-MB-60">
                <h2 style=color:#00004E><b>Accede a nuestras plataformas</b></h2>
            </div>
            <!-- start team -->
            <div class="team team--style-1">
                <div class="row">
                    <!-- start item -->
                    <div class="col col--sm-3 col--lg-6">
                        <figure class="center-block circled">
                            <img src="./images/icon5.png" alt="demo" width="125" height="125">
                        </figure>
                        <h3><b>Call center</b></h3>
                    </div>
                    <div class="col col--sm-3 col--lg-6">
                        <figure class="center-block circled">
                            <img class="img-responsive circled lazy loaded" src="./images/icon1.png" alt="demo" data-was-processed="true" width="125" height="125">
                        </figure>
                        <h3><b>Reportes</b></h3>
                    </div>
                    <div class="col col--sm-3 col--lg-6">
                        <figure class="center-block circled">
                            <img class="img-responsive circled lazy loaded" src="./images/icon5.png" alt="demo" data-was-processed="true" width="125" height="125">
                        </figure>
                        <h3><b>Ticket Web</b></h3>
                    </div>
                    <div class="col col--sm-3 col--lg-6">
                        <figure class="center-block circled">
                            <img class="img-responsive circled lazy loaded" src="./images/icon5.png" alt="demo" data-was-processed="true" width="125" height="125">
                        </figure>
                        <h3><b>Kpis</b></h3>
                    </div>
                    <div class="col col--sm-3 col--lg-6">
                        <figure class="center-block circled">
                            <img class="img-responsive circled lazy loaded" src="./images/icon5.png" alt="demo" data-was-processed="true" width="125" height="125">
                        </figure>
                        <h3><b>Alcaldes</b></h3>
                    </div>
                    <div class="col col--sm-3 col--lg-6">
                        <figure class="center-block circled">
                            <img class="img-responsive circled lazy loaded" src="./images/icon5.png" alt="demo" data-was-processed="true" width="125" height="125">
                        </figure>
                        <h3><b>Directorio</b></h3>
                    </div>
                    <div class="col col--sm-3 col--lg-6">
                        <figure class="center-block circled">
                            <img class="img-responsive circled lazy loaded" src="./images/icon5.png" alt="demo" data-was-processed="true" width="125" height="125">
                        </figure>
                        <h3><b>FIDI</b></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="slider">
        <div class="slider">
            <?php
            $ids = array(1, 2, 3);
            $alt = array(
                "Slide 1",
                "Slide 2",
                "Slide 3"
            );
            $max = count($ids);
            for ($s = 0; $s < $max; $s++) { ?>
                <input type="radio" id="<?= $ids[$s]; ?>" name="image-slide" hidden />
            <?php } ?>
            <div class="slideshow">
                <?php for ($s = 0; $s < $max; $s++) { ?>
                    <div class="item-slide">
                        <img src="img/<?= $ids[$s]; ?>.jpg" alt="<?= $alt[$s]; ?>" />
                    </div>
                <?php } ?>
            </div>
            <div class="pagination">
                <?php for ($s = 0; $s < $max; $s++) { ?>
                    <label class="pag-item" for="<?= $ids[$s]; ?>">
                        <img src="img/<?= $ids[$s]; ?>.jpg" alt="<?= $alt[$s]; ?>" />
                    </label>
                <?php } ?>
            </div>
        </div>
    </section>
    <section id="Quienes_somos">
        <div style="margin-top:100px" class="section-heading section-heading--center  col-MB-60">
            <h2 style=color:#00004E><b>¿Como trbajamos?</b></h2>
            <h3 style="font-size:20pt">Una breve descripcion<br>una breve descripcion<br>una breve descripcion<br></h3>
        </div>
        <div class="container">
            <div class="row">
                <div style="background-color:#CCC" class="col-4">
                    <h1><b>1</b></h1>
                    <h2>Titulo</h2>
                    <p>Descripcion</p>
                </div>
                <div style="background-color:#003971" class="col-4">
                    <h1><b>2</b></h1>
                    <h2>Titulo</h2>
                    <p>Descripcion</p>
                </div>
                <div style="background-color:#3277F4" class="col-4">
                    <h1><b>3</b></h1>
                    <h2>Titulo</h2>
                    <p>Descripcion</p>
                </div>
            </div>
        </div>
    </section>
    <section id="contacto">
    <div style="margin-top:100px" class="section-heading section-heading--center  col-MB-60">
            <h2 style=color:#00004E><b>Contacto</b></h2>
        </div>
    </section>
</body>

</html>