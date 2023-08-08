<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModulesController extends Controller
{
    public function home()
    {
        $data['component'] = [
            'title' => 'Modules / Home',
            'menu' => 'Modules',
            'submenu' => 'Home'
        ];
        return view('backend.modules.home', $data);
    }
}
