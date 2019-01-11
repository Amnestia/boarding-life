<?php

namespace App\Http\Controllers;

use App\User;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    /**
     * Register a new user
     *
     * @param \Illuminate\Http\Request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    function register(Request $req)
    {
        $rules=[
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6|confirmed'
        ];

        $input=Input::only('name','email','password','password_confirmation');
        $validator=Validator::make($input,$rules);
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator->errors());
        }

        $user = new User();
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=bcrypt($req->password);
        $user->save();

        return redirect('/');
    }

    /**
     * Signing in user
     *
     * @param \Illuminate\Http\Request
     *
     * @return \Illuminate\Http\RedirectResponse
     */

    function signIn(Request $req)
    {
        $rules = [
            'email' => 'required|email',
            'password' => 'required'
        ];

        $input = Input::only('email', 'password');

        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        if (Auth::attempt(['email' => $req->email, 'password' => $req->password])) {
            return redirect('/');
        } else {
            return redirect()->back()->withErrors(['login','Wrong email or password']);
        }
    }

    function signOut()
    {
        Auth::logout();
        return redirect("/");
    }
}
