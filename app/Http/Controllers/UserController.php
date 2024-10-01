<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller

{
    //user profile view page
    public function profile(User $user)
    {
        return view('User.profile', ['user' => $user]);
    }
    //user account settings view page
    public function publicProfile(User $user){
        return view('User.publicProfile',['user'=>$user]);
    }
    // update for user profile
    public function profileUpdate(User $user, Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'lastName' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string',
            'bio' => 'nullable|string|max:200',
        ]);
        
        // Uses update method, which internally calls save
        //if user changes role to admin, redirect to admin dashboard, else, user dashboard
        $user->update($data);
        if($request ->user()->role === 'admin'){
            return redirect('admin/dashboard');
        }

        

        return redirect('user/dashboard')->with('success', 'User Information Updated Successfully');
    }
    //redirects user to respective dashboard
    public function cancelProfileUpdate(User $user){
        if(Auth::user()->role === 'admin'){
            return redirect('admin/dashboard');
        }

        return redirect(route('user.dashboard'));
    }
    //return forget password view page
    public function forgotPassword(){
        return view('AuthLogin.forgotPassword');
    }
    
    public function deleteAccount(User $user, Request $request)
    {
        // Validate the input
        $data = $request->validate([
            'deleteAccount' => 'required|string',
        ]);
    
        // Check if the input matches 'DELETE'
        if ($data['deleteAccount'] === 'DELETE') {
            // Delete the user account
            $user->delete();
    
            // Redirect to the registration page with success message
            return redirect('/register')->with('success', 'User Deleted Successfully');
        }
    
        // If input does not match 'DELETE', redirect back with an error
        return redirect()->back()->with('error', 'Please type DELETE to confirm account deletion.');
    }
    

    
}
