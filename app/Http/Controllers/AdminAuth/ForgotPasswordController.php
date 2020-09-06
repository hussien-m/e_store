<?php

namespace App\Http\Controllers\AdminAuth;
use DB;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    public function showLinkRequestForm()
    {
        /*
        return view('admin_auth.passwords.email');
        */
    }

    public function sendResetLinkEmail(Request $request)
    {
        /*
        $request->validate(['email' => 'required|email']);
        $admin = Admin::where('email' ,'=' , $request->email)->first();
        if(empty($admin)){
            return back();
        } else {

            $token = app('auth.password.broker')->createToken($admin);
            $data  = DB::table('password_resets')
                     ->insert([
                         'email'      => $admin->email,
                         'token'      => $token,
                         'created_at' => Carbon::now()->subHours(2),
                     ]);
                    session()->flash('success','تم ارسال التكون');
                    return back();
        }
        */
    }

}
