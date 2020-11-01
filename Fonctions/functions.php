<?php

function sayHello(?string $nom):string {
    if ($nom == null) {
        return "Salut";
    }
    return "Salut, $nom \n";
}

function promptContinue(?string $phrase = "Voulez vous continuer ?"):bool {
    while (true) {
        $response = readline("$phrase - (o)ui/(n)on :");
        if ($response === "o") {
            return true;
        } elseif ($response === "n") {
            return false;
        }
    }
}

function askTimeSlot(?string $string = "Veuillez entrez un créneau"):array {
    echo("$string\n");
    while (true) {
        $openedHour = (int)readline("Heure d'ouverture : ");
        if ($openedHour >= 0 && $openedHour <= 23 && $openedHour != "") {
            break;
        }
    }
    while (true) {
        $closedHour = (int)readline("Heure de fermeture : ");
        if ($closedHour >= 0 && $closedHour <= 23 && $closedHour > $openedHour) {
            break;
        }
    }
    return [$openedHour, $closedHour];
}

function askTimeSlots(?string $prompt = "Veuillez entrez vos créneau(x)"):array {
    $continue = true;
    $result = [];
    while ($continue == true) {
        $result[] = askTimeSlot();
        $continue = promptContinue("Voulez vous entrez un autre créneau horaire ?");
    }
    return $result;
}