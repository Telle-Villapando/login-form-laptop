<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;


class ProviderController extends Controller
{
    //
    public function redirect($provider){
        return Socialite::driver($provider)->redirect();
    }

    public function callback(Request $request, $provider) {
        // Retrieve social user details from the provider (Google or GitHub)
        $socialUser = Socialite::driver($provider)->user();
    
        // Initialize email to null
        $email = null;
    
        // GitHub-specific: Manually fetch email from the API
        if ($provider === 'github') {
            // Make a request to get user emails from GitHub API
            $response = Http::withToken($socialUser->token)->get('https://api.github.com/user/emails');
            $emails = $response->json();
    
            // Get the primary email from the response
            foreach ($emails as $userEmail) {
                if (isset($userEmail['primary']) && $userEmail['primary']) {
                    $email = $userEmail['email'];
                    break;
                }
            }
    
            // If email is not found, redirect with error
            if (!$email) {
                return redirect()->route('user.signIn')->with('error', 'Email not provided by GitHub. Please check your GitHub settings.');
            }
        }
        // Google-specific: Use the email directly from the social user object
        elseif ($provider === 'google') {
            // For Google, just use the email from the $socialUser
            $email = $socialUser->email;
    
            // Ensure email exists
            if (!$email) {
                return redirect()->route('user.signIn')->with('error', 'Email not provided by Google. Please check your Google settings.');
            }
        }
    
        // Create or update the user in the database
        $user = User::updateOrCreate([
            'provider_id' => $socialUser->id,
            'provider' => $provider
        ], [
            'name' => $socialUser->name,
            'lastName' => 'N/A',
            'email' => $email,
            'provider_token' => $socialUser->token,
            'password' => bcrypt(Str::random(16)), // Generate random password
        ]);
    
        // Log the user in
        Auth::login($user);
    
        // Redirect to the appropriate dashboard
        if ($request->user()->role === 'admin') {
            return redirect('admin/dashboard');
        }
        return redirect('user/dashboard');
    }
    //public function callback(Request $request, $provider) {
        // Retrieve social user details from the provider (Google or GitHub)
   //     $socialUser = Socialite::driver($provider)->user();
    
     //   dd($socialUser);
    //}

  
}
