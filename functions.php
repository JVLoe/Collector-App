<?php

function showKeyAndValue($array)
{
    foreach ($array as $key => $value) {
        echo "<p>$key: $value</p>";
    }
}