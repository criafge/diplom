<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UpdateDataUserController extends Controller
{

    public function __invoke(Request $request, User $user)
    {
        if(empty($request->password)){
            $pass = $user->password;
        }else{
            $pass = $request->password;
        }
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>$pass,
        ]);
        return redirect()->back();
    }
}
