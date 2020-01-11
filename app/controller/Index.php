<?php
namespace app\controller;

use app\BaseController;
use think\facade\View;
class Index extends BaseController
{
    public function index()
    {
        View::assign([
            'title'  => '乐API官方文档-leapi.le520.cn',
            'name' => 'LEAPI',
            'describe' => '乐API 一个免费不限制提供有趣内容的平台。',
            'notice' => '须知：乐API会记录你的来源信息和调用记录，在检测到异常时有权利禁用您的网站。'
        ]);
        return View::fetch('index');
    }
}
