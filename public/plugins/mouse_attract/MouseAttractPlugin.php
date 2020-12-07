<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2018 https://www.wzxaini9.cn/ All rights reserved.
// +----------------------------------------------------------------------
// | Author: Powerless <wzxaini9@gmail.com>
// +----------------------------------------------------------------------

namespace plugins\mouse_attract;

use cmf\lib\Plugin;

class MouseAttractPlugin extends Plugin
{

    public $info = [
        'name'        =>'MouseAttract',
        'title'       =>'鼠标吸附效果',
        'description' =>'鼠标吸附效果',
        'status'      =>1,
        'author'      => 'Cjh',
        'version'     => '1.0.1',
        'demo_url'    => 'https://www.whale.com/',
        'author_url'  => 'https://www.whale.com/'
    ];

    // 插件安装
    public function install()
    {
        return true;//安装成功返回true，失败false
    }

    // 插件卸载
    public function uninstall()
    {
        return true;//卸载成功返回true，失败false
    }

    //实现的footer钩子方法
    public function footerStart($param)
    {
        $config = $this->getConfig();
        $this->assign($config);
        echo $this->fetch('widget');
    }

}