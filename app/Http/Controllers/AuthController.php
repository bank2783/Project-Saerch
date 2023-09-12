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

    private $myauth;
    private $app;
    private $dc;
    private $appId;
    private $appSecret;


    public function __construct(){
        $this->appId = env('NSRU_APP_ID');
        $this->appSecret = env('NSRU_APP_SECRET');
        $this->app = new App($this->appId, $this->appSecret);
        $this->myauth = $this->app->createMyAuth();
        $this->dc = $this->app->createDataCore();

    }

    public function signin() {
        $signinPostbackUrl = $this -> myauth->getSigninURL(route('signin_postback'));
        return redirect()->to($signinPostbackUrl);
    }

    public function signinPostback(Request $request) {
        $this->myauth->doSigninPostback();
        $username = $request->input('username');


        if($staff = $this->dc->find_staff($username)) {
            // บุคลากร
            $email = $username.'@local';
            if($user = User::where('email', $email)->first()) {
                Auth::login($user);
            } else {
                $newUser = new User();
                dd($staff);
                $newUser->name = $staff->fullname_th;
                $newUser->email = $email;
                $newUser->password = bcrypt(Str::random(16));
                $newUser->save();
                Auth::login($newUser);
            }
        } else if($student = $this->dc->find_student($username)) {
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
        $signoutPostbackUrl = $this->myauth->getSignoutURL(route('signout_postback'));
        return redirect()->to($signoutPostbackUrl);
    }

    public function signoutPostback() {

        Auth::logout();
        Session::flush();
        $this->myauth->doSignoutPostback();
        // $this->app->createMyAuth()->doSignoutPostback(url('/'));
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
