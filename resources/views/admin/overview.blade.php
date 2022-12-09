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

    <!-- Required chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Chart bar -->
    <script>
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
                        100,
                        70,
                        50,
                        80,
                    ],
                },
                {
                    label: "BSIS",
                    backgroundColor: "hsl(4, 81%, 56%)",
                    borderColor: "hsl(0, 0, 0)",
                    data: [
                        90,
                        60,
                        60,
                        90,
                    ],
                },
                {
                    label: "BSCS",
                    backgroundColor: "hsl(136, 52%, 43%)",
                    borderColor: "hsl(0, 0, 0)",
                    data: [
                        80,
                        50,
                        70,
                        100,
                    ],
                },
            ],
        };

        const configBarChart = {
            type: "bar",
            data: dataBarChart,
            options: {},
        };

        var chartBar = new Chart(
            document.getElementById("chartBar"),
            configBarChart
        );
    </script>

</x-app-layout>
