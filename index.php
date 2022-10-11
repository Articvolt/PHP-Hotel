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

$Hilton = new Hotel("Hilton **** Strasbourg","10 route de la Gare","67000 STRASBOURG",40);
$Regent = new Hotel("Regent *** Paris", "61 rue Dauphine","75006 PARIS",35);

// CLIENT
$Micka= new Client("Micka","MURMANN");
$Virgile= new Client("Virgile","GIBELLO");

// CHAMBRE
$Chambre3= new Chambre($Hilton, "3", 2, TRUE, 120);
$Chambre4= new Chambre($Hilton, "4", 1, TRUE, 120);

// RESERVATION
$reservation1 = new Reservation ($Micka, $Chambre3, $Hilton,"15-01-2023","16-01-2023");
$reservation0 = new Reservation ($Micka, $Chambre4, $Hilton, "11-01-2023","14-01-2023");
// TEST
//  echo $Chambre4;
// echo "<br>";
// echo $Micka;
// echo "<br>";
echo $Hilton->AfficherListeChambre();
// echo $Hilton;
echo "<br>";
// echo $Micka->afficherReservationClient();
// echo "<br>";
// echo $Hilton->afficherReservationsHotel();
// echo "<br>";
// echo $reservation1;
echo $Hilton->AfficherDescriptionHotel();
