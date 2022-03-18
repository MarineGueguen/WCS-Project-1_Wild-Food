<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
<?php
        include '../layouts/_header.php';
    ?>
 <h1 class="page-title">Toi aussi, propose ta recette !</h1>
    <form action="" method="">
        <div class="recipe-type">
            <label for="type">Catégorie de recette :</label> 
            <select name="category" id="category-select">
                <option value="">--Merci de choisir une catégorie--</option>
                <option value="appetiser">Apéritif</option>
                <option value="entree">Entrée</option>
                <option value="main-dish">Plat</option>
                <option value="dessert">Dessert</option>
            </select>
            
        </div>
        <div class="recipe-name">
            <label for="name">Nom de la recette :</label> 
            <input type="text" id="name" name="recipe_name" required="true" value="ex : gâteau au chocolat">
        </div>
        <div class="recipe-img">
            <label for="img">Photo du plat :</label>
            <input type="url" name="img" id="recipe_img" required="true" value="http://maphotodegateau.png">
        </div>
        <div class="recipe-name">
            <label for="name">Temps de préparation :</label> 
            <input type="text" id="name" name="recipe_name" required="true" value="1 heure 20 minutes">
        </div>
        <div class="recipe-ingredients">
            <label for="ingredients">Ingrédients :</label>
            <textarea name="ingredients" id="recipe_ingredients" required="true" ></textarea>
        </div>
        <div class="recipe-steps">
            <label for="steps">Etapes :</label>
            <textarea name="steps" id="recipe_steps" required="true" ></textarea>
        </div>
        <div class="recipe-button">
            <button type="submit">Envoyer</button>
        </div>
    </form>
</body>
</html>