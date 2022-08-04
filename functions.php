<?php

function showKeyAndValue($array): string
{
    $str = '';
    foreach ($array as $key => $value) {
        $str .= "<p>$key: $value</p>";
    }
    return $str;
}