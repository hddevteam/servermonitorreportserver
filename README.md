License

All data (and associated content) is placed in the Public Domain using the Public Domain Dedication and License. All code is licensed under the MIT License.

The MIT License
SPDX short identifier: MIT

Further resources on the MIT License

The following are other community resources that may be helpful:

The MIT License on TLDRLegal
GNU License List
Wikipedia License List
OSSWatch License Diff
Choosealicense


Copyright <YEAR> <COPYRIGHT HOLDER>

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.


## 项目简介

本项目与我方开发的APP--server monitor配套使用，是server monitor的一个强力助手。通过本项目对服务器数据进行量化处理，可以帮助您更轻松、更详细地了解服务器的运行状况，对服务器运行状态一目了然。

##服务端安装配置  
* 默认端口80、443、3306（可根据个人需要进行配置）

*  所需应用： PHP \ mysql \ apache 

*  集成环境：XAMPP（以此为例）   

      1.下载xampp  

      2.将其安装在自定义文件夹中（默认为C:\xampp）  

	3.打开文件夹C:\xampp\install\htdocs，并将本项目解压于此处  

     4.点击桌面xampp快捷方式，或搜索xampp-control，并点击打开  

     5.点击xampp-control桌面上Apache对应的start按钮、MySQL对应的start按钮  
		<pre>到此为止，已经配置好php环境，并打开服务器</pre>
6.用mysql或数据库图形化工具Navicat运行db.sql文件创建数据库  

     7.根据需要在Application/home/Conf/config.php文件中，修改数据库连接配置

    8.打开浏览器，并在搜索框中输入http://localhost/server monitor reporting server，即可正常运行

##APP客户端连接测试

    1. 打开抽屉菜单项， 点击Report Server
    
    2. 在输入框输入已经配置好的服务器的ip地址和端口号  例如 172.0.0.1:8080
    
    3. 点击TEST按钮，如果出现Server Configuration Is OK  表明服务器配置成功, 如果提示Server Configuration Is Unavailable， 请进一步检查配置或者联系开发人员
    
    4. 点击Upload复选框就可以进行错误信息的上传
