<x-app-layout>
    @section('doc_title', 'Profile Details')


    <div class="px-6 lg:px-28 md:px-20 sm:px-6   pt-5 lg:pt-5">
        <div class="shadow-lg bg-white rounded-lg md:py-5">
            <div class="pt-5 pl-5">
                {{-- <a href="{{ route('admin.student_lists.index') }}"
                    class="shadow-lg px-6 my-3 py-2
                            bg-gray-800
                            border border-transparent rounded-md font-semibold text-xs
                            text-white uppercase tracking-widest hover:bg-gray-700
                            active:bg-gray-900 focus:outline-none focus:border-gray-900
                            focus:ring ring-gray-300 disabled:opacity-25 transition
                            ease-in-out duration-150">
                    Back
                </a> --}}
            </div>
            <div class="py- flex justify-center">
                <h1 class="text-2xl md:text-4xl font-extrabold">
                    My Profile
                </h1>
            </div>
            <div class="md:flex justify-center  md:my-10">
                <div class="justify-center w-full">
                    <div class="py-5 flex justify-center">
                        <img src="/src/profile_pic.png" alt=""
                            class="shadow-lg bg-gray-300 object-contain pt-2 md:h-40 md:w-40 h-36 w-36 rounded-full">
                    </div>
                    <div class=" flex justify-center">
                        <button
                            class="shadow-lg px-6 my-3 py-2
                            bg-gray-800 border border-transparent rounded-md font-semibold text-xs
                            text-white uppercase tracking-widest hover:bg-gray-700
                            active:bg-gray-900 focus:outline-none focus:border-gray-900
                            focus:ring ring-gray-300 disabled:opacity-25 transition
                            ease-in-out duration-150">
                            Upload Photo
                        </button>
                    </div>
                </div>
                <div class=" flex justify-center   w-full md:pt-5 pb-5">
                    <div class="">
                        <div class="mt-1 flex">
                            <h1 class=" w-28">Name: </h1>
                            <h1 class="font-bold ml-1">
                                {{ $user->name }}
                            </h1>
                        </div>
                        <div class="mt-1 flex">
                            <h1 class=" w-28">Date of Birth: </h1>
                            <h1 class="font-bold ml-1">
                                {{ $user->dob }}
                            </h1>
                        </div>
                        <div class="mt-1 flex">
                            <h1 class=" w-28">Age: </h1>
                            <h1 class="font-bold ml-1">
                                {{ $user->age }}
                            </h1>
                        </div>
                        <div class="mt-1 flex">
                            <h1 class=" w-28">Gender: </h1>
                            <h1 class="font-bold ml-1">
                                {{ $user->gender }}
                            </h1>
                        </div>
                        <div class="mt-1 flex">
                            <h1 class=" w-28">Email: </h1>
                            <h1 class="font-bold ml-1">
                                {{ $user->email }}
                            </h1>
                        </div>
                        <div class="mt-1 flex">
                            <h1 class=" w-28">Address: </h1>
                            <h1 class="font-bold ml-1">
                                {{ $user->address }}
                            </h1>
                        </div>
                        <div class="flex justify-center md:mt-3 mt-2">
                            <a href="{{ route('admin.profile.edit', ['profile' => $user->id]) }}"
                                class="hadow-lg px-6 my-3 py-2 shadow-lg
                                bg-gray-800
                                border border-transparent rounded-md font-semibold text-xs
                                text-white uppercase tracking-widest hover:bg-gray-700
                                active:bg-gray-900 focus:outline-none focus:border-gray-900
                                focus:ring ring-gray-300 disabled:opacity-25 transition
                                ease-in-out duration-150">
                                Edit Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
