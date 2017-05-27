<?php

namespace app\common\model;

use app\common\model\Model;
use app\common\model\BackUser;

/**
 * This is the model class for table "{{%back_user_log}}".
 *
 * @property integer $id
 * @property integer $back_user_id
 * @property string $route
 * @property string $url
 * @property string $user_agent
 * @property string $gets
 * @property string $posts
 * @property string $target
 * @property string $ip
 * @property string $created_at
 * @property string $updated_at
 *
 * @property BackUser $backUser
 */
class BackUserLog extends Model
{

    /**
     * 数据库表名
     * 加格式‘{{%}}’表示使用表前缀，或者直接完整表名
     * @author Sir Fu
     */
    protected $table = '{{%back_user_log}}';

    // 保存自动完成列表
    protected $auto = [];
    // 新增自动完成列表
    protected $insert = [];
    // 更新自动完成列表
    protected $update = [];

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['back_user_id', 'route', 'url', 'user_agent', 'ip'], 'required'],
            [['back_user_id'], 'integer'],
            [['gets', 'posts', 'target'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['route', 'url', 'user_agent', 'ip'], 'string', 'max' => 255],
            [['back_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => BackUser::tableNameSuffix(), 'targetAttribute' => ['back_user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '自增ID',
            'back_user_id' => '表user主键',
            'route' => '路由',
            'url' => '地址',
            'user_agent' => '客户端',
            'gets' => 'GET方法',
            'posts' => 'POST方法',
            'target' => '目标',
            'ip' => 'IP',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
        ];
    }

    /**
     * @return \think\model\relation\HasOne
     */
    public function getBackUser()
    {
        return $this->hasOne(BackUser::tableNameSuffix(), ['id' => 'back_user_id']);
    }
}