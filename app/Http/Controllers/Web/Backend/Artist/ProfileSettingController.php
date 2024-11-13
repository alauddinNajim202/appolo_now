<?php

namespace App\Http\Controllers\Web\Backend\Artist;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        $user_details = User::where('id', $user_id)->first();
        return view('web.backend.artist.profile-settings', compact('user_details'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate request data
        $request->validate([
            'first_name' => 'nullable|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'phone_number' => 'nullable|string',
            'email' => 'nullable|email',
            'date_of_birth' => 'nullable|date',
            'emergency_number' => 'nullable|string',
            'address' => 'nullable|string',
            'city' => 'nullable|string',
            'state' => 'nullable|string',
            'zip_code' => 'nullable|string',
        ]);

        try {
            // Get the authenticated user
            $user = Auth::user();

            // Update user details
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->phone_number = $request->phone_number;
            $user->email = $request->email;
            $user->date_of_birth = $request->date_of_birth;
            $user->emergency_number = $request->emergency_number;
            $user->address = $request->address;
            $user->city = $request->city;
            $user->state = $request->state;
            $user->zip_code = $request->zip_code;
            $user->save();


            // Return success response
            return response()->json(['message' => 'Profile updated successfully'], 200);
        } catch (\Exception $e) {
            // Log the error message
            \Log::error('Profile update failed: ' . $e->getMessage());

            // Return error response
            return response()->json([
                'message' => 'An error occurred while updating the profile. Please try again later.'
            ], 500);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }





    public function upload_image(Request $request)
    {
        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // image validation
        ]);

        try {
            $user = Auth::user();

            $destinationPath = public_path('avatars');
            if ($user->avatar && file_exists(public_path($user->avatar))) {
                unlink(public_path($user->avatar));
            }
            $fileName = uniqid() . '_' . time() . '.' . $request->file('avatar')->getClientOriginalExtension();
            $request->file('avatar')->move($destinationPath, $fileName);
            $user->avatar = 'avatars/' . $fileName;
            $user->save();

            return response()->json([
                'message' => 'Profile image updated successfully',
                'image_path' => asset('avatars/' . $fileName)
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'An error occurred while uploading the profile image. Please try again later.'
            ], 500);
        }
    }


    public function remove_image(Request $request)
    {
        try {
            $user = Auth::user();

            if ($user->avatar && file_exists(public_path($user->avatar))) {

                unlink(public_path($user->avatar));

                $user->avatar = null;
                $user->save();

                return response()->json([
                    'message' => 'Profile image removed successfully'
                ], 200);
            } else {
                return response()->json([
                    'message' => 'No profile image found to remove'
                ], 404);
            }
        } catch (\Exception $e) {

            return response()->json([
                'message' => 'An error occurred while removing the profile image. Please try again later.'
            ], 500);
        }
    }
}
