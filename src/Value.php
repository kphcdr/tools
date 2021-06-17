<?php


namespace Tools;


class Value
{
    public function __construct(array $array)
    {
        if (is_array($array)) {
            foreach ($array as $k => $v) {
                if (property_exists($this, $k)) {
                    $this->{$k} = $v;
                }
            }
        }
    }

    public function toArray(): array
    {
        return get_object_vars($this);
    }
}