<x-app-layout>
    @section('doc_title', 'Subjects')

    <div class=" px-6 lg:px-28 md:px-20 pt-5 pb- lg:pt-5">
        <div class="bg-white max-h-full pb-5 rounded-lg shadow-lg">
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
            <div id="COE"
                class="rounded-b-md shadow-md bg-white mt-2 md:mx-5 overflow-auto">

                <table class="min-w-full border-collapse block md:table h-96">
                    <thead class="block md:table-header-group md:border-y border-b-1 border-black">
                        <tr
                            class="border border-gray-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
                            <th
                                class="p-2 py-3 bg-gray-100 font-bold text-center block md:table-cell">
                                Subject Code</th>
                            <th
                                class="p-2 py-3 bg-gray-100 font-bold text-center block md:table-cell">
                                Subject Description</th>
                            <th
                                class="p-2 py-3 bg-gray-100 font-bold text-center block md:table-cell">
                                Lec Units</th>
                            <th
                                class="p-2 py-3 bg-gray-100 font-bold text-center block md:table-cell">
                                Lab Units</th>
                            <th
                                class="p-2 py-3 bg-gray-100 font-bold text-center block md:table-cell">
                                Total Units</th>
                        </tr>
                    </thead>
                    <tbody class="block md:table-row-group">
                        @foreach ($subjects as $subject)
                            <tr class="border border-gray-500 md:border-none block md:table-row">
                                <td class="p-1 md:border-y md:border-gray-500 md:text-center block md:table-cell"><span
                                        class="inline-block w-1/3 md:hidden font-bold">Subject
                                        Code</span>{{ $subject->subject_code }}</td>
                                <td class="p-1 md:border-y md:border-gray-500 md:text-center block md:table-cell">
                                    <span class="inline-block w-1/3 md:hidden font-bold">Subject
                                        Description
                                    </span>
                                    <span>
                                        {{ $subject->subject_desc }}
                                    </span>
                                </td>
                                <td class="p-1 md:border-y md:border-gray-500 md:text-center block md:table-cell"><span
                                        class="inline-block w-1/3 md:hidden font-bold">Lec
                                        Units</span>{{ $subject->lec_units }}</td>
                                <td class="p-1 md:border-y md:border-gray-500 md:text-center block md:table-cell"><span
                                        class="inline-block w-1/3 md:hidden font-bold">Lab
                                        Units</span>{{ $subject->lab_units }}</td>
                                <td class="p-1 md:border-y md:border-gray-500 md:text-center block md:table-cell">
                                    <span class="inline-block w-1/3 md:hidden font-bold">Total Units</span>
                                    {{ $subject->total_units }}

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>
