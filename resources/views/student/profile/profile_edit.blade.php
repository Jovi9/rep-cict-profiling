<x-app-layout>
    @section('doc_title', 'Edit Profile')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div>
                        <a href="{{ route('student.profile.index') }}"
                            class="hadow-lg px-6 my-3 py-2 shadow-lg
                            bg-gray-800
                            border border-transparent rounded-md font-semibold text-xs
                            text-white uppercase tracking-widest hover:bg-gray-700
                            active:bg-gray-900 focus:outline-none focus:border-gray-900
                            focus:ring ring-gray-300 disabled:opacity-25 transition
                            ease-in-out duration-150">
                            Back</a>
                    </div>
                    <div>
                        <h1 class="font-bold text-lg xl:text-3xl flex justify-center">Profile Information</h1>
                    </div>

                    <form method="POST" action="{{ route('student.profile.update', ['profile' => $user->id]) }}">
                        @csrf
                        @method('PUT')

                        {{-- student id --}}
                        <div class="mt-8">
                            <x-input-label for="student_id" :value="__('Student ID No.')" />

                            <x-text-input id="student_id" class="block mt-1 w-full" type="text" name="student_id"
                                value="{{ $user->student_id }}" required autofocus placeholder="e.g. 1234-12345" />

                            <x-input-error :messages="$errors->get('student_id')" class="mt-2" />
                        </div>

                        <!-- Name -->
                        <div class="mt-4">
                            <x-input-label for="name" :value="__('Name')" />

                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                value="{{ $user->name }}" required autofocus />

                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        {{-- program --}}
                        <div class="mt-4">
                            <x-input-label for="program" :value="__('Program')" />

                            <select aria-placeholder="" name="program" id=""
                                class="text-gray-700 bg-slate-100 w-full
                                        mt-2 p-2 rounded-md focus:outline-blue-200
                                        shadow-sm border-gray-300 focus:border-indigo-300
                                        focus:ring focus:ring-indigo-200
                                        focus:ring-opacity-50"
                                hover:bg-gray-500" value="{{ $user->program }}">
                                <option {{ $user->program == 'BSIT' ? 'selected' : '' }} value="BSIT">
                                    BS In Information Technology</option>
                                <option {{ $user->program == 'BSIS' ? 'selected' : '' }} value="BSIS">
                                    BS In Information System</option>
                                <option {{ $user->program == 'BSCS' ? 'selected' : '' }} value="BSCS">
                                    BS In Computer Science</option>
                            </select>

                            <x-input-error :messages="$errors->get('program')" class="mt-2" />
                        </div>

                        {{-- year level --}}
                        <div class="mt-4">
                            <x-input-label for="year_level" :value="__('Year Level')" />

                            <select aria-placeholder="" name="year_level" id=""
                                class="text-gray-700 bg-slate-100 w-full
                                        mt-2 p-2 rounded-md focus:outline-blue-200
                                        shadow-sm border-gray-300 focus:border-indigo-300
                                        focus:ring focus:ring-indigo-200
                                        focus:ring-opacity-50"
                                hover:bg-gray-500" value="{{ $user->year_level }}">
                                <option {{ $user->year_level == '1' ? 'selected' : '' }} value="1">1</option>
                                <option {{ $user->year_level == '2' ? 'selected' : '' }} value="2">2</option>
                                <option {{ $user->year_level == '3' ? 'selected' : '' }} value="3">3</option>
                                <option {{ $user->year_level == '4' ? 'selected' : '' }} value="4">4</option>
                            </select>

                            <x-input-error :messages="$errors->get('year_level')" class="mt-2" />
                        </div>

                        <!-- Date of birth -->
                        <div class="mt-4">
                            <x-input-label for="dob" :value="__('Date of Birth')" />

                            <x-text-input id="dob"
                                class="block mt-1 w-full text-gray-700 bg-slate-100
                                                p-2 rounded-md focus:outline-blue-200
                                                shadow-sm border-gray-300 focus:border-indigo-300
                                                focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                type="date" name="dob" value="{{ $user->dob }}" required />

                            <x-input-error :messages="$errors->get('dob')" class="mt-2" />
                        </div>

                        <!-- Gender -->
                        <div class="mt-4">
                            <x-input-label for="gender" :value="__('Gender')" />

                            <select aria-placeholder="" name="gender" id=""
                                class="text-gray-700 bg-slate-100 w-full
                                    mt-2 p-2 rounded-md focus:outline-blue-200
                                    shadow-sm border-gray-300 focus:border-indigo-300
                                    focus:ring focus:ring-indigo-200
                                    focus:ring-opacity-50"
                                hover:bg-gray-500" value="{{ $user->gender }}">
                                <option {{ $user->gender == 'Male' ? 'selected' : '' }} value="Male">
                                    Male
                                </option>
                                <option {{ $user->gender == 'Female' ? 'selected' : '' }} value="Female">
                                    Female
                                </option>
                            </select>

                            <x-input-error :messages="$errors->get('gender')" class="mt-2" />
                        </div>

                        <!-- aaddress -->
                        <div class="mt-4">
                            <x-input-label for="address" :value="__('Address')" />

                            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address"
                                value="{{ $user->address }}" required autofocus />

                            <x-input-error :messages="$errors->get('address')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-8">
                            <x-primary-button class="ml-4 w-full">
                                {{ __('Update Profile') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
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
</x-app-layout>
