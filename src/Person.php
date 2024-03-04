<?php
namespace PHP_Practice;
class Person {
    protected $name;
    public function __construct($name) {
        $this->name = $name;
    }
}