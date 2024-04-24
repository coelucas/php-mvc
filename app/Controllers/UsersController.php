<?php

namespace App\Controllers;

use SON\Controller;

class UsersController extends Controller
{
    public function index()
    {
        $this->render(['nome' => 'Lucas'], 'users/index');
    }

    public function create()
    {
        return 'Página de cadastro de usuários';
    }
}