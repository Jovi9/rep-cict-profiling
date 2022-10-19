<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CICT Profiling</title>

    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<div class="bg-white">
    <!--content-->
    <div class="p-10 grid lg:grid-cols-2  w-full">
        <!--Left-->
        <div class=" ">
            <div class=" flex min-h-full items-center justify-center   sm:px-6 xl:px-8 ">
                <div class="  max-w-sm  ">
                    <h1 class="max-w-lg font-bold text-center lg:text-left text-4xl  ">
                        College of Information and Communications Technology Student Profilling
                    </h1>
                </div>
            </div>
        </div>

        <!--Right-->
        <div class="">
            <div class=" flex min-h-full items-center justify-center py-12 px-4  sm:px-6 xl:px-8 ">
                <div class="w-full max-w-sm justify-center ">
                    <div class="  p-5 px-5 rounded-lg bg-darkBlue">
                        <div class="flex flex-col py-2 text-gray-400">
                            <label for="">Email</label>
                            <input
                                class="rounded-lg mt-2 p-2 bg-gray-700 focus:bg-gray-800 focus:outline-none hover:bg-gray-500"
                                type="email">
                        </div>
                        <div class="flex flex-col py-2 text-gray-400">
                            <label for="">Password</label>
                            <input
                                class="rounded-lg mt-2 p-2 bg-gray-700 focus:bg-gray-800 focus:outline-none hover:bg-gray-500"
                                type="password">
                        </div>
                        <div>
                            <button onclick="login()" id="Login-btn"
                                class=" w-full my-5 py-2 bg-teal-500 text-white font-semibold rounded-lg">Login</button>
                        </div>
                        <div class="flex justify-center text-gray-400">
                            <p>Forgot Password?</p>
                        </div>
                        <div class=" text-gray-400">
                            <hr>
                        </div>
                        <div>
                            <button onclick="register()"
                                class="w-full my-5 py-2 bg-teal-500 text-white font-semibold rounded-lg">
                                Register
                            </button>
                            <!--goods register form para sa modal-->
                            <div id="modal" aria-modal="true" class="hidden">
                                <div
                                    class=" bg-black bg-opacity-50 fixed  inset-0 justify-center items-center max-h-screen">
                                    <div
                                        class="  flex min-h-full items-center justify-center py-12 px-4  sm:px-6 xl:px-8 ">
                                        <div class=" w-full max-w-sm justify-center ">
                                            <div class="py-2 px-5 rounded-lg bg-darkBlue ">
                                                <h2
                                                    class="mt-1 text-left text-3xl font-bold tracking-tight text-gray-300">
                                                    Register
                                                </h2>
                                                <div>
                                                    <div class="flex flex-col text-gray-400">
                                                        <label for="student-id"></label>
                                                        <input
                                                            class="rounded-lg mt-2 p-2 bg-gray-700 focus:bg-gray-800 focus:outline-none hover:bg-gray-500"
                                                            type="numbers" placeholder="Student-ID">
                                                    </div>
                                                    <div class="flex flex-col text-gray-400">
                                                        <label for="name"></label>
                                                        <input
                                                            class="rounded-lg mt-2 p-2 bg-gray-700 focus:bg-gray-800 focus:outline-none hover:bg-gray-500"
                                                            type="text" placeholder="Name">
                                                    </div>
                                                    <div class="flex flex-col text-gray-400">
                                                        <label for="date-of-birth"></label>
                                                        <input
                                                            class="rounded-lg mt-2 p-2 bg-gray-700 focus:bg-gray-800 focus:outline-none hover:bg-gray-500"
                                                            type="date" placeholder="Date of Birth">
                                                    </div>
                                                    <div class="flex flex-col text-gray-400">
                                                        <label for="sex"></label>
                                                        <select name="Sex" id=""
                                                            class="rounded-lg mt-2 p-2 bg-gray-700 focus:bg-gray-800 focus:outline-none hover:bg-gray-500">
                                                            <option>Male</option>
                                                            <option value="">Female</option>
                                                        </select>
                                                    </div>
                                                    <div class="flex flex-col text-gray-400">
                                                        <label for="Course"></label>
                                                        <select name="Course" id=""
                                                            class="rounded-lg mt-2 p-2 bg-gray-700 focus:bg-gray-800 focus:outline-none hover:bg-gray-500">
                                                            <option>BS in InformationTechnology</option>
                                                            <option>BS in InformationSystem</option>
                                                            <option>BS in ComputerScience</option>
                                                        </select>
                                                    </div>
                                                    <div class="flex flex-col text-gray-400">
                                                        <label for="year-level"></label>
                                                        <select name="year-level" id=""
                                                            class="rounded-lg mt-2 p-2 bg-gray-700 focus:bg-gray-800 focus:outline-none hover:bg-gray-500">
                                                            <option>1st Year</option>
                                                            <option>2nd Year</option>
                                                            <option>3rd Year</option>
                                                            <option>4th Year</option>
                                                        </select>
                                                    </div>
                                                    <div class="flex flex-col text-gray-400">
                                                        <label for="email"></label>
                                                        <input
                                                            class="rounded-lg mt-2 p-2 bg-gray-700 focus:bg-gray-800 focus:outline-none hover:bg-gray-500"
                                                            type="email" placeholder="Email">
                                                    </div>
                                                    <div class="flex flex-col text-gray-400">
                                                        <label for="password"></label>
                                                        <input
                                                            class="rounded-lg mt-2 p-2 bg-gray-700 focus:bg-gray-800 focus:outline-none hover:bg-gray-500"
                                                            type="password" placeholder="Password">
                                                    </div>
                                                    <div class="flex flex-col text-gray-400">
                                                        <label for="confirm-password"></label>
                                                        <input
                                                            class="rounded-lg mt-2 p-2 bg-gray-700 focus:bg-gray-800 focus:outline-none hover:bg-gray-500"
                                                            type="password" placeholder="Confirm Password">
                                                    </div>
                                                </div>
                                                <div>
                                                    <button onclick="registercomplete()"
                                                        class="w-full my-3 py-2 bg-teal-500 text-white font-semibold rounded-lg">
                                                        Register
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<body>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\VillafuerteJoshuaR\cictprofiling\resources\views/welcome.blade.php ENDPATH**/ ?>