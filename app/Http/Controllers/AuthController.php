<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use NSRU\App;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function signin() {
        $appId = env('NSRU_APP_ID');
        $appSecret = env('NSRU_APP_SECRET');
        $app = new App($appId, $appSecret);
        $myAuth = $app->createMyAuth();
        $signinPostbackUrl = $myAuth->getSigninURL(route('signin_postback'));
        return redirect()->to($signinPostbackUrl);
    }

    public function signinPostback(Request $request) {

        $username = $request->input('username');

        $appId = env('NSRU_APP_ID');
        $appSecret = env('NSRU_APP_SECRET');
        $app = new App($appId, $appSecret);
        $myAuth = $app->createMyAuth();
        $dc = $app->createDataCore();
        if($staff = $dc->find_staff($username)) {
            // บุคลากร
            $email = $username.'@local';
            if($user = User::where('email', $email)->first()) {
                Auth::login($user);
            } else {
                $newUser = new User();
                $newUser->name = $staff->fullname_th;
                $newUser->email = $email;
                $newUser->password = bcrypt(Str::random(16));
                $newUser->save();
                Auth::login($newUser);
            }
        } else if($student = $dc->find_student($username)) {
            // นักศึกษา
            $email = $username.'@local';
            if($user = User::where('email', $email)->first()) {
                Auth::login($user);
            } else {
                $newUser = new User();
                $newUser->name = $student->fullname_th;
                $newUser->email = $email;
                $newUser->password = bcrypt(Str::random(16));
                $newUser->save();
                Auth::login($newUser);
            }
        }

        return redirect('/');
    }

    public function signout() {
        $appId = env('NSRU_APP_ID');
        $appSecret = env('NSRU_APP_SECRET');
        $app = new App($appId, $appSecret);
        $myAuth = $app->createMyAuth();
        $signoutPostbackUrl = $myAuth->getSignoutURL(route('signout_postback'));
        return redirect()->to($signoutPostbackUrl);
    }

    public function signoutPostback() {

        // Session::invalidate();


        Auth::logout();
        Session::flush();
        return redirect('/');
    }

    public function login(){


    return view('Login.login');
    }

    public function register(){


    return view('login.register');
    }

    public function RegisterPost(Request $request){

        // $request -> validate([
        //     'frist_name' => 'required',
        //     'email' => 'required',
        //     'password' => 'required',
        //     'passwordconfirm' => 'required',
        // ]);
        $user = User::create([
            'name' => $request -> first_name,
            'email' => $request -> email,
            'password' => Hash::make($request -> password),
        ]);
        Auth::login($user);
        return redirect('/');
    }
    public function loginPost(Request $request){
        $credentials = $request -> validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials)){
            return redirect()->intended('/');
        }else{
            return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
        }

    }

}
