<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function ContactPage(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view("contents.contact");
    }

    public function ShopPage(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view("contents.shop");
    }
}
