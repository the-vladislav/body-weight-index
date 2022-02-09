<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
        <link rel="stylesheet" href="./css/script_style.css">
    </head>
    <body>
        <div class="mainBox">

            <div class="regBox">

                <?php include "title.php"; ?>

                <div class="partRegBox">
                    <div>Рост:</div><div><?php echo $height ?></div>
                </div>

                <div class="partRegBox">
                    <div>Вес:</div><div><?php echo $weight ?></div>
                </div>

                <div class="partRegBox">
                    <div>ИМТ:</div><div><?php echo $BWI ?></div>
                </div>

                <div class="partRegBox">
                    <div>Рекомендации:</div><div><?php echo $recomendations ?></div>
                </div>

            </div>

            <?php
                if ( ($BWI >= 25) || ($BWI < 18.5) ) {
                    include "recomendations.php";
                }
            ?>

        </div>
        <?php //echo "$login $password $returnPassword $email" ?>
    </body>
</html>
