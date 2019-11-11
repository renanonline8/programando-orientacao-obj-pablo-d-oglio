<?php
class ObjectData
{
    private $data;

    public function __get(String $attr)
    {
        return $this->data[$attr];
    }

    public function __set(String $attr, $value) : void
    {
        $this->data[$attr] = $value;
    }

    public function __isset(String $attr) : bool
    {
        return isset($this->data[$attr]);
    }

    public function __unset(String $attr)
    {
        unset($this->data[$attr]);
    }

    public function __call(String $method, Array $parameters)
    {
        return call_user_func($method, get_object_vars($this));
    }
}