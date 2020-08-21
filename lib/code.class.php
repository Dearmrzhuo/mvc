<?php
namespace lib;
//1.指定输出的格式
class code
{
public $type = "png";
public $width = 150;
public $height = 50;
public $codeLen = 4;
public $seed = "abcdefhjkmnprstuvwxyzABCDEFGHJKLMNOPQRSTVWUXYZ2345678";//验证码种子
public $fontSize = array("min" => 20, "max" => 35);
public $fontAngle = array("min" => -15, "max" => 15);
public $lineNum = array("min" => 6, "max" => 10);
public $lineWith = array("min" => 1, "max" => 3);
public $DotNum = array("min" => 300, "max" => 500);
public $image ;

private function createCanvas(){
$this->image = imagecreatetruecolor($this->width, $this->height);
imagefill($this->image, 0, 0, $this->setColor());
}

private function setColor($type = "background"){
$r = $type == "background" ? mt_rand(0, 134) : mt_rand(0, 255);
$g = $type == "background" ? mt_rand(0, 140) : mt_rand(0, 255);
$b = $type == "background" ? mt_rand(0, 140) : mt_rand(0, 255);
//设置随机值

return imagecolorallocate($this->image, $r, $g, $b);
}

private function getText(){
$str = "";
for ($i = 0; $i < $this->codeLen; $i++) {
$str .= $this->seed[mt_rand(0, strlen($this->seed)) - 1];
}

return $str;
}

private function setText(){
$str = $this->getText();
for ($i = 0; $i < $this->codeLen; $i++) {
$size = mt_rand($this->fontSize["min"], $this->fontSize["max"]);
$angle = mt_rand($this->fontAngle["min"], $this->fontAngle["max"]);
$space = $this->width / ($this->codeLen * 2 - 2);
imagettftext($this->image, $size, $angle, mt_rand($space * $i * 1, $space * $i * 1.5), mt_rand(30, 48), $this->setColor("a"), "C:\Users\ABC\Desktop\demo.TTF", $str[$i]);
}
}

private function setLine(){
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

private function setDot(){
$num = mt_rand($this->DotNum["min"], $this->DotNum["max"]);
for ($i = 0; $i < $num; $i++) {
imagesetpixel($this->image, mt_rand(0, $this->width), mt_rand(0, $this->height), $this->setColor());
}
}

function out(){
header("content-type:image/".$this->type);
//1.
$this->createCanvas();
//2.线条
$this->setLine();
//3.文字
$this->setText();
//
$this->setDot();
$outtake = "image" . $this->type;
$outtake($this->image);
imagedestroy($this->image);
}
}