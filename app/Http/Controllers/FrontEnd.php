<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEnd extends Controller
{
    public function home()
    {
        $data['component'] = [
            'title' => 'Home',
            'menu' => 'Menu'
        ];
        return view('frontend.home', $data);
    }
    public function about()
    {
        $data['component'] = [
            'title' => 'About',
            'menu' => 'Menu'
        ];
        return view('frontend.about', $data);
    }
}
