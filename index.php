<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Titre de votre site</title>
    <!-- CSS -->
    <link rel="stylesheet" href="./css/header/navbar-index.css">
    <link rel="stylesheet" href="./css/page/page-index.css">
    <!-- Favicon -->
    <link rel="icon" href="./img/favicon/logo-main.png">
    <link rel="apple-touch-icon" href="./img/favicon/logo-main.png">
    <!-- Style -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200..800;1,200..800&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200..800;1,200..800&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap');

        * {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Karla, sans-serif;
        }
    </style>
    <!-- JS -->
    <script src="./js/pages.js" defer></script>
    <script src="./js/loading.js" defer></script>
</head>

<body>
    <!-- Navigation Bar (Start) -->
    <!-- NavBar - Large -->
    <section class="navigation-bar-large">
        <nav class="navbar-flex">
            <div class="navbar-img">
                <img src="./img/logo/logo-main.png" alt="Votre logo" title="Votre logo">
            </div>
            <ul class="navbar-list">
                <li class="navbar-link"></li>
                <li class="navbar-link"></li>
                <li class="navbar-link"></li>
                <li class="navbar-link"></li>
                <li class="navbar-link"></li>
            </ul>
        </nav>
    </section>
    <!-- NavBar - Mobile -->
    <section class="navigation-bar-mobile">
        <nav class="navbar-flex-mobile">
            <div class="navbar-logo">
                <img src="./img/logo/logo-main.png" alt="Votre logo" title="Votre logo">
            </div>
            <div class="navbar-mobile-menu-burger">
                <img src="./img/menu burger/menu-burger-mobile.png" alt="Menu burger" title="Menu burger">
            </div>
            <div class="navbar-content-mobile">
                <ul class="navbar-list-mobile">
                    <li class="navbar-list-mobile-link"></li>
                    <li class="navbar-list-mobile-link"></li>
                    <li class="navbar-list-mobile-link"></li>
                    <li class="navbar-list-mobile-link"></li>
                    <li class="navbar-list-mobile-link"></li>
                </ul>
            </div>
        </nav>
    </section>
    <!-- Navigation Bar (End) -->
</body>

</html>