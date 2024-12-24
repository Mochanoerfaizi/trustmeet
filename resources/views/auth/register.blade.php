@extends('layouts.app')
@section('content')
<html lang="en">

<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Create Account</title>
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
    Welcome to Trust Meet. Confused about finding an expert mentor in the field you are looking for
</h2>

                <h3 class="text-white text-3xl font-bold mb-4"></h3>
                <p class="text-white text-lg">we will help you</p>
            </div>
            <div class="flex justify-center">
                <img alt="Logo with a large 'S' in the center" class="w-24 h-24" src="images/nobgg.png" />
            </div>
            <p class="text-white text-sm mt-4"></p>
        </div>
        <div class="p-10 w-1/2">
            <h2 class="text-2xl font-bold mb-6">Create Account</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-4">
                    <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus
                        class="w-full p-3 border border-gray-300 rounded @error('name') border-red-500 @enderror"
                        placeholder="Full Name" />
                    @error('name')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required
                        class="w-full p-3 border border-gray-300 rounded @error('email') border-red-500 @enderror"
                        placeholder="Email" />
                    @error('email')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <input id="password" type="password" class="w-full p-3 border border-gray-300 rounded @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="w-full p-3 border border-gray-300 rounded" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Role') }}</label>

                </div>
                <div class="mb-4">
                    <select id="role_id" name="role_id" required
                        class="w-full p-3 border border-gray-300 rounded">
                        <option value="" disabled selected>Select</option>
                        <option value="1">Siswa</option>
                        <option value="2">Guru</option>
                    </select>
                </div>
                <div class="mb-4">
                    <button type="submit" class="w-full bg-blue-500 text-white p-3 rounded">Create Account</button>
                </div>
                <p class="text-center text-sm">
                    Already have an account?
                    <a class="text-blue-500" href="login">Login</a>
                </p>
            </form>
        </div>
    </div>
</body>

</html>
@endsection