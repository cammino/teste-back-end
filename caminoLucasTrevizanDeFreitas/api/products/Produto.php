<?php
class Produto {

    private $id = null;
    private $name = null;
    private $regular_price = null;
    private $special_price = null;
    private $sprecial_price_from = null;
    private $sprecial_price_tro = null;
    private $tier_prices = null;

    public function __construct ($id, $name, $regular_price, $special_price, $sprecial_price_from, $sprecial_price_tro, $tier_prices) {
        $this->id = $id;
        $this->name = $name;
        $this->regular_price = $regular_price;
        $this->special_price = $special_price;
        $this->sprecial_price_from = $sprecial_price_from;
        $this->sprecial_price_tro = $sprecial_price_tro;
        $this->tier_prices = $tier_prices;
    }

    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function getName() {
        return $this->name;
    }
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function getRegular_price() {
        return $this->regular_price;
    }
    public function setRegular_price($regular_price) {
        $this->regular_price = $regular_price;
        return $this;
    }

    public function getSpecial_price() {
        return $this->special_price;
    }
    public function setSpecial_price($special_price) {
        $this->special_price = $special_price;
        return $this;
    }

    public function getSprecial_price_from() {
        return $this->sprecial_price_from;
    }
    public function setSprecial_price_from($sprecial_price_from) {
        $this->sprecial_price_from = $sprecial_price_from;
        return $this;
    }

    public function getSprecial_price_tro() {
        return $this->sprecial_price_tro;
    }
    public function setSprecial_price_tro($sprecial_price_tro) {
        $this->sprecial_price_tro = $sprecial_price_tro;
        return $this;
    }

    public function getTier_prices() {
        return $this->tier_prices;
    }
    public function setTier_prices($tier_prices) {
        $this->tier_prices = $tier_prices;
        return $this;
    }

}