<?php

class code
{
    public $width;
    public $height;
    public $img;
    public $char = '234567890qwertyuiopasdfghjklzxcvbnmQWERTYUIOPLKJHGFDSAMNBVCXZ';
    public $length;
    public $linenum = 6;
    public $pointnum = 50;
    public $code;
    function __construct($width, $height, $length)
    {
        $this->width = $width;
        $this->height = $height;
        $this->length = $length;
    }

    /*
     * 创建一张图片
     *   添加背景颜色
     * 获取验证码
     * 输出图片
     * */
    function createImage()
    {
        $this->img = imagecreatetruecolor($this->width, $this->height);
        $arr = $this->RandomColor();
        $color = imagecolorallocate($this->img, $arr[0], $arr[1], $arr[2]);
        imagefill($this->img, 0, 0, $color);
    }

    function RandomColor()
    {
        $arr = [];
        for ($i = 0; $i < 3; $i++) {
            array_push($arr, rand(108, 255));
        }
        return $arr;
    }

    function RandomLineColor()
    {
        $arr = [];
        for ($i = 0; $i < $this->linenum; $i++) {
            array_push($arr, rand(0, 107));
        }
        return $arr;
    }

    function draw()
    {
        for ($i = 0; $i < $this->linenum; $i++) {
            $x1 = rand(0, $this->width / 2);
            $y1 = rand(0, $this->height / 2);
            $x2 = rand($this->width / 2, $this->width);
            $y2 = rand($this->height / 2, $this->height);
            $arr = $this->RandomLineColor();
            $color = imagecolorallocate($this->img, $arr[0], $arr[1], $arr[2]);
            if ($i < $this->linenum / 2) {
                imageline($this->img, $x1, $y1, $x2, $y1, $color);
            } else {
                imageline($this->img, $x2, $y2, $x1, $y2, $color);
            }
        }
        for ($i = 0; $i < $this->pointnum; $i++) {
            $arr = $this->RandomLineColor();
            $color = imagecolorallocate($this->img, $arr[0], $arr[1], $arr[2]);
            imagesetpixel($this->img, rand(0, $this->width), rand(0, $this->height), $color);
        }
        $code=$this->getText();
        for ($i = 0; $i < $this->length; $i++) {
            $arr=$this->RandomLineColor();
            $color = imagecolorallocate($this->img, $arr[0], $arr[1], $arr[2]);
            $size = rand(20, 30);
            $x = rand($this->width / 4 * $i, ($this->width / 4 * ($i * 1 + 1)-40));
            $y = rand(30, $this->height - 10);
            $text=substr($code,$i,1);
            @imagettftext($this->img, $size, 0, $x, $y, $color, FONT_PATH.'simsunb_0.ttf', $text);
        }
    }
    function getText(){
        $text='';
        for ($i = 0; $i < $this->length; $i++) {
            $text.=substr($this->char, rand(0, 60), 1);
        }
        $this->code=$text;
        return $text;
    }
    function outPut()
    {
        header('Content-type:image/png');
        $this->createImage();
        $this->draw();
        imagepng($this->img);
        imagedestroy($this->img);
    }
}

