<x-app-layout>
    @section('doc_title', 'CICT Overview')

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Overview') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="py-2 mt-2 rounded-t text-white bg-gray-500 flex justify-center">2022-2023 CICT Students
                    </div>
                    <canvas class="" id="chartBar"></canvas>
                </div>
            </div>
        </div>
    </div>

    {{-- BSIT --}}
    <input type="hidden" id="count_bsit_first" value="{{ $bsit_first }}">
    <input type="hidden" id="count_bsit_second" value="{{ $bsit_second }}">
    <input type="hidden" id="count_bsit_third" value="{{ $bsit_third }}">
    <input type="hidden" id="count_bsit_fourth" value="{{ $bsit_fourth }}">

    {{-- BSIS --}}
    <input type="hidden" id="count_bsis_first" value="{{ $bsis_first }}">
    <input type="hidden" id="count_bsis_second" value="{{ $bsis_second }}">
    <input type="hidden" id="count_bsis_third" value="{{ $bsis_third }}">
    <input type="hidden" id="count_bsis_fourth" value="{{ $bsis_fourth }}">

    {{-- BSCS --}}
    <input type="hidden" id="count_bscs_first" value="{{ $bscs_first }}">
    <input type="hidden" id="count_bscs_second" value="{{ $bscs_second }}">
    <input type="hidden" id="count_bscs_third" value="{{ $bscs_third }}">
    <input type="hidden" id="count_bscs_fourth" value="{{ $bscs_fourth }}">

    <!-- Required chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Chart bar -->
    <script>

        // BSIT
        var bsit_first = document.getElementById('count_bsit_first').value;
        var bsit_second = document.getElementById('count_bsit_second').value;
        var bsit_third = document.getElementById('count_bsit_third').value;
        var bsit_fourth = document.getElementById('count_bsit_fourth').value;

        // BSIS
        var bsis_first = document.getElementById('count_bsis_first').value;
        var bsis_second = document.getElementById('count_bsis_second').value;
        var bsis_third = document.getElementById('count_bsis_third').value;
        var bsis_fourth = document.getElementById('count_bsis_fourth').value;

        // BSCS
        var bscs_first = document.getElementById('count_bscs_first').value;
        var bscs_second = document.getElementById('count_bscs_second').value;
        var bscs_third = document.getElementById('count_bscs_third').value;
        var bscs_fourth = document.getElementById('count_bscs_fourth').value;

        const labelsBarChart = [
            "1st year",
            "2nd year",
            "3rd year",
            "4th year",
        ];

        const dataBarChart = {
            labels: labelsBarChart,
            datasets: [{
                    label: "BSIT",
                    backgroundColor: "hsl(217, 89%, 60%)",
                    borderColor: "hsl(0, 0, 0)",
                    data: [
                        bsit_first,
                        bsit_second,
                        bsit_third,
                        bsit_fourth
                    ],
                },
                {
                    label: "BSIS",
                    backgroundColor: "hsl(4, 81%, 56%)",
                    borderColor: "hsl(0, 0, 0)",
                    data: [
                        bsis_first,
                        bsis_second,
                        bsis_third,
                        bsis_fourth
                    ],
                },
                {
                    label: "BSCS",
                    backgroundColor: "hsl(136, 52%, 43%)",
                    borderColor: "hsl(0, 0, 0)",
                    data: [
                        bscs_first,
                        bscs_second,
                        bscs_third,
                        bscs_fourth
                    ],
                },
            ],
        };

        const configBarChart = {
            type: "bar",
            data: dataBarChart,
            options: {
                ticks:{
                    precision:0
                }
            },
        };

        var chartBar = new Chart(
            document.getElementById("chartBar"),
            configBarChart
        );
    </script>

</x-app-layout>
