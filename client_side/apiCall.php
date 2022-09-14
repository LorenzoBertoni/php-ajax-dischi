<?php
    include __DIR__ . '/../database.php';
    header('Content-Type: application/json');
    if(isset($_GET['genre'])) {
        $genre = $_GET['genre'];
        foreach($database as $disc) {
            if ($disc['genre'] == $genre) {
                $disc['isFiltered'] = true;
            }
            if ($disc['isFiltered']) {
                $database = $disc;
            }
        }
        echo json_encode($database);
    } else {
        echo json_encode($database);
    }
