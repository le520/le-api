<?php


namespace app\controller;

use app\BaseController;
class GitTips extends BaseController
{
    public function index(){
        $file_name = "static/data/gitTipsData.txt";
        $fp = fopen($file_name, 'r');
        $num = 0;
        $data = array();
        while (!feof($fp)) {
            $data[$num] = trim(fgets($fp));
            $num++;
        }
        fclose($fp);
        $num = mt_rand(0, $num - 1);
        $reData['status'] = "success";
        $reData['data'] = $data[$num];
        return json_encode($reData, JSON_UNESCAPED_UNICODE);
    }
}