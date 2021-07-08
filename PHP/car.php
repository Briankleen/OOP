<?php
require_once('account.php');
class Car{
    public $id;
    public $license;
    public $driver;
    protected $passenger;

    public function__construct($license, $driver)
    {
        $this->license = $license;
        $this->driver = $driver;
    }

    public function PrintDataCar(){
        echo "license: $this->license,driver:" $this->driver->name;

    
    }
}
?>