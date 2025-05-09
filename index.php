<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./assets/library/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./assets/css/css-reset.css" />
</head>

<body>
    <div class="overlay"></div>
    <?php
    include_once './env.php';
    $page = isset($_GET['page']) && $_GET['page'] !== "" ? $_GET['page'] : 'home';
    $url = URL;
    ?>

    <header class="medi-header">
    </header>

    <main>
        <?php
        switch ($page) {
            case "home":
                include_once 'view/home/home.php';
                break;
            default:
                include_once 'view/home/home.php';
                break;
        }
        ?>
    </main>

    <footer></footer>
</body>
<script src="./assets/library/swiper-bundle.min.js"></script>

</html>