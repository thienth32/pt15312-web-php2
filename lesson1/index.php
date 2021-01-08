<?php

class ConMeo{
    var $name;
    var $age;
    var $hairColor;
    var $weight = 1;

    function dingu(){
        return $this->name . " Tôi đi ngủ rồi!<br>";
    }

    function an($foodType = 1){
        // có 3 loại giá trị của foodtype
        // nếu = 1 => mỗi lần ăn tăng 1 cân
        // nếu = 2 => mỗi lần ăn tăng 0.5 cân
        // nếu = 3 => mỗi lần ăn tăng 2 cân
        $this->weight++;
    }
    function chuyennhuong(){
        // trả về giá chuyển nhượng của con mèo
        // công thức tính = 2 lần số tuổi + cân nặng 
    }
}
$alex = new ConMeo();
$alex->name = "Trần Văn Lếch";

echo "<pre>";
var_dump($alex);
$alex->an();
var_dump($alex);




?>