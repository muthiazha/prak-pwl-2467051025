<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile($nama = "", $npm = "", $kelas = "") {
        $data = [
            'nama' => 'Muthia Zhafira',
            'npm' => '2467051025',
            'kelas' => 'B',
        ];

        return view('profile', $data);        
    }
}
