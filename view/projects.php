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
        <h2>Mes Projets Techniques</h2>
        <div class="grid-3">
            
            <div class="card">
                <img src="images/projet1.jpg" alt="Dashboard Géopolitique">
                <div class="card-content">
                    <h3>API DataGéo Mondiale</h3>
                    <p style="margin: 1rem 0; font-size: 0.95rem;">Création d'une API sous Symfony fournissant des données macro-géographiques et géopolitiques. Intégration d'une base PostgreSQL complexe et authentification JWT.</p>
                    <div>
                        <span class="tag">PHP</span> <span class="tag">Symfony</span> <span class="tag">PostgreSQL</span>
                    </div>
                </div>
            </div>

            <div class="card">
                <img src="images/projet2.jpg" alt="Interface Labo Chimie">
                <div class="card-content">
                    <h3>ReactQuant Interface</h3>
                    <p style="margin: 1rem 0; font-size: 0.95rem;">Application SPA en React simulant les modèles de désintégration en physique. Consommation d'API asynchrone et gestion d'états complexes.</p>
                    <div>
                        <span class="tag">JavaScript</span> <span class="tag">React</span> <span class="tag">API REST</span>
                    </div>
                </div>
            </div>

            <div class="card">
               <img src="images/projet3.jpg" alt="E-commerce">
                <div class="card-content">
                    <h3>E-Commerce Headless</h3>
                    <p style="margin: 1rem 0; font-size: 0.95rem;">Séparation totale du front et du back. Backend natif PHP gérant le CRUD des produits (SQL), couplé à un panier dynamique en Vanilla JS.</p>
                    <div>
                        <span class="tag">PHP 8</span> <span class="tag">MySQL</span> <span class="tag">Vanilla JS</span>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <footer>
        <?php include "inc/footer.inc.php"; ?>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>