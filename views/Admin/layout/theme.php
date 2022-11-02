<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://localhost/helper/public/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="http://localhost/helper/public/img/favicon.ico">
    <link href="http://localhost/helper/public/css/style.css" rel="stylesheet">

    <title>Dashboard</title>
</head>
<body>
    <div class="container-fluid m-0 p-0">
        <div class="row m-0 border-bottom border-secondary" style="background-color: #32373d;">
            <?php
                
                include_once('http://localhost/helper/views/admin/includes/header.php'); 
            ?>
            
        </div>

        <div class="row  m-0 p-0">
            <?php
                include_once('http://localhost/helper/views/admin/includes/menu.php');
                include_once('http://localhost/helper/views/admin/content.php');
                //include_once('http://localhost/helper/views/admin/includes/footer.php'); 
            ?>
                
        </div>

        
    </div>
</body>
<script src="http://localhost/helper/public/js/popper.min.js"></script>
<script src="http://localhost/helper/public/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/7e1d07c6a8.js" crossorigin="anonymous"></script>
<script>const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))</script>
</html>