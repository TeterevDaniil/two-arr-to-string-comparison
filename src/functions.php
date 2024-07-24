<?php

function task1(array $arr, array $arr2)
{
    $result = 'no';
    if (implode("", $arr) == implode("", $arr2)) {
        $result = 'yes';
    }
    return $result;
};
