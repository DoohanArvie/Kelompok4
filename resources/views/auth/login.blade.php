<x-guest-layout>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
        }

        .video-background {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: 1;
            background-size: cover;
            object-fit: cover;
            filter: brightness(0.5);
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
            z-index: 999;
        }

        form {
            z-index: 99999;
            position: relative;
            background-color: rgba(255, 255, 255, 0.95);
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            padding: 2.5rem;
            width: 100%;
            max-width: 400px;
            text-align: center;
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

        form input[type="email"],
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

        .checkbox-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 1rem;
            color: #555;
        }

        .checkbox-container label {
            display: flex;
            align-items: center;
        }

        .checkbox-container input[type="checkbox"] {
            margin-right: 0.5rem;
        }

        .checkbox-container a {
            color: #007bff;
            text-decoration: none;
        }

        .checkbox-container a:hover {
            text-decoration: underline;
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

        .btn-secondary {
            background-color: #6c757d;
            color: #fff;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.2s;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
        }
    </style>

    <!-- Video Background -->
    <video autoplay muted loop class="video-background">
        <source src="{{ asset('assets/landingPage/img/tes.mp4') }}?{{ time() }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <div class="form-container">
        <form method="POST" action="{{ route('login') }}" novalidate>
            <div class="form-header">
                <img src="{{ asset('assets/landingPage/img/Marabunta.png') }}" alt="Logo">
                <h1>Marabunta Money</h1>
            </div>
            @csrf

            <!-- Alamat Email -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Kata Sandi -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Ingat Saya -->
            <div class="checkbox-container mt-4">
                <label for="remember_me">
                    <input id="remember_me" type="checkbox" name="remember">
                    <span>{{ __('Remember me') }}</span>
                </label>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>

            <div class="form-footer mt-4">
                <a href="{{ route('register') }}">Register</a>
                <button type="submit" class="btn-primary">
                    {{ __('Log in') }}
                </button>
            </div>
        </form>
    </div>
</x-guest-layout>
