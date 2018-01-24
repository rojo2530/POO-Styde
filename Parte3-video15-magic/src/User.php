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
        $this->attributes = $attributes;
    }
    public function __get($name)
    {
        return isset($this->attributes[$name])
            ? $this->attributes[$name]
            : null;
    }
}
