<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\UserInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginTenantController extends Controller
{
    public function view()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $request->only('cpf','cellphone');  
        $userinformation = UserInformation::select(['cpf','user_id'])->get();       
        $valor = $userinformation->where('cpf',$request->cpf)->pluck('user_id')->toArray();  
         

      
        if(Auth::loginUsingId($valor))
        {
            dd('deu certo ');
        }
            dd('deu errado');
    }
}
