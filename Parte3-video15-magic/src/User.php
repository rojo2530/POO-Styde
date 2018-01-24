<?php
namespace Styde;
class User {
 //   public function getFirstNameAttribute($value)
 //   {
 //       return strtoupper($value);
 //   }
    public function __construct(array $attributes = [])
    {
        foreach ($attributes as $key => $value) {
            $this->$key = $value;  //$this->first_name = $value
        }
    }
}
