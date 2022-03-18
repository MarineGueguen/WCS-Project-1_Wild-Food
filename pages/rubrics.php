<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/rubrics.css">
    <title>Rubrics</title>
</head>

<body>
    <?php
        include '../layouts/_header.php';
    ?>

<div class="site-container">
    <div class="article-container">
        <article class="article-card">
            <figure class="article-image">
                <img src="../assets/images/parisBrest.jpeg" alt="Dessert Paris Brest"
                />
            </figure>
            <div class="article-content">
                <a href="recipes.php" class="card-category">Desserts</a>
                <h3 class="card-title">Paris Brest</h3>
                <p class="card-excerpt"></p>
            </div>    
        </article>    
        <article class="article-card">
            <figure class="article-image">
                <img src="../assets/images/tarteCitron.jpeg" alt="Dessert Tarte Citron Meringuée"
                />
            </figure>
            <div class="article-content">
                <a href="recipes.php" class="card-category">Desserts</a>
                <h3 class="card-title">Tarte au citron meringuée</h3>
                <p class="card-excerpt"></p>
            </div>    
        </article>   
        <article class="article-card">
            <figure class="article-image">
                <img src="../assets/images/bucheNoel.jpeg" alt="Dessert Buche Noël à l'ancienne"
                />
            </figure>
            <div class="article-content">
                <a href="recipes.php" class="card-category">Desserts</a>
                <h3 class="card-title">Bûche de Noël à l'ancienne</h3>
                <p class="card-excerpt"></p>
            </div>    
        </article>   
        <article class="article-card">
            <figure class="article-image">
                <img src="../assets/images/royalChocolat.jpeg" alt="Dessert Royal Chocolat"
                />
            </figure>
            <div class="article-content">
                <a href="recipes.php" class="card-category">Desserts</a>
                <h3 class="card-title">Royal Chocolat</h3>
                <p class="card-excerpt"></p>
            </div>    
        </article>   
    </div>    
</div>

    <?php
        include '../layouts/_footer.php';
    ?>

</body>
</html>
