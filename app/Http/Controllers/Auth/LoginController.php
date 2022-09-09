<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($request->ajax()) {
            if (auth()->attempt(['email' => $request->get('email'), 'password' => $request->get('password')])) {
                if (auth()->user()->getIsAdminAttribute()) {
                    return response()->json(["success" => true, "role" => 'admin']);
                } else {
                    return response()->json(["success" => true, "role" => 'user']);
                }
            } else {
                return response()->json(["success" => false, "message" => 'خطأ في البريد الالكتروني او كلمة المرور']);
            }
        }

    }
}
