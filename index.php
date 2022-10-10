<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Hotel</title>
</head>
<body>
    <header>
        <h1>POO Hotel</h1>
        <p class="ennonce">A partir de ces captures d'écran, réaliser l'application en POO permettant la gestion de réservations de chambres par des clients dans différents hôtels:</p>
        <div class="img-flex" >
            <div class="bloc-img">
                <img src="img/hotel1.png" alt="">
                <img src="img/hotel2.png" alt="">
            </div>
            <div class="bloc-img">
                <img src="img/hotel3.png" alt="">
                <img src="img/hotel4.png" alt="">
            </div>  
        </div>
    </header>
    <main>
        <h2 class="resultat">Résultat</h2>
    </main>
    
</body>
</html>

<?php

spl_autoload_register(function ($class_name) {  //fonction autoloader en PHP, facilite quand plusieurs classes
    require 'class/' . $class_name . '.php';
});

// HOTEL

$Hilton = new Hotel("Hilton **** Strasbourg","10 route de la gare","67000 STRASBOURG",40);
$Regent = new Hotel("Regent *** Paris", "61 rue Dauphine","75006 PARIS",35);

// CLIENT
$Micka= new Client("Micka","MURMANN");
$Virgile= new Client("Virgile","GIBELLO");

// CHAMBRE
$Chambre3= new Chambre($Hilton, "3", 2, TRUE, 120);
$Chambre4= new Chambre($Hilton, "4", 1, TRUE, 120);

// RESERVATION
$reservation1 = new Reservations ($Micka, $Chambre3,"15-01-2023","16-01-2023");
// TEST
 echo $Chambre4;
// echo "<br>";
// echo $Micka;
// echo "<br>";
// echo $Hilton;
// echo "<br>";
// echo $Micka->afficherReservationClient();
// echo "<br>";
// echo $Hilton->afficherReservationsHotel();
echo $reservation1;



// classe : representation d'une chose matérielle ou immaterielle du réel. On y associe des propriétés (nom, prénom) et des méthodes (fonctions). Ensemble d'etat (propriété) et de comportements (méthodes).

// objet :  un objet est une instance d'une classe.

// instance : désigne une apparition d'une classe.

// encapsulation : pose de limiteurs d'accès ( private :accès que dans la classe / public : accès à l'intérieur et a l'exterieur / protected : pour les classes qui heritent en plus de la classe seule).

// __toString : méthode magique qui traite l'objet sous forme de chaine de caractères.