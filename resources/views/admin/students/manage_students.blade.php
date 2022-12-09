<x-app-layout>
    @section('doc_title', 'Student Lists')

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Student Lists') }}
        </h2>
    </x-slot>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                </div>
            </div>
        </div>
    </div> --}}

    <div class=" mb-7    px-6 lg:px-28 md:px-20 pt-5  lg:pt-8">
        <div class=" h-full  bg-gray-400  pb-5 rounded-lg shadow-lg ">
            <div class=" mx-2 font-bold text-2xl py-3 lg:py-5">
                <h1>Manage Students</h1>
            </div>

            {{-- <x-text-input id="txtsearch" class="block mt-1 w-full" type="text" name="txtsearch" autofocus
                placeholder="Search Name or Student ID No." /> --}}

            <div class="  rounded-lg shadow-lg h-96 overflow-auto bg-gray-300 mt-2 mx-2 ">
                <table class="table-fixed  h-full min-w-full ">
                    <thead class="">
                        <th class="bg-gray-300 sticky top-0 lg:py-3 px-14">Student-ID</th>
                        <th class="bg-gray-300 sticky top-0 px-20">Name</th>
                        <th class="bg-gray-300 sticky top-0 px-20">Program</th>
                        <th class="bg-gray-300 sticky top-0 px-">Year</th>
                        <th class="bg-gray-300 sticky top-0 px-20">Action</th>
                    </thead>
                    <tbody class="" id="student_list">
                        @foreach ($users as $user)
                            <tr class="text-center border-t-2 border-gray-500">
                                <td class="lg:py-3">{{ $user->student_id }}</td>
                                <td class="">{{ $user->name }}</td>
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
                                <td class="">{{ $program }}</td>
                                <td class="">{{ $user->year_level }}</td>
                                <td class="py-1">
                                    @if ($user->_status === 'pending')
                                        <form
                                            action="{{ route('admin.student_lists.update', ['student_list' => $user->id]) }}"
                                            method="post">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="action" value="approve">
                                            <button
                                                class="shadow-lg px-5 py-1  bg-teal-500 text-white font-semibold rounded-lg"
                                                type="submit">
                                                Approve
                                            </button>
                                        </form>
                                        <form
                                            action="{{ route('admin.student_lists.update', ['student_list' => $user->id]) }}"
                                            method="post">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="action" value="decline">
                                            <button
                                                class="shadow-lg px-5 py-1 bg-red-500 text-white font-semibold rounded-lg">
                                                Decline
                                            </button>
                                        </form>
                                    @elseif ($user->_status === 'declined')
                                        <form
                                            action="{{ route('admin.student_lists.update', ['student_list' => $user->id]) }}"
                                            method="post">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="action" value="approve">
                                            <button
                                                class="shadow-lg px-5 py-1  bg-teal-500 text-white font-semibold rounded-lg"
                                                type="submit">
                                                Re-Approve
                                            </button>
                                        </form>
                                    @elseif ($user->_status === 'approved')
                                        <a href="{{ route('admin.student_lists.show', ['student_list' => $user->id]) }}"
                                            class="shadow-lg px-5 py-1  bg-teal-500 text-white font-semibold rounded-lg">
                                            View Student Details
                                        </a>
                                        <form
                                            action="{{ route('admin.student_lists.update', ['student_list' => $user->id]) }}"
                                            method="post">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="action" value="decline">
                                            <button
                                                class="shadow-lg px-5 py-1 bg-red-500 text-white font-semibold rounded-lg">
                                                Decline
                                            </button>
                                        </form>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'csrftoken': '{{ csrf_token() }}'
            }
        });

        $(document).ready(function() {
            $('#txtsearch').on('keyup', function() {
                var value = $(this).val();
                console.log(value);
                $.ajax({
                    type: "get",
                    url: "/admin/student_lists/q",
                    data: {
                        'txtsearch': value
                    },
                    success: function(response) {
                        console.log(response);
                        $('#student_list').html(response);
                    }
                });
            });
        });
    </script> --}}
</x-app-layout>
