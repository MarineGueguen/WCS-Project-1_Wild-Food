<?php 

session_start();
// session_destroy();

if ($_POST) {
    // var_dump($_POST);
    $_SESSION['recipes'][] = ['user' => $_POST['user'], 'category' => $_POST['category'], 'title' => $_POST['title'], 'image' => $_POST['image'], 'time' => $_POST['time'], 'difficulty' => $_POST['difficulty'], 'budget' => $_POST['budget'], 'ingredients' => $_POST['ingredients'], 'step1' => $_POST['step1'], 'step2' => $_POST['step2'], 'step3' => $_POST['step3'], 'step4' => $_POST['step4'], 'step5' => $_POST['step5'],]; 
}


// var_dump($_SESSION);
?>
<?php
$errors = [];

$category = $user = $title = $image = $time = $difficulty = $budget = $ingredients = $step1 = "";

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_POST['user']))  {
        $errors[] = "Merci de renseigner votre nom d'utilisateur. <br>";
    } else {
        $user = test_input($_POST["user"]);
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

    // if (!isset($_POST['difficulty']) || !isset($_POST['budget']))  {
    //     $errors[] = "Merci de renseigner toutes les informations concernant la recette. <br>";
    // } else {
    //     $difficulty = test_input($_POST["difficulty"]);
    //     $budget = test_input($_POST["budget"]);
    // }

    if (empty($_POST['time']) || empty($_POST['ingredients']) || empty($_POST['step1'])) {
        $errors[] = "Merci de renseigner toutes les informations concernant la préparation de votre recette.";
    } else {
        $time = test_input($_POST["time"]);
        $ingredients = test_input($_POST["ingredients"]);
        $step1 = test_input($_POST["step1"]);
    }
    
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<div class='error'>$error</div>";
        }
        exit();
       // HEADER("Location: ./users-recipes.php");
    } else {
        
    }  
}

$categories = ["Apéritif", "Entrée", "Plat", "Dessert",];
$difficulties = ["<img src='../assets/images/lv1.png' alt='lv1'>", "<img src='../assets/images/lv2.png' alt='lv2'>", "<img src='../assets/images/lv3.png' alt='lv3'>",];
$budgets = ["€", "€€", "€€€",];

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajoute ta recette !</title>
    <link rel="stylesheet" href="../assets/form.css">
    <link href="../assets/main.css" rel="stylesheet" />
</head>
<body>
<?php
        include '../layouts/_header.php';
    ?>
 <h1 class="page-title">Toi aussi, propose ta recette !</h1>
    <form target="" method="POST" action="./users-recipes.php" class="form_recipe">
        <div class="user_name">
            <label for="user">Auteur de la recette :</label> 
            <input type="text" name="user" id="user" placeholder="Ex : Bob De Lahaute" required class="text">
        </div>

        <div class="recipe-type">
            <label for="category">Catégorie de recette :</label> 
            <select name="category" id="category" required>
            <option value="">-- Merci de choisir une catégorie --</option>
            <?php foreach ($categories as $category): ?>
            <option value='<?=($category)?>'>
                <?=$category;?>
            </option>
            <?php endforeach; ?>
            </select>
        </div>
 
        <div class="recipe-name">
            <label for="title">Nom de la recette :</label> 
            <input type="text" name="title" id="title" placeholder="Ex : gâteau au chocolat" required class="text">
        </div>

        <div class="recipe-img">
            <label for="image">Photo du plat :</label>
            <input type="url" name="image" id="image" placeholder="Ex : http://gateau.png" required class="text">
        </div>
        <div class="recipe-name">
            <label for="name">Temps de préparation :</label> 
            <input type="text" name="time" id="time" placeholder="Ex : 45 minutes"required class="text"> 
        </div>

        <div class="recipe_info">
            <div class="recipe-difficulty">
                <legend>Niveau de difficulté :</legend> 
                <div class="difficulty">
                    <input type="radio" id="difficulty" name="difficulty" value="lv1" required>
                    <label for="difficulty"><img src='../assets/images/lv1.png' alt='lv1' class="img"></label>
                    <input type="radio" id="difficulty" name="difficulty" value="lv2" required>
                    <label for="difficulty"><img src='../assets/images/lv2.png' alt='lv2' class="img"></label>
                    <input type="radio" id="difficulty" name="difficulty" value="lv3" required>
                    <label for="difficulty"><img src='../assets/images/lv3.png' alt='lv3' class="img"></label>
                </div>
            </div>
        
            <div class="recipe-budget">
                <legend>Budget :</legend> 
                <div class="budget">
                <input type="radio" id="budget" name="budget" value="€" required>
                    <label for="budget" class="euro">€</label>
                    <input type="radio" id="budget" name="budget" value="€€" required>
                    <label for="budget" class="euro">€€</label>
                    <input type="radio" id="budget" name="budget" value="€€€" required>
                    <label for="budget" class="euro">€€€</label>
                </div>
            </div>
        </div>

        <div class="recipe-ingredients">
            <label for="ingredients">Ingrédients :</label>
            <textarea name="ingredients" id="ingredients" placeholder="Ex : 200g de farine, 100g de sucre..." required></textarea>
        </div>
        <div class="recipe-step1">
            <label for="step1">Etape 1 :</label>
            <textarea name="step1" id="step1" placeholder="Ex : mélanger la farine, le sucre et les oeufs." required></textarea>
        </div>
        <div class="recipe-step2">
            <label for="step2">Etape 2 :</label>
            <textarea name="step2" id="step2"></textarea>
        </div>
        <div class="recipe-step3">
            <label for="step3">Etape 3 :</label>
            <textarea name="step3" id="step3"></textarea>
        </div>
        <div class="recipe-step4">
            <label for="step4">Etape 4 :</label>
            <textarea name="step4" id="step4"></textarea>
        </div>
        <div class="recipe-step5">
            <label for="step5">Etape 5 :</label>
            <textarea name="step5" id="step5"></textarea>
        </div>
        <div>
            <button type="button" class="add-step" title="Ajouter une étape." onclick='doAction()'>+</button>
        </div>
        <div class="recipe-button">
            <button type="submit" name="submit" class="submit-button">Envoyer</button>
        </div>
       
    </form>
    

    <?php
  include "../layouts/_footer.php";
  ?>

    <script type="text/javascript" src="../assets/data/script.js"></script>
</body>
</html>