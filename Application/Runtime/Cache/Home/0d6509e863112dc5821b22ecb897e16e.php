<?php if (!defined('THINK_PATH')) exit();?><!--<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Server Monitor</title>
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!--<link href="http://getbootstrap.com/examples/justified-nav/justified-nav.css" rel="stylesheet">
    --><!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="/servermonitorreportserver/Public/Admin/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/servermonitorreportserver/Public/Admin/dist/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="/servermonitorreportserver/Public/Admin/dist/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/servermonitorreportserver/Public/Admin/dist/css/AdminLTE.min.css">

    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/servermonitorreportserver/Public/Admin/dist/css/skins/_all-skins.min.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="/servermonitorreportserver/Public/Admin/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/servermonitorreportserver/Public/Admin/plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="/servermonitorreportserver/Public/Admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]--!>
    <script src="/servermonitorreportserver/Public/Admin/dist/js/html5shiv.min.js"></script>
    <script src="/servermonitorreportserver/Public/Admin/dist/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="/servermonitorreportserver/Public/Admin/toastr/toastr.min.css">

    <!-- jQuery 2.1.4 -->
    <script src="/servermonitorreportserver/Public/Admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script>
        var URL = '/servermonitorreportserver/';
        var UEURL = '/servermonitorreportserver/Public/Admin/UEditor/';
        var PUBLICURL = '/servermonitorreportserver/Public';
        var UPLOADSURL = '/servermonitorreportserver/Public/Uploads/';
    </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="/servermonitorreportserver/Public/Admin/UEditor/lang/zh-cn/zh-cn.js"></script>

    <script type="text/javascript" charset="utf-8" src='/servermonitorreportserver/Public/Admin/nprogress/nprogress.js'></script>
    <script src="/servermonitorreportserver/Application/Home/View/libs/d3pie.js"></script>
    <script src="/servermonitorreportserver/Application/Home/View/libs/d3.min.js"></script>

    <link rel='stylesheet' href='/servermonitorreportserver/Public/Admin/nprogress/nprogress.css'/>

    <link rel='stylesheet' href='/servermonitorreportserver/Public/Home/dist/css/lrtk.css'/>
    <!--<script type="text/javascript" charset="utf-8" src='/servermonitorreportserver/Public/Home/dist/js/lrtk.js'></script>-->
    <link rel="stylesheet" href="/servermonitorreportserver/Public/Admin/bootstrap/css/piAdmin.css">
    <script src="/servermonitorreportserver/Public/Admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="/servermonitorreportserver/bundle.js"></script>
</head>
<body>--> <!--class="hold-transition skin-red-light sidebar-mini"-->
<!--<div id="top"></div>
<header class="main-header">-->
<!--refresh in 1 min-->
<!--    <meta http-equiv="refresh" content="60">-->
    <!-- Logo -->
    <!--<div style="background-color: #16aad8;width: 100%;height: 50px">
        <br/>
        <span style="width: 350px ;color: white;font-size:large;left: 15px;margin-top: -4%;">
            Server Monitor Report Server
        </span>
        <select id="queryDays" style="text-align: center; margin-top: -4%; margin-left: 90%" data-toggle="modal" data-target="#myModal" class="btn btn-danger ">
            <option value="1" selected="selected">Today</option>
            <option value="7">This week</option>
            <option value="30" >This month</option>
        </select >
    </div>-->
<!--</header>-->

<!doctype html>
<html>
<head>
    <title>React Sidebar</title>
    <meta name='theme-color' content='#03a9f4'>
    <meta name='viewport' content='width=device-width,
      user-scalable=no' />
    <style>
        .custom-sidebar-class {
            background-color: #FFF;
        }
    </style>
