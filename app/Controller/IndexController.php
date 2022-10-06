<?php

namespace App\Controller;
use Illuminate\View\View;

class IndexController
{
    public function indexAction(): View
    {
        return view('index');
    }
}