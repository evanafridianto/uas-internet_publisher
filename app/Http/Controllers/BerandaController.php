<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    //
    public function index()
    {
        $data = [
        	'page_title'  => 'Beranda',
        ];
        return view('admin/pages/beranda',$data);
        // return view('welcome');
    }
}