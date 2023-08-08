<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data['component'] = [
            'title' => 'Dashboard',
            'menu' => 'Menu'
        ];
        return view('backend.dashboard.index', $data);
    }
}
