<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="../assets/welcome.css" rel="stylesheet" />
  <link href="../assets/main.css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
</head>
<body>
<?php
  include "../layouts/_header.php";
  ?>
  <div class="sectionContainer">
    <section class="frontPageGrid">
      <article>
        <a href="rubrics.php" >
          <img class="homePageImage" src="../assets/images/aperitif.jpeg"/>
          <h2 class="homePageTitle borderRadius">Apéritifs</h2>
        </a>
          <p class="homePageTitleSubtitle">Le meilleur des apéritifs à partager entre amis. Verrines, toasts, amuse-gueules ou petits feuilletées, surprenez vos convives !</p>
      </article>
      <article>
        <a href="#">
          <img class="homePageImage" src="../assets/images/entree.jpeg"/>
          <h2 class="homePageTitle borderRadius">Entrées</h2>
        </a>
        <p class="homePageTitleSubtitle">Découvrez nos recettes faciles d’entrées maison pour commencer le repas en beauté.</p>
      </article>
      <article>
        <a href="#">
          <img class="homePageImage" src="../assets/images/plat.jpeg"/>
          <h2 class="homePageTitle borderRadius">Plats</h2>
        </a>
        <p class="homePageTitleSubtitle">Du repas léger au plus décadent, nos recettes de plats principaux sont variées et savoureuses !</p>
      </article>
      <article>
        <a href="#">
          <img class="homePageImage" src="../assets/images/dessert.jpeg"/>
          <h2 class="homePageTitle borderRadius">Desserts</h2>
        </a>
        <p class="homePageTitleSubtitle">Impressionez vos invités avec l’une de nos recettes sucrées. Des plus gourmandes aux plus fines, ces pâtisseries ne feront qu’un avec votre diabète.</p>
      </article>
    </section>
  </div>
  <?php
include "../layouts/_footer.php";
?>
</body>
</html>

