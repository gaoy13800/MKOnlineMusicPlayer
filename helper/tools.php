<?php

function vendor($file) {
    require_once(PLUGNS_PATH .  $file);
}

function strFilter($str){

    $str = str_replace('`', '', $str);

    $str = str_replace('·', '', $str);

    $str = str_replace('~', '', $str);

    $str = str_replace('!', '', $str);

    $str = str_replace('！', '', $str);

    $str = str_replace('@', '', $str);

    $str = str_replace('#', '', $str);

    $str = str_replace('$', '', $str);

    $str = str_replace('￥', '', $str);

    $str = str_replace('%', '', $str);

    $str = str_replace('^', '', $str);

    $str = str_replace('……', '', $str);

    $str = str_replace('&', '', $str);

    $str = str_replace('*', '', $str);

    $str = str_replace('(', '', $str);

    $str = str_replace(')', '', $str);

    $str = str_replace('（', '', $str);

    $str = str_replace('）', '', $str);

    $str = str_replace('-', '', $str);

    $str = str_replace('_', '', $str);

    $str = str_replace('——', '', $str);

    $str = str_replace('+', '', $str);

    $str = str_replace('=', '', $str);

    $str = str_replace('|', '', $str);

    $str = str_replace('\\', '', $str);

    $str = str_replace('[', '', $str);

    $str = str_replace(']', '', $str);

    $str = str_replace('【', '', $str);

    $str = str_replace('】', '', $str);

    $str = str_replace('{', '', $str);

    $str = str_replace('}', '', $str);

    $str = str_replace(';', '', $str);

    $str = str_replace('；', '', $str);

    $str = str_replace(':', '', $str);

    $str = str_replace('：', '', $str);

    $str = str_replace('\'', '', $str);

    $str = str_replace('"', '', $str);

    $str = str_replace('“', '', $str);

    $str = str_replace('”', '', $str);

    $str = str_replace(',', '', $str);

    $str = str_replace('，', '', $str);

    $str = str_replace('<', '', $str);

    $str = str_replace('>', '', $str);

    $str = str_replace('《', '', $str);

    $str = str_replace('》', '', $str);

    $str = str_replace('.', '', $str);

    $str = str_replace('。', '', $str);

    $str = str_replace('/', '', $str);

    $str = str_replace('、', '', $str);

    $str = str_replace('?', '', $str);

    $str = str_replace('？', '', $str);

    return trim($str);

}