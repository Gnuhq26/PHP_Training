<?php
namespace lession9\Controller;

use lession9\Models\User;

class UserController {
    public function show() {
        $user = new User("Hưng đẹp trai provipno1", "a@gmail.com");
        echo $user->info();
    }
}
