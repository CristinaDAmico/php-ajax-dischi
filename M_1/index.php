<?php
require_once __DIR__ . '/partials/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi</title>
    <!-- STYLE -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <header>
        <div class="container">
            <img src="./img/logo.png" alt="logo">
        </div>
    </header>

    <main>
        <div class="albums container">

            <?php foreach ( $database as $data ) {
                //var_dump($data); ?>

                <div class="album">
                    <img src="<?php echo $data['poster']; ?>" alt="">
                    <h4><?php echo $data['title']; ?></h4>
                    <h5><?php echo $data['author']; ?></h5>
                    <h4><?php echo $data['year']; ?></h4>
                    <h5><?php echo $data['genre']; ?></h5>
                </div>
                    
            <?php } ?>

        </div>
    </main>
 
</body>
</html>