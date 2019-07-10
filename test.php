<?php

// variables //

$solraiders = "+30min";
$zombies = "+30min";
$outbreak = "+30min";
$singularity = "+30min";
$engineerium = "+30min";
$incarna  = "+60min";
$incarna_ref = "18:10";
$eclipse = "+60min";
$eclipse_ref = "18:40";
$towertag = "+30min";
$towertag_ref = "18:20";


$heure_debut = "18:00";
$heure_fin = "23:58";
$d = new DateTime($heure_debut);
while ($d->format('H:i') <= $heure_fin) {
    echo $d->format('H\hi') . "<br />";
    $d->modify("+20min");
}


