<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){

        $data['nama']="Marcellinus Aditya Vitro Darmawan";
        $data['hobi']="Menonton, Game";
        $data['univ']="UPN Veteran Jawa Timur";


        return view('profile.index', compact('data'));

    }
}
