<?php
class foo {
    public $bar = <<<ABC
            333bar
ABC;
    public function getInfo(){
        echo $this->bar;
    }
}
$myobj = new foo();
$myobj->getInfo();
// Identifier must not be indented
?>