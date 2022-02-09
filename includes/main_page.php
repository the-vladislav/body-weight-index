<form action="script.php" method="post">

    <?php include "title.php" ?>

    <div class="partRegBox">
        <label for="height">Рост, см:</label>
        <input type="text" name="height" id="height"/>
    </div>

    <div class="partRegBox">
        <label for="weight">Вес, кг:</label>
        <input type="text" name="weight" id="weight"/>
    </div>

    <div class="submitBox">
        <input type="submit" value="Расчитать ИМТ"/>
    </div>

</form>
