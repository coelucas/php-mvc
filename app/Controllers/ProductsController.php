<?php

namespace App\Controllers;

use SON\Controller;
use App\Models\Product;

class ProductsController extends Controller
{
    public function __construct(Product $model) {
        $this->model = $model;
    }

    public function index()
    {
        $this->render();
    }
}