<?php

    $page = "handler";

    function countDiagnosis($index) {

        $diagnosis = "";

        if ($index < 16) {
            $diagnosis = "У вас выраженный дефицит массы тела, вам нужно набрать вес";
        } else if (($index >= 16) && ($index < 18.5)) {
            $diagnosis = "У вас недостаточная (дефицит) масса тела, вам нужно набрать вес";
        } else if (($index >= 18.5) && ($index < 25)) {
            $diagnosis = "Ваш вес в норме";
        } else if (($index >= 25) && ($index < 30)) {
            $diagnosis = "У вас избыточная масса тела (предожирение), вам нужно сбросить вес";
        } else if (($index >= 30) && ($index < 35)) {
            $diagnosis = "У вас ожирение 1 степени, вам нужно сбросить вес";
        } else if (($index >= 35) && ($index < 40)) {
            $diagnosis = "У вас ожирение 2 степени, вам нужно сбросить вес";
        } else {
            $diagnosis = "У вас ожирение 3 степени, вам нужно сбросить вес";
        }

        return $diagnosis;
    }


    $height = $_POST["height"];
    $weight = $_POST["weight"];

    $errorValues = [];
    $correctValues = [];

    if ($height == "") {
        $errorValues["Рост"] = "РОСТ НЕ УКАЗАН";
    } else {
        if ( is_numeric($height) && ( (float)$height > 0 ) ) {
            $correctValues["Рост"] = (float)$height;
        } else {
            $errorValues["Рост"] = "НЕВЕРНЫЕ ДАННЫЕ";
        }
    }

    if ($weight == "") {
        $errorValues["Вес"] = "ВЕС НЕ УКАЗАН";
    } else {
        if ( is_numeric($weight) && ( (float)$weight > 0 ) ) {
            $correctValues["Вес"] = (float)$weight;
        } else {
            $errorValues["Вес"] = "НЕВЕРНЫЕ ДАННЫЕ";
        }
    }

    if ( count($errorValues) > 0 ) {
        $title = "Неверные данные";
    } else {
        $title = "Индекс массы тела";

        $BWI = $weight / ($height / 100) ** 2;
        $correctValues["ИМТ"] = $BWI;

        $recomendations = countDiagnosis($BWI);
        $correctValues["Рекомендации"] = $recomendations;
    }

    include "includes/layout.php";
