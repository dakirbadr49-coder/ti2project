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
        <h2>Mes Compétences</h2>
        <div class="grid-2">
            <div class="card card-content">
                <h3 class="text-highlight" style="margin-bottom: 1rem;">Backend & API</h3>
                <ul>
                    <li>PHP 8 & Programmation Orientée Objet</li>
                    <li>Framework Symfony 6+</li>
                    <li>Architecture REST & Architecture Microservices</li>
                </ul>
            </div>
            <div class="card card-content">
                <h3 class="text-highlight" style="margin-bottom: 1rem;">Frontend</h3>
                <ul>
                    <li>JavaScript (ES6+) & TypeScript</li>
                    <li>React (Hooks, Context, Redux)</li>
                    <li>HTML5, CSS3, DOM Manipulation native</li>
                </ul>
            </div>
            <div class="card card-content">
                <h3 class="text-highlight" style="margin-bottom: 1rem;">Bases de Données</h3>
                <ul>
                    <li>Modélisation conceptuelle (MCD/MLD)</li>
                    <li>SQL (MySQL, PostgreSQL) & requêtes complexes</li>
                    <li>NoSQL (Concepts de base MongoDB)</li>
                </ul>
            </div>
        </div>
    </main>

    <footer>
        <?php include "inc/footer.inc.php"; ?>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>