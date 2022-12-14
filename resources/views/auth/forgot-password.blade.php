

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Forgot Password</title>
</head>
<body class="bg-gray-100">
    <div class=" flex min-h-full items-center justify-center py-12 px-4  sm:px-6 xl:px-8 ">
        <div class="w-full max-w-sm justify-center ">
            <h1 class="flex justify-center">
                <img src="/src/cict-logo.png" alt="" class="object-contain h-20 ">
            </h1>
            <div class=" p-5 mt-10 rounded-lg shadow-lg bg-white">


                <div class="flex justify-between mb-3 items-center">
                    <h2 class="text-left text-3xl font-bold tracking-tight text-gray-900">
                        Reset Password
                    </h2>
                    <a href="{{route('login')}}" class="text-red-500 font-semibold">Cancel</a>
                </div>

                <div class="mb-4 text-sm text-gray-600">
                    {{ __('Forgot password? Enter email to receive reset link') }}
                </div>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <!-- Email Address -->
                    <div>

                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />

                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>


                    <div class="mt-3">
                        <button onclick="" class="w-full  items-center px-4 py-2 bg-gray-800
                        border border-transparent rounded-md font-semibold text-xs
                        text-white uppercase tracking-widest hover:bg-gray-700
                        active:bg-gray-900 focus:outline-none focus:border-gray-900
                        focus:ring ring-gray-300 disabled:opacity-25 transition
                        ease-in-out duration-150">
                            Get password reset link
                        </button>
                    </div>
                </form>
                {{-- <form action="{{ route('password.email') }}" method="POST">
                    @if (Session::has('success'))
                            <div class="alert alert-success">{{Session::get('success')}}</div>
                            @endif
                            @if (Session::has('fail'))
                            <div class="alert alert-danger text-red-500">{{Session::get('fail')}}</div>
                            @endif
                            @csrf
                    <div class="flex justify-between mb-3 items-center">
                        <h2 class="text-left text-3xl font-bold tracking-tight text-gray-900">
                            Reset Password
                        </h2>
                        <a href="" class="text-red-500 font-semibold">Cancel</a>
                    </div>
                    <!--email-->
                    <div class="flex flex-col py-2 text-gray-400">
                        <label for="" class="block font-medium text-sm text-gray-700">Forgot password? Enter email to receive reset link</label>
                        <input
                         class="text-gray-700  bg-slate-100 mt-2 p-2
                            rounded-md focus:outline-blue-200
                            shadow-sm border-gray-300 focus:border-indigo-300
                            focus:ring focus:ring-indigo-200
                            focus:ring-opacity-50"
                            type="email" name="email" placeholder="Email" value="" >
                            <span class="text-red-500">@error('email') {{$message}} @enderror</span>
                    </div>

                    <div class="mt-3">
                        <button onclick="" class="w-full  items-center px-4 py-2 bg-gray-800
                        border border-transparent rounded-md font-semibold text-xs
                        text-white uppercase tracking-widest hover:bg-gray-700
                        active:bg-gray-900 focus:outline-none focus:border-gray-900
                        focus:ring ring-gray-300 disabled:opacity-25 transition
                        ease-in-out duration-150">
                            Get password reset link
                        </button>
                    </div>
                </form> --}}
            </div>
        </div>
    </div>

</body>
</html>
