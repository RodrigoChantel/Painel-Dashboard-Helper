<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://localhost/helper/public/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="http://localhost/helper/public/img/favicon.ico">
    <link rel="stylesheet" href="http://localhost/helper/public/css/style.css">
    <title>Dashboard</title>
</head>
<body>
    

    <div class="container-fluid h-100">
        <nav class="navbar navbar-expand-lg navbar-light bg-myed">
            <div class="container-fluid">  

                <button class="navbar-toggler bg-light text-bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <a class="navbar-brand text-white" href="#"><b>Kallasa</b></a>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-light" aria-current="page" href="#">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">WebSite</a>
                        </li>
                        <li class="nav-item text-light">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Info</a>
                        </li>
                    </ul>
                    <div class="row navbar-toggler">
                        <i class="fa-sharp fa-solid fa-bell text-light navbar-toggler"></i>
                    </div>
                    <i class="fa-sharp fa-solid fa-bell text-light mx-2 d-none d-lg-block"></i>
                    <form class="d-flex">
                        <input class="form-control me-2" disabled type="search" placeholder="Desabilitado" aria-label="Search">
                        <button class="btn btn-light" type="submit">Buscar</button>
                    </form>
                </div>
            </div>
        </nav>


        <div class="row h-100">
            <div class="col-lg-3 px-0 py-0">
                <div class="row h-100 m-0">
                    <div class="col-lg-2 bg-myedd px-0 text-center">
                        <button class="btn m-0 text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                        <i class="fa-sharp fa-solid fa-bars"></i>
                        </button>

                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                        <div class="offcanvas-body h-100">
                        
                            <div class="row h-100">
                                <div class="col-md-12">    
                                    <a href="#"><i class="fa-sharp fa-solid fa-house text-#3d85c6 pt-2"></i></a>
                                    <a href="#"><i class="fa-sharp fa-solid fa-comments text-#3d85c6 pt-4"></i></a>
                                    <a href="#"><i class="fa-sharp fa-solid fa-pen text-#3d85c6 pt-4"></i></a>
                                    <a href="#"><i class="fa-sharp fa-solid fa-cart-shopping text-#3d85c6 pt-4"></i></a>
                                    <a href="#"><i class="fa-sharp fa-solid fa-money-bill text-#3d85c6 pt-4"></i></a>
                                    <a href="#"><i class="fa-sharp fa-solid fa-gear text-#3d85c6 pt-4"></i></a>
                                    <a href="#"><i class="fa-sharp fa-solid fa-right-to-bracket text-#3d85c6 pt-4"></i></a>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="row d-none d-md-block">
                            <a href="#" class="link-light"><i class="fa-sharp fa-solid fa-house"></i></a>
                            <a href="#" class="link-light"><i class="fa-sharp fa-solid fa-comments pt-4"></i></a>
                            <a href="#" class="link-light"><i class="fa-sharp fa-solid fa-pen pt-4"></i></a>
                            <a href="#" class="link-light"><i class="fa-sharp fa-solid fa-cart-shopping pt-4"></i></a>
                            <a href="#" class="link-light"><i class="fa-sharp fa-solid fa-money-bill pt-4"></i></a>
                            <a href="#" class="link-light"><i class="fa-sharp fa-solid fa-gear pt-4"></i></a>
                            <a href="#" class="link-light"><i class="fa-sharp fa-solid fa-right-to-bracket pt-4"></i></a>
                        </div>
                    </div>  
                </div>
                


            </div>
            <div class="col-lg-9 border">
                <div class="row" style="height: 82%;">

                </div>
                <div class="row">
                    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                        <div class="col-md-5 d-flex align-items-center align-text-bottom">
                            <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                                <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
                            </a>
                            <span class="text-muted">© 2022 Kallasa, todos os direitos reservados.</span>
                        </div>

                        <ul class="nav col-md-3 justify-content-end list-unstyled d-flex px-5">
                            <li class="ms-3"><a class="text-muted" href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            <li class="ms-3"><a class="text-muted" href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li class="ms-3"><a class="text-muted" href="#"><i class="fa-brands fa-facebook"></i></a></li>
                        </ul>
                    </footer>
                </div>
            </div>
        </div>
    </div>

    

</body>
<script src="http://localhost/helper/public/js/popper.min.js"></script>
<script src="http://localhost/helper/public/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/7e1d07c6a8.js" crossorigin="anonymous"></script>
</html>