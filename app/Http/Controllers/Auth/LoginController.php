<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;
use App\Models\User;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    public function login(Request $request)
    {
       
        // Validate login input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Attempt login
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // Regenerate session to prevent fixation
            $request->session()->regenerate();
            $user= User::where("email", $request->email)->first();
            

        if ($user->role_id==1) {
            return redirect()->intended('/user');
        }

        else if($user->role_id==2) {
            return redirect()->intended('/kelas');
        }

        else if($user->role_id==3) {
            return redirect()->intended('/home');
        }


            // Redirect to the desired page
            return redirect()->intended('/home'); // Change this to your custom redirect
        }

        // Redirect back with error if login fails
        return back()->withErrors([
            'email' => 'Invalid email or password.',
        ]);
    }
}
