<?php 
interface Subject {
    public function addCurrency(Observer $currency);
}
 
class priceSimulator implements Subject {
    private $currencies;
     
    public function __construct() {
        $this->currencies = array();
    }
     
    public function addCurrency(Observer $currency) {
        array_push($this->currencies, $currency);
    }
    public function removerCurrnecy(Observer $currency){
        
    }
    public function notify() {
        foreach ($this->currencies as $currency) {
            $currency->update();
        }
    }
}
 
interface Observer {
    public function update();
    public function getPrice();
}
 
class Pound implements Observer {
    private $price;
     
    public function __construct($price) {
        $this->price = $price;
        echo "<p>Pound Original Price: {$price}</p>";
    }
     
    public function update() {
        $this->price = $this->getPrice();
        echo "<p>Pound Updated Price : {$this->price}</p>";
    }
     
    public function getPrice() {
        return f_rand(0.65, 0.71);
    }
     
}
 
class Yen implements Observer {
    private $price;
 
    public function __construct($price) {
        $this->price = $price;
        echo "<p>Yen Original Price : {$price}</p>";
    }
 
    public function update() {
        $this->price = $this->getPrice();
        echo "<p>Yen Updated Price : {$this->price}</p>";
    }
     
    public function getPrice() {
        return f_rand(120.52, 122.50);
    }
     
}
class Rupees implements Observer {
    private $price;
 
    public function __construct($price) {
        $this->price = $price;
        echo "<p>Yen Original Price : {$price}</p>";
    }
 
    public function update() {
        $this->price = $this->getPrice();
        echo "<p>Yen Updated Price : {$this->price}</p>";
    }
     
    public function getPrice() {
        return f_rand(120.52, 122.50);
    }
     
}
 
function f_rand($min=0,$max=1,$mul=1000000){
    if ($min>$max) 
        return false;
    
    return mt_rand($min*$mul,$max*$mul)/$mul;
}
 
$priceSimulator = new priceSimulator();
 
$currency1 = new Pound(0.60);
$currency2 = new Yen(122);
$currency3 = new Rupees(60);
$priceSimulator->addCurrency($currency1);
$priceSimulator->addCurrency($currency2);
$priceSimulator->addCurrency($currency3);
echo "<hr />";
$priceSimulator->notify();
 
echo "<hr />";
$priceSimulator->notify();