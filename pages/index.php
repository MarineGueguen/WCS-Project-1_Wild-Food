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
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">  
</head>
<body>
<?php
  include "../layouts/_header.php";
  ?>
  <section>
    <article>
      <a href="#" >
        <img class="homePageImage" src="https://placeimg.com/640/480/nature"/>
        <h2 class="homePageTitle">Apéritifs</h2>
        <p class="aperitifSubtitle">Le meilleur des apéritifs à partager entre amis. Verrines, toasts, amuse-gueules ou petits feuilletées, surprenez vos convives !</p>
      </a>
    </article>
    <article>
      <a href="#">
        <img class="homePageImage" src="https://placeimg.com/640/480/architecture"/>
        <h2 class="homePageTitle">Entrées</h2>
      </a>
    </article>
    <article>
      <a href="#">
        <img class="homePageImage" src="https://placeimg.com/640/480/any"/>
        <h2 class="homePageTitle">Plats</h2>
      </a>
    </article>
    <article>
      <a href="#">
        <img class="homePageImage" src="https://placeimg.com/640/480/tech"/>
        <h2 class="homePageTitle">Desserts</h2>
      </a>
    </article>
  </section>



  <?php
  include "../layouts/_footer.php";
  ?>
</body>
</html>

