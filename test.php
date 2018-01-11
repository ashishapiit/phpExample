<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of test
 *
 * @author Ashish
 */
class test {
    const AVG_AGE = 80;
    //put your code here
    public $var = 'a default value';

    // method declaration
    public function displayVar() {
        echo $this->var;
    }
}

$t = new test();
$t->var = "Ashish";
echo $t->displayVar()."\n";
echo  $t::AVG_AGE;
