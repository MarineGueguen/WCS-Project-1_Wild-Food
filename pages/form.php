<?php 

session_start();
// session_destroy();

if ($_GET) {
    var_dump($_GET);
    $_SESSION['recipes'][] = ['category' => $_GET['category'], 'title' => $_GET['title'], 'image' => $_GET['image'], 'time' => $_GET['time'], 'ingredients' => $_GET['ingredients'], 'step1' => $_GET['step1'], 'step2' => $_GET['step2'], 'step3' => $_GET['step3'], 'step4' => $_GET['step4'], 'step5' => $_GET['step5'],]; 
}


var_dump($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="../assets/form.css">
</head>
<body>
<?php
        include '../layouts/_header.php';
    ?>
 <h1 class="page-title">Toi aussi, propose ta recette !</h1>
    <form target="" method="" action="./users-recipes.php">
        <div class="recipe-type">
            <label for="type">Catégorie de recette :</label> 
            <select name="category" id="category-select" required="true">
                <option value="">--Merci de choisir une catégorie--</option>
                <option value="appetiser">Apéritif</option>
                <option value="entree">Entrée</option>
                <option value="main-dish">Plat</option>
                <option value="dessert">Dessert</option>
            </select>
            
        </div>
        <div class="recipe-name">
            <label for="name">Nom de la recette :</label> 
            <input type="text" name="title" required="true">
        </div>
        <div class="recipe-img">
            <label for="img">Photo du plat :</label>
            <input type="url" name="image" required="true">
        </div>
        <div class="recipe-name">
            <label for="name">Temps de préparation :</label> 
            <input type="text" name="time" required="true">
        </div>
        <div class="recipe-ingredients">
            <label for="ingredients">Ingrédients :</label>
            <textarea name="ingredients" required="true" ></textarea>
        </div>
        <div class="recipe-step1">
            <label for="step1">Etape 1 :</label>
            <textarea name="step1" required="true" ></textarea>
        </div>
        <div class="recipe-step2">
            <label for="step2">Etape 2 :</label>
            <textarea name="step2"></textarea>
        </div>
        <div class="recipe-step3">
            <label for="step3">Etape 3 :</label>
            <textarea name="step3"></textarea>
        </div>
        <div class="recipe-step4">
            <label for="step4">Etape 4 :</label>
            <textarea name="step4"></textarea>
        </div>
        <div class="recipe-step5">
            <label for="step5">Etape 5 :</label>
            <textarea name="step5"></textarea>
        </div>
        <div>
            <button type="button" class="add-step" onclick='doAction()'>+</button>
        </div>
        <div class="recipe-button">
            <button type="submit">Envoyer</button>
        </div>
    </form>

    <script type="text/javascript" src="../assets/data/script.js"></script>
</body>
</html>