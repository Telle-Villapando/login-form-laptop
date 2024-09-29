<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-r from-gray-200 to-indigo-200 font-poppins">


   {{-- Display validation errors --}}
   @if ($errors->any())
   <div>
       @foreach ($errors->all() as $error)
           <div class="alert alert-danger">{{ $error }}</div>
       @endforeach
   </div>
@endif

{{-- Display session error message --}}
@if (session()->has('error'))
   <div class="alert alert-danger">{{ session('error') }}</div>
@endif

{{-- Display session success message --}}
@if (session()->has('success'))
   <div class="alert alert-success">{{ session('success') }}</div>
@endif

 {{-- Display session too many attempts message --}}
@if (session()->has('message'))
<div class="alert alert-message">{{session('message')}}</div>
    
@endif
    <!-- Sign in -->
    <div class="container mx-auto my-10 max-w-md p-6 bg-white shadow-lg rounded-lg" id="signIn">
        <h1 class="text-2xl font-bold text-center mb-6">Sign In</h1>
        <form action="{{route('signedIn.user')}}" method="post" class="space-y-4">
            @csrf 
            @method('get')
            <div class="relative flex items-center">
                <i class="fas fa-envelope absolute left-3 text-gray-400"></i>
                <input class="pl-10 w-full py-2 border-b border-gray-400 focus:outline-none focus:border-indigo-600" type="email" name="email" id="email" placeholder="Email" value="{{ Cookie::get('remembered_email') ?? old('email') }}" required autofocus />
                <label for="email" class="text-gray-500 text-sm absolute top-0 left-10 transform -translate-y-3 transition-all duration-300 ease-in-out">Email</label>
            </div>
            <div class="relative flex items-center">
                <i class="fas fa-lock absolute left-3 text-gray-400"></i>
                <input class="pl-10 w-full py-2 border-b border-gray-400 focus:outline-none focus:border-indigo-600" type="password" name="password" id="password" placeholder="Password" required autofocus/>
                <label for="password" class="text-gray-500 text-sm absolute top-0 left-10 transform -translate-y-3 transition-all duration-300 ease-in-out" >Password</label>
            </div>
           <div class="flex items-center justify-between">
            <div class="flex items-center space-x-2">
                <input type="checkbox" name="remember" id="remember" {{ Cookie::has('remembered_email') ? 'checked' : '' }}> 
                <label for="remember" class="text-left text-gray-600"  >Remember Me</label>
            </div>
            
           
            <p class="text-right">
                <a href="{{route('user.forgotPassword')}}" class="text-indigo-500 hover:underline">Forgot Password?</a>
            </p>
           </div>
            <input class="w-full py-2 bg-indigo-500 text-white rounded-lg hover:bg-indigo-600 transition duration-200 cursor-pointer" type="submit" value="Sign In" name="signIn" />
        </form> 
        <p class="text-center my-4 text-gray-500">---------- or ----------</p>
        <div class="flex justify-center space-x-4">
            <a href="auth/google/redirect"> <i class="fab fa-google text-2xl text-red-500 cursor-pointer"></i></a>
           
            <a href="auth/github/redirect"><i class="fab fa-github text-2xl text-gray-600 cursor-pointer"></i></a>
        </div>
        <div class="text-center mt-6">
            <p>Don't have an account?</p>
            <button class="text-indigo-500 hover:underline"> <a href="{{route('user.register')}}">Sign Up</a></button>
        </div>
    </div>


</body>

</html>
