<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\Util;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth ;
use Illuminate\Support\Facades\Validator;

class AuthUser extends Controller
{
    function userLogin(Request $request,Util $util)
    {
       
       if($error = $util->findValidationErrors($request,['email'=>'required','password'=>'required']))return $error;
        $validate_user = Auth::attempt(['email'=>$request->email,'password'=>$request->password]);
        if($validate_user)
        {
            $user = Auth::user(); 
            $success['token'] =  $user->createToken('MyApp')->plainTextToken; 
            $success['name'] =  $user->name;
            $success['id'] = $user->id;
            $success['status'] = 'success';
            $success['role']=$user->roles;
   
            return response()->json($success);
        }else{
            return response()->json(['status'=>'error','error_type'=>'auth_error','error_content'=>'Sorry,Email or password is invalid']);

        }
    }
    function test()
    {
        return response()->json(['used']);
    }
}
