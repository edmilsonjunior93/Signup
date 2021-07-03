<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Signup;
use App\Http\Requests\SignupRequest;
use Symfony\Component\Console\Input\Input;


class SignupController extends Controller
{
    public function signups()
    {
        $names= Signup::all();
        return view('list',compact('names'));
    }

    public function formAdd()
    {
        return view('form');
    }

    public function add(SignupRequest $request)
    {
        Signup::create($request->all());

        $request->session()->flash('sucesso',"Cadastro incluido com sucesso!");

        return redirect()->route('list');
    }
}