</head>
<body>
<div id="example"></div>
<script src="/servermonitorreportserver/Application/Home/View/example/compiled/index.js"></script>
<style>
   .mainPage_partOne{
        margin-top: 15px;
        padding-left: 8%;
        width: 2200px;
        height: 340px;
        margin-left: auto;
        margin-right: auto;
    }
    .mainPage_partOnePaper{
        height: 250px;
        width: 300px;
        background-color: #FFFFFF;
        margin-left: 52px;
        margin-top: 100px;
        box-shadow:  0 0 7px rgba(0,0,0,.14),0 7px 15px rgba(0,0,0,.23);
        float: left;
        white-space: nowrap;
    }
    .mainPage_type{
        margin-top: 15px;
        margin-left: 15px;
        float: left;
        font-family: "微软雅黑", Helvetica, Arial, sans-serif;
        font-size: 20px;
        color: #0A3A72;
    }
    .mainPage_change{
        margin-top: 15px;
        margin-right: 15px;
        float: right;
        font-family: "微软雅黑", Helvetica, Arial, sans-serif;
        font-size: 25px;
        color: black;
    }
    .mainPage_number{
        margin-top: 80px;
        text-align: center;
        font-size: 70px;
    }
    .mainPage_button{
        height: 30px;
        width: 270px;
        text-align: center;
        margin-top: 20px;
        margin-left: 15px;
        padding-top: 8px;
        font-family: "微软雅黑", Helvetica, Arial, sans-serif;
        font-size: 15px;
        color: white;
        /*background-color: #28A2D6;*/
        background-color: #16aad8;
        border-radius: 3px;
    }
    .mainPage_nav:link{
        text-decoration:none;
    }
</style>
<script>
    $('#queryDays').change(function(){

        // alert($(this).children('option:selected').val());
        var days=$(this).children('option:selected').val();
        if(parseInt( days)==1)
            $_url=  "/servermonitorforweb/index.php/home/index/getdataforbarchart?queryDays=1";
        else
        if(parseInt( days)==7)
            $_url=  "/servermonitorforweb/index.php/home/index/getdataforbarchart?queryDays=7";
        else
            $_url=  "/servermonitorforweb/index.php/home/index/getdataforbarchart?queryDays=30";

      /*  $.ajax({
            type: "post",
            url:$_url,
            data: {
                $queryDays:7
            },
            success: function (data) {
                for(var  i=0;i<data.length;i++)
                {
                    barData[i] = {label:data[i].sitename , y:parseInt( data[i].times),indexLabel:data[i].times};
                }
            },
        });*/
    });
</script>
<div class="mainPage_partOne">

   <!-- 设备信息-->
    <div class="mainPage_partOnePaper">
        <div class="mainPage_type">Devices</div>
        <div class="mainPage_change">+1</div>
        <div class="mainPage_number"> <?php echo ($devicesNum); ?></div>
        <!--<a href="" class="mainPage_nav" >
            <div class="mainPage_button">Devices List</div>
        </a>-->
        <div class="mainPage_button">Devices </div>
    </div>

    <!-- 服务器信息-->
    <div class="mainPage_partOnePaper">
        <div class="mainPage_type">Servers</div>
        <div class="mainPage_change">+3</div>
        <div class="mainPage_number"><?php echo ($servers); ?></div>
        <div class="mainPage_button">Servers</div>

    </div>

    <!-- 服务器时间信息-->
    <div class="mainPage_partOnePaper">
        <div class="mainPage_type">Events</div>
        <div class="mainPage_change">+203</div>
        <div class="mainPage_number"><?php echo ($events); ?></div>
        <div class="mainPage_button">Events </div>
    </div>
