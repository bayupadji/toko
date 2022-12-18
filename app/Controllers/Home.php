<?php

namespace App\Controllers;

use App\Models\DiskonModel;

class Home extends BaseController
{
    public function index()
    {
        $diskon = new DiskonModel();
        return view('home', [
            'diskon' => $diskon->findAll()
        ]);
    }

    public function contact()
    {
        return view('contact');
    }
}
