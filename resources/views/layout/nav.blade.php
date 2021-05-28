<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="css/app.css">


        <title>Startup</title>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary px-5 sticky-top">
            <a class="navbar-brand text-warning font-weight-bold" href="javascript:void(0)">Startup_Name</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="javascript:void(0)">Accueil <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Sujets
                        </a>
                        <div class="dropdown-menu navbar-dark bg-primary" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Technologies</a>
                            <a class="dropdown-item" href="#">Developpement web</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Ecrivez vos commentaires</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" href="/a-propos">A-propos</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="recherche" aria-label="Search">
                    <button class="btn btn-success my-2 my-sm-0" type="submit">Recherche</button>
                </form>
                <!-- <div class="mx-2">
                    <button class="btn btn-success" data-toggle="modal" data-target="#loginModal" >Connexion</button>
                    <button class="btn btn-success" data-toggle="modal" data-target="#signupModal" >S'inscrire</button>
                </div> -->
            </div>
        </nav>
        
        <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Bienvenue chez Startup_Name.</h2>
                        <p>Nous vous offrons nos services pour concrétiser vos projets informatique</p>
                        <button class="btn btn-danger">Technologies</button>
                        <button class="btn btn-primary">Developpement web</button>
                        <button class="btn btn-success">Programmation</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/6.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Création de site internet</h2>
                        <p>Nous vous aidons à promouvoir vos activités sur internet en vous créant un site web.</p>
                        <button class="btn btn-danger">Technologies</button>
                        <button class="btn btn-primary">Developpement web</button>
                        <button class="btn btn-success">Programmation</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/10.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Appllication mobile</h2>
                        <p>Nous concevons pour vous des applications mobiles ergonomique et adapter à vos besions.</p>
                        <button class="btn btn-danger">Technologies</button>
                        <button class="btn btn-primary">Developpement web</button>
                        <button class="btn btn-success">Programmation</button>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Precedent</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Suivant</span>
            </a>
        </div>
        @yield('content')

        <footer class="container-fluid fixed-bottom">
            <p class="float-right"><a href="#">Back to top</a></p>
           <!-- <p>UPS 2020-2021 uProvider&copy;, Inc.&trade; <a href="#">privacy</a>. <a href="#">Terms</a></p>-->
        </footer>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>
    </body>

</html>