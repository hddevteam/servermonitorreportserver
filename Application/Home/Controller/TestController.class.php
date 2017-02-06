<?php
namespace Home\Controller;//命名空间
//import()手动加载第三方类库,系统会自动识别导入类库文件的位置   ThinkPHP可以自动识别的类库包包括Think、Org、Com、Behavior和Vendor包，以及Library目录下面的子目录
//  如果你在Library目录下面创建了一个Test子目录，并且创建了一个UserTest.class.php类库，那么可以这样导入import('Test.UserTest');
use Think\Controller;//引入类库
class TestController extends Controller
{
    public function testConnect()
    {
        $returnInfo = '';
        $ans = 1;
        $site = M("site");
        $data = $site->query("SELECT siteAddress from server_site where id=1 ");
        if ($data != "" || $data != NULL)
            $ans = 2;
        if ($ans == 1) {
            $returnInfo["status"] = "Server Connected but no database";
            $this->ajaxReturn($returnInfo, 'json');
        }
        if ($ans == 2) {
            $returnInfo["status"] = "SUCCESS";
            $this->ajaxReturn($returnInfo, 'json');
        }
        // dump( $data);
    }
}