<?php
namespace Home\Controller;
use home\Model\demoModel;
use Think\Controller;

class IndexController extends Controller
{

    //默认方法，显示页面
    public function index()
    {
        //实例化server_site数据表，进行操作
        $site=M("site");
        $queryDay=7;
        //获取信息列表 table
        $detailInfo=D("Site")->getSiteList($site,$queryDay);
        //将结果集赋值给页面volist标签变量
        $this->assign('siteList',$detailInfo);

        //获取设备数量
        $devicesNum=D("Site")->getDeviceCount($site);
        $this->assign('devicesNum',$devicesNum);

        //获取服务器数量
        $serverNum=D("Site")->getServerCount($site);
        $this->assign('servers',$serverNum);

        //获取信息数量
        $eventsNum=D("Site")->getEventCount($site);
        $this->assign('events',$eventsNum);
        /*$eventsNum=D("Site")->getSiteListCount($site);
        $this->assign('events',$eventsNum);*/


        //渲染页面
        $this->display();
        //dump($eventsNum);
    }

    public function demo()
    {
      /*  $hello=A('demoModel') ;
        $queryDays=100;
        $site=M("site");
        $devicesNum=D('demoModel')->find_createtime(1);*/
        dump(date('w'));
    }

    public function getDataForBarChart()
    {
        //读取ajax参数
        $querydays=I("post.queryDays");
        $site=M("site");
        $natureDateInfo=D("Site")->getErrorForBarChart($site,$querydays);
        $this->ajaxReturn($natureDateInfo,'json');
    }
    public function getDataForLineChart()
    {
        //读取ajax参数
        $querydays=I("post.queryDays");
        $site=M("site");
        $natureDateInfo=D("Site")->getDataForLineChart($site,$querydays);
        //dump($natureDateInfo);
        $this->ajaxReturn($natureDateInfo,'json');
    }
    public function getDataForPieChart()
    {
        //读取ajax参数
        $querydays=I("post.queryDays");
        $total=0;
        $sist=M("site");
        $arr=[];
        $natureDateInfo =D("Site")->getErrorForBarChart($sist,$querydays);
        foreach($natureDateInfo as $item)
        {
            $total+=$item["times"];

            $i=0;
            foreach($natureDateInfo as $item)
            {
                $arr[$i++]=array("sitename"=>$item["sitename"],"times"=>$item["times"]/$total);
            }
        }
        /*$myfile = fopen("file.txt", "a+") or die("Unable to open file!");
        fwrite($myfile, $arr[1]);
        fclose($myfile);*/
       // dump($arr);
        $this->ajaxReturn($arr,'json');
    }
    //检查数据是否已经存在
    public function check($time,$id)
    {
        $site=M("site");
        $data=$site->where("siteId=%s and errorTime='%d'",$id,$time)->select();
      /*$myfile = fopen("file.txt", "a+") or die("Unable to open file!");
        fwrite($myfile, "check");
        fclose($myfile);*/
        // echo $data;
        if($data)
            return true;
        else
            return false;
    }
    //从客户端获取数据，并插入数据库，返回状态值
    public function getDataFromAndroid()
    {
        //读取客户端json数据
        $body = file_get_contents('php://input');
        $postvars = json_decode($body, true);
        //获取访问服务器的ip地址（若使用代理，则为代理ip）
        $ip = get_client_ip();
        //插入错入时，该条数据的errorTime
        $insertError="";
        //返回给客户端的状态信息
        $status="";
/*
       $myfile = fopen("file.txt", "a+") or die("Unable to open file!");
        if($postvars==""||$postvars==null)
            $txt="POST___NULL";
        else
            $txt=$postvars;
        fwrite($myfile, $txt);
        $txt = ",dfgdsfgdsfg";
        fwrite($myfile, $txt);
        fclose($myfile);*/
        //$this->ajaxReturn(,'JSON');

        foreach ($postvars["ErrorInfos"] as $item)
        {
            $Site=M('site');
            //读取json数据，并赋值给数据库变量
            $data['ip']= $ip;
            $data['siteId']=$item["siteId"];
            $data['siteAddress']=$item["siteAddress"];
            $data['statusCode']=$item["statusCode"];
            $data['errorTime']=$item["errorTime"];
            $data['requestTime']=$item["requestTime"];
            $data['errorDetails']=$item["errorDetails"];
            $data['serverPort']=$item["serverPort"];
            $data['siteName']=$item["siteName"];
            $data['isServer']=$item["isServer"];
           //  $data['deviceModel']=$item["deviceModel"];
            $data['insertTime']= date('Y-m-d H:i:s');

            //$Site->add($data);
            //判断该条数据是否存在
            if($this->check($data['errorTime'],$data['siteId'])==false)
            {
                //插入数据库
                $dbReturn=$Site->add($data) ;//返回数据ID;
            }
            else
            {
                //该条数据已经存在，继续下一条数据
                $status='EXISTS';
                continue;
            }
            //判断是否插入成功
            if(intval($dbReturn))
            {
                //插入成功
                continue;
            }
            else
            {
                //插入失败
                $insertError= $data['errorTime'];
                $status='ERROR';
            }
        }
        //返回客户端信息
        if($status=='ERROR')
        {
            //插入失败
            $returnInfo['time'] = $insertError;
            $returnInfo['status'] ='FAILED';
        }
        elseif( $status=='EXISTS')
        {
            //所有数据均存在
            $returnInfo['status'] =$status;
        }
        else
        {
            //插入成功
            $returnInfo['status'] ='SUCCESS';
            $returnInfo['time'] ="";
        }
       // $returnInfo['time']=$body;
        //返回
        $this->ajaxReturn($returnInfo,'JSON');

    }
/*    public function siteInfo()
    {
        $Site=M('site');
        $arr = array(
            "name" => "manson",
            "age" => 23,
            "sex" => 1
        );
        $this->assign('value','world');
        $json_str = json_encode($arr);
        // var_dump($json_str);
        $this->display();
        //如果我们使用了模板主题功能，那么也可以支持跨主题调用
        //$this->theme('blue')->display(); blue为View目录下的模板文件夹
    }
    public function addData()
    {
        $User = M("User"); // 实例化User对象
        $data['username']="xhg";
        $data['age']=5;
        $mark=$User->add($data);
        if($mark)
            echo "数据添加成功";
        else
            echo "数据添加失败";
    }
    public function updataData()
    {
        $User = M("User"); // 实例化User对象
        $data[username]='xie';
        $data['age']=12;
        $mark=$User->where('age=451')->save($data);
        if($mark)
            echo "SUCCESS";
        else
            echo "FAILED";
    }
    public function deleteData()
    {
        $User=M('User');
        $mark=$User->where('age=5')->delete();
        if($mark)
            echo "SUCCESS";
        else
            echo "FAILED";


    }*/
}
