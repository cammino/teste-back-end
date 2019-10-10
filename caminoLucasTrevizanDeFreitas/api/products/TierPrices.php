<?php
class TierPrices {

    private $qty = null;
    private $price = null;

    public function __construct ($qty, $price) {
        $this->qty = $qty;
        $this->price = $price;
    }

    public function getQty() {
        return $this->qty;
    }
    public function setQty($qty) {
        $this->qty = $qty;
        return $this;
    }

    public function getPrice() {
        return $this->price;
    }
    public function setPrice($price) {
        $this->price = $price;
        return $this;
    }
}