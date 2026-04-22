<?php

namespace App\Classes;

class User
{
    public string $name;
    public int $age;

    public function greet(): string
    {
        return "Hola, soy " . $this->name. " y tengo ". $this->age;
    }
}

