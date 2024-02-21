<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function SingleProduct(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view("contents.shop_single");
    }
}
