<?php
// +----------------------------------------------------------------------
// | OneThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.onethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 麦当苗儿 <zuojiazi@vip.qq.com> <http://www.zjzit.cn>
// +----------------------------------------------------------------------

namespace Home\Model;

/**
 * 分类模型
 */
class SiteGiftModel extends SiteModel{

    protected $_validate = array(
    );

    protected $_auto = array(
        array('create_time', NOW_TIME, self::MODEL_INSERT),
        array('promote_id', PID, self::MODEL_BOTH),
        array('start_time', 'strtotime', self::MODEL_BOTH, 'function'),
        array('end_time', 'strtotime', self::MODEL_BOTH, 'function'),
    );

    /**
     * @param int $promote_id
     * @return mixed
     */
    public function get_promote_data($promote_id=PID){
        $map['promote_id'] = $promote_id;
        $map['status'] = 1;
        $data = $this->where($map)->select();
        return $data;
    }

    public function saveData($data = "")
    {
        $data = I('post.');
        $data['novice'] = str_replace(array("\r\n", "\r", "\n"), ",", $data['novice']);
        $novice = explode(',',$data['novice']);
        $count = count($novice);
        if(empty(array_pop($novice))){
            $count--;
        }
        $data['novice_num'] = $count;
        $data['game_name'] = get_site_game_name($data['site_game_id']);
        return parent::saveData($data); // TODO: Change the autogenerated stub
    }

}