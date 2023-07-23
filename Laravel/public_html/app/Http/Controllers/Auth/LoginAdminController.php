<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use \Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginAdminController extends Controller
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
        $this->validateLogin($request);

        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if($this->guard()->validate($this->credentials($request))) {
            if(Auth::attempt(['email' => $request->email, 'password' => $request->password, 'access' => 1])) {
                $user = Auth::user();
                $user->getRoleNames();
                return response()->json($user);
            }  else {
                $this->incrementLoginAttempts($request);
                return response()->json(['error' => 'Esta cuenta no está autorizada'], 401);
            }
        } else {
            $this->incrementLoginAttempts($request);
            return response()->json(['error' => 'Las credenciales no coinciden'], 401);
        }
    }

    protected function authenticated(Request $request, $user)
    {
        $user->getRoleNames();
        return response()->json($user);
    }

    protected function loggedOut(Request $request)
    {
        return response()->json(null);
    }
}
