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

                <?php foreach ($errorValues as $key => $value):?>
                    <div class="partRegBox">
                        <div><?php echo "$key:"?></div><div><?php echo "$value" ?></div>
                    </div>
                <?php endforeach;?>

            </div>

        </div>
    </body>
</html>
