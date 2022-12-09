<x-app-layout>
    @section('doc_title', 'CICT Profiling')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2>Welcome to CICT Profiling, {{ Auth::user()->name }}</h2>
                    <br>
                    @if (Auth::user()->_status === 'pending')
                        <h3>Your registration for profiling is pending for approval, please check again after one day or
                            check your email.</h3>
                        <br>
                        <h3>Thank You.</h3>
                    @elseif (Auth::user()->_status === 'declined')
                        <h3>Your registration for profiling has been declined, please go to the faculty office for
                            information as to why your registration has been declined.</h3>
                        <br>
                        <h3>Thank You.</h3>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
