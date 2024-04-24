<?php

namespace App\Controllers;

use SON\Controller;

class UsersController extends Controller
{
    public function __construct(User $model) {
        $this->model = $model;
    }

    public function index()
    {
        $user = $this->model->get();
        $this->render($user);
    }

    public function create()
    {
        return 'Página de cadastro de usuários';
    }
}