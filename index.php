<?php
include __DIR__ . '/database.php';
// ESEMPIO IN FOOD SU COME STRINGERE IIL CODICE
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <h1>BoolShop</h1>
            <h2>I nostri prodotti:</h2>
            <div class="col">
                <div class="card">
                    <img src="<?php echo $food_1->image ?>" alt="">
                    <h3><?php echo $food_1->name ?></h3>
                    <div class="type"><?php echo '<i class="fa-solid fa-dog"></i>' . $food_1->animalType ?></div>
                    <div class="price"><?php echo 'Prezzo:' . $food_1->price.'€' ?></div>
                    <div class="info-1"><?php echo 'Peso netto:' . $food_1->weight ?></div>
                    <div class="info-2"><?php echo 'Ingredienti:' . $food_1->ingredients ?></div>
                </div>
                <div class="card">
                    <img src="<?php echo $food_2->image ?>" alt="">
                    <h3><?php echo $food_2->name ?></h3>
                    <div class="type"><?php echo '<i class="fa-solid fa-dog"></i>' . $food_2->animalType ?></div>
                    <div class="price"><?php echo 'Prezzo:' . $food_2->price.'€' ?></div>
                    <div class="info-1"><?php echo 'Peso netto:' . $food_2->weight ?></div>
                    <div class="info-2"><?php echo 'Ingredienti:' . $food_2->ingredients ?></div>
                </div>
                <div class="card">
                    <img src="<?php echo $food_3->image ?>" alt="">
                    <h3><?php echo $food_3->name ?></h3>
                    <div class="type"><?php echo '<i class="fa-solid fa-cat"></i>' . $food_3->animalType ?></div>
                    <div class="price"><?php echo 'Prezzo:' . $food_3->price.'€' ?></div>
                    <div class="info-1"><?php echo 'Peso netto:' . $food_3->weight ?></div>
                    <div class="info-2"><?php echo 'Ingredienti:' . $food_3->ingredients ?></div>
                </div>
                <div class="card">
                    <img src="<?php echo $food_4->image ?>" alt="">
                    <h3><?php echo $food_4->name ?></h3>
                    <div class="type"><?php echo '<i class="fa-solid fa-fish"></i>' . $food_4->animalType ?></div>
                    <div class="price"><?php echo 'Prezzo:' . $food_4->price.'€' ?></div>
                    <div class="info-1"><?php echo 'Peso netto:' . $food_4->weight ?></div>
                    <div class="info-2"><?php echo 'Ingredienti:' . $food_4->ingredients ?></div>
                </div>
                <div class="card">
                    <img src="<?php echo $extra_1->image ?>" alt="">
                    <h3><?php echo $extra_1->name ?></h3>
                    <div class="type"><?php echo '<i class="fa-solid fa-dove"></i>' . $extra_1->animalType ?></div>
                    <div class="price"><?php echo 'Prezzo:' . $extra_1->price.'€' ?></div>
                    <div class="info-1"><?php echo 'Materiale:' . $extra_1->material ?></div>
                    <div class="info-2"><?php echo 'Dimensioni:' . $extra_1->size ?></div>
                </div>
                <div class="card">
                    <img src="<?php echo $extra_2->image ?>" alt="">
                    <h3><?php echo $extra_2->name ?></h3>
                    <div class="type"><?php echo '<i class="fa-solid fa-fish"></i>' . $extra_2->animalType ?></div>
                    <div class="price"><?php echo 'Prezzo:' . $extra_2->price.'€' ?></div>
                    <div class="info-1"><?php echo 'Materiale:' . $extra_2->material ?></div>
                    <div class="info-2"><?php echo 'Dimensioni:' . $extra_2->size ?></div>
                </div>
                <div class="card">
                    <img src="<?php echo $toy_1->image ?>" alt="">
                    <h3><?php echo $toy_1->name ?></h3>
                    <div class="type"><?php echo '<i class="fa-solid fa-dove"></i>' . $toy_1->animalType ?></div>
                    <div class="price"><?php echo 'Prezzo:' . $toy_1->price.'€' ?></div>
                    <div class="info-1"><?php echo 'Caratteristiche:' . $toy_1->hallmarks ?></div>
                    <div class="info-2"><?php echo 'Ingredienti:' . $toy_1->size ?></div>
                </div>
                <div class="card">
                    <img src="<?php echo $toy_2->image ?>" alt="">
                    <h3><?php echo $toy_2->name ?></h3>
                    <div class="type"><?php echo '<i class="fa-solid fa-fish"></i>' . $toy_2->animalType ?></div>
                    <div class="price"><?php echo 'Prezzo:' . $toy_2->price.'€' ?></div>
                    <div class="info-1"><?php echo 'Caratteristiche:' . $toy_2->hallmarks ?></div>
                    <div class="info-2"><?php echo 'Dimensioni:' . $toy_2->size ?></div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>