<?php
namespace lession9\Models;

class User {
    public $name;
    public $email;

    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }

    public function info() {
        return "My name is {$this->name} - {$this->email}";
    }
}
