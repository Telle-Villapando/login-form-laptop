<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;



use Illuminate\Http\Request;


class AdminController extends Controller
{
    //
    public function userDisplay(User $user){
        //fetch all users
        $users = User::all();

        return view ('Admin.dashboard', ['users' =>$users]);
    }

    public function userEdit(User $user){
        return view('Admin.editUsers', ['user'=>$user]);
    }

    public function userUpdate(User $user, Request $request){

        $data = $request ->validate([
            'id' => 'required',
            'name' => 'required|string',
            'lastName' => 'required|string',
            'email' => 'required|email',
            'role' =>  'required|string',
            'password' => 'required|string',

        ]);
        $user ->update($data);{
            return redirect('admin/dashboard')->with('success','User Information Updated Successfully');
        }
    }

    public function deleteUser(User $user){
        $user->delete();
        return redirect ('admin/dashboard')->with('success', 'User Deleted Successfully');

    }
    public function verifyAdminToken(User $user, Request $request)
    {
        $request->validate([
            'id' => 'required|exists:users,id',
            'admin_token' => 'required|string', // Validate admin token input
        ]);
    
        // Get the authenticated user
        $authUser = Auth::user();
    
        // Check if the user provides a valid admin token
        if ($authUser->validateAdminToken($request->admin_token)) {
            // Change the user's role to admin
            $user->role = 'admin';
            $user->save();
    
            return redirect('admin/dashboard')->with('success', 'User role changed to admin successfully.');
        }
    
        return redirect()->back()->with('error', 'You are not authorized to perform this action.');
    }
    


}
