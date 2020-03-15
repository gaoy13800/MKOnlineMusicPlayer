<?php
require_once __DIR__ . '/../autoloader.php';

use phpspider\core\requests;

class otherSong{

    protected $_type;

    public function download($name, $type, $s_type){

        $this->_type  = $type;


        switch ($s_type){
            case 'k':

                //全民K歌解析
                $result = $this->QuanMinHandler($name);

                break;
            case 'bar':
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
//
//        $val = str_replace("\n",'',$html);

        preg_match('/play_name">(.*?)</', $html, $nameInfo);

        $data['name'] = strFilter($nameInfo[1]) ?? '全民K歌';

        preg_match('/"nick":"(.*?)"/', $html, $artistInfo);

        $data['artist'] = $artistInfo[1] ?? '全民K歌';

        if ($this->_type == 'song'){

            $data['album'] = '全民K歌/歌曲';

            preg_match('/playurl":"(.*?)"/', $html, $info);

            if (!empty($info)){
                $data['url'] = $info[1];
                return $data;
            }

            return false;
        } else{

            $data['album'] = '全民K歌/视频';

            preg_match('/playurl_video":"(.*?)"/', $html, $info);

            if (!empty($info)){
                $data['url'] = $info[1];
                return $data;
            }

            return false;
        }
    }

    private function SongBarHandler($name){
        $html = requests::get($name);


//        result = re.findall('var.a="(http.*)",',text)

        preg_match('/content="(.*?)QQ微博/', $html, $person);

        var_dump($person);exit;

        preg_match('/var a="(.*?)"/', $html, $info);

        if (!empty($info)){
            $data['url'] = $info[1];
            return $data;
        }


        if (empty($info[1][0])){
            return false;
        }

        return $info[1][0] . '.mp3';
    }
}

