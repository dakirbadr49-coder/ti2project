<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERREUR - 404</title>
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
            <h1>ERREUR 404 <span class="text-highlight"> cette page n'existe plus</span></h1>
            
            <a href="./" class="btn btn-primary">Retour à l'accueil</a>
        </section>
    </main>

    <footer>
        <?php include "inc/footer.inc.php"; ?>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>