<?php
namespace lib;
class upload{
    //数学是任何领域的艺术，程序员的数学
    //定义属性
    //上传的服务器和项目的服务器不是一个服务器
    public $fileSize;
    public $fileType=array("image/png","image/jpeg","image/gif","video/mp4");
    public $filename="file";
    public $defaultDir = "upload";
    function __construct()
    {
        ini_set("max_execution_time",100);//最大执行时间
        //echo ini_get("max_execution_time");
        ini_set("memory_limit",500);
        //ini_set("upload_max_filesize","10M");
        //echo ini_get("upload_max_filesize");
        //ini_set("post_max_size","10M");
        //echo ini_get("post_max_size");
        $this->fileSize=5242880;
    }
    private function accept(){
        $this->data = $_FILES[$this->filename];
    }
    private function check(){
        if(is_uploaded_file($this->data["tmp_name"])){
            if($this->data["size"]<$this->fileSize){
                if(in_array($this->data["type"],$this->fileType)){

                    return true;
                }else{
                    echo "文件类型不合法";
                    return false;
                }
            }else{
                echo "文件太大!";
                return false;
            }
        }else{
            echo "不是上传文件";
            return false;
        }

    }
    private function createDir(){
        if(!is_dir($this->defaultDir)){
            mkdir($this->defaultDir,0777,true);
        }
        $currentDir = $this->defaultDir.'/'.date("Y-m-d");
        if(!is_dir($currentDir)){
            mkdir($currentDir,0777,true);
        }
        $filename = time().mt_rand(10,20000).$this->data["name"];
        $this->fullpath = $currentDir.'/'.$filename;
    }
    private function move(){
        move_uploaded_file($this->data["tmp_name"],$this->fullpath);
    }
    function up(){
    //接收数据
    $this->accept();
    //检查D
    if($this->check()){
        //创建文件夹 放入上传文件
        $this->createDir();
        //4.放入指定的目录
        $this->move();
    }
    }

}
