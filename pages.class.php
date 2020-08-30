<?php
class pages{
    function getUrlInfo(){
        $originPath = "http://".$_SERVER["REQUEST_URI"];
        $path ="http://".$_SERVER["HTTP_HOST"].substr($_SERVER["PATH_INFO"]);
        $search = substr(strchr($originPath,"?"),1);
        $reg = '/\&*pages=\d*/';
        $search = preg_replace($reg,"",$search);
        if(isset($_GET["pages"])){
            $currentPages = $_GET["pages"];
        }else{
            $currentPages = 0;
        }
        $this->fullPath = $path."?".$search."&pages=".$currentPages;
        //var_dump($_SERVER);
        //var_dump($originPath);
        //echo $path;
        //echo "<br>";
        echo $search."11";
        echo "<br>";
        echo $this->fullPath;
    }
    public function show(){
        $this->getUrlInfo();
        $str="";
        $str="<a href='{$this->fullPath}0'>[首页]</a>";
        $str.="<a href='{$this->}'"
    }
}
$pages = new pages();$pages->getUrlInfo();    