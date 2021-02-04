<?php

function add_item(&$array, $item)
{
    $array[] = $item;
}

function element($element, $innerhtml = '', $attributes = '')
{
    return "<{$element}" . ($attributes ? ' ' . $attributes : '') . ">" . $innerhtml . "</{$element}>";
}


function convert_weight($value, $unit = 'kg')
{
    switch ($unit) {
        default:
        case 'kg':
            return 2.20462262 * $value;
            break;
        case 'lb':
            return $value / 2.20462262;
            break;
    }
}