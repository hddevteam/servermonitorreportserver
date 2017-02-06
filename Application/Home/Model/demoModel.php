<?php
/**
 * Created by PhpStorm.
 * User: hongguang xie
 * Date: 2017/1/17
 * Time: 10:12
 */
/*
*按今天，本周，本月，本季度，本年，全部查询预约单数据
* $day 代表查询条件 $cid 代表 公司id
*返回array $data 查询条件 数组
*/
namespace home\Model;


class demoModel extends BaseModel
{

    //获取查询条件（今天、本周、本月、本季度、本年、全部查询）
    //使用数组作为查询条件
    public function find_createtime($day){
        //查询当天数据
        if($day==1){
            $today=strtotime(date('Y-m-d 00:00:00'));
            //$data['cid']=$cid;
            $data['errorTime'] = array('egt',$today);
            return $data;
        //查询本周数据
        }else if($day==2){
            $arr=array();
            $arr=getdate();
            $num=$arr['wday'];
            $start=time()-($num-1)*24*60*60;
            $end=time()+(7-$num)*24*60*60;
            //$data['cid']=$cid;
            $data['errorTime'] = array('between',array($start,$end));
            return $data;
        //查询本月数据
        }else if($day==3){
            $start=strtotime(date('Y-m-01 00:00:00'));
            $end = strtotime(date('Y-m-d H:i:s'));
            //$data['cid']=$cid;
            $data['errorTime'] = array('between',array($start,$end));
            return $data;
        //查询本季度数据
        }else if($day==4){
            $month=date('m');
            if($month==1 || $month==2 ||$month==3){
                $start=strtotime(date('Y-01-01 00:00:00'));
                $end=strtotime(date("Y-03-31 23:59:59"));
            }elseif($month==4 || $month==5 ||$month==6){
                $start=strtotime(date('Y-04-01 00:00:00'));
                $end=strtotime(date("Y-06-30 23:59:59"));
            }elseif($month==7 || $month==8 ||$month==9){
                $start=strtotime(date('Y-07-01 00:00:00'));
                $end=strtotime(date("Y-09-30 23:59:59"));
            }else{
                $start=strtotime(date('Y-10-01 00:00:00'));
                $end=strtotime(date("Y-12-31 23:59:59"));
            }
            //$data['cid']=$cid;
            $data['errorTime'] = array('between',array($start,$end));
            return $data;
        //查询本年度数据
        }else if($day==7)
        {
            $weekDay=date('w');
            if($weekDay==0)
                $weekDay=7;


        }else if($day==5){
            $year=strtotime(date('Y-01-01 00:00:00'));
            //$data['cid']=$cid;
            $data['errorTime'] = array('egt',$year);
            return $data;
        //全部数据
        }else{
            $data['cid']=1;
            return $data;
        }
    }

    public function getList()
    {
        $Shop=M('site');

        $data=find_createtime(5,7);

        $list=$Shop->where($data)->select();

        $this->list=$list;

        $this->display();
    }
}