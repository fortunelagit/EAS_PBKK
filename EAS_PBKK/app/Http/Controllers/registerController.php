<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\peminjam;

class registerController extends Controller
{
    public function index()
    {
        return view("register");
    }
    public function submit(Request $request) {
        // Form validation
        $this->validate($request, [
            'nama' => 'required',
            'email' => 'required|email',
            'notel' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'password'=>'required',
         ]);
         $register = new peminjam();
         $register->P_nama = $request->nama;
         $register->P_email = $request->email;
         $register->P_notel = $request->notel;
         $register->P_password = $request->password;
         $register->save();
         return redirect('register')->with('status', 'Account successfully registered.');
    }
}
