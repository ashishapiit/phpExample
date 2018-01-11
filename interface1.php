<?php

// Declare the interface 'iTemplate'
interface iTemplate {

    public function setVariable($name, $var);

    public function getHtml($template);

    public static function testMethod();
}

// Implement the interface
// This will work
class Template implements iTemplate {

    private $vars = array();

    public static function testMethod() {
        
    }

    public function setVariable($name, $var) {
        $this->vars[$name] = $var;
    }

    public function getHtml($template) {
        foreach ($this->vars as $name => $value) {
            $template = str_replace('{' . $name . '}', $value, $template);
        }

        return $template;
    }

}

// This will not work
// Fatal error: Class BadTemplate contains 1 abstract methods
// and must therefore be declared abstract (iTemplate::getHtml)
abstract class BadTemplate implements iTemplate {

    public $vars = array();

    public function setVariable($name, $var) {
        $this->vars[$name] = $var;
    }

}

class Template2 extends BadTemplate {

    public static function testMethod() {
        
    }

    public function getHtml($template) {
        foreach ($this->vars as $name => $value) {
            $template = str_replace('{' . $name . '}', $value, $template);
        }

        return $template;
    }

}

$myObj = new Template2();
$myObj->setVariable("name", "Ashish");
echo $myObj->getHtml('{name}');
?>