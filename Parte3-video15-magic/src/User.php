<?php
namespace Styde;
class User {
 //   public function getFirstNameAttribute($value)
 //   {
 //       return strtoupper($value);
 //   }
    protected $attributes = [];
    public function __construct(array $attributes = [])
    {
        //foreach ($attributes as $key => $value) {
        //    $this->$key = $value;  //$this->first_name = $value
        //}
        $this->fill($attributes);
    }
    public function getAttributes()
    {
        return $this->attributes;
    }
    public function fill(array $attributes = [])
    {
        $this->attributes = $attributes;
    }

    public function __get($name)
    {
        return $this->getAttribute($name);
    }
    public function getAttribute($name)
    {
        if (array_key_exists($name, $this->attributes)) {
            return $this->attributes[$name];
        }
    }
    public function __set($name, $value)
    {
        $this->setAttribute($name, $value);
    }
    public function setAttribute($name, $value)
    {
        $this->attributes[$name] = $value;
    }
    public function __isset($name)
    {
        return isset($this->attributes[$name]);
    }
}
