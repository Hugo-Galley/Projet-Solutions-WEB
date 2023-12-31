<?php
include('bdd.php');
$velo = $bdd->query("SELECT * FROM velos")->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../scripts_annexe/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Agbalumo&family=Roboto+Mono:wght@500&display=swap" rel="stylesheet">  
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="../scripts_annexe/script.js"></script>

    <title>Acceuil</title>
</head>
<body>
<header>
    <?php
        require_once("header.php");
        ?>
</header>
    <main>

        <h1 id="marque">SmartBike</h1>
        <div class="presentation">
        <?php
          foreach ($velo as $imageVelo) {
          echo '<img src="' . $imageVelo['photo_url'] . '" alt="image velo 1">';
        }
        ?>
        </div>
  <p id="pres-text">Bienvenue sur le site de Smartbike, l'entreprise innovante dédiée à la création de solutions de mobilité électrique. Nous sommes fiers de vous présenter notre dernier bijou technologique, le vélo électrique révolutionnaire "Bike5". Chez Smartbike, nous nous engageons à repousser les limites de l'innovation en proposant des alternatives de transport écologiques, durables et élégantes. Explorez notre gamme diversifiée de vélos électriques, comprenant le modèle emblématique "BikeOne", le tout-terrain performant "Bike22" et le modèle phare "BikeFirst". Notre site est conçu pour vous offrir une expérience immersive, où vous pourrez découvrir les caractéristiques uniques de chaque vélo, en apprendre davantage sur notre entreprise et même trouver des conseils d'experts pour choisir le modèle qui correspond le mieux à vos besoins. Rejoignez la révolution de la mobilité électrique avec Smartbike et embarquez pour un avenir plus vert et plus dynamique.</p>


    </main>
    <footer>
        <?php
            require_once("footer.php")
        ?>
    </footer>
</body>
</html>