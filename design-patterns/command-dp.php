<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

interface DBCommand {
    public function execute();
}
 
class AddData implements DBCommand {
    private $DBControl;
    public function __construct(dbControl $dbControl) {
        $this->DBControl = $dbControl;
    }
    public function execute() {
        if($this->validate()){
            $this->DBControl->add ();
        }
        
    }
    public function validate(){
        return true;
    }
}
 
class RemoveData implements DBCommand {
    private $DBControl;
    public function __construct(dbControl $dbControl) {
        $this->DBControl = $dbControl;
    }
    public function execute() {
        $this->DBControl->remove();
    }
}


// Receiver
class DBControl {
    public function add() {
        echo "Add Data";
    }
    public function remove() {
        echo "Remove";
    }

}

//foreach($argv as $value)
//{
//  echo "$value\n";
//}

// Client
$in = $argv[1];
//echo $in;
// Invoker
if (class_exists ( $in )) {
    $command = new $in ( new DBControl () );
} else {
    throw new Exception ( '..Command Not Found..' );
}
  
$command->execute ();