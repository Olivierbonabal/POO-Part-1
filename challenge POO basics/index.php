<?php
require_once 'Cars.php';


$cox = new Cars("red", 5, "electric");

echo $cox->start();
echo '<br> Démarrage ok' . '<br>';
echo $cox->forward();
echo '<br> Vitesse de la voiture : ' . $cox->getcurrentSpeed() . ' km/h' . '<br>';
echo $cox->brake();
echo '<br> Vitesse de la voiture : ' . $cox->getcurrentSpeed() . ' km/h' . '<br>';
echo $cox->brake();

?>



