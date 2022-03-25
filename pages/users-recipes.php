<?php 
// session_start();
if ($_POST) {
    $_SESSION['recipes'][] = ['user' => $_POST['user'], 'category' => $_POST['category'], 'title' => $_POST['title'], 'image' => $_POST['image'], 'time' => $_POST['time'], 'difficulty' => $_POST['difficulty'], 'budget' => $_POST['budget'], 'ingredients' => $_POST['ingredients'], 'step1' => $_POST['step1'], 'step2' => $_POST['step2'], 'step3' => $_POST['step3'], 'step4' => $_POST['step4'], 'step5' => $_POST['step5'],]; 
}

$bonAppetit = "<span class='bon-appetit'>Bon appétit !</span>";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../assets/recipes.css">
        <link href="../assets/main.css" rel="stylesheet" />
        <link rel="stylesheet" href="../assets/form.css">
        <title>Recettes des wilders</title>
    </head>
    <body>
        <?php
                include '../layouts/_header.php';
        ?>

        <h1 class="page-title">Les recettes des Wilders</h1>

    <?php foreach($_SESSION['recipes'] as $recipe): ?>
        <main class="recipe_card">
            <section class="recipe_image_container">
                <div class="recipe_image_box">
                    <img src="<?= $recipe['image']; ?>" alt="<?= $recipe['title']; ?>"/>
                </div>   
            </section>
            <section class="user_info">
                <h1 class="recipe_title"><?= $recipe['title']; ?></h1>
                <span class="recipe_autor"> <?= $recipe['category']; ?> 
                <?php if ($recipe['category'] === 'Entrée') { 
                    echo 'proposée par'; 
                    } else { echo 'proposé par'; 
                    }?> <?= $recipe['user']; ?></span>
            <div class="recipe_infos">  
                <ul class="infos_list">
                    <li><span class="recipe-time"><?= $recipe['time']; ?></span></li>
                    <li><?php if ($recipe['budget'] === '€') { echo "<span class='euro'>€</span>";}
                            if ($recipe['budget'] === '€€') { echo "<span class='euro'>€€</span>";}
                            if ($recipe['budget'] === '€€€') { echo "<span class='euro'>€€€</span>";} 
                        ?></li>
                    <li><?php if ($recipe['difficulty'] === 'lv1') { echo "<img src='../assets/images/lv1.png' alt='lv1' class='img'>";}
                            if ($recipe['difficulty'] === 'lv2') { echo "<img src='../assets/images/lv2.png' alt='lv2' class='img'> ";}
                            if ($recipe['difficulty'] === 'lv3') { echo "<img src='../assets/images/lv2.png' alt='lv3' class='img'>";} 
                        ?></li>
                </ul>
            </section> 
            <section class="recipe_steps">
                <div>
                    <p>Ingrédients : </p>
                    <span class="user_ingredients"><?= $recipe['ingredients']; ?></span>
                </div>
                <div class="step1">
                    <p>Etape 1</p>
                    <p><?= $recipe['step1']; ?></p>
                </div>
                <?php 
                if (empty($recipe['step2'])) {
                    echo $bonAppetit ;
                } else {
                    echo "<div class='step2'>
                    <p>Etape 2</p>
                    <p> " . $recipe['step2'] . "</p>
                </div>"; 
                    if (empty($recipe['step3'])) {
                        echo $bonAppetit ;
                    } else {
                        echo "<div class='step3'>
                        <p>Etape 3</p>
                        <p> " . $recipe['step3'] . "</p>
                        </div>";
                        if(empty($recipe['step4'])) {
                            echo $bonAppetit ;
                        } else {
                        echo "<div class='step4'>
                        <p>Etape 4</p>
                        <p> " . $recipe['step4'] . "</p>
                        </div>";
                            if(empty($recipe['step5'])) {
                                echo $bonAppetit ;
                            } else {
                                echo "<div class='step5'>
                                <p>Etape 5</p>
                                <p> " . $recipe['step5'] . "</p>
                                </div>";
                                echo $bonAppetit;
                            }
                        }
                    }
                }
                ?> 
                            
            </section>
        </main>
    <?php endforeach; ?>
            

        <?php
            include "../layouts/_footer.php";
        ?>
    </body>
</html>