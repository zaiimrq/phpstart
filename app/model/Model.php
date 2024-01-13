<?php

namespace App\model;

trait Model
{
    public function __set($prop, $val)
    {
        property_exists($this, $prop) ?
            $this->$prop = $val : false;
    }

    public function __get($prop)
    {
        return property_exists($this, $prop) ?
            $this->$prop : null;
    }
}
