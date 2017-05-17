<?php

namespace app\home\controller;

use app\home\controller\ManageController;

/**
 * 默认控制器
 * @author Sir Fu
 */
class IndexController extends ManageController
{
    /**
     * 默认方法
     * @author Sir Fu
     */
    public function indexAction()
    {
        return view('index');
    }

    /**
     * 默认方法
     * @author Sir Fu
     */
    public function homeAction()
    {
        return view('indexOld');
    }

}
