<?php
if (!defined("MVC")) {
    die("非法入侵");
}
use lib\smarty;
use lib\database;
class category{
    public $arr=array();
    function int (){
        $smarty = new smarty();
        //查询数据库
        $database = new database();
        $this->db = $database->db;
        $str = "";
        $this->tree(0,$str);
        //echo $str;
        $smarty->assign("str",$str);
        $smarty->display("admin/category.html");
    }
    function tree($pid=0,&$str,$i=0){
        $result = $this->db->query("select * from mvc_category where pid=".$pid);

        while ($row = $result->fetch_assoc()){
            $str.='<tr><td>'.($i+1).'级目录</td><td>'.str_repeat("➥",$i).$row["cname"].'</td><td><a href="javascript:;" attr="'.$row["cid"].' "class="o-add">添加</a>&nbsp;&nbsp;<a href="'.ENTRY_ADD.'/admin/category/del?cid='.$row["cid"].'" attr="'.$row["cid"].'" class="o-del">删除</a>&nbsp;&nbsp;<a href="javascript:;" attr="'.$row["cid"].'"pid="'.$row["pid"].'" class="o-edit">修改</a></td></tr>';
            $this->tree($row["cid"],$str,$i+1);
        }
    }
    function addCategory(){
        if (isset($_POST["cid"])){
            $gid = $_POST["cid"];
        }else{
            $gid = 0;
        }
        $cname = $_POST["cname"];
        $isshow = $_POST["isshow"];
        $tpl_name = $_POST["tpl_name"];
        $info = $_POST["info"];
        $database = new database();
        $db = $database->db;
        $db->query("insert into mvc_category (cname,pid,isshow,tpl_name,info) values ('$cname','$gid','$isshow','$tpl_name','$info')");
        if($db->affected_rows>0){
        //header("loacation:".ENTRY_ADD."admin/category");
            header('location: '.$_SERVER['HTTP_REFERER']);
        }
    }
    function addpage(){
        $smarty = new smarty();
        $smarty->display("admin/addCategory.html");
    }
    function del(){
      $cid = $_GET["cid"];
      $database = new database();
      $db = $database->db;
      $result = $db->query("select * from mvc_category where pid = ".$cid);
      if($result->num_rows>0){
          echo '<script>alert("请先删除子目录");</script>';
          header('location: '.$_SERVER['HTTP_REFERER']);
      }else{
      $db->query("delete from mvc_category where cid = ".$cid);
      if($db->affected_rows>0){
          header('location: '.$_SERVER['HTTP_REFERER']);
      }}
    }
    function show(){
        $cid=$_GET["cid"];
        $database = new database();
        $db = $database->db;
        $result = $db->query("select * from mvc_category where cid=".$cid);
        $row = $result ->fetch_assoc();
        echo json_encode($row);

    }
    function getOption(){
        $this->treeOption(0,$this->arr);
        echo json_encode($this->arr);
    }
    function treeOption($pid,&$arr){
        $database = new database();
        $db = $database->db;
        $result = $db->query("select * from mvc_category where pid=".$pid);
        $i = 0;
        while ($row = $result->fetch_assoc()){
            $arr[$i]=array(
                "cname"=>$row["cname"],
                "cid"=>$row["cid"],
                "pid"=>$row["pid"]
            );
            $this->treeOption($row["cid"],$arr[$i]["child"]);
            $i++;
        }

    }
    //修改
    function editcon(){
        $cname = $_GET["cnameEdit"];
        $pid = $_GET["pidEdit"];
        $cid = $_GET["cidEdit"];
        $isshow = $_GET["isshowEdit"];
        $info = $_GET["infoEdit"];
        $tpl_name = $_GET["tpl_nameEdit"];
        $database = new database();
        $db = $database->db;
        $db->query("update mvc_category set cname='$cname',pid='$pid',isshow='$isshow',tpl_name='$tpl_name',info='$info' where cid = ".$cid);
        if($db->affected_rows>0){
            echo "ok";
        }
    }

}
