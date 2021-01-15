<?php

class A{

    public function demo2(){
        return 345;
    }

    public static function demo(){
        $item = new static(); // <=> new A();
        return $item;
    }
}

class B extends A{}
class C extends A{}
var_dump(C::demo());

?>