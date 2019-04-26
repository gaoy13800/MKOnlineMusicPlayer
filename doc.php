<?php

use plugns\Parsedown;
use config\Enum;

include_once __DIR__ . '/autoloader.php';
include_once __DIR__ . '/plugns/Parsedown.php';
include_once __DIR__ . '/config/Enum.php';

$source = getParam('source', 'home');


$doc = new doc();

$doc->out($source);




class doc {
    public function out($source){

        $parse = new Parsedown();


        $filePath = "";

        switch ($source){
            case Enum::DOC_DouYin:
                $filePath = "";
                break;
            case Enum::DOC_GifS:
                $filePath = "";
                break;
            default:
                $filePath = "docs/home.md";

        }

        echo $parse->text(file_get_contents($filePath));
        exit;
    }
}




function getParam($key, $default='')
{
    return trim($key && is_string($key) ? (isset($_POST[$key]) ? $_POST[$key] : (isset($_GET[$key]) ? $_GET[$key] : $default)) : $default);
}