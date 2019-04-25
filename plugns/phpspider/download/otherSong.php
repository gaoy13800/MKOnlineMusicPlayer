<?php
require_once __DIR__ . '/../autoloader.php';

use phpspider\core\requests;

class otherSong{
    public function download($name, $type){

        switch ($type){
            case 'ksong':

                //全民K歌解析
                $result = $this->QuanMinHandler($name);

                break;
            case 'songbar':
                //唱吧解析
                $result = $this->SongBarHandler($name);
                break;
            default:
                break;
        }

        return empty($result) ? false : $result;
    }


    private function QuanMinHandler($name){

        $html = requests::get($name);

        $val = str_replace("\n",'',$html);

        preg_match_all('/\"playurl\"\:\"(.*)m4a/',$val,$info);

        if (empty($info[1][0])) return false;

        return $info[1][0] . "m4a";
    }

    private function SongBarHandler($name){
        $html = requests::get($name);

//        result = re.findall('var.a="(http.*)",',text)

        preg_match_all('/var a="(http.*)\.mp3\"\,/',$html,$info);


        if (empty($info[1][0])){
            return false;
        }

        return $info[1][0] . '.mp3';
    }
}

