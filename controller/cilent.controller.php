<?php

function saveClient(){
    global $clients;
    do {
        $errors = [];
        $nomPrenom = saisie("Entrez le nom et prénom du client : ");
        $tel = saisie("Entrez le téléphone du client : ");
        $address = saisie("Entrez l'adresse du client : ");

        required($nomPrenom, $errors, "Le nom et prénom est obligatoire", "nomPrenom");
        required($tel, $errors, "Le téléphone est obligatoire", "tel");
        unique($clients, $tel, $errors, "Ce numéro de téléphone existe déjà", "tel");

        showError($errors);
    } while (count($errors) != 0);

    $newClient = [
        "nomPrenom" => $nomPrenom,
        "tel" => $tel,
        "address" => $address
    ];

    $clients[] = $newClient;
    var_dump($clients);
}