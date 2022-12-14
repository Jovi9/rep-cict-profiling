{{-- <x-guest-layout>
    @section('doc_title', 'Register')
    <x-auth-card>

        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>



    </x-auth-card>

</x-guest-layout> --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body class="bg-gray-100">


    <div class=" flex min-h-full items-center justify-center px-4 md:mt-10 mt-6 md:mb-10 sm:px-6 xl:px-8">
        <div class="w-full max-w-3xl items-center">
            <h1 class="flex justify-center ">
                <img src="/src/cict-logo.png" alt="" class="md:hidden object-contain h-20 ">
            </h1>
            <div class="px-5 pt-3 py-3 mt-5 mb-10 md:mb-0 rounded-lg shadow-lg bg-white">

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <h2 class="mb-3 text-left text-3xl font-bold tracking-tight text-gray-900">
                        Register
                    </h2>

                    <div class="md:flex">
                        {{-- student id --}}
                        <div class="w-full md:mr-2.5">
                            <x-input-label for="student_id" :value="__('Student ID No.')" />

                            <x-text-input id="student_id" class="block mt-1 w-full" type="text" name="student_id"
                                :value="old('student_id')" required autofocus placeholder="e.g. 1234-12345" />

                            <x-input-error :messages="$errors->get('student_id')" class="mt-2" />
                        </div>

                        <!-- Name -->
                        <div class="w-full md:ml-2.5 md:mt-0 mt-4">
                            <x-input-label for="name" :value="__('Name')" />

                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                :value="old('name')" required autofocus />

                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                    </div>

                    <div class="md:flex">
                        {{-- program --}}
                        <div class="w-full md:mr-2.5 mt-4">
                            <x-input-label for="program" :value="__('Program')" />

                            <select aria-placeholder="" name="program" id=""
                                class="text-gray-700 bg-slate-100 w-full
                                        mt-2 p-2 rounded-md focus:outline-blue-200
                                        shadow-sm border-gray-300 focus:border-indigo-300
                                        focus:ring focus:ring-indigo-200
                                        focus:ring-opacity-50"
                                hover:bg-gray-500" value="{{ old('program') }}">

                                <option value="BSIT">BS In Information Technology</option>
                                <option value="BSIS">BS In Information System</option>
                                <option value="BSCS">BS In Computer Science</option>
                            </select>

                            <x-input-error :messages="$errors->get('program')" class="mt-2" />
                        </div>

                        {{-- year level --}}
                        <div class="w-full md:ml-2.5 mt-4">
                            <x-input-label for="year_level" :value="__('Year Level')" />

                            <select aria-placeholder="" name="year_level" id=""
                                class="text-gray-700 bg-slate-100 w-full
                                        mt-2 p-2 rounded-md focus:outline-blue-200
                                        shadow-sm border-gray-300 focus:border-indigo-300
                                        focus:ring focus:ring-indigo-200
                                        focus:ring-opacity-50"
                                hover:bg-gray-500" value="{{ old('year_level') }}">

                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>

                            <x-input-error :messages="$errors->get('year_level')" class="mt-2" />
                        </div>
                    </div>

                    <div class="md:flex">
                        <!-- Date og birth -->
                        <div class="w-full md:mr-2.5 mt-4">
                            <x-input-label for="dob" :value="__('Date of Birth')" />

                            <x-text-input id="dob"
                                class="text-gray-700 bg-slate-100 w-full
                                mt-2 p-2 rounded-md focus:outline-blue-200
                                shadow-sm border-gray-300 focus:border-indigo-300
                                focus:ring focus:ring-indigo-200
                                focus:ring-opacity-50"
                                type="date" name="dob" :value="old('dob')" required />

                            <x-input-error :messages="$errors->get('dob')" class="mt-2" />
                        </div>

                        <!-- Gender -->
                        <div class="w-full md:ml-2.5 mt-4">
                            <x-input-label for="gender" :value="__('Gender')" />

                            <select aria-placeholder="" name="gender" id=""
                                class="text-gray-700 bg-slate-100 w-full
                                    mt-2 p-2 rounded-md focus:outline-blue-200
                                    shadow-sm border-gray-300 focus:border-indigo-300
                                    focus:ring focus:ring-indigo-200
                                    focus:ring-opacity-50"
                                value="{{ old('gender') }}">

                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>

                            <x-input-error :messages="$errors->get('gender')" class="mt-2" />
                        </div>
                    </div>

                    <div class="md:flex">
                        <!-- aaddress -->
                        <div class="w-full md:mr-2.5 mt-4">
                            <x-input-label for="address" :value="__('Address')" />

                            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address"
                                :value="old('address')" required autofocus />

                            <x-input-error :messages="$errors->get('address')" class="mt-2" />
                        </div>

                        <!-- Email Address -->
                        <div class="w-full md:ml-2.5 mt-4">
                            <x-input-label for="email" :value="__('Email')" />

                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                :value="old('email')" required />

                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                    </div>

                    <div class="md:flex">
                        <!-- Password -->
                        <div class="w-full md:mr-2.5 mt-4">
                            <x-input-label for="password" :value="__('Password')" />

                            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                                required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="w-full md:ml-2.5 mt-4">
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                                name="password_confirmation" required />

                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>
                    </div>

                    <div class="mt-4">
                        <div class="bg-green-300">
                            <x-primary-button class="w-full">
                                {{ __('Register') }}
                            </x-primary-button>
                        </div>

                        <div class="mt-1">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script>
        var cur_date = new Date();
        var year = cur_date.getUTCFullYear();
        var month = cur_date.getMonth() + 1;
        var today = cur_date.getDate();

        if (month <= 9) {
            month = "0" + month;
        }
        if (today <= 9) {
            today = "0" + today;
        }
        var max_date = year + "-" + month + "-" + today;
        document.getElementById('dob').setAttribute('max', max_date);
    </script>

</body>

</html>
