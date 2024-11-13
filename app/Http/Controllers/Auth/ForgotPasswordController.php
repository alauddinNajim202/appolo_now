<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\OtpMailNotication;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ForgotPasswordController extends Controller
{
    public function show_forgot_password_form()
    {
        return view('auth.forgot-password');
    }



    public function send_otp(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->withErrors(['email' => 'Email not found']);
        }

        // Generate OTP
        $otp = rand(100000, 999999);
        $user->otp = $otp;
        $user->otp_expires_at = Carbon::now()->addMinutes(10);
        $user->save();

        // Send OTP email using the OtpMail Mailable
        Mail::to($user->email)->send(new OtpMailNotication($otp, $user));

        return redirect()->route('verify-otp.form')->with('email', $user->email);
    }





    public function show_verify_otp_form()
    {
        return view('auth.verify');
    }


    public function verify_otp(Request $request)
    {
        // Validate that all fields are filled
        $request->validate([
            'otp' => 'required|array|size:6',
            'otp.*' => 'required|numeric|digits:1'
        ]);

        // Combine OTP fields into a single string
        $otp = implode('', $request->otp);
        // dd($otp);

        $user = User::where('email', $request->email)->first();

        if (!$user || $user->otp !== $otp || Carbon::now()->greaterThan($user->otp_expires_at)) {
            return back()->withErrors(['otp' => 'Invalid or expired OTP']);
        }

        // OTP is valid; proceed with the next step
        return redirect()->route('reset_password.form', ['user' => $user]);
    }


    public function show_reset_password_form()
    {
        return view('auth.reset-password');
    }


    public function reset_password(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed',
        ]);

        // Check if validation fails
        if ($validator->fails()) {

            return response()->json(['success' => false, 'errors' => $validator->errors()], 422);
        }

        // Find the user by email
        $user = User::where('email', $request->email)->first();

        // If user not found, return a failure response
        if (!$user) {
            return response()->json(['success' => false, 'message' => 'User not found'], 404);
        }

        // Update the user's password
        $user->password = Hash::make($request->password);
        $user->save();

        // Return success response
        return response()->json(['success' => true, 'message' => 'Password updated successfully']);
    }
}
