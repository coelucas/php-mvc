<?php

namespace App\Controllers;

use SON\Controller;

class UsersController extends Controller
{
    public function index()
    {
        return 'Página inicial de usuários';
    }

    public function create()
    {
        return 'Página de cadastro de usuários';
    }
}