<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S. CAR WASH</title>

    <!-- CSS BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS BOOTSTRAP -->
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Fin Fonts -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/LOGO.png">

</head>
<body>
    <nav >
    <div class="col-1">
        <img src="img/LOGO.png" alt="logo" class="logo">
    </div>

    <div class="d-flex justify-content-start titulo">
        <h2><span>S CAR WASH</span></h2>
    </div>
    <div>
        <?php
        require_once("vistas/vmenuin.php")
        ?>
    </div>
    </nav>
  
<section>
    <?php
    require_once("vistas/vmenuin.php");
    $pg = isset($_GET["pg"]) ? $_GET["pg"]:NULL;
    if(!$pg)
        require_once("index.php");
    if(!$pg=="1001")
        require_once("vistas/vinfoca.php");
    if($pg=="1002")
        require_once("vistas/vcontact.php");
    if($pg=="1003")
        require_once("vistas/vlogin.php");
    if($pg=="1004")
        require_once("vistas/vbusempre.php");
    ?>
</section>

<!-- <footer>
        <div class="social">
            <a href="">
                <i class="fa-brands fa-instagram"></i>
            </a>

            <a href="">
                <i class="fa-brands fa-facebook"></i>
            </a>

            <a href="">
                <i class="fa-brands fa-x-twitter"></i>
            </a>
        </div>

        <p class="copy-right">Copyright @2030 all right reserved by SYSTEM CAR WASH</p>
</footer> -->

</body>
</html>