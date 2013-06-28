<?php

function calculator($first_number, $second_number, $operation) {
    if ("add" == $operation) {
        return $result = $first_number + $second_number;
    } elseif ("sub" == $operation) {
        return $result = $first_number - $second_number;
    } elseif ("mul" == $operation) {
        return $result = $first_number * $second_number;
    } elseif ("div" == $operation) {
        return $result = $first_number / $second_number;
    }
}

echo calculator(88, 7, sub);
?>
