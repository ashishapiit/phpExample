<?php

interface factory {
    static function makeCar($type);
}

class CarFactroy implements factory {

    static function makeCar($type) {
        $className = $type . 'Car';
        if (class_exists($className)) {
            return new $className();
        } else {
            throw new Exception('Unable to crate car');
        }
    }

}

class AutoFactory implements factory  {

    static function makeCar($type) {
        $className = $type . 'Car';
        if (class_exists($className)) {
            return new $className();
        } else {
            throw new Exception('Unable to crate car');
        }
    }

}

interface car {

    public function start();

    public function stop();
}

class SuvCar implements car {

    public function __toString() {
        return "SuvCar";
    }

    public function start() {
        echo 'started Suv Car';
    }

    public function stop() {
        echo 'stopped Suv Car';
    }

}

class MiniCar implements car {

    public function __toString() {
        return "MiniCar";
    }

    public function start() {
        echo 'started Mini Car';
    }

    public function stop() {
        echo 'stopped Mini Car';
    }

}

echo $car = CarFactroy::makeCar('Suv');
echo $car->start();
