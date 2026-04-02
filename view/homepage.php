<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Développeur PHP/React</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header>
        <?php
        include ROOT_PATH."/view/inc/menu.inc.php";
        ?>
    </header>

    <main>
        <section style="text-align: center; margin-top: 10vh;">
            <h1>Bonjour, je suis <span class="text-highlight">Développeur Junior</span></h1>
            <p style="font-size: 1.2rem; max-width: 600px; margin: 0 auto 2rem; color: var(--text-light);">
                Spécialisé dans l'écosystème PHP (Symfony) et JavaScript (React). 
                Je conçois des API robustes et des interfaces dynamiques en m'appuyant sur une logique analytique stricte.
            </p>
            <a href="./?p=projects" class="btn btn-primary">Explorer mes projets</a>
        </section>
    </main>

    <footer>
        <?php include "inc/footer.inc.php"; ?>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>