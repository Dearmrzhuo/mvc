<?php
if (!defined("MVC")) {
    die("非法入侵");
}
use lib\smarty;
use lib\database;
use lib\code;
use lib\cookie;
class index
{
    function int()
    {
        $smarty = new Smarty();
        //$smarty->setTemplateDir(TPL_PATH);
        //$smarty->setCompileDir(COMPILE_PATH);
        //$smarty->setCacheDir(CACHE_PATH);
        $smarty->display("admin/admin.html");
    }
    function login()
    {
        $uname = addslashes($_POST["uname"]);//对SQL语句进行转义
        $pass = md5(md5($_POST["pass"]));

        //if(!(isset($_COOKIE["code"])&&$_COOKIE["code"]==$_POST["code"])){
        if($_POST["code"]!==$_SESSION["code"])
        {echo "验证码有误";
            return;
        }
        if(strlen($uname)<5||empty($pass)){
            echo "用户名和密码不符合规范!";
            return;
        }

        //用户表存储用户的主要信息 //如果需要更多的信息 则创建一个新的副表
        //$db = new mysqli("localhost","root","","exp","3308");
        //if (mysqli_connect_error()) {
            //die("连接数据库错误！");
        //}
        //$db->query("set names utf8");
        $database = new database() ;
        $db = $database->db;
        $result = $db->query("select * from user where uname='$uname' and pass='$pass'");
       if($result->num_rows<1){
           echo "没有相应的数据,请重新登录";
       }else{
           $cookie = new cookie();
          $_SESSION["login"]="yes";
           header("location:".ENTRY_ADD."/admin/index/first");

       }
        $db->close();
    }
    function first(){
        // $cookie = new cookie();
        //if($cookie->isCookie("login")&&$cookie->getCookie("login")=="yes"){
        if(isset($_SESSION["login"])&&$_SESSION["login"]=="yes")
        {
            echo "后台首页";
        }
        else{
            header("location:".ENTRY_ADD."/admin");
        }
    }
    function mcode(){
        ob_clean();//清除缓存 图片生成缓存过多
        $code = new code();
        $code->lineWith=array("min"=>5,"max"=>10);
        $code->codeLen=5;
        $code->lineWith=array("min"=>1,"max"=>4);
        $code->fontSize=array("min"=>20,"max"=>35);
        $code->height=50;
        $code->out();
        $this->code=$code->str;
        //会话机制
        //客户端请求验证码地址，服务器运行php运行生成验证码
        //返回验证码和验证验证码，不是同步的
        //生成验证码并返回1234 单独的http请求，请求php地址生成一个验证码，发送验证码并验证。你怎么知道上次的验证码是什么？
        //http请求是无状态的协议 http请求的过程，三次握手，四次挥手（称为一次会话 session，一次会话之后就忘了，无状态，不记录）  头信息，响应体 ，拜拜 。每一次http请求就是一次需求和供供给的过程，不记录上次访问的状态的。
        //服务器怎么知道你登录过了
        //cookie技术 在客户端访问完服务器 服务器会给客户端返回一条cookie(产生了分歧，发送请求A，但是服务器还会返回一条信息B，容易遭到泄露 )
        //我们可以给用户提供自主选择的权利，可以接受cookie，也可以不接受
        //用户同意写入，但是只能写入指定的地方。同时一个主机只能向客户端吸入不能超过4k的内容


    }
}
