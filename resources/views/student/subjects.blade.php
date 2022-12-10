<x-app-layout>
    @section('doc_title', 'Subjects')

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Subjects') }}
        </h2>
    </x-slot>

    <div class=" px-6 lg:px-28 md:px-20 pt-5 pb-10 lg:pt-10">
        <div class="bg-white max-h-full pb-10 rounded-lg shadow-lg ">
            <div id="toppart" class=" lg:mx-2 p-3">
                <section>
                    <div class=" grid lg:grid-cols-3 ">
                        <div id="1">

                            <div>
                                <label for="">Name: {{ $user->name }}</label>
                            </div>
                            <div>
                                <label for="">ID No: {{ $user->student_id }}</label>
                            </div>
                            <div>
                                <label for="">Birthdate: {{ $user->dob }}</label>
                                <label for="">Age: {{ $user->age }}</label>
                            </div>
                        </div>
                        <div id="2">
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
                            <div>
                                <label for="">Program: {{ $program }}</label>
                            </div>
                            <div>
                                <label for="">Year: {{ $user->year_level }}</label>
                            </div>
                            <div>
                                <label for="">Address: {{ $user->address }}</label>
                            </div>
                        </div>
                        {{-- <div id="3">
                            <div>
                                <label for="">Period: NONE</label>
                            </div>
                            <div>
                                <label for="">Scholarship: NONE</label>
                            </div>
                        </div> --}}
                    </div>
                </section>
            </div>
            <div id="COE" class="rounded-md shadow-lg  bg-gray-300 mt-2 mx-2 overflow-auto 2xl:overflow-x-hidden">
                <table class="table-fixed min-w-full ">
                    <thead class=" border-t-2 border-gray-500">
                        <th class="px-8">Subject Code</th>
                        <th class="px-20">Subject Description</th>
                        <th class="px-10">Lec Units</th>
                        <th class="px-10">Lab Units</th>
                        <th class="px-10">Total Units</th>
                    </thead>
                    <tbody>
                        @foreach ($subjects as $subject)
                            <tr class="text-center border-t-2 border-gray-500">
                                <td class="">{{$subject->subject_code}}</td>
                                <td class="">{{$subject->subject_desc}}</td>
                                <td class="">{{$subject->lec_units}}</td>
                                <td class="">{{$subject->lab_units}}</td>
                                <td class="">{{$subject->total_units}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{--
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="min-w-full border-collapse block md:table">
                        <thead class="block md:table-header-group">
                            <tr
                                class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
                                <th
                                    class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                                    Name</th>
                                <th
                                    class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                                    User Name</th>
                                <th
                                    class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                                    Email Address</th>
                                <th
                                    class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                                    Mobile</th>
                                <th
                                    class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                                    Actions</th>
                            </tr>
                        </thead>
                        <tbody class="block md:table-row-group">
                            <tr class="bg-gray-300 border border-grey-500 md:border-none block md:table-row">
                                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span
                                        class="inline-block w-1/3 md:hidden font-bold">Name</span>Jamal Rios</td>
                                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span
                                        class="inline-block w-1/3 md:hidden font-bold">User Name</span>jrios1</td>
                                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span
                                        class="inline-block w-1/3 md:hidden font-bold">Email
                                        Address</span>jrios@icloud.com</td>
                                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span
                                        class="inline-block w-1/3 md:hidden font-bold">Mobile</span>582-3X2-6233</td>
                                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                                    <span class="inline-block w-1/3 md:hidden font-bold">Actions</span>
                                    <button
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded">Edit</button>
                                    <button
                                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> --}}
</x-app-layout>
