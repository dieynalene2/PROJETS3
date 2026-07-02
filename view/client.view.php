<?php
function listerClients(array $clients): void {
    foreach ($clients as $client) {
        echo "Nom: {$client['nomPrenom']} | Tel: {$client['tel']} | Adresse: {$client['address']}\n";
    }
}