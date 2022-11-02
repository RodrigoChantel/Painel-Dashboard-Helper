<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulário de Login</title>
    <link href="http://localhost/helper/public/css/bootstrap.min.css" rel="stylesheet">
    <link href="../Helper/public/css/my_style.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="http://localhost/helper/public/img/favicon.ico">
  </head>
  <body>
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-4 align-items-center align-middle p-5 bg-white">
                    <div class="row">
                        <p class="text-center"><img src="http://localhost/helper/public/img/riot-games-logo-edit.png" alt="Riot Games" width="40%"></p>
                    </div>

                    <div class="row mb-2">
                        <form action="http://localhost/helper/controller/redirect.php" method="POST" id="login">
                            <input type="hidden" name="page" value="login">
                            <div class="col-md-12 mt-4 mb-2"><h3 class="text-center">Sign in</h3></div>
                            <div class="col-md-12 mb-3"><input class="form-control bg-light" type="text" name="username" placeholder="Username"></div>
                            <div class="col-md-12 mb-3"><input class="form-control bg-light" type="password" name="password" placeholder="Password"></div>
                        </form>
                    </div>

                    <div class="row">
                        <div class="col-md-4 text-start"><button class="btn btn-primary mb-3 w-100"><i class="fa-brands fa-facebook"></i></button></div>
                        <div class="col-md-4 text-center"><button class="btn btn-danger mb-3 w-100"><i class="fa-brands fa-google"></i></button></div>
                        <div class="col-md-4 text-end"><button class="btn btn-dark mb-3 w-100"><i class="fa-brands fa-apple"></i></button></div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <input type="checkbox" class="form-check-input" name="check">
                            <label for="check">&nbsp; Stay signed in</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <p class="text-center mt-5 mb-5"><button class="btn btn-outline-danger px-3 py-2" type="submit" form="login">&#10140;</button></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mt-5">
                            <a href="#" class="text-start text-decoration-none text-secondary">CREATE ACCOUNT</a>
                        </div>

                        <div class="row">  
                            <div class="col-md-6">
                                <a href="#" class="text-decoration-none text-secondary">CAN'T SIGN IN</a>
                            </div>
                            <div class="col-md-6">
                                <p class="text-secondary text-end">V1.0.0</p>
                            </div>
                        </div>
                        
                    </div>

            </div>
            
            <div class="col-md-8 px-0 d-none d-md-block"> 
                <img width="100%" height="665" src="http://localhost/helper/public/img/league-of-legends-fantasy-BG.jpg" alt="background do league of legends">
            </div>
        </div>
    </div>
    
  </body>
  <script src="http://localhost/helper/public/js/popper.min.js"></script>
  <script src="http://localhost/helper/public/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/7e1d07c6a8.js" crossorigin="anonymous"></script>
</html>