</div>

    <style>
        /*定义了类 axis 下的 path、line、text 元素的样式。接下来，只需要将坐标轴的类设定为 axis 即可。*/
        .axis path,
        .axis line{
            margin-left: auto;
            fill: none;
            stroke: black;
            shape-rendering: crispEdges;
        }
        .axis text {
            font-family: sans-serif;
            font-size: 11px;
        }

        .MyText {
            fill: white;
            text-anchor: middle;
        }
        .barChart{
              position: relative;
            left:-5%;
            width: auto;
            margin-right: 55%;
            text-align: center;
          }
    </style>
    <script src="http://d3js.org/d3.v3.min.js" charset="utf-8"></script>
    <script src="http://labratrevenge.com/d3-tip/javascripts/d3.tip.v0.6.3.js"></script>
    <script>
        var _min=Number.MAX_VALUE;
        var datayAxis=["google", "yahoo", "baidu", "outube", "360", "error", "henu","ihongguang"];

        var dataset = [11, 20, 30, 40, 33, 24, 12, 2];
        $.ajax({
            type: "post",
            url: "/servermonitorreportserver/index.php/home/index/getDataForLineChart",
            data: {
                queryDays:parseInt(1)
            },
            async:false,
            success: function (data)
            {
                if(data.length!=0)
                {
                    for(var i=0;i<data.length;i++)
                    {
                        dataset[i] =parseInt( data[i].times);
                        if(i%7!=0)
                            datayAxis[i]= "";
                        else
                            datayAxis[i]= (data[i].errortime)/*.substring(11)*/;
                        if(_min<parseInt(dataset[i]))
                            _min=parseInt(dataset[i]);
                    }
                    if(_min>=5)
                        dataset[data.length]=_min-5;
                    else
                        dataset[data.length]=0;
                }

                //console.log(dataset)
            },

        });


        var dataset7 = [45, 20, 25, 10, 4, 24, 45, 2];
        $.ajax({
            type: "post",
            url: "/servermonitorreportserver/index.php/home/index/getDataForLineChart",
            data: {
                queryDays:parseInt(7)
            },
            async:false,
            success: function (data)
            {
                if(data.length!=0)
                {
                    for(var i=0;i<data.length;i++)
                    {
                        dataset7[i] =parseInt( data[i].times);
                        if(i%7!=0)
                            datayAxis[i]= "";
                        else
                            datayAxis[i]= (data[i].errortime)/*.substring(11)*/;
                        if(_min<parseInt(dataset7[i]))
                            _min=parseInt(dataset7[i]);
                    }
                    if(_min>=5)
                        dataset7[data.length]=_min-5;
                    else
                        dataset7[data.length]=0;
                }

                //console.log(dataset7)
            },

        });


        var dataset30 = [10, 56, 10, 40, 5, 78, 19, 33];
        $.ajax({
            type: "post",
            url: "/servermonitorreportserver/index.php/home/index/getDataForLineChart",
            data: {
                queryDays:parseInt(30)
            },
            async:false,
            success: function (data)
            {
                if(data.length!=0)
                {
                    for(var i=0;i<data.length;i++)
                    {
                        dataset30[i] =parseInt( data[i].times);
                        if(i%7!=0)
                            datayAxis[i]= "";
                        else
                            datayAxis[i]= (data[i].errortime)/*.substring(11)*/;
                        if(_min<parseInt(dataset30[i]))
                            _min=parseInt(dataset30[i]);
                    }
                    if(_min>=5)
                        dataset30[data.length]=_min-5;
                    else
                        dataset30[data.length]=0;
                }

                //console.log(dataset30)
            },

        });


        //画布大小
        //画布大小
        var width =0.69*(document.body.clientWidth);//400
        var height =400;//400


        d3.select("#queryDays").on("change", function() {
            var v = d3.select(this)[0][0].value;
            if (v == 30) {
                update(dataset30)
            }
            if (v == 7) {
                update(dataset7)
            }
            if (v == 1) {
                update(dataset)
            }

        })


        //在 body 里添加一个 SVG 画布
        var svg = d3.select("body")
                .append("svg")
                .attr("class", "barChart")
                .attr("width", width*1.5)
                .attr("height", (height*1.5));

        //画布周边的空白
        var padding = {left:-10, right:30, top:20, bottom:20};


        //定义一个数组


        //x轴的比例尺
        var xScale = d3.scale.ordinal()
                .domain(d3.range(datayAxis.length))
                .rangeRoundBands([d3.min(dataset), width - 0.25*(document.body.clientWidth) - padding.right]);

        //y轴的比例尺
        var yScale = d3.scale.linear()
                .domain([d3.min(dataset),d3.max(dataset)])//定义域
                .range([height - padding.top - padding.bottom, 0]);//值域


        //定义x轴
        //定义x轴
        var xAxis = d3.svg.axis()
                        .scale(xScale)  //指定比例尺
                        .orient("bottom") //指定刻度的方向 ，bottom 表示在坐标轴的下方显示。
                        //.ticks(6)        //指定刻度的数量
                        //.tickValues(datayAxis)
                        .tickFormat(function(d){return datayAxis[d];})
                /*.tickValues([0,1, 2, 3, 4, 5, 6, 7])*/;
        //定义y轴
        var yAxis = d3.svg.axis()
                .scale(yScale) //y轴
                .orient("left");



        //矩形之间的空白
        var rectPadding = 2;

        //添加矩形元素

        update(dataset)
        //添加x轴
        svg.append("g")
                .attr("class", "axis x")
                .attr("transform","translate(" +  0.25*(document.body.clientWidth) + "," + (height - padding.bottom) + ")")//坐标轴的位置
                .call(xAxis) //其参数是前面定义的坐标轴 axis。 call() 的参数是一个函数。调用之后，将当前的选择集作为参数传递给此函数。
                .selectAll("text")
                .style("text-anchor", "end")
                .attr("dx", "-.8em")
                .attr("dy", "-.15em")
                .attr("transform", "rotate(-30)" );
        //.append('text')
        //.text('siteName')
        //.attr('transform', 'translate(' + (width - 100) + ', -2)');
        //添加y轴
        svg.append("g")
                .attr("class", "axis y")
                .attr("transform","translate(" +  0.25*(document.body.clientWidth) + "," + padding.top + ")")
                .call(yAxis)
                .append('text')
                .attr("fill", "#000")
                .attr("transform", "rotate(-90)")
                .attr("y", 6)
                .attr("dy", "0.71em")
                .style("text-anchor", "end")
                .text('times');

        function update(data) {
            //update  x and y axis domain
            xScale.rangeRoundBands([d3.min(data), width - padding.left - padding.right]);
            yScale.domain([d3.min(data), d3.max(data)]) //定义域
            //update the x and y axis
            d3.selectAll(".x").call(xAxis);
            d3.selectAll(".y").call(yAxis);

            //remove all teh rectangles
            svg.selectAll(".MyRect").remove();
            //append rectangles with new data
            svg.selectAll(".MyRect")
                    .data(data)
                    .enter()
                    .append("rect")
                    .attr("fill", "#16aad8")//4285F4
                    .attr("class", "MyRect")
                    .attr("transform", "translate(" + 0.25*(document.body.clientWidth) + "," + padding.top + ")")

                    .attr("x", function(d, i) {
                        return xScale(i) + rectPadding / 2;
                    })
                    .attr("width", xScale.rangeBand() - rectPadding)
                    .attr("y", function(d) {
                        var min = yScale.domain()[0];
                        return yScale(min);
                    })
                    .attr("height", function(d) {
                        return 0;
                    })


                    .on("mouseover", function(d, i) {
                        d3.select(this)
                                .attr("fill", "blue");
                    })
                    .on("mouseout", function(d, i) {
                        d3.select(this)
                                .transition()
                                .duration(500)
                                .attr("fill","#16aad8");//4285F4
                        return d;
                    })

                    /* .on("mouseout",function(d,i){
                     d3.select(this)
                     .attr("fill","yellow");
                     }*/
                    .transition()
                    .delay(function(d, i) {
                        return  200;
                    })

                    .duration(2000)
                    .ease("bounce")
                    .attr("y", function(d) {
                        return yScale(d);
                    })

                    .attr("height", function(d) {
                        return height - padding.top - padding.bottom - yScale(d);
                    })

            /* .on("mouseout", mouseout)
             .call(force.drag);*/
            ;

            //添加文字元素
            //remove all text
            svg.selectAll(".MyText").remove();
            //append new text
            svg.selectAll(".MyText")
                    .data(data)
                    .enter()
                    .append("text")
                    .attr("class", "MyText")
                    .attr("transform", "translate(" + 0.25*(document.body.clientWidth) + "," + padding.top + ")")
                    .attr("x", function(d, i) {
                        return xScale(i) + rectPadding / 2;
                    })
                    .attr("dx", function() {
                        return (xScale.rangeBand() - rectPadding) / 2;
                    })
                    .attr("dy", function(d) {
                        return 20;
                    })
                    .text(function(d) {
                        return d;
                    })
                    .attr("y", function(d) {
                        var min = yScale.domain()[0];
                        return yScale(min);
                    })
                    .transition() ////启动过渡
                    .delay(function(d, i) {
                        return  200;
                    })
                    .duration(2000) //指定过渡的持续时间，单位为毫秒。  2 Second


                    /*	ease()
                     指定过渡的方式，常用的有：
                     linear：普通的线性变化
                     circle：慢慢地到达变换的最终状态
                     elastic：带有弹跳的到达最终状态
                     bounce：在最终状态处弹跳几次*/
                    .ease("bounce")
                    .attr("y", function(d) {
                        return yScale(d);
                    });

        }
    </script>
