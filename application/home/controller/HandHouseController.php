<?php

namespace app\home\controller;

use app\common\controller\HomeController;
use app\common\model\Slider;
use app\common\model\HomeUser;
use app\common\model\HandHouse;
use app\common\model\News;

/**
 * 默认控制器
 * @author Sir Fu
 */
class HandHouseController extends HomeController
{
    //广告类别
    private $sliderType = 4;
    // 资讯类别
    private $newsType = 4;

    protected function _initialize()
    {
        parent::_initialize(); // TODO: Change the autogenerated stub
        $this->assign('nav','hand-house');
    }

    /**
     * 默认方法
     * @author Sir Fu
     */
    public function indexAction()
    {
        $list = [];
        $where = ['type'=>$this->sliderType];
        $slider = Slider::getSlider($where);
        foreach ($slider as $item){
            $list[] = [
                'title'=>$item['title'],
                'desc'=>$item['description'],
                'target'=>$item['target'],
                'url'=>$item['url'],
            ];
        }
        if (empty($list)){
            $where = array_merge($where,['isDefault'=>'1']);
            $slider = Slider::getSlider($where,null,true);
            foreach ($slider as $item){
                $list[] = [
                    'title'=>$item['title'],
                    'desc'=>$item['description'],
                    'target'=>$item['target'],
                    'url'=>$item['url'],
                ];
            }
        }
        if (empty($list)){
            $list[] = [
                'title'=>'',
                'desc'=>'',
                'target'=>'',
                'url'=>Slider::T('default',$this->sliderType),
            ];
        }
        $slider = json_encode($list);

        //二手房
        $houseModel = HandHouse::load();
        $house = $houseModel->where([])->select();

        // 资讯
        $newsModel = News::load();
        $news = $newsModel->where(['type'=>$this->newsType])->select();

        return view('hand_house/index',[
            'meta_title'=>'二手房',
            'slider'=>$slider,
            'house'=>$house,
            'news'=>$news,
        ]);
    }

    /**
     * 默认方法
     * @author Sir Fu
     */
    public function searchAction()
    {

        //二手房
        $model = HandHouse::load();
        $house = $model->where([])->select();

        return view('hand_house/search',[
            'meta_title'=>'查找二手房',
            'house'=>$house,
            'model'=>$model,
        ]);
    }

}
