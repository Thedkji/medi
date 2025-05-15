<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta property="og:image" content="<?php echo $url; ?>assets/imgs/clinic/logo-clinic365.svg">
    <meta property="og:description" content="Giải pháp quản lý bệnh viện và phòng khám hiệu quả, giao diện dễ sử dụng.">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="<?php echo $url; ?>assets/imgs/clinic/logo-clinic365.svg">
    <meta name="twitter:description" content="Giải pháp quản lý bệnh viện và phòng khám hiệu quả, giao diện dễ sử dụng.">
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