<style>

    body {
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        width: auto;
        height: 500px;
        position: relative;
    }

    svg {
        left:20%;
        width: 100%;
        height: 100%;
    }

    path.slice{
        stroke-width:2px;
    }

    polyline{
        opacity: .3;
        stroke: black;
        stroke-width: 2px;
        fill: none;
    }
    .pieChart{
        text-align: center;
        left:20%;
    }

</style>

<!--<button class="randomize">randomize</button>-->
<script src="http://d3js.org/d3.v3.min.js"></script>


<script>
var dataset=[],datayAxis=[];


    var svg = d3.select("body")
            .append("svg")
            .append("g")
            .attr("class", "pieChart");

    svg.append("g")
            .attr("class", "slices");
    svg.append("g")
            .attr("class", "labels");
    svg.append("g")
            .attr("class", "lines");

    var width = 960,
            height = 450,
            radius = Math.min(width, height) / 2;

    var pie = d3.layout.pie()
            .sort(null)
            .value(function(d) {
                return d.value;
            });

    var arc = d3.svg.arc()
            .outerRadius(radius * 0.8)
            .innerRadius(radius * 0.4);

    var outerArc = d3.svg.arc()
            .innerRadius(radius * 0.9)
            .outerRadius(radius * 0.9);

    svg.attr("transform", "translate(" + width / 2 + "," + height / 2 + ")");

    var key = function(d){ return d.data.label; };

    var color = d3.scale.ordinal()
            /*.domain(d3.range(datayAxis.length))
            .rangeRoundBands([d3.min(dataset), width - 0.25*(document.body.clientWidth) - padding.right]);*/

            .domain(datayAxis)
            .range(["#98abc5", "#8a89a6", "#7b6888", "#6b486b", "#a05d56", "#d0743c", "#ff8c00"]);

    function randomData (days){

        $.ajax({
            type: "post",
            url: "/servermonitorreportserver/index.php/home/index/getDataForBarChart",
            data: {
                queryDays:parseInt(days)

            },
            async:false,
            success: function (data)
            {
                //alert(data[1]);
                // console.log(data);
                //barData=[];
                dataset=[];
                datayAxis=[];
                if(data.length!=0)
                {
                    for(var i=0;i<data.length;i++)
                    {
                        dataset[i] = parseInt(data[i].times) ;
                        datayAxis[i] =(data[i].sitename +": "+ data[i].times)+" times";
                        // alert(dataset[1]);
                    }
                }else
                {
                    if(dataset==null||dataset.length==0)
                    {
                        dataset = [10, 20, 30, 40, 33, 24, 12, 20,0];
                        datayAxis=["google", "yahoo", "baidu", "youtube", "360", "error", "henu"];

                    }
                }

            },
        });
        var ans=0;
        var labels = datayAxis;
        return labels.map(function(label)
        {
            return { label: label, value:dataset[ans++]}
        });
    }
