<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./assets/imgs/clinic/logo_meta.png" type="image/png">
    <title>CLINIC 365</title>
    <link rel="stylesheet" href="./assets/library/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./assets/css/css-reset.css?v=<?= time() ?>" />
</head>

<body>
    <div class="overlay"></div>
    <?php
    include_once './env.php';
    $page = isset($_GET['page']) && $_GET['page'] !== "" ? $_GET['page'] : 'home';
    $url = URL;
    ?>

    <header class="medi-header">
        <?php include_once './components/header/header.php'; ?>
    </header>

    <main>
        <?php
        switch ($page) {
            case "home":
                include_once 'view/home/home.php';
                break;
            case "feature":
                include_once 'view/feature/feature.php';
                break;
            case "trial-register":
                include_once 'view/trial-register/trial-register.php';
                break;
            case "contact":
                include_once 'view/contact/contact.php';
                break;
            default:
                include_once 'view/home/home.php';
                break;
        }
        ?>
    </main>

    <footer>
        <?php include_once './components/footer/footer.php'; ?>
    </footer>
</body>
<script src="./assets/library/swiper-bundle.min.js"></script>

</html>