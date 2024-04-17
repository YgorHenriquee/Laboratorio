<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated(Request $request, $user)
    {
        \Log::info('User: ' . $user->name . ', Admin: ' . $user->is_admin);
    
        if ($user->is_admin) {
            \Log::info('Redirecting to administrador route');
            return redirect()->route('administrador');
        }
    
        \Log::info('Redirecting to labs route');
        return redirect()->route('labs');
    }
}    