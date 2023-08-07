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
    public function product()
    {
        $data['component'] = [
            'title' => 'Product',
            'menu' => 'Menu'
        ];
        return view('frontend.product', $data);
    }
    public function detail_product()
    {
        $data['component'] = [
            'title' => 'Detail Product',
            'menu' => 'Menu'
        ];
        return view('frontend.detail_product', $data);
    }
    public function blog()
    {
        $data['component'] = [
            'title' => 'Blog',
            'menu' => 'Menu'
        ];
        return view('frontend.blog', $data);
    }
    public function detail_blog()
    {
        $data['component'] = [
            'title' => 'Detail Blog',
            'menu' => 'Menu'
        ];
        return view('frontend.detail_blog', $data);
    }
    public function contact()
    {
        $data['component'] = [
            'title' => 'Contact',
            'menu' => 'Menu'
        ];
        return view('frontend.contact', $data);
    }
}
