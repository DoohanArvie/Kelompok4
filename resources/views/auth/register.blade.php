<x-guest-layout>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            position: relative;
            height: 100vh;
            overflow: hidden;
        }

        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('{{ asset('assets/landingPage/img/hero-bg.jpg') }}') repeat;
            background-size: cover;
            z-index: 1;
            animation: moveBackground 30s linear infinite;
        }

        @keyframes moveBackground {
            0% {
                background-position: 0 0;
            }
            100% {
                background-position: 1000px 1000px;
            }
        }

        .form-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 2;
        }

        form {
            background: rgba(255, 255, 255, 0.9);
            padding: 2.5rem;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            z-index: 9999;
            width: 100%;
            max-width: 450px;
            text-align: center;
        }

        form input[type="email"],
        form input[type="text"],
        form input[type="password"],
        form label {
            background-color: transparent;
            color: #333;
        }

        form input[type="email"],
        form input[type="text"],
        form input[type="password"] {
            width: 100%;
            padding: 0.75rem;
            margin-bottom: 1rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            color: #333;
            transition: border-color 0.2s;
        }

        form input[type="email"]:focus,
        form input[type="text"]:focus,
        form input[type="password"]:focus {
            border-color: #007bff;
            outline: none;
        }

        form label {
            display: block;
            margin-bottom: 0.5rem;
            color: #333;
            text-align: left;
        }

        .form-header {
            margin-bottom: 1.5rem;
        }

        .form-header img {
            width: 100px;
        }

        .form-header h1 {
            font-size: 1.8rem;
            margin-top: 0.5rem;
            color: #333;
        }

        .form-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .form-footer a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }

        .form-footer a:hover {
            text-decoration: underline;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.2s;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>

    <div class="form-container">
        <form method="POST" action="{{ route('register') }}">
            <div class="form-header">
                <img src="{{ asset('assets/landingPage/img/Marabunta.png') }}" alt="Logo">
                <h1>Marabunta Money</h1>
            </div>
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
            
            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="form-footer mt-4">
                <a href="{{ route('login') }}">{{ __('Already registered?') }}</a>
                <button type="submit" class="btn-primary">{{ __('Register') }}</button>
            </div>
        </form>
    </div>
</x-guest-layout>
