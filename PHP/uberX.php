<?php
require_one('car.php');
class UberX extends Car {
    public $brand;
    public $model;

    public function__construct($license, $driver, $brand, $model){
        parent::__construc($license,$driver);
        $this->brand = $brand;
        $this->model = $model;
    }



}

?>