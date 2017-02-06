<?php
namespace  home\Model;

use Think\Model\RelationModel;

class SiteModel extends RelationModel
{
    //查找该日期一年的第几周
    public function getweekNumber($date='')
    {
        $datearry = ($date) ? getdate(strtotime($date)) : getdate();
        $year = strtotime($datearry['year'] . '-1-1');
        $startdate = getdate($year);
        $firatweek = 7 - $startdate['wday'];//获得第一周几天
        //今年的第几天
        //$yday = $datearry['yday']+1-$firatweek;//以周日开始计算
        $yday = $datearry['yday'] - $firatweek;//以周一开始计算
        return ceil($yday / 7) + 1;
    }
    //获取自然日期详细数据
    public function getSiteList($site,$queryDays)
    {
        //$queryDays=70;
       /* if($queryDays==1)
            $data=$site->query("SELECT sitename,siteAddress,ip,statusCode, errorTime,truncate(requestTime/1000,3) as requestTime,errorDetails  from server_site  where EXTRACT(DAY from errorTime) =EXTRACT(DAY FROM NOW() ) 	and EXTRACT(YEAR from errorTime) =EXTRACT(YEAR FROM NOW() ) order by errortime desc LIMIT 1000");
        elseif($queryDays==7)
            $data=$site->query("SELECT sitename,siteAddress,ip,statusCode, errorTime,truncate(requestTime/1000,3) as requestTime,errorDetails  from server_site  where  WEEK(errorTime,1) = WEEK(NOW(),1) 	and EXTRACT(YEAR from errorTime) =EXTRACT(YEAR FROM NOW() )order by errortime desc LIMIT 1000");
        else
            $data=$site->query("SELECT sitename,siteAddress,ip,statusCode, errorTime,truncate(requestTime/1000,3) as requestTime,errorDetails  from server_site  where  EXTRACT(YEAR from errorTime) =EXTRACT(YEAR FROM NOW() ) order by errortime desc LIMIT 1000");*/

       //最近1000条数据 truncate(requestTime/1000,3)
        $data=$site->query("SELECT  sitename,siteAddress,ip,statusCode, errorTime,case  WHEN requestTime>1000 THEN CONCAT( truncate(requestTime/1000,0) ,' min')  WHEN requestTime<=1000 THEN CONCAT(  requestTime , ' s') ELSE requestTime END as requestTime,errorDetails  from server_site  order by errortime desc LIMIT 400");

        return $data;
    }
    //获取自然日期数据统计
    public function getErrorForBarChart($site,$queryDays)
    {
        if($queryDays==7)
            $data=$site->query("SELECT lower(siteName) as siteName,errorTime ,COUNT(lower(siteName)) as times  from 	server_site where WEEK(errorTime,1) = WEEK(NOW(),1) and EXTRACT(YEAR from errorTime) =EXTRACT(YEAR FROM NOW() ) GROUP BY lower(siteName)");
        elseif($queryDays==1)
            $data=$site->query("SELECT lower(siteName) as siteName,errorTime ,COUNT(lower(siteName)) as times  from 	server_site where EXTRACT(DAY from errorTime) =EXTRACT(DAY FROM NOW() ) 		and EXTRACT(YEAR from errorTime) =EXTRACT(YEAR FROM NOW() )  GROUP BY lower(siteName) ");
        else
            $data=$site->query("SELECT lower(siteName) as siteName,errorTime ,COUNT(lower(siteName)) as times   from 	server_site where  EXTRACT(MONTH from errorTime) =EXTRACT(MONTH FROM NOW() )and  EXTRACT(YEAR from errorTime) =EXTRACT(YEAR FROM NOW() )  GROUP BY lower(siteName)");
        return $data;
    }
    public function getSiteListCount($site)
    {
        $date=date("Y-m-d",time());
        $count = $site->where("errortime>='$date'")->count();
        return $count;
    }
    //获取设备数量
    public function getDeviceCount($site)
    {
        $count = $site->count('DISTINCT ip');
        return $count;
    }
    public function demo($site,$queryDays)
    {
        $count = $site->where(' EXTRACT(YEAR from errorTime) =EXTRACT(YEAR FROM NOW() )')->count(' errorTime');

        if($queryDays==7)

            $data=$site->query("SELECT lower(siteName) as siteName,errorTime ,COUNT(lower(siteName)) as times  from 	server_site where WEEK(errorTime,1) = WEEK(NOW(),1) and EXTRACT(YEAR from errorTime) =EXTRACT(YEAR FROM NOW() ) GROUP BY lower(siteName)");
        elseif($queryDays==1)
            $data=$site->query("SELECT lower(siteName) as siteName,errorTime ,COUNT(lower(siteName)) as times  from 	server_site where EXTRACT(DAY from errorTime) =EXTRACT(DAY FROM NOW() ) 		and EXTRACT(YEAR from errorTime) =EXTRACT(YEAR FROM NOW() )  GROUP BY lower(siteName) ");
        else
            $data=$site->query("SELECT lower(siteName) as siteName,errorTime ,COUNT(lower(siteName)) as times   from 	server_site where  EXTRACT(MONTH from errorTime) =EXTRACT(MONTH FROM NOW() )and  EXTRACT(YEAR from errorTime) =EXTRACT(YEAR FROM NOW() )  GROUP BY lower(siteName)");
        return $count;

    }
    //获取服务器数量
    public function getServerCount($site)
    {
        $count = $site->count('DISTINCT siteName');
        return $count;
    }
    //获取信息数量
    public function getEventCount($site)
    {
        $count = $site->count('*');
        return $count;
    }
    public function getDataForLineChart($site,$querydays)
    {
        if ($querydays==1)
            $data=$site->query("SELECT left(ltrim(rtrim(errorTime)),16) as errorTime ,COUNT(left(errorTime,16)) as times    from server_site  where   DATE_FORMAT(errorTime,'%m-%d-%Y')  = DATE_FORMAT(NOW(),'%m-%d-%Y') GROUP BY left(ltrim(rtrim(errorTime)),16) ORDER BY left(ltrim(rtrim(errorTime)),16) ASC");
        elseif ($querydays==7)
            $data=$site->query("SELECT left(ltrim(rtrim(errorTime)),16) as errorTime ,COUNT(left(errorTime,16)) as times    from server_site  where  WEEK(errorTime,1) = WEEK(NOW(),1) and EXTRACT(YEAR from errorTime) =EXTRACT(YEAR FROM NOW() ) GROUP BY left(ltrim(rtrim(errorTime)),16) ORDER BY left(ltrim(rtrim(errorTime)),16) ASC limit 200");
        else
            $data=$site->query("SELECT left(ltrim(rtrim(errorTime)),16) as errorTime ,COUNT(left(errorTime,16)) as times    from server_site  where  EXTRACT(MONTH from errorTime) =EXTRACT(Month FROM NOW() )  and EXTRACT(YEAR from errorTime) =EXTRACT(YEAR FROM NOW() ) GROUP BY left(ltrim(rtrim(errorTime)),16) ORDER BY left(ltrim(rtrim(errorTime)),16) ASC");
        return $data;
    }
    /*
     * SELECT left(ltrim(rtrim(errorTime)),16) as errorTime ,COUNT(left(errorTime,16)) as times
from server_site
where   DATE_FORMAT(errorTime,'%m-%d-%Y')  = DATE_FORMAT(NOW(),'%m-%d-%Y')

GROUP BY left(ltrim(rtrim(errorTime)),16)
ORDER BY left(ltrim(rtrim(errorTime)),16) ASC
     * */





}