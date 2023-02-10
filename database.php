<?php
include __DIR__ . '/Products.php';
include __DIR__ . '/Models/Food.php';
include __DIR__ . '/Models/Toy.php';
include __DIR__ . '/Models/Extra.php';

// ESEMPIO IN FOOD SU COME STRINGERE IL CODICE


// qua avrei dovuto mettere  new (es.)food(gcvwdhbkhqjldrbhfcdbejsn) senza funzioni set e get, questo per tutti i prodotti, successivamente racchiudere tutto in un array e richiamarlo in index col foreach per creare cards dinamicamente
$food_1 = new food('545', 'prosciutto, riso');
$food_1->setName('Royal Canin Mini Adult');
$food_1->setPrice('43,99');
$food_1->setAnimalType('Cane');
$food_1->setImage('https://picsum.photos/350/400');

$food_2 = new food('600', 'manzo, cereali');
$food_2->setName('Almo Nature Holistic Maintenance Medium Large Tonno e Riso');
$food_2->setPrice('44,99');
$food_2->setAnimalType('Cane');
$food_2->setImage('https://picsum.photos/350/400');

$food_3 = new food('400', 'tonno, pollo, prosciutto');
$food_3->setName('Almo Nature Cat Daily Lattina');
$food_3->setPrice('34,99');
$food_3->setAnimalType('Gatto');
$food_3->setImage('https://picsum.photos/350/400');

$food_4 = new food('30', 'pesci e sottoptodotti dei pesci, cereali, lieviti, alghe');
$food_4->setName('Mangime per Pesci Guppy in Fiocchi');
$food_4->setPrice('2,95');
$food_4->setAnimalType('Pesce');
$food_4->setImage('https://picsum.photos/350/400');

$extra_1 = new extra('Legno', 'M:L 83 x P 67 x H 153 cm');
$extra_1->setName('Voliera Wilma in Legno');
$extra_1->setPrice('184,99');
$extra_1->setAnimalType('Uccello');
$extra_1->setImage('https://picsum.photos/350/400');

$extra_2 = new extra('Materiale espanso', 'ND');
$extra_2->setName('Cartucce Filtranti per Filtro EasyCrystal');
$extra_2->setPrice('2,29');
$extra_2->setAnimalType('Pesce');
$extra_2->setImage('https://picsum.photos/350/400');

$toy_1 = new toy('Galleggia e rimbalza', '8,5 cm x 10 cm');
$toy_1->setName('Kong Classic');
$toy_1->setPrice('13,49');
$toy_1->setAnimalType('Cane');
$toy_1->setImage('https://picsum.photos/350/400');

$toy_2 = new toy('Morbido con codina in corda', '8,5 cm x 10 cm');
$toy_2->setName('Topini di peluche Trixie');
$toy_2->setPrice('4,99');
$toy_2->setAnimalType('Gatto');
$toy_2->setImage('https://picsum.photos/350/400');
