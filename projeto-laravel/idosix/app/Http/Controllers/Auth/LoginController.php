<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Routing\Route;

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
    public function redirectTo(){

        // User role
        $id = Auth::id();
        $role = User::find($id);
    
        // Check user role
        switch ($role['tipo']) {
            case 'cliente':
                    return '/cliente/dashboard';
                break;
            case 'medico':
                     return '/medico/dashboard';
                break; 
            case 'admin':
                    return '/admin/dashboard';
                break;
            default:
                    return '/login'; 
                break;
        }
    }
        
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index () {
        return view('auth/login');
    }
}
