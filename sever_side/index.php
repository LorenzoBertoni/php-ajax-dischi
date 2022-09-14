<?php
    include __DIR__ . '/../database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <a href="#" class="logo">
            <img src="https://grafica-facile.com/wp-content/uploads/2022/01/spotify-logo.png" alt="Spotify Logo">
        </a>
    </header>

    <main>
        <div class="cards">
            <?php 
                foreach($database as $disc) {
                    $discTitle = $disc['title'];
                    $discAuthor = $disc['author'];
                    $discYear = $disc['year'];
                    $discImg = $disc['poster'];
                    $discGenre = $disc['genre'];
                    //variabili data;
                    echo    "<div class='card'>
                                <div class='card-img'>
                                    <img src='$discImg' alt='$discTitle'>
                                </div>
                                <div class='card-title'>
                                    <h3>$discTitle</h3>
                                </div>
                                <div class='card-text'>
                                    <div class='author'>
                                        $discAuthor
                                    </div>
                                    <div class='release'>
                                        $discYear
                                    </div>
                                </div>
                            </div>";
                };
            ?>
    </main>
</body>
</html>