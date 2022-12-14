<x-app-layout>
    @section('doc_title', 'Subject Lists')


    <div class=" px-6 lg:px-28 md:px-20 pt-5 pb-5 lg:pt-5">
        <div class="bg-white h-full pb-5 rounded-lg shadow-lg">
            <div class="flex justify-between">
                <div class=" lg:mx-2 p-3 mx-2 font-bold text-3xl py-3 sticky top-0">
                    <h1 class="sticky top-0">Manage Subjects</h1>
                </div>
                <div class=" lg:mx-2 p-3 mx-2 font-bold text-2xl py-3 sticky top-0">
                    <a href="{{ route('admin.subject_lists.create') }}"
                        class="px-6 my-3 py-2 shadow-lg sticky top-0
                        bg-gray-800
                        border border-transparent rounded-md font-semibold text-xs
                        text-white uppercase tracking-widest hover:bg-gray-700
                        active:bg-gray-900 focus:outline-none focus:border-gray-900
                        focus:ring ring-gray-300 disabled:opacity-25 transition
                        ease-in-out duration-150">
                        Add New</a>
                </div>
            </div>
            <div class="rounded-b-md shadow-lg  mt-2 md:mx-5 h-full  min-h-96">
                <div class=" ">
                    <table class="min-w-full sticky table-fixed border-collapse block md:table">
                        <thead class="block md:table-header-group ">
                            <tr
                                class="block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
                                <th class="p-2 sticky top-0 bg-gray-100 py-3 font-bold text-center block md:table-cell">
                                    Year Level</th>
                                <th class="p-2 sticky top-0 bg-gray-100 py-3 font-bold text-center block md:table-cell">
                                    Program</th>
                                <th class="p-2 sticky top-0 bg-gray-100 py-3 font-bold text-center block md:table-cell">
                                    Subject Code</th>
                                <th class="p-2 sticky top-0 bg-gray-100 py-3 font-bold text-center block md:table-cell">
                                    Subject Description</th>
                                <th class="p-2 sticky top-0 bg-gray-100 py-3 font-bold text-center block md:table-cell">
                                    Lec Units</th>
                                <th class="p-2 sticky top-0 bg-gray-100 py-3 font-bold text-center block md:table-cell">
                                    Lab Units</th>
                                <th class="p-2 sticky top-0 bg-gray-100 py-3 font-bold text-center block md:table-cell">
                                    Total Units</th>
                                <th class="p-2 sticky top-0 bg-gray-100 py-3 font-bold text-center block md:table-cell">
                                    Actions</th>
                            </tr>
                        </thead>
                        <tbody class="block md:table-row-group">
                            @foreach ($subjects as $subject)
                                <tr class="border-y border-gray-500 md:border-none block md:table-row">
                                    <td
                                        class="p-1 ml-2 md:border-y md:border-gray-500 md:text-center block md:table-cell">
                                        <span class="inline-block w-1/3 md:hidden font-bold">
                                            Year Level
                                        </span>
                                        {{ $subject->year_level_id }}
                                    </td>
                                    @php
                                        $program = '';
                                        if ($subject->program === 'BSIT') {
                                            $program = 'BS in Information Technology';
                                        } elseif ($subject->program === 'BSIS') {
                                            $program = 'BS in Information System';
                                        } elseif ($subject->program === 'BSCS') {
                                            $program = 'BS in Computer Science';
                                        }
                                    @endphp
                                    <td
                                        class="p-1 ml-2 md:border-y md:border-gray-500 md:text-center block md:table-cell">
                                        <span class="inline-block w-1/3 md:hidden font-bold">
                                            Program
                                        </span>
                                        {{ $program }}
                                    </td>
                                    <td
                                        class="p-1 ml-2 md:border-y md:border-gray-500 md:text-center block md:table-cell">
                                        <span class="inline-block w-1/3 md:hidden font-bold">
                                            Subject Code
                                        </span>
                                        {{ $subject->subject_code }}
                                    </td>
                                    <td
                                        class="p-1 ml-2 md:border-y md:border-gray-500 md:text-center block md:table-cell">
                                        <span class="inline-block w-1/3 md:hidden font-bold">
                                            Subject Description
                                        </span>
                                        {{ $subject->subject_desc }}
                                    </td>
                                    <td
                                        class="p-1 ml-2 md:border-y md:border-gray-500 md:text-center block md:table-cell">
                                        <span class="inline-block w-1/3 md:hidden font-bold">
                                            Lec Units
                                        </span>
                                        {{ $subject->lec_units }}
                                    </td>
                                    <td
                                        class="p-1 ml-2 md:border-y md:border-gray-500 md:text-center block md:table-cell">
                                        <span class="inline-block w-1/3 md:hidden font-bold">
                                            Lab Units
                                        </span>
                                        {{ $subject->lab_units }}
                                    </td>
                                    <td
                                        class="p-1 ml-2 md:border-y md:border-gray-500 md:text-center block md:table-cell">
                                        <span class="inline-block w-1/3 md:hidden font-bold">
                                            Total Units
                                        </span>
                                        {{ $subject->total_units }}
                                    </td>
                                    <td class="p-1 ml-2 md:border-y md:border-gray-500 md:text-center block md:table-cell">
                                        <span class="inline-block w-1/3 md:hidden font-bold">Action</span>
                                        <a href="{{ route('admin.subject_lists.edit', ['subject_list' => $subject->id]) }}"
                                            class="px-6 my-3 py-2 shadow-lg
                                            bg-gray-500 border border-transparent rounded-md font-semibold text-xs
                                            text-white hover:bg-gray-700">
                                            Edit
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
