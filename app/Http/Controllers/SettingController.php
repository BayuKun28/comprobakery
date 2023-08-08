<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function app_setting()
    {
        $data['component'] = [
            'title' => 'Setting / Application',
            'menu' => 'Setting',
            'submenu' => 'Application'
        ];
        return view('backend.setting.app_setting', $data);
    }
    public function user_setting()
    {
        $data['component'] = [
            'title' => 'Setting / Users',
            'menu' => 'Setting',
            'submenu' => 'Users'
        ];
        return view('backend.setting.user', $data);
    }
}
