<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ikbaal Rehal</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="lib/swiper-bundle.css">
    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/> -->
    <!-- <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script> -->
    <script src="lib/swiper-bundle.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/9e605223dc.js" crossorigin="anonymous"></script>

</head>
<body>
    <?php 
        //Load Composer's autoloader
        require_once __DIR__.'/vendor/autoload.php';  
        
        //Include files
        require_once __DIR__.'/src/functions.php';
        require_once __DIR__.'/src/notification.php';
        require_once __DIR__.'/src/nav.php';
        require_once __DIR__.'/src/profile.php';
        require_once __DIR__.'/src/about.php';
        require_once __DIR__.'/src/portfolio.php';
        require_once __DIR__.'/src/contact.php';
        require_once __DIR__.'/src/footer.php';
    ?>
    <script src="scripts/app.js"></script>
</body>
</html>