<x-app-layout>
    @section('doc_title', 'Subject Lists')

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Subject Lists') }}
        </h2>
    </x-slot>

    <div class=" mb-7    px-6 lg:px-28 md:px-20 pt-5  lg:pt-8">
        <div class=" h-full  bg-gray-400  pb-5 rounded-lg shadow-lg ">
            <div class=" mx-2 font-bold text-2xl py-3 lg:py-5">
                <h1>Manage Subjects</h1>
            </div>
            <div>
                <a href="{{ route('admin.subject_lists.create') }}"
                    class="hadow-lg px-6 my-3 py-2 shadow-lg
                    bg-gray-800
                    border border-transparent rounded-md font-semibold text-xs
                    text-white uppercase tracking-widest hover:bg-gray-700
                    active:bg-gray-900 focus:outline-none focus:border-gray-900
                    focus:ring ring-gray-300 disabled:opacity-25 transition
                    ease-in-out duration-150">
                    Add New</a>
            </div>

            <table class="min-w-full border-collapse block md:table">
                <thead class="block md:table-header-group">
                    <tr
                        class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
                        <th
                            class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                            Year Level</th>
                        <th <th
                            class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                            Program</th>
                        <th
                            class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                            Subject Code</th>
                        <th
                            class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                            Subject Description</th>
                        <th
                            class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                            Lec Units</th>
                        <th
                            class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                            Lab Units</th>
                        <th
                            class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                            Total Units</th>
                        <th
                            class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                            Actions</th>
                    </tr>
                </thead>
                <tbody class="block md:table-row-group">
                    @foreach ($subjects as $subject)
                        <tr class="bg-gray-300 border border-grey-500 md:border-none block md:table-row">
                            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
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
                            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                                {{ $program }}
                            </td>
                            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                                {{ $subject->subject_code }}
                            </td>
                            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                                {{ $subject->subject_desc }}
                            </td>
                            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                                {{ $subject->lec_units }}
                            </td>
                            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                                {{ $subject->lab_units }}
                            </td>
                            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                                {{ $subject->total_units }}
                            </td>
                            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                                <a href="{{ route('admin.subject_lists.edit', ['subject_list' => $subject->id]) }}"
                                    class="shadow-lg px-5 py-1  bg-teal-500 text-white font-semibold rounded-lg">
                                    Edit
                                </a>
                                {{-- <button
                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded">Delete</button> --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
