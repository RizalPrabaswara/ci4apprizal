<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Rizal Prabaswara Website',
            'tes' => ['satu', 'dua', 'tiga']
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About | Rizal Prabaswara Website'
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact | Rizal Prabaswara Website',
            'alamat' => [
                [
                    'tipe' => 'rumah',
                    'alamat' => 'Jl Tugiman No 22',
                    'kota' => 'Surabaya'
                ],
                [
                    'tipe' => 'kantor',
                    'alamat' => 'Jl Kedung Baruk no 98',
                    'kota' => 'Bandung'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }
}
