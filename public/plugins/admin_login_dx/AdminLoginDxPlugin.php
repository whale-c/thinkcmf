<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2017 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: QinHua <309167611@qq.com>
// +----------------------------------------------------------------------
namespace plugins\admin_login_dx;

use cmf\lib\Plugin;

class AdminLoginDxPlugin extends Plugin
{

    public $info = [
        'name' => 'AdminLoginDx',
        'title' => '动态粒子特效登陆插件',
        'description' => '动态粒子特效登录页',
        'status' => 1,
        'author' => 'QinHua',
        'version' => '1.0'
    ];

    public $hasAdmin = 0;//插件是否有后台管理界面

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

    public function adminLogin()
    {
        $config = $this->getConfig();
        $this->assign($config);
        return $this->fetch('widget');
    }

}