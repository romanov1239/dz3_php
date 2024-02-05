<?php

//Имя пользователя не должно быть пустым, не должно быть слишком длинным
function validateName ($name)

{
    $name = trim($name);

    if (empty($name) || strlen ($name) > 10) {
        return false;
    }
    return true;
}

function validateDate(string $date): bool {
    $dateBlocks = explode("-", $date);

    if(count($dateBlocks) < 3){
        return false;
    }

    if(isset($dateBlocks[0]) && $dateBlocks[0] > 31) {
        return false;
    }

    if(isset($dateBlocks[1]) && $dateBlocks[1] > 12) {
        return false;
    }

    if(isset($dateBlocks[2]) && ($dateBlocks[2] > date('Y') || $dateBlocks[2] < 1850)) {
        return false;
    }

    return true;
}

