<x-app-layout>
    @section('doc_title', 'Edit Profile')


    <div class="py-5">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-5 bg-white border-b border-gray-200">
                    {{-- <div>
                        <a href="{{ route('admin.profile.index') }}"
                            class="hadow-lg px-6 my-3 py-2 shadow-lg
                            bg-gray-800
                            border border-transparent rounded-md font-semibold text-xs
                            text-white uppercase tracking-widest hover:bg-gray-700
                            active:bg-gray-900 focus:outline-none focus:border-gray-900
                            focus:ring ring-gray-300 disabled:opacity-25 transition
                            ease-in-out duration-150">
                            Back</a>
                    </div> --}}
                    <div class="pt- pl-">
                        <a href="{{ route('admin.profile.index') }}"
                            class="shadow-lg px-6 my-3 py-2
                                    bg-gray-800
                                    border border-transparent rounded-md font-semibold text-xs
                                    text-white uppercase tracking-widest hover:bg-gray-700
                                    active:bg-gray-900 focus:outline-none focus:border-gray-900
                                    focus:ring ring-gray-300 disabled:opacity-25 transition
                                    ease-in-out duration-150">
                            Back
                        </a>
                    </div>
                    {{-- <div>
                        <h1 class="font-bold text-lg xl:text-3xl flex justify-center">Edit Profile Information</h1>
                    </div> --}}
                    <div class="pt-5 flex justify-center">
                        <h1 class=" font-extrabold text-lg md:text-xl lg:text:1xl xl:text-3xl flex justify-center">
                            Edit Profile Information
                        </h1>
                    </div>

                    <form method="POST" action="{{ route('admin.profile.update', ['profile' => $user->id]) }}">
                        @csrf
                        @method('PUT')

                        <!-- Name -->
                        <div class="mt-4">
                            <x-input-label for="name" :value="__('Name')" />

                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                value="{{ $user->name }}" required autofocus />

                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
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
