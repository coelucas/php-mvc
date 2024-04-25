<?php

namespace App\Controllers;

use SON\Controller;
use App\Models\User;

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