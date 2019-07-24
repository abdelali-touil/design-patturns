<?php

class Product {
    
    private $name;
    private $qty;
    private $price;

    /**
     * @return $name
     */
    public function getName(): String {
        return $this->name;
    }

    /**
     * @param String $name The name of product
     * @return Product
     */
    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * @return $quantity
     */
    public function getQuantity(): Integer {
        return $this->quantity;
    }

    /**
     * @param Integer $quantity The quantity of product
     * @return Product
     */
    public function setQuantity($quantity): Integer {
        $this->quantity = $quantity;

        return $this;
    }
    
    /**
     * @return $price
     */
    public function getPrice(): Float {
        return $this->price;
    }

    /**
     * @param Float $price The price of product
     * @return Product
     */
    public function setPrice($price) {
        $this->price = $price;

        return $this;
    }
}