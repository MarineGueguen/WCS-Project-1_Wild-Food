<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/assets/recipes.css">
        <title>Users Recipes</title>
    </head>
    <body>
        <?php
                include '../layouts/_header.php';
        ?>

        <h1>blablabla</h1>

        <div class="loop-recipes">
            <?php foreach($_SESSION['recipes'] as $recipe){} ?>
            <div class="card">
                <h3><?= $recipe['title']; ?></h3>
                <img src="<?php ?>" alt="">
            </div>
        
        </div>

        <?php
            include "../layouts/_footer.php";
        ?>
    </body>
</html>