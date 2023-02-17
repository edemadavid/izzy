<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function registerpage() {

        if ( session()->has('loginId') ){

            return redirect()->action(
                [AdminController::class, 'index']

            );
        }

        return(view('auth.register'));
    }

    public function loginpage() {

        if ( session()->has('loginId') ){

            return redirect()->action(
                [AdminController::class, 'index']

            );
        }

        return(view('auth.login'));
    }


    public function register(Request $request) {
        $request->validate([
            'name'=> 'required',
            'email'=> 'required|email',
            'password'=> 'required|min:6|max:12'
        ]);


        $user = new User();
        $user->name = $request->name;
        $user->email = $request ->email;
        $user->password = Hash::make($request ->password);
        $res = $user -> save();


        if($res){

            $loggedInUser = User::where('email', $user->email)->get();

            // dd($loggedInUser[0]);

            $request->session()->regenerate();

            $request->session()->put('loginId', $loggedInUser[0]->id);

            return redirect()->action(
                [AdminController::class, 'index']

            );
        } else {
            return back()->with('failed', 'something went wrong');
        }


    }

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {

        // dd($request);

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);


        $user = User::where('email', '=', $request->email) -> first();

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $request->session()->put('loginId', $user->id);

            return redirect()->action(
                [AdminController::class, 'index']

            );
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
            'password'=> 'Incorrect password'
        ]);
    }


    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
