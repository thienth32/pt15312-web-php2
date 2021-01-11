<?php

class ConVit{
    function __construct($ten, $namsinh = 1995, $quoctich = 'Cambodia')
    {
        $this->ten = $ten;
        $this->namSinh = $namsinh;
        $this->quocTich = $quoctich;
    }
}

$donalTrump = new ConVit('Donal Trump', 1992, 'Mỹ');
var_dump($donalTrump);

?>