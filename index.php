<?php 
    require __DIR__. '/database.php';
?>

<!-- inizio html  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    
    <title> Dischi</title>
</head>
<body>
    <header>
        <div id="logo">
            <h1> Dischi</h1>
        </div>
    </header>
    
    <main>
        <div class="container">
            <?php 
                foreach ($database as $dischi) {
                    echo '<div class="album">';
                    echo '<img src="' . $dischi['poster'] . '">';
                    echo '<h2>' . $dischi['title'] . '</h2>';
                    echo '<div class="info">' . 
                            '<span>' . $dischi['author'] . '</span>' .
                            '<span>' . $dischi['year'] . '</span>' .
                         '</div>';
                    echo '</div>';
                }
            ?>
        </div>
    </main>
</body>
</html>
