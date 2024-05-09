<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- CSS BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- CSS BOOTSTRAP -->
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <!-- Fin Fonts -->

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <nav>
        <?php
            require_once("vistas/vmenuus.php");
        ?>
    </nav>
    <section>
    <?php
        require_once("vistas/vmenuus.php");
        $pg = isset($_GET["pg"]) ? $_GET["pg"]:NULL;
        if(!$pg)
            require_once("home.php");
        if($pg=="2001")
            require_once("vistas/viniusu.php");
        if($pg=="2002")
            require_once("vistas/vactusu.php");
        if($pg=="2003")
            require_once("vistas/vagecitaus.php");
    ?>
    </section>
</body>
</html>