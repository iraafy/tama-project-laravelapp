<?php

namespace App\Http\Controllers;

use App\Models\User;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth/login');
    }

    public function lecturer_dashboard()
    {
        return view('lecturer_views/welcome');
    }

    public function admin_dashboard()
    {
        return view('admin_views/welcome');
    }

    public function authenticating(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (Auth::user()->role == 'Lecturer'){
                return redirect('/lecturer-dashboard');
            }
            else if (Auth::user()->role == 'Admin') {
                return redirect('/admin-dashboard');
            }
            else {
                return redirect('/');
            }
        }


        Session::flash('status', 'failed');
        Session::flash('message', 'Login Failed!');

        return redirect('/login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
    public function register()
    {
        return view('auth/register');
    }

    public function postRegister(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        if ($user) {
            Session::flash('status', 'add_success');
            Session::flash('message', 'New Data Recorded, Login Now!');
        }

        return redirect('/register');
    }

    public function add_user()
    {
        $user = user::where('status', 'active')->get();
        return view('admin_views/add_user', ['userList' => $user]);
    }

    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        $user->save();

        if ($user) {
            Session::flash('status', 'add_success');
            Session::flash('message', 'User Data Added!');
        }

        return redirect('/add-user');
    }

    public function update_user(Request $request, $id)
    {
        // dd($request->all());
        $user = User::findOrfail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        $user->status = $request->status;

        $user->save();

        if ($user) {
            Session::flash('status', 'update_success');
            Session::flash('message', 'User Data Updated!');
        }

        return redirect('/add-user');
    }

    public function destroy($id)
    {
        $user = User::findOrfail($id);
        $user->delete();

        if ($user) {
            Session::flash('status', 'delete_success');
            Session::flash('message', 'User Data Deleted!');
        }

        return redirect('/add-user');
    }

    public function showForgotForm(){
        return view('auth/forgot');
    }

    public function sendResetLink(Request $request){
        $request->validate([
            'email'=>'required|email|exists:users,email'
        ]);

        $token = \Str::random(64);
        \DB::table('password_resets')->insert([
            'email'=>$request->email,
            'token'=>$token,
            'created_at'=>Carbon::now(),
         ]);

         $action_link = route('showResetForm',['token'=>$token,'email'=>$request->email]);
         $body = "We are received a request to reset the password for <b>Your app Name </b> account associated with ".$request->email.". You can reset your password by clicking the link below";

        \Mail::send('email-forgot',['action_link'=>$action_link,'body'=>$body], function($message) use ($request){
              $message->from('noreply@example.com','Your App Name');
              $message->to($request->email,'Your name')
                      ->subject('Reset Password');
        });

        return back()->with('success', 'We have e-mailed your password reset link!');
    }
    
    public function showResetForm(Request $request, $token = null){
        return view('auth/reset')->with(['token'=>$token,'email'=>$request->email]);
    }

    public function resetPassword(Request $request){
        $request->validate([
            'email'=>'required|email|exists:users,email',
            'password'=>'required|min:5|confirmed',
            'password_confirmation'=>'required',
        ]);

        $check_token = \DB::table('password_resets')->where([
            'email'=>$request->email,
            'token'=>$request->token,
        ])->first();

        if(!$check_token){
            return back()->withInput()->with('fail', 'Invalid token');
        }else{

            User::where('email', $request->email)->update([
                'password'=>\Hash::make($request->password)
            ]);

            \DB::table('password_resets')->where([
                'email'=>$request->email
            ])->delete();

            return redirect()->route('login')->with('info', 'Your password has been changed! You can login with new password')->with('verifiedEmail', $request->email);
        }
    }

}
