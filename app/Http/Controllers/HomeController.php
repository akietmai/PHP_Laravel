<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'id' => 1,
            'name' => 'kiet',
            'email' => 'akietmai@gmail.com'
        ];

        return view('home.index', $data);
    }
}
