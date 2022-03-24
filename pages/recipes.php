<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/recipes.css">
    <link rel="stylesheet" href="/assets/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
    <title>Recettes</title>
</head>
<body>
<?php
        include '../layouts/_header.php';
    ?>

    <main>


        <section class="recipe_image_container">
            <div class="recipe_image_box">
                <img src="../assets/images/parisBrest.jpeg" alt="Dessert Paris Brest"/>
            </div>   
        </section>
        <section class="recipe_title">
            <h1>Paris Brest</h1>
        </section>
        <section>
            <div class="recipe_infos">  
            <ul class="info_list">
                <li>Temps de préparation : 2h30</li>
                <li>Budget : *****</li>
                <li>Difficulté : ***</li>
            </ul>
            </div>
        </section>
        <section class="recipe_ingredients">
            <p>Ingrédients : </p>
            <ul class="ingredients_list">
                <li>625g de lait</li>
                <li>56g de sucre</li>
                <li>80g de jaunes d'oeufs</li>
                <li>230 à 250g d'oeufs</li>
                <li>375g de beurre</li>
                <li>150g de praliné</li>
                <li>45g de poudre à crème</li>
                <li>4g de sel</li>
                <li>140g de farine T55</li>
                <li>125g d'eau</li>
            </ul>
        </section>
        <section class="recipe_steps">
            <div class="step1">
                <p>Etape 1</p>
                <p>La crème mousseline est obtenue à partir d'une crème pâtissière à laquelle on aura incorporé du beurre et un arôme. Parfumée au praliné, c'est la crème du Paris-brest.
                Dans une casserole, mettre le lait, environ 10% des 125g de sucre et porter à ébullition. Dans une calotte ou un cul de poule, blanchir au fouet le sucre restant avec les jaunes d’œufs puis ajouter la poudre à crème (ou la fécule de maïs).
                </p>
            </div>
            <div class="step2">
                <p>Etape 2</p>
                <p>Verser une partie du lait chaud (entre 1⁄4 et la moitié) sur le mélange de jaunes d’oeuf+sucre+poudre et fouetter. Prolonger la cuisson pendant 1minutes 30 à 2 minutes pour pasteuriser la crème tout en continuant à fouetter la crème.
                Hors du feu, incorporer le beurre (idéalement dans une crème à 50-55°C, max60°C) et au besoin, passer au mixeur plongeant, puis débarrasser la crème, filmer et passer au froid positif.</p>
            </div>
            <div class="step3">
                <p>Etape 3</p>
                <p>Travailler le beurre restant en pommade (avec le praliné) dans la cuve du batteur au fouet. 
                    Incorporer progressivement la crème pâtissière en 3 à 4 fois et chauffer au besoin la cuve du batteur au chalumeau afin de faciliter l’incorporation du beurre (à chaque ajout de crème pâtissière et dès que la mousseline est homogène, arrêter de fouetter afin de conserver la volume donné à la crème). 
                    Si l'appareil ne foisonne pas, replacer la cuve au congélateur quelques minutes puis fouetter à nouveau.
                    Remplir une poche à douille et garnir. Cette crème se conserve 24h au réfrigérateur.</p>
            </div>
            <div class="step4">
                <p>Etape 4</p>
                <p>Pour la pâte à choux, mettre l’eau, le lait, le sel, le sucre et le beurre en morceaux dans une sauteuse. Porter le mélange à grande ébullition afin que tous les ingrédients soient dissous.
                Retirer la sauteuse du feu et verser en une seule fois la farine tamisée, incorporer à la spatule jusqu’à ne plus décerner la farine dans ce mélange appelé panade.
                Remettre la sauteuse sur le feu et dessécher la détrempe pendant quelques minutes, jusqu’à ce qu’une pellicule de pâte se forme sur le fond de la sauteuse.</p>
            </div>
            <div class="step5">
                <p>Etape 5</p>
                <p>Débarrasser la panade dans une calotte et remuer à la spatule pour que le mélange descende en température, permettant d’éviter de faire coaguler les œufs à incorporer progressivement en remuant énergiquement (environ 220g) et ajuster (jusqu’à 240g) pour obtenir un ruban tombant uniformément.
                Corner la calotte et mettre dans une poche munie d’une douille lisse ou cannelée.</p>
            </div>
            <div class="step6">
                <p>Etape 6</p>
                <p>Pour faire un cercle rond : cirer la plaque de cuisson (ou le tapis silicone) puis tremper un cercle de 20 cm dans la farine et taper le sur la plaque.
                Avec une poche et une douille unie de 14 ou 16, dresser un 1er cercle de pâte à choux en suivant le tracé (farine), puis un 2nd cercle à l’intérieur du 1er, puis un 3ème cercle à cheval sur les 2 premiers et terminer par un 4ème cercle à côté des 3 premiers de la même taille que le 3ème.
                Parsemer les 3 premiers d’amandes effilées et débarrasser les amandes en trop en les faisant glisser hors de la plaque.</p>
            </div>
            <div class="step7">
                <p>Etape 7</p>
                <p>Enfourner à 160°C et cuire pendant 35-40min puis défourner et laisser refroidir sur grille quelques minutes avant d’ouvrir. Découper au couteau scie au deux tiers de la hauteur.</p>
            </div>
            <div class="step8">
                <p>Etape 8</p>
                <p>A la poche à douille (cannelée type PF12), garnir le fond de crème mousseline en zigzag. Couvrir avec le 4ème cercle et recouvrir le 4ème cercle de mousseline. 
                    A part, décorer le chapeau au sucre glace (ou codi-neige) tamisé, puis le déposer sur la couronne garnie de crème mousseline.</p>
            </div>
        </section>
    </main>

<?php
    include '../layouts/_footer.php';
?>
</body>
</html>