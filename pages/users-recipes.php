<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../assets/recipes.css">
        <link href="../assets/main.css" rel="stylesheet" />
        <link rel="stylesheet" href="../assets/form.css">
        <title>Users Recipes</title>
    </head>
    <body>
        <?php
                include '../layouts/_header.php';
        ?>

        <h1>Les recettes des Wilders</h1>


        <main class="recipe_card">
            <section class="recipe_image_container">
                <div class="recipe_image_box">
                    <img src="../assets/images/pexels-photo-264892.jpeg" alt="gateau_au_chocolat"/>
                </div>   
            </section>
            <section class="user_info">
                <h1 class="recipe_title">Titre</h1>
                <span class="recipe_autor">proposé par ...</span>
            <div class="recipe_infos">  
                <ul class="info_list">
                    <li>Temps de préparation</li>
                    <li>Budget</li>
                    <li>Difficulté</li>
                </ul>
            </section>
            <section class="recipe_ingredients">
                <p>Ingrédients : </p>
                <span class="user_ingredients">100g de farine, 60g de chocolat, 1 oeuf ...</span>
            </section>
            <section class="recipe_steps">
                <div class="step1">
                    <p>Etape 1</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima repudiandae sint placeat aliquam quaerat dolorem beatae eum, ratione reprehenderit architecto voluptate eius temporibus, dolore nostrum unde. Inventore iure optio laborum.</p>
                </div>
                <div class="step2">
                    <p>Etape 2</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima repudiandae sint placeat aliquam quaerat dolorem beatae eum, ratione reprehenderit architecto voluptate eius temporibus, dolore nostrum unde. Inventore iure optio laborum.</p>
                </div>
                <div class="step3">
                    <p>Etape 3</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima repudiandae sint placeat aliquam quaerat dolorem beatae eum, ratione reprehenderit architecto voluptate eius temporibus, dolore nostrum unde. Inventore iure optio laborum.</p>
                </div>
                <div class="step4">
                    <p>Etape 4</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima repudiandae sint placeat aliquam quaerat dolorem beatae eum, ratione reprehenderit architecto voluptate eius temporibus, dolore nostrum unde. Inventore iure optio laborum.</p>
                </div>
                <div class="step5">
                    <p>Etape 5</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima repudiandae sint placeat aliquam quaerat dolorem beatae eum, ratione reprehenderit architecto voluptate eius temporibus, dolore nostrum unde. Inventore iure optio laborum.</p>
                </div>
                
            </section>
        </main>
            

        <?php
            include "../layouts/_footer.php";
        ?>
    </body>
</html>