<div class="recomendBox">

    <?php
        $title = "Вам будет интересно";
        include "title.php";

        if ($BWI >= 25) {
            include "recomendObesity.php";
        } else {
            include "recomendDystrophy.php";
        }
    ?>

</div>
