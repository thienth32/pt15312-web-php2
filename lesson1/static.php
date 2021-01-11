<?php

class Cha{
    static function demo(){
        $model = new static();
        
        return $model;
    }
    function demo2(){
        $x = get_class($this);
        echo $x . " Hàm demo2 đã chạy";
    }
}
class Con extends Cha{ }
class ConOngHangXom extends Cha{ }

Con::demo()->demo2();


?>