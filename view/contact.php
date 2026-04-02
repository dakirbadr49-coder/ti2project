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
        <h2>Contactez-moi</h2>
        <div class="card" style="padding: 2rem; max-width: 600px; margin: 0 auto;">
            <form id="contactForm">
                <div class="form-group">
                    <label for="nom">Nom ou Entreprise</label>
                    <input type="text" id="nom" name="nom" required placeholder="Votre nom">
                </div>
                <div class="form-group">
                    <label for="email">Adresse Email</label>
                    <input type="email" id="email" name="email" required placeholder="vous@exemple.com">
                </div>
                <div class="form-group">
                    <label for="sujet">Sujet de la prise de contact</label>
                    <input type="text" id="sujet" name="sujet" required placeholder="Offre d'emploi, mission API...">
                </div>
                <div class="form-group">
                    <label for="message">Votre message</label>
                    <textarea id="message" name="message" rows="5" required placeholder="Détaillez votre besoin technique..."></textarea>
                </div>
                <button type="submit" class="btn btn-primary" style="width: 100%;">Envoyer la requête</button>
            </form>
        </div>
    </main>

    <footer>
        <?php include "inc/footer.inc.php"; ?>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>