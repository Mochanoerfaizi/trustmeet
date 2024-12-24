@extends('layouts.app')

@section('content')
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>

<body class="bg-blue-500 flex items-center justify-center min-h-screen">
    <div class="bg-white rounded-lg shadow-lg flex w-3/4 max-w-4xl overflow-hidden">
        <div class="bg-blue-400 p-10 flex flex-col justify-between w-1/2">
            <div>
                <h2 class="text-white text-3xl font-light mb-2 animate__animated animate__fadeIn animate__delay-1s" style="font-family: 'Poppins', sans-serif;">
                    Welcome Back to Trust Meet. We're happy to have you back!
                </h2>
                <p class="text-white text-lg">Please log in to continue</p>
            </div>
            <div class="flex justify-center">
                <img alt="Logo" class="w-24 h-24" src="images/nobgg.png" />
            </div>
        </div>
        <div class="p-10 w-1/2">
            <h2 class="text-2xl font-bold mb-6">Login</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-4">
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required
                        class="w-full p-3 border border-gray-300 rounded @error('email') border-red-500 @enderror"
                        placeholder="Email Address" />
                    @error('email')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <input id="password" type="password" name="password" required
                        class="w-full p-3 border border-gray-300 rounded @error('password') border-red-500 @enderror"
                        placeholder="Password" />
                    @error('password')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="row mb-3">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <button type="submit" class="w-full bg-blue-500 text-white p-3 rounded">Login</button>
                </div>
                @if (Route::has('password.request'))
                <div class="mb-4 text-center">
                    <a class="text-blue-500" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                </div>
                @endif
            </form>
        </div>
    </div>
</body>

</html>
@endsection
