<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UniversityController extends Controller
{
    public function index(){

        $data['nama']="UPN Veteran Jawa Timur";
        $data['alamat']="Jl.Raya Rungkut Madya, Gunung Anyar, Surabaya";
        $data['telp']="+62 (031) 870 6369";
        $data['fax']="+62 (031) 870 6372";

        return view('university.index', compact('data'));

    }
}

