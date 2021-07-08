<?php
require_one('car.php');
class UberPool extends Car {
    public $Brand;
    public $model;

    public function__construct($license, $driver, $Brand, $Model){
        parent::__construct ($license, $driver);
        $this->$Brand = $Brand;
        $this->$Model = $Model;

    }
}
?>