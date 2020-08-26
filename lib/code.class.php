<?php

namespace lib;
//1.指定输出的格式
class code
{

    public $type;
    public $width;
    public $height;
    public $codeLen;
    public $seed; //验证码种子
    public $fontSize;
    public $fontAngle;
    public $lineNum;
    public $lineWith;
    public $DotNum;
    public $image;
    public $isCheck;
    function __construct()
    {
        global $config;
        $this->type = isset($config["code"]["type"]) ? $config["code"]["type"] : "png";
        $this->width = isset($config["code"]["width"]) ? $config["code"]["width"] : 150;
        $this->height = isset($config["code"]["height"]) ? $config["code"]["height"] : 50;
        $this->codeLen = isset($config["code"]["codeLen"]) ? $config["code"]["codeLen"] : 4;
        $this->seed = isset($config["code"]["seed"]) ? $config["code"]["seed"] : "abcdefhjkmnprstuvwxyzABCDEFGHJKLMNOPQRSTVWUXYZ2345678"; //验证码种子
        $this->fontSize = isset($config["code"]["fontSize"]) ? $config["code"]["fontSize"] : array("min" => 20, "max" => 35);
        $this->fontAngle = isset($config["code"]["fontAngle"]) ? $config["code"]["fontAngle"] : array("min" => -15, "max" => 15);
        $this->lineNum = isset($config["code"]["lineNum"]) ? $config["code"]["lineNum"] : array("min" => 6, "max" => 10);
        $this->lineWith = isset($config["code"]["lineWith"]) ? $config["code"]["lineWith"] : array("min" => 1, "max" => 3);
        $this->DotNum = isset($config["code"]["DotNum"]) ? $config["code"]["DotNum"] : array("min" => 300, "max" => 500);
        $this->isCheck = isset($config["code"]["isCheck "]) ? $config["code"]["DotNum"] : false;
        $this->image;
    }
    private function createCanvas()
    {
        $this->image = imagecreatetruecolor($this->width, $this->height);
        imagefill($this->image, 0, 0, $this->setColor());
    }

    private function setColor($type = "background")
    {
        $r = $type == "background" ? mt_rand(0, 134) : mt_rand(0, 255);
        $g = $type == "background" ? mt_rand(0, 140) : mt_rand(0, 255);
        $b = $type == "background" ? mt_rand(0, 140) : mt_rand(0, 255);
        //设置随机值

        return imagecolorallocate($this->image, $r, $g, $b);
    }

    private function getText()
    {
        $str = "";
        for ($i = 0; $i < $this->codeLen; $i++) {
            $str .= $this->seed[mt_rand(0, strlen($this->seed)) - 1];
        }

        return $str;
    }

    private function setText()
    {
        $str = $this->getText();
        $this->str = strtolower($str);
        for ($i = 0; $i < $this->codeLen; $i++) {
            $size = mt_rand($this->fontSize["min"], $this->fontSize["max"]);
            $angle = mt_rand($this->fontAngle["min"], $this->fontAngle["max"]);
            $space = $this->width / ($this->codeLen * 3);
            imagettftext($this->image, $size, $angle, mt_rand(max($space * $i * 3 - 1, 0), $space * $i * 3 + 1), mt_rand($this->fontSize["max"] - 5, ($this->height) - ($this->fontSize["min"]) / 4), $this->setColor("a"), "C:\Users\ABC\Desktop\demo.TTF", $str[$i]);
        }
    }

    private function setLine()
    {
        $num = mt_rand($this->lineNum["min"], $this->lineNum["max"]);
        for ($i = 0; $i < $num; $i++) {
            $x1 = mt_rand(0, $this->width / 2);
            $x2 = mt_rand($this->width / 2, $this->width);
            $y1 = mt_rand(0, $this->height);
            $y2 = mt_rand(0, $this->height);
            imagesetthickness($this->image, mt_rand($this->lineWith["min"], $this->lineWith["max"]));
            imageline($this->image, $x1, $y1, $x2, $y2, $this->setColor());
        }
    }

    private function setDot()
    {
        $num = mt_rand($this->DotNum["min"], $this->DotNum["max"]);
        for ($i = 0; $i < $num; $i++) {
            imagesetpixel($this->image, mt_rand(0, $this->width), mt_rand(0, $this->height), $this->setColor());
        }
    }

    function out()
    {
        header("content-type:image/" . $this->type);
        //1.
        $this->createCanvas();
        //2.线条
        $this->setLine();
        //3.文字
        $this->setText();
        //4.画像素
        $this->setDot();
        $_SESSION["code"] = $this->str;
        $outtake = "image" . $this->type;
        $outtake($this->image);
        imagedestroy($this->image);
    }
}
