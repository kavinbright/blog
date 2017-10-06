<?php
namespace Common\Model;

use Think\Model;

class EmailModel extends BaseModel
{
    public function getDailyCount(){
        $createTime = date("Y-m-d");
        $condition["created_time"] = array('like',$createTime."%");
        $result = EmailModel::where()->where($condition)->count();
        return $result;
    }
}