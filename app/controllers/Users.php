<?php

class Users extends Controller
{
    public function __construct()
    {
        $this->userModel = $this->model('User');
    }

    public function login()
    {

        $data = [
            'title' => 'login page',
        ];

        $this->view('users/login.php', $data);
    }
}
