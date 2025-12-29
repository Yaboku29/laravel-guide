<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    //
    /**
     * tampilkan profil pengguna yang diberikan
     */
    // Controller yang dipakai dalam Passing Data
    public function show(string $id): View
    {
        return view('coba',['userID'=>$id]);
    }
    // Controller dipakai dalam materi Controller
    public function test(){
        return view('coba');
    }
}
