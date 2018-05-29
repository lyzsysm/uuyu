<?php
namespace Channel\Event;
use Think\Controller;
/**
 * 后台事件控制器
 * @author 王贺 
 */
class UserEvent extends Controller {

  public function user_join($model = null, $p = 0){
        $model || $this->error('模型名标识必须！');
        $page = intval($p);
        $page = $page ? $page : 1; //默认显示第一页数据

        //解析列表规则
        $fields = $model['fields'];
        // 关键字搜索
        $map    =  $model['map']; //array();
        foreach ($key as $key => $value) {
            if(isset($_REQUEST[$value])){
                $map[$value]  =   array('like','%'.$_GET[$value].'%');
                unset($_REQUEST[$value]);
            }
        }
        // 条件搜索
        foreach($_REQUEST as $name=>$val){
            if(in_array($name,$fields)){
                $map[$name] =   $val;
            }
        }

        $row    = empty($model['list_row']) ? 10 : $model['list_row'];

        //读取模型数据列表
        $name = $model['m_name'];
        //$new_model = D($name);
        $data = M($name,"tab_")
            ->field($model['field'])
            ->join($model['join'])
            ->join($model['joins'])
            ->join($model['joinss'])
            // 查询条件
            ->where($model['map'])
            /* 默认通过id逆序排列 */
            ->order($model['order'])
            ->group($model['group'])
            /* 数据分页 */
            ->page($page, $row)
            /* 执行查询 */
            ->select();
        /* 查询记录总数 */
        $count = M($name,"tab_")
            // 查询条件
            ->where($map)->count();
            return $data;
    }
    public function user_joins($model = null, $p = 0){
        $model || $this->error('模型名标识必须！');
        $page = intval($p);
        $page = $page ? $page : 1; //默认显示第一页数据

        //解析列表规则
        $fields = $model['fields'];
        // 关键字搜索
        $map    =  $model['map']; //array();
        foreach ($key as $key => $value) {
            if(isset($_REQUEST[$value])){
                $map[$value]  =   array('like','%'.$_GET[$value].'%');
                unset($_REQUEST[$value]);
            }
        }
        // 条件搜索
        foreach($_REQUEST as $name=>$val){
            if(in_array($name,$fields)){
                $map[$name] =   $val;
            }
        }

        $row    = empty($model['list_row']) ? 10 : $model['list_row'];

        //读取模型数据列表
        $name = $model['m_name'];
        //$new_model = D($name);
        $data = M($name,"tab_")
            ->field($model['field'])
            ->join($model['join'],'left')
            ->join($model['joins'])
            ->join($model['joinss'])
            // 查询条件
            ->where($model['map'])
            /* 默认通过id逆序排列 */
            ->order($model['order'])
            ->group($model['group'])
            /* 数据分页 */
            ->page($page, $row)
            /* 执行查询 */
            ->select();
            if(isset($model['icon'])){
            foreach ($data as $key => $value) {
                $data[$key]['icon']="http://".$_SERVER["HTTP_HOST"].get_cover($value["icon"],"path");
            }
            }
            
        /* 查询记录总数 */
        $count = M($name,"tab_")
            // 查询条件
            ->where($map)->count();
            return $data;
    }
    

  
    /**
    *用户详细信息
    */
    public function user_entity($user_id){
        $model = M("User","tab_");
        $map['id'] = $user_id;
        $map['anti_addiction'] = 0;
        $map['lock_status'] = 1;
        $data = $model->where($map)->find();
        if(empty($data)){
            return false;
        }
        return $data;
    }

    public function is_exist($account){
        $model = M("User","tab_");
        $map['account'] = $account;
        $data = $model->where($map)->find();
        if(empty($data)){
            return true;
        }
        return false;
    }
}
