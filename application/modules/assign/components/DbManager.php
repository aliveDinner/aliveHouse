<?php

namespace backend\modules\assign\components;

/**
 * DbManager represents an authorization manager that stores authorization information in database.
 *
 * The database connection is specified by [[$db]]. The database schema could be initialized by applying migration:
 *
 * ~~~
 * yii migrate --migrationPath=@yii/rbac/migrations/
 * ~~~
 *
 * If you don't want to use migration and need SQL instead, files for all databases are in migrations directory.
 *
 * You may change the names of the three tables used to store the authorization data by setting [[\yii\rbac\DbManager::$itemTable]],
 * [[\yii\rbac\DbManager::$itemChildTable]] and [[\yii\rbac\DbManager::$assignmentTable]].
 *
 */
class DbManager extends \yii\rbac\DbManager
{

    /**
     * Memory cache of assignments
     * @var array
     */
    private $_assignments = [];
    private $_childrenList;
    private $_roleName;

    /**
     * @inheritdoc
     */
    public function getAssignments($userId)
    {
        if (!isset($this->_assignments[$userId])) {
            $this->_assignments[$userId] = parent::getAssignments($userId);
        }
        return $this->_assignments[$userId];
    }

    /**
     * @inheritdoc
     */
    public function getRoleName($userId)
    {
        if (!isset($this->_assignments[$userId])) {
            $this->_assignments[$userId] = parent::getAssignments($userId);
        }
        foreach ($this->_assignments[$userId] as $key=>$value){
            if (is_object($value)){
                if (property_exists($value,'roleName')){
                    $this->_roleName = $value->roleName;
                }
            }
        }
        return $this->_roleName;
    }

    /**
     * @inheritdoc
     */
    protected function getChildrenList()
    {
        if ($this->_childrenList === null) {
            $this->_childrenList = parent::getChildrenList();
        }
        return $this->_childrenList;
    }
}