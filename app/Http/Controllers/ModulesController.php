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
    public function about()
    {
        $data['component'] = [
            'title' => 'Modules / About',
            'menu' => 'Modules',
            'submenu' => 'About'
        ];
        return view('backend.modules.about', $data);
    }
    public function product()
    {
        $data['component'] = [
            'title' => 'Modules / Product',
            'menu' => 'Modules',
            'submenu' => 'Product'
        ];
        return view('backend.modules.product', $data);
    }
    public function blog()
    {
        $data['component'] = [
            'title' => 'Modules / Blog',
            'menu' => 'Modules',
            'submenu' => 'Blog'
        ];
        return view('backend.modules.blog', $data);
    }
    public function add_blog()
    {
        $data['component'] = [
            'title' => 'Modules / New Blog',
            'menu' => 'Modules',
            'submenu' => 'New Blog'
        ];
        return view('backend.modules.add_blog', $data);
    }
    public function manage_kategori()
    {
        $data['component'] = [
            'title' => 'Modules / Manage Kategori',
            'menu' => 'Modules',
            'submenu' => 'Manage Kategori'
        ];
        return view('backend.modules.manage_kategori', $data);
    }
    public function app_setting()
    {
        $data['component'] = [
            'title' => 'Setting / Application',
            'menu' => 'Setting',
            'submenu' => 'Application'
        ];
        return view('backend.setting.app_setting', $data);
    }
}
