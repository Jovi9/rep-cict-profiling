{{-- <x-guest-layout>
    @section('doc_title', 'Login')

    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <h2 class="mb-3 text-left text-3xl font-bold tracking-tight text-gray-900">
            Login
        </h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autofocus />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="flex justify-between mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>

                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                        href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>

            <div class="mt-5">
                <x-primary-button class="w-full">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
        <div class="block mt-5">
            <a class="underline text-sm text-gray-500 hover:text-gray-900" href="{{ route('register') }}">Don't
                have an account? Register</a>
        </div>
    </x-auth-card>
</x-guest-layout> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Login</title>
</head>


<body class="bg-gray-100">
    <div class=" flex min-h-full items-center justify-center py-12 px-4  sm:px-6 xl:px-8 ">
        <div class="w-full max-w-sm justify-center mt-7">
            <h1 class="flex justify-center">
                <img src="/src/cict-logo.png" alt="" class="object-contain h-20 ">
            </h1>
            <div class=" p-5 mt-5 rounded-lg shadow-lg bg-white">

                <form action="{{ route('login') }}" method="POST">
                    @if (Session::has('success'))
                            <div class="alert alert-success">{{Session::get('success')}}</div>
                            @endif
                            @if (Session::has('fail'))
                            <div class="alert alert-danger text-red-500">{{Session::get('fail')}}</div>
                            @endif
                            @csrf
                    <h2 class="mb-3 text-left text-3xl font-bold tracking-tight text-gray-900">
                        Login
                    </h2>

                    <!--email-->
                    <div class="flex flex-col py-2 text-gray-400">
                        {{-- <label for="" class="block font-medium text-sm text-gray-700">Email</label> --}}
                        <input
                         class="text-gray-700  bg-slate-100 mt-2 p-2
                            rounded-md focus:outline-blue-200
                            shadow-sm border-gray-300 focus:border-indigo-300
                            focus:ring focus:ring-indigo-200
                            focus:ring-opacity-50"
                            type="email" name="email" placeholder="Email" value="{{old('email')}}" >
                            <span class="text-red-500">@error('email') {{$message}} @enderror</span>
                    </div>
                    <!--password-->
                    <div class="flex flex-col py-2 text-gray-400">
                        {{-- <label for="" class="block font-medium text-sm text-gray-700">Password</label> --}}
                        <input
                        class="text-gray-700 bg-slate-100 mt-2 p-2 rounded-md focus:outline-blue-200
                        shadow-sm border-gray-300 focus:border-indigo-300
                        focus:ring focus:ring-indigo-200
                         focus:ring-opacity-50"
                                type="password" name="password" placeholder="Password" value="">
                                <span class="text-red-500">@error('password') {{$message}} @enderror</span>
                    </div>
                    <div class="flex justify-between">
                        <!-- Remember me -->
                        <div class="block mt-2">
                            <label for="remember_me"  class="inline-flex items-center">
                                <input  {{ old('remember') ? 'checked' : '' }}  id="remember_me" type="checkbox"
                                class="rounded border-gray-300 text-indigo-600 shadow-sm
                                focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                <span class="ml-2 text-sm text-gray-600">Remember me</span>
                            </label>
                        </div>
                       <!-- Forgot Password -->
                        <div class="block mt-2">
                            <a class="underline text-sm text-gray-500 hover:text-gray-900" href="{{ route('password.request') }}">Forgot your Password?</a>
                        </div>
                    </div>
                    <div class="mt-3">
                        <button onclick="" class="w-full  items-center px-4 py-2 bg-gray-800
                        border border-transparent rounded-md font-semibold text-xs
                        text-white uppercase tracking-widest hover:bg-gray-700
                        active:bg-gray-900 focus:outline-none focus:border-gray-900
                        focus:ring ring-gray-300 disabled:opacity-25 transition
                        ease-in-out duration-150">
                            Login
                        </button>
                    </div>
                </form>
                <div class="block mt-2">
                    <a class="underline text-sm text-gray-500 hover:text-gray-900" href="{{route('register')}}">Don't have an account? Register</a>
                </div>
            </div>
        </div>
    </div>

</body>


</html>