var days=1;
    change(randomData(days));

    d3.select("#queryDays")
            .on("click", function()
            {
                days=1;
                $('#queryDays').change(function(){
                     days=$(this).children('option:selected').val();
                    //alert(days);
                    change(randomData(days));
            });
               /* change(randomData(days));*/
            });


    function change(data) {

        /* ------- PIE SLICES -------*/
        var slice = svg.select(".slices").selectAll("path.slice")
                .data(pie(data), key);

        slice.enter()
                .insert("path")
                .style("fill", function(d) { return color(d.data.label); })
                .attr("class", "slice");

        slice
                .transition().duration(1000)
                .attrTween("d", function(d) {
                    this._current = this._current || d;
                    var interpolate = d3.interpolate(this._current, d);
                    this._current = interpolate(0);
                    return function(t) {
                        return arc(interpolate(t));
                    };
                })

        slice.exit()
                .remove();

        /* ------- TEXT LABELS -------*/

        var text = svg.select(".labels").selectAll("text")
                .data(pie(data), key);

        text.enter()
                .append("text")
                .attr("dy", ".35em")
                .text(function(d) {
                    return d.data.label;
                });

        function midAngle(d){
            return d.startAngle + (d.endAngle - d.startAngle)/2;
        }

        text.transition().duration(1000)
                .attrTween("transform", function(d) {
                    this._current = this._current || d;
                    var interpolate = d3.interpolate(this._current, d);
                    this._current = interpolate(0);
                    return function(t) {
                        var d2 = interpolate(t);
                        var pos = outerArc.centroid(d2);
                        pos[0] = radius * (midAngle(d2) < Math.PI ? 1 : -1);
                        return "translate("+ pos +")";
                    };
                })
                .styleTween("text-anchor", function(d){
                    this._current = this._current || d;
                    var interpolate = d3.interpolate(this._current, d);
                    this._current = interpolate(0);
                    return function(t) {
                        var d2 = interpolate(t);
                        return midAngle(d2) < Math.PI ? "start":"end";
                    };
                });

        text.exit()
                .remove();

        /* ------- SLICE TO TEXT POLYLINES -------*/

        var polyline = svg.select(".lines").selectAll("polyline")
                .data(pie(data), key);

        polyline.enter()
                .append("polyline");

        polyline.transition().duration(1000)
                .attrTween("points", function(d){
                    this._current = this._current || d;
                    var interpolate = d3.interpolate(this._current, d);
                    this._current = interpolate(0);
                    return function(t) {
                        var d2 = interpolate(t);
                        var pos = outerArc.centroid(d2);
                        pos[0] = radius * 0.95 * (midAngle(d2) < Math.PI ? 1 : -1);
                        return [arc.centroid(d2), outerArc.centroid(d2), pos];
                    };
                });

        polyline.exit()
                .remove();
    };

