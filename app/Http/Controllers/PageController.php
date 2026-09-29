<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        $data = [
            'nama' => 'Loina Br Damanik',
            'prodi' => 'Ilmu Komputer',
            'kelas' => '25 C'
        ];

        return view('home', $data);
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}