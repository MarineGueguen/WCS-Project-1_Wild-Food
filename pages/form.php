<?php 

// session_start();
// // session_destroy();

// if ($_GET) {
//     var_dump($_GET);
//     $_SESSION['recipes'][] = ['category' => $_GET['category'], 'title' => $_GET['title'], 'image' => $_GET['image'], 'time' => $_GET['time'], 'ingredients' => $_GET['ingredients'], 'step1' => $_GET['step1'], 'step2' => $_GET['step2'], 'step3' => $_GET['step3'], 'step4' => $_GET['step4'], 'step5' => $_GET['step5'],]; 
// }


// var_dump($_SESSION);
?>
<?php
$errors = [];

$category = $name = $title = $image = $time = $difficulty = $budget = $ingredients = $step1 = "";

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_POST['name']))  {
        $errors[] = "Merci de renseigner votre nom d'utilisateur. <br>";
    } else {
        $name = test_input($_POST["name"]);
    }

    if (empty($_POST['category'])) {
        $errors[] = "Merci de renseigner la catégorie de la recette. <br>";
    } else {
        $category = test_input($_POST["category"]);
    } 

    if (empty($_POST['title']))  {
        $errors[] = "Merci de renseigner le titre de la recette. <br>";
    } else {
        $title = test_input($_POST["title"]);
    }
    
    if (empty($_POST['image']))  {
        $errors[] = "Merci de renseigner l'url de l'image. <br>";
    } else {
        $image = test_input($_POST["image"]);
    if (!filter_var($image, FILTER_VALIDATE_URL)) {
        $errors[] = "Merci de renseigner une adresse valide.<br>";
        }
    }

    if (empty($_POST['difficulty']) || empty($_POST['budget']))  {
        $errors[] = "Merci de renseigner toutes les informations concernant la recette. <br>";
    } else {
        $difficulty = test_input($_POST["difficulty"]);
        $budget = test_input($_POST["budget"]);
    }

    if (empty($_POST['time']) || empty($_POST['ingredients']) || empty($_POST['step1'])) {
        $errors[] = "Merci de renseigner toutes les informations concernant la préparation de votre recette.";
    } else {
        $time = test_input($_POST["time"]);
        $ingredients = test_input($_POST["ingredients"]);
        $step1 = test_input($_POST["step1"]);
    }
    
    if (empty($errors)) {
        HEADER("Location: ./users-recipes.php");
    } else {
        foreach ($errors as $error) {
            echo "<div class='error'>$error</div>";
        }
    }  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="../assets/form.css">
    <link href="../assets/main.css" rel="stylesheet" />
</head>
<body>
<?php
        include '../layouts/_header.php';
    ?>
 <h1 class="page-title">Toi aussi, propose ta recette !</h1>
    <form target="" method="POST" action="">
        <div class="user_name">
            <label for="name">Auteur de la recette :</label> 
            <input type="text" name="name" placeholder="Ex : Bob De Lahaute">
        </div>

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
            <input type="text" name="title" placeholder="Ex : gâteau au chocolat">
        </div>

        <div class="recipe-img">
            <label for="img">Photo du plat :</label>
            <input type="url" name="image" placeholder="Ex : http://gateau.png">
        </div>
        <div class="recipe-name">
            <label for="name">Temps de préparation :</label> 
            <input type="text" name="time" placeholder="Ex : 45 minutes'">
        </div>

        <div class="recipe_info">
            <div class="recipe-difficulty">
                <legend>Niveau de difficulté :</legend> 
                <div class="difficulty">
                    <input type="radio" id="lv1" name="lv">
                    <label for="lv1"><img href="" alt="lv1" /></label>
                    <input type="radio" id="lv2" name="lv">
                    <label for="lv2"><img href="" alt="lv2" /></label>
                    <input type="radio" id="lv3" name="lv">
                    <label for="lv3"><img href="" alt="lv3" /></label>
                </div>
            </div>
        
            <div class="recipe-budget">
                <legend>Budget :</legend> 
                <div class="budget">
                    <input type="radio" id="euro_1" name="euro">
                    <label for="euro_1">€</label>
                    <input type="radio" id="euro_2" name="euro">
                    <label for="euro_2">€€</label>
                    <input type="radio" id="euro_3" name="euro">
                    <label for="euro_3">€€€</label>
                </div>
            </div>
        </div>

        <div class="recipe-ingredients">
            <label for="ingredients">Ingrédients :</label>
            <textarea name="ingredients" placeholder="Ex : 200g de farine, 100g de sucre..."></textarea>
        </div>
        <div class="recipe-step1">
            <label for="step1">Etape 1 :</label>
            <textarea name="step1" placeholder="Ex : mélanger la farine, le sucre et les oeufs."></textarea>
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
            <button type="submit" name="submit" onSubmit="return submit();">Envoyer</button>
        </div>
       
    </form>
    

    <?php
  include "../layouts/_footer.php";
  ?>

    <script type="text/javascript" src="../assets/data/script.js"></script>
</body>
</html>