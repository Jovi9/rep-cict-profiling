<x-app-layout>
    @section('doc_title', 'Student Lists')

    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Student Lists') }}
        </h2>
    </x-slot> --}}

    <div class=" px-6 lg:px-28 md:px-20 pt-5 pb-5 lg:pt-5">
        <div class="bg-white h-full pb-5 rounded-lg shadow-lg">
            <div class=" lg:mx-2 p-3 mx-2 font-bold text-2xl py-3">
                <h1>Manage Students</h1>
            </div>
            <div class="rounded-b-md shadow-lg  mt-2 md:mx-5 h-full  min-h-96">
                <div class=" ">
                    <table class="min-w-full sticky table-fixed border-collapse block md:table">
                        <thead class="block md:table-header-group ">
                            <tr
                                class="block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
                                <th class="p-2 sticky top-0 bg-gray-100 py-3 font-bold text-center block md:table-cell">
                                    Student-ID</th>
                                <th class="p-2 sticky top-0 bg-gray-100 py-3 font-bold text-center block md:table-cell">
                                    Name</th>
                                <th class="p-2 sticky top-0 bg-gray-100 py-3 font-bold text-center block md:table-cell">
                                    Program</th>
                                <th class="p-2 sticky top-0 bg-gray-100 py-3 font-bold text-center block md:table-cell">
                                    Year</th>
                                <th class="p-2 sticky top-0 bg-gray-100 py-3 font-bold text-center block md:table-cell">
                                    Action</th>
                            </tr>
                        </thead>
                        <tbody class="block md:table-row-group">
                            @foreach ($users as $user)
                                <tr class="border-y border-gray-500 md:border-none block md:table-row">
                                    <td class="p-1 ml-2 md:border-y md:border-gray-500 md:text-center block md:table-cell"><span
                                            class="inline-block w-1/3 md:hidden font-bold">
                                            Student-ID
                                        </span>
                                        {{ $user->student_id }}</td>
                                    <td class="p-1 ml-2 md:border-y md:border-gray-500 md:text-center block md:table-cell">
                                        <span class="inline-block w-1/3 md:hidden font-bold">
                                            Name
                                        </span>
                                        <span>
                                            {{ $user->name }}
                                        </span>
                                    </td>
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
                                    <td class="p-1 ml-2 md:border-y md:border-gray-500 md:text-center block md:table-cell"><span
                                            class="inline-block w-1/3 md:hidden font-bold">Program</span>{{ $program }}
                                    </td>
                                    <td class="p-1 ml-2 md:border-y md:border-gray-500 md:text-center block md:table-cell"><span
                                            class="inline-block w-1/3 md:hidden font-bold">Year</span>{{ $user->year_level }}
                                    </td>
                                    <td class="flex p-1 ml-2 md:border-y md:border-gray-500 md:text-center  md:table-cell">
                                        <span class="inline-block w-1/3 md:hidden font-bold">Action</span>

                                        <div>
                                            @if ($user->_status === 'pending')
                                                <form
                                                    action="{{ route('admin.student_lists.update', ['student_list' => $user->id]) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('PUT')
                                                    <input type="hidden" name="action" value="approve">
                                                    <button type="submit"
                                                        class="bg-yellow-300 py-1 w-48 shadow-lg rounded-lg my-1">Approve</button>
                                                </form>
                                                <form
                                                    action="{{ route('admin.student_lists.update', ['student_list' => $user->id]) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('PUT')
                                                    <input type="hidden" name="action" value="decline">
                                                    <button
                                                        class="bg-red-300 py-1 w-48 shadow-lg rounded-lg my-1">Decline</button>
                                                </form>
                                            @elseif ($user->_status === 'declined')
                                                <form
                                                    action="{{ route('admin.student_lists.update', ['student_list' => $user->id]) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('PUT')
                                                    <input type="hidden" name="action" value="approve">
                                                    <button type="submit"
                                                        class="bg-green-300 py-1 w-48 shadow-lg rounded-lg my-1">Re-Approve
                                                    </button>
                                                </form>
                                            @elseif ($user->_status === 'approved')
                                                <a
                                                    href="{{ route('admin.student_lists.show', ['student_list' => $user->id]) }}">
                                                    <button type="submit"
                                                        class="bg-blue-300 py-1 w-48 shadow-lg rounded-lg my-1">
                                                        View Student Details
                                                    </button>
                                                </a>
                                                <form
                                                    action="{{ route('admin.student_lists.update', ['student_list' => $user->id]) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('PUT')
                                                    <input type="hidden" name="action" value="decline">
                                                    <button
                                                        class="bg-red-300 py-1 w-48 shadow-lg rounded-lg my-1">Decline</button>
                                                </form>
                                            @endif

                                        </div>


                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
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
