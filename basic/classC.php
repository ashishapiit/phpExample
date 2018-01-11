<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace basic;
use basic\classA;
use myname\Person;
//include '../Person.php';
/**
 * Description of classC
 *
 * @author Ashish
 */
class classC {
    //put your code here
    public function __construct() {
        $myObj = new classA;
       // $myObj::AVG_AGE;
    }
}

$objC = new classC();