<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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

    public function authenticated()
    {
        if(Auth::user()->id_role_as == '1') //isAdmin
        {
            return redirect('admin/dashboard')->with('status', 'Admin Dashboard');
        }
        else if(Auth::user()->id_role_as == '2') //User)
        {
            return redirect('/daftar')->with('status', 'Welcome');
        }
        else
        {
            return redirect('/')->with('status', 'Welcome');
        }
    }

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
    }

    public function registered(\Illuminate\Http\Request $request,$user)
    {
        return redirect()->route('landing.daftar');
    }
}
