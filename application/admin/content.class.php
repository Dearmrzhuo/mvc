<?php
if (!defined("MVC")) {
    die("非法入侵");
}

use lib\smarty;
use lib\database;
use lib\upload;
class content
{
    function add()
    {
        $smarty = new smarty();
        $smarty->display("admin/addcon.html");
    }
    function addcon(){
        $cid = $_POST["cid"];
        $ctitle = $_POST["ctitle"];
        $conts = $_POST["conts"];
        $imgurl  = $_POST["imgurl"];
        $database = new database();
        $db = $database->db;
        $db->query("insert into mvc_contents(cid,ctitle,conts,imgurl) values('$cid','$ctitle','$conts','$imgurl')");
        if($db->affected_rows>0){

            header('location: '.$_SERVER['HTTP_REFERER']);
            echo "<script>alert('添加成功');  </script>";
        }else{
            echo "<script>alert('添加失败！');</script>";
        }
    }
    function showList()
    {
        $database = new database();


        $sql ="select * from mvc_contents as con left join mvc_category as cat on con.cid = cat.cid where 1=1";
        if(isset($_POST["cid"])&&!empty($_POST["cid"])) {
            $sql.= " and con.cid =" . $_POST["cid"];
        }
        if(isset($_POST["ctitle"])&&!empty($_POST["ctitle"])){
            $wordkey = $_POST["ctitle"];
            $sql.=" and ctitle like '%".$wordkey."%'";
        }
        if(isset($_POST["order"])&&!empty($_POST["order"])) {
            $order = $_POST["order"];
            $sql .= " ORDER BY conid " . $order;
        }
        $db = $database->db;
        $result = $db->query($sql);
        $arr=array();
        while ($row=$result->fetch_assoc()){
            $arr[]=$row;
        }
        $smarty = new smarty();
        $smarty->assign("data",$arr);
        $smarty->display("admin/showList.html");
    }
    function show(){
        $conid = $_GET["conid"];
        $smarty = new smarty();
        $database = new database();
        $db = $database->db;
        $result = $db->query("select * from mvc_contents where conid = ".$conid);
        $row=$result->fetch_assoc();
        $smarty->assign("data",$row);
        $smarty->display("admin/showContent.html");
    }
    function editcon(){
        $smarty = new smarty();
        $conid = $_GET["conid"];
        $database = new database();
        $db = $database->db;
        $result = $db->query("select * from mvc_contents where conid = ".$conid);
        $row=$result->fetch_assoc();
        $smarty->assign("data",$row);
        $smarty->display("admin/editContent.html");
    }
    function editconts(){
        $conid = $_POST["conid"];
        $ctitle = $_POST["ctitle"];
        $conts = $_POST["conts"];
        $cid = $_POST["cid"];
        $imgurl = $_POST["imgurl"];
        $database = new database();
        $db = $database->db;
        $result = $db->query("update  mvc_contents set ctitle='$ctitle',conts='$conts',cid='$cid',imgurl ='$imgurl' where conid=".$conid);
        if($db->affected_rows>0){
            //header('location:'.$_SERVER["HTTP_REFERER"]);
            echo '<script>alert("修改成功");location.href=$(".ENTRY_ADD").html()+"/admin/content/editcon?conid='.$conid.'"</script>';
        }else{
            echo '<script>alert("修改失败");location.href=$(\".ENTRY_ADD\").html()+\"/admin/content/editcon?conid='.$conid.'"</script>';
    }
    }
    function delcon(){
       $conid = $_GET["conid"];
        $database = new database();
        $db = $database->db;
        $result = $db->query("delete from mvc_contents where conid=".$conid);
        if($db->affected_rows>0){
            header("location:".$_SERVER["HTTP_REFERER"]);
        }else{
            echo '<script>alert("修改失败");</script>';
        }
    }
     function uploadfile(){
        $upload = new upload();
        $upload->up();
        $path = MAIN_ADD.$upload->fullpath;
        echo $path;
     }
     function  tinyuplodfile(){
         $upload = new upload();
         $upload->up();
         $path = MAIN_ADD.$upload->fullpath;
         echo json_encode(array('location' => $path));
     }
}
