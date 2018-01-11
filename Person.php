<?php
namespace myname;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of person
 *
 * @author Ashish
 */
class Person{

    //put your code here
    const AVG_AGE = 80;
    
    public $firstName = "Ashish";
    public $lastName = "Kumar";
    private $dob;
    public function __construct($fname = "", $lname = "", $dob = "") {
        echo "Person consturctor called";
        if (!empty($fname)) {
            $this->firstName = $fname;
            $this->lastName = $lname;
            $this->dob = $dob;
        }
    }
    protected function dob(){
        
        return $this->dob;
    }
    public function getFirstName() {
        return $this->firstName;
    }

    public function setFirstName($fname) {
        $this->firstName = $fname;
    }

}

class Student extends Person{
    public $sid;
    public $fee;
    const AVG_AGE = 60;
    public function __construct($fname = "", $lname = "", $dob = "") {
        echo "Student constuct called";
        parent::__construct($fname, $lname, $dob);
     //   echo $this->getFirstName();
    }
    public  function setFirstName($fname = "Arun", $lname = "") {
        //$this->setFirstName($fname);
        
        $name = "Mr.". $fname;
        $this->firstName = $name;
        //parent::setFirstName($name);
    }
    public function getFee(){
        return $this->fee;
    }
    public function setSee($fee){
        $this->fee = $fee;
    }
    public function getDob(){
        return $this->dob();
       // return $this->dob;
    }
}

//$myObj = new Student("Ashish", "Kumar", "11111");
//$myObj->setFirstName("ashish", "kumar");
//print_r($myObj->getDob());

//$myObj ->setFirstName("Girish");
//echo $myObj->getFirstName() .'</br>';
//echo $myObj::AVG_AGE .'</br>';
//echo Person::AVG_AGE .'</br>';
////print_r($myObj);
//
//$secondObj = new Person();
//echo $secondObj->getFirstName() .'</br>';
//$secondObj ->setFirstName("Girish2");
//echo $secondObj->getFirstName();
