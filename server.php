<?php
    include __DIR__ . '/database.php';

    header('Content-Type: application/json');

    if ( isset($_GET['genere']) && $_GET['genere'] != "" ) {

        $databaseFiltrato = [];

        foreach ($database as $riga) {

            if ( strtolower($riga['genre']) == strtolower($_GET['genere']) ) {

                $databaseFiltrato[] = $riga;

            } 

        }

        echo json_encode($databaseFiltrato);

    } else {

        echo json_encode($database);
    }


?>