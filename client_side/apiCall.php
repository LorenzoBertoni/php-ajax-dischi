<?php
    include __DIR__ . '/../database.php';

    header('Content-Type: application/json');

    if(isset($_GET['genre'])) {
        $genre = $_GET['genre'];
        $filteredDiscs = [];
        foreach($database as $disc) {
            if ($disc['genre'] == $genre) {
                $disc['isFiltered'] = true;
            }
            if ($disc['isFiltered']) {
                array_push($filteredDiscs, $disc);
            }
        }
        echo json_encode($filteredDiscs);
    } else {
        echo json_encode($database);
    }
