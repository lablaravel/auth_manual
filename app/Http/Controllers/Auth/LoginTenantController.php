<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\UserInformation;
use Illuminate\Http\Request;

class LoginTenantController extends Controller
{
    public function view()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $request->only('cpf','cellphone');
        $userinformation = UserInformation::all();
        //$userinformation->()->where('cpf',$request->cpf)->first();
        dd($userinformation->where('cpf',$request->cpf)->first());       
    }
}
