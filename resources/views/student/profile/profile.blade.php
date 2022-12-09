<x-app-layout>
    @section('doc_title', 'Profile Details')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Profile') }}
        </h2>
    </x-slot>

    <div class="px-6 lg:px-28 md:px-20 sm:px-6  pt-7 pb-10 lg:pt-5">
        <div class="shadow-lg bg-white rounded-lg grid lg:grid-cols-2 ">
            <!--Left uni ung infomration ng user-->
            <div class=" py-5  ">
                <div class="">

                    <div class=" flex flex-col lg:flex-col pt-5  xl:flex-row w-full">
                        <!--para sa profile pic-->
                        <div class=" w-full">
                            <div class=" flex flex-col justify-center">
                                <div class=" my-1 flex justify-center">
                                    <img src="/src/" alt=""
                                        class="shadow-lg bg-blue-800 object-contain h-36 w-36 ">
                                </div>
                                <div class=" flex justify-center">
                                    <button
                                        class="shadow-lg px-6 my-3 py-2
                                        bg-gray-800
                        border border-transparent rounded-md font-semibold text-xs
                        text-white uppercase tracking-widest hover:bg-gray-700
                        active:bg-gray-900 focus:outline-none focus:border-gray-900
                        focus:ring ring-gray-300 disabled:opacity-25 transition
                        ease-in-out duration-150">
                                        Upload Photo
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!--para sa information-->
                        <div class=" flex justify-center  w-full">
                            <div class="">
                                <div class="mt-2">
                                    <h1>Student ID: {{ $user->student_id }}</h1>
                                </div>
                                <div class="mt-2">
                                    <h1>Name: {{ $user->name }}</h1>
                                </div>
                                @php
                                    $program = '';
                                    if ($user->program === 'BSIT') {
                                        $program = 'BS in Information Technology';
                                    } elseif ($user->program === 'BSIS') {
                                        $program = 'BS in Information System';
                                    } elseif ($user->program === 'BSCS') {
                                        $program = 'BS in Computer Science';
                                    }
                                @endphp
                                <div class="mt-2">
                                    <h1>Program: {{ $program }}</h1>
                                </div>
                                <div class="mt-2">
                                    <h1>Year Level: {{ $user->year_level }}</h1>
                                </div>
                                <div class="mt-2">
                                    <h1>Date of Birth: {{ $user->dob }}</h1>
                                </div>
                                <div class="mt-2">
                                    <h1>Age: {{ $user->age }}</h1>
                                </div>
                                <div class="mt-2">
                                    <h1>Gender: {{ $user->gender }}</h1>
                                </div>
                                <div class="mt-2">
                                    <h1>Email: {{ $user->email }}</h1>
                                </div>
                                <div class="mt-2">
                                    <h1>Address: {{ $user->address }}</h1>
                                </div>
                                <div class="flex justify-center md:justify-start">
                                    <a href="{{ route('student.profile.edit', ['profile' => $user->id]) }}"
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
            <!--right uni ung ID ng user-->
            <div class=" py-5 flex flex-col items-center ">
                <div class="bg-white shadow-lg rounded-lg">
                    <!--upper ID-->
                    <div class="bg-gradient-to-b from-blue-400 via-white to-emerald-500 flex rounded-t-lg py-3">
                        <!--logo-->
                        <div class="bg-yellow-200 bg-opacity-40 px-2">
                            <img src="/src/CSU_logo.png" alt="" class="object-contain h-16 w-16 ">
                        </div>
                        <div class="bg-yellow-200 bg-opacity-40 w-full flex flex-col items-center">
                            <div class="w-full flex flex-col items-center pt-1.5">
                                <label class="text-xs">REPUBLIC OF THE PHILLIPINES</label>
                                <h1 class="text-xs font-bold">CATANDUANES STATE UNIVERSITY</h1>
                                <label class="text-xs">VIRAC, CATANDUANES</label>
                            </div>
                        </div>
                    </div>
                    <!--body ID-->
                    <div class="flex flex-col items-center">
                        <div class="bg-blue-800 my-1">
                            <img src="/src/" alt="" class="object-contain h-24 w-24 ">
                        </div>
                        <div>
                            <h1> <label class="text-xs">I.D NO.</label>{{ $user->student_id }}</h1>
                        </div>
                        <div class="flex flex-col items-center">
                            <h1 class="font-bold">{{ $user->name }}</h1>
                            <label class="text-xs">NAME OF STUDENT</label>
                        </div>
                        <br>
                        <div>
                            <label class="text-xs">STUDENT SIGNATURE</label>
                        </div>
                        <div class="w-full flex flex-col items-center">
                            <h1 class=" flex justify-center mx-1 bg-blue-800 w-full font-bold text-white">
                                {{ $program }}
                            </h1>
                            <label class="text-xs">COURSE</label>
                        </div>
                    </div>
                    <!--footer ID-->
                    <div class="flex flex-col items-center">
                        <br>
                        <div class="pb-3 flex flex-col items-center">
                            <h1>MARILYN G. TEJADA</h1>
                            <label class="text-xs">REGISTRAR III</label>
                        </div>
                    </div>
                </div>
                <div>
                    <button
                        class="shadow-lg w-full mt-5 py-2 px-28 my-3
                        bg-gray-800 border border-transparent rounded-md font-semibold text-xs
                        text-white uppercase tracking-widest hover:bg-gray-700
                        active:bg-gray-900 focus:outline-none focus:border-gray-900
                        focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                        Print ID
                    </button>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
