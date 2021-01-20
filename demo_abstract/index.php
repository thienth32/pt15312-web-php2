<?php

abstract class LopChaAo{

}

interface Interface1{
    public function hello();
}

interface Interface2{
    
}

trait X{
    
};

class Con extends LopChaAo implements Interface1, Interface2{
    public function hello(){
        return "hello world!";
    }
}

?>