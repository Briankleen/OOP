<?php
require_one('car.php');
class UberBlack extends Car {
    public $typeCarAccepted;
    public $seatsmaterial;

    public function__construct($license,$driver,$typeCarAccepted,$seatsMaterial){
        parent::__construct ($license, $driver);
        $this->$typeCarAccepted = $typeCarAccepted;
        $this->$seatsMaterial = $seatsMaterial;

    }
}
?>