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
    public function show(string $id): View
    {
        return view('user.profile', [
            'user' =>User::findorFail($id)
        ]);
    }
    public function test(){
        return view('coba');
    }
}
