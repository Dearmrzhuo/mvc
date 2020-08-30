<?php
use lib\database;
class index{
//动作
    function int(){
        $en = new Smarty();
        $en->setTemplateDir(TPL_PATH);
        $en->setCompileDir(COMPILE_PATH);
        $en->setCacheDir(CACHE_PATH);
        $en->caching=true;
        $en->cache_lifetime=1;
        $database = new database();
        $db = $database->db;
        $result=$db->query("select * from mvc_category where cname = '格尔木首页'");
        while($row=$result->fetch_assoc()){
            $en->assign("indexFirst",$row);
        }
        $result=$db->query("SELECT con.imgurl FROM mvc_contents AS con LEFT JOIN mvc_category as cat ON cat.cid=con.cid WHERE ctitle='logourl'");
       while($row=$result->fetch_assoc()){
            $en->assign("indexFirstLogo",$row);
        }
        //侧边栏1
        $result=$db->query("SELECT con.imgurl,con.ctitle FROM mvc_contents AS con LEFT JOIN mvc_category as cat ON cat.cid=con.cid WHERE ctitle='格尔木'");
        while($row=$result->fetch_assoc()){
            $en->assign("btn1w",$row);
        }
        $result=$db->query("SELECT con.imgurl FROM mvc_contents AS con LEFT JOIN mvc_category as cat ON cat.cid=con.cid WHERE ctitle='格尔木2'");
        while($row=$result->fetch_assoc()){
            $en->assign("btn1b",$row);
        }
        //侧边栏2
        $result=$db->query("SELECT con.imgurl,con.ctitle FROM mvc_contents AS con LEFT JOIN mvc_category as cat ON cat.cid=con.cid WHERE ctitle='了解先科'");
        while($row=$result->fetch_assoc()){
            $en->assign("btn2w",$row);
        }
        $result=$db->query("SELECT con.imgurl FROM mvc_contents AS con LEFT JOIN mvc_category as cat ON cat.cid=con.cid WHERE ctitle='了解先科2'");
        while($row=$result->fetch_assoc()){
            $en->assign("btn2b",$row);
        }
        //侧边栏3
        $result=$db->query("SELECT con.imgurl,con.ctitle FROM mvc_contents AS con LEFT JOIN mvc_category as cat ON cat.cid=con.cid WHERE ctitle='产品展示'");
        while($row=$result->fetch_assoc()){
            $en->assign("btn3w",$row);
        }
        $result=$db->query("SELECT con.imgurl FROM mvc_contents AS con LEFT JOIN mvc_category as cat ON cat.cid=con.cid WHERE ctitle='产品展示2'");
        while($row=$result->fetch_assoc()){
            $en->assign("btn3b",$row);
        }
        //侧边栏4
        $result=$db->query("SELECT con.imgurl,con.ctitle FROM mvc_contents AS con LEFT JOIN mvc_category as cat ON cat.cid=con.cid WHERE ctitle='案例展示'");
        while($row=$result->fetch_assoc()){
            $en->assign("btn4w",$row);
        }
        $result=$db->query("SELECT con.imgurl FROM mvc_contents AS con LEFT JOIN mvc_category as cat ON cat.cid=con.cid WHERE ctitle='案例展示2'");
        while($row=$result->fetch_assoc()){
            $en->assign("btn4b",$row);
        }
        //侧边栏5
        $result=$db->query("SELECT con.imgurl,con.ctitle FROM mvc_contents AS con LEFT JOIN mvc_category as cat ON cat.cid=con.cid WHERE ctitle='更多内容'");
        while($row=$result->fetch_assoc()){
            $en->assign("btn5w",$row);
        }
        $result=$db->query("SELECT con.imgurl FROM mvc_contents AS con LEFT JOIN mvc_category as cat ON cat.cid=con.cid WHERE ctitle='更多内容2'");
        while($row=$result->fetch_assoc()){
            $en->assign("btn5b",$row);
        }
        $result=$db->query("SELECT con.imgurl FROM mvc_contents AS con LEFT JOIN mvc_category as cat ON cat.cid=con.cid WHERE ctitle='侧边logo'");
        while($row=$result->fetch_assoc()){
            $en->assign("theme",$row);
        }
        //了解先科内容页
        $result=$db->query("SELECT con.imgurl,con.conts FROM mvc_contents AS con LEFT JOIN mvc_category as cat ON cat.cid=con.cid WHERE ctitle='了解先科内容'");
        while($row=$result->fetch_assoc()){
            $en->assign("content2",$row);
        }
        //产品展示页
        $result=$db->query("SELECT con.imgurl,con.ctitle FROM mvc_contents AS con LEFT JOIN mvc_category as cat ON cat.cid=con.cid WHERE ctitle='家装'");
        while($row=$result->fetch_assoc()){
            $en->assign("cont1w",$row);
        }
        $result=$db->query("SELECT con.imgurl,con.ctitle FROM mvc_contents AS con LEFT JOIN mvc_category as cat ON cat.cid=con.cid WHERE ctitle='家装2'");
        while($row=$result->fetch_assoc()){
            $en->assign("cont1b",$row);
        }
        $result=$db->query("SELECT con.imgurl,con.ctitle FROM mvc_contents AS con LEFT JOIN mvc_category as cat ON cat.cid=con.cid WHERE ctitle='工装'");
        while($row=$result->fetch_assoc()){
            $en->assign("cont2w",$row);
        }
        $result=$db->query("SELECT con.imgurl,con.ctitle FROM mvc_contents AS con LEFT JOIN mvc_category as cat ON cat.cid=con.cid WHERE ctitle='工装2'");
        while($row=$result->fetch_assoc()){
            $en->assign("cont2b",$row);
        }
        $result=$db->query("SELECT con.imgurl,con.ctitle FROM mvc_contents AS con LEFT JOIN mvc_category as cat ON cat.cid=con.cid WHERE ctitle='墙体'");
        while($row=$result->fetch_assoc()){
            $en->assign("cont3w",$row);
        }
        $result=$db->query("SELECT con.imgurl,con.ctitle FROM mvc_contents AS con LEFT JOIN mvc_category as cat ON cat.cid=con.cid WHERE ctitle='墙体2'");
        while($row=$result->fetch_assoc()){
            $en->assign("cont3b",$row);
        }
        $result=$db->query("SELECT con.imgurl,con.ctitle FROM mvc_contents AS con LEFT JOIN mvc_category as cat ON cat.cid=con.cid WHERE ctitle='吊顶'");
        while($row=$result->fetch_assoc()){
            $en->assign("cont4w",$row);
        }
        $result=$db->query("SELECT con.imgurl,con.ctitle FROM mvc_contents AS con LEFT JOIN mvc_category as cat ON cat.cid=con.cid WHERE ctitle='吊顶2'");
        while($row=$result->fetch_assoc()){
            $en->assign("cont4b",$row);
        }
        //图片展示内容
        $result=$db->query("SELECT * FROM mvc_category WHERE cname='产品展示'");
        while($row=$result->fetch_assoc()){
            $en->assign("contentProduct",$row);
        }
        //案例展示内容
        $result=$db->query("SELECT con.imgurl FROM mvc_contents AS con LEFT JOIN mvc_category as cat ON cat.cid=con.cid WHERE ctitle='案例展示图片1'");
        while($row=$result->fetch_assoc()){
            $en->assign("content3img1",$row);
        }
        $result=$db->query("SELECT con.imgurl FROM mvc_contents AS con LEFT JOIN mvc_category as cat ON cat.cid=con.cid WHERE ctitle='案例展示图片2'");
        while($row=$result->fetch_assoc()){
            $en->assign("content3img2",$row);
        }
        $result=$db->query("SELECT con.imgurl FROM mvc_contents AS con LEFT JOIN mvc_category as cat ON cat.cid=con.cid WHERE ctitle='案例展示图片3'");
        while($row=$result->fetch_assoc()){
            $en->assign("content3img3",$row);
        }
        //侧边栏底部
        $result=$db->query("SELECT con.imgurl FROM mvc_contents AS con LEFT JOIN mvc_category as cat ON cat.cid=con.cid WHERE ctitle='感叹号'");
        while($row=$result->fetch_assoc()){
            $en->assign("gtw",$row);
        }
        $result=$db->query("SELECT con.imgurl FROM mvc_contents AS con LEFT JOIN mvc_category as cat ON cat.cid=con.cid WHERE ctitle='感叹号2'");
        while($row=$result->fetch_assoc()){
            $en->assign("gtb",$row);
        }
        $result=$db->query("SELECT con.imgurl FROM mvc_contents AS con LEFT JOIN mvc_category as cat ON cat.cid=con.cid WHERE ctitle='微博'");
        while($row=$result->fetch_assoc()){
            $en->assign("wbb",$row);
        }
        $result=$db->query("SELECT con.imgurl FROM mvc_contents AS con LEFT JOIN mvc_category as cat ON cat.cid=con.cid WHERE ctitle='微博2'");
        while($row=$result->fetch_assoc()){
            $en->assign("wbw",$row);
        }
        $result=$db->query("SELECT con.imgurl FROM mvc_contents AS con LEFT JOIN mvc_category as cat ON cat.cid=con.cid WHERE ctitle='关闭'");
        while($row=$result->fetch_assoc()){
            $en->assign("gbb",$row);
        }
        $en->display("page/index.html");
    }


}