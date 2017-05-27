<?php

namespace app\manage\model;

use app\common\model\BackUser as BaseBackUser;

use app\common\model\AuthAssignment;
use app\common\model\AuthItem;
use app\manage\model\Ban;
use app\manage\model\Department;
use app\manage\model\BackUserLog;
use app\manage\model\Contact;
use app\manage\model\ContactRead;
use app\manage\model\CustomerService;
use app\manage\model\DeleteLog;
use app\manage\model\Download;
use app\manage\model\GuestServer;
use app\manage\model\Hot;
use app\manage\model\HouseHostServer;
use app\manage\model\Notice;
use app\manage\model\NoticeRead;
use app\manage\model\Opinion;
use app\manage\model\OpinionRead;
use app\manage\model\Slider;
use app\manage\model\TakeOrder;
use app\manage\model\Upload;


/**
 * This is the model class for table "{{%back_user}}".
 *
 * @property integer $id
 * @property integer $is_delete
 * @property string $code
 * @property integer $department_id
 * @property string $phone
 * @property integer $phone_verified
 * @property string $email
 * @property integer $email_verified
 * @property string $username
 * @property string $password
 * @property string $nickname
 * @property string $real_name
 * @property string $head_url
 * @property string $sex
 * @property string $signature
 * @property string $birthday
 * @property integer $height
 * @property integer $weight
 * @property string $token
 * @property string $auth_key
 * @property string $password_reset_token
 * @property string $password_reset_code
 * @property integer $status
 * @property string $ip
 * @property string $reg_ip
 * @property string $reg_type
 * @property string $registered_at
 * @property string $logined_at
 * @property string $updated_at
 *
 * @property AuthAssignment[] $AuthAssignments
 * @property AuthItem[] $itemNames
 * @property Ban[] $Bans
 * @property AuthItem[] $itemNames0
 * @property Department $department
 * @property BackUserLog[] $backUserLogs
 * @property Contact[] $contacts
 * @property ContactRead[] $contactReads
 * @property CustomerService[] $customerServices
 * @property DeleteLog[] $deleteLogs
 * @property Download[] $downloads
 * @property GuestServer[] $guestServers
 * @property Hot[] $hots
 * @property HouseHostServer[] $houseHostServers
 * @property Notice[] $notices
 * @property NoticeRead[] $noticeReads
 * @property Opinion[] $opinions
 * @property OpinionRead[] $opinionReads
 * @property Slider[] $sliders
 * @property TakeOrder[] $takeOrders
 * @property Upload[] $uploads
 */
class BackUser extends BaseBackUser
{

}