</script>
<section class="content" style="width: 80%;/*min-height: auto;*/">
    <div class="row">
        <!-- /.col -->
        <div class="col-md-12">
            <div class="box box-danger">
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <div class="table-responsive" style="overflow-x: visible;">

                        <table class="table table-bordered table-hover">
                            <tbody>
                            <tr>
                                <th>site name</th>
                                <th>site address</th>
                                <th>client ip</th>
                                <th>status code</th>
                                <th>error time</th>
                                <th>request time</th>
                                <th>error details</th>
                            </tr>
                            <?php if(is_array($siteList)): $i = 0; $__LIST__ = $siteList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$site): $mod = ($i % 2 );++$i;?><tr>
                                    <td>
                                        <?php echo ($site["sitename"]); ?>
                                    </td>
                                    <td>
                                        <a href=<?php echo ($site["siteaddress"]); ?> target="_blank"><?php echo ($site["siteaddress"]); ?></a>
                                    </td>
                                    <td>
                                        <?php echo ($site["ip"]); ?>
                                    </td>
                                    <td>
                                        <?php echo ($site["statuscode"]); ?>
                                    </td>
                                    <td>
                                        <?php echo ($site["errortime"]); ?>
                                    </td>
                                    <td>
                                        <?php echo ($site["requesttime"]); ?>
                                        <!--<?php if($site["requesttime"] <= 1000): echo ($site["requesttime"]); endif; ?>-->

                                    </td>
                                    <td>
                                        <?php echo ($site["errordetails"]); ?>
                                    </td>
                                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                            </tbody>
                        </table>
                        <div class="box-footer no-padding">
                            <div class="mailbox-controls">
                                <div class="btn-group" style="height: 45px">

                                </div>
                                <div class="pull-right">
                                    <?php echo ($page); ?>
                                    <!-- /.btn-group -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- /.mail-box-messages -->
                </div>
            </div>
            <!-- /. box -->
        </div>
        <!-- /.col -->
    </div>
</section>
</body>
</html>

</body>
</html>