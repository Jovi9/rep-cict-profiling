<x-app-layout>
    @section('doc_title', 'Create Subject')

    <div class="px-6 lg:px-28 md:px-20 sm:px-6  pt-7 pb-10 lg:pt-5">
        <div class="shadow-lg bg-white rounded-lg  px-6 py-5">
            <div>
                <h1 class="font-bold text-lg md:text-3xl flex justify-center">Add New Subject</h1>
            </div>
            <form method="POST" action="{{ route('admin.subject_lists.store') }}">
                @csrf

                <div class="md:flex">
                    {{-- year level --}}
                    <div class="mt-4 w-full md:mr-5">
                        <x-input-label for="year_level_id" :value="__('Year Level')" />

                        <select aria-placeholder="" name="year_level_id" id=""
                            class="text-gray-700 bg-slate-100 w-full
                            mt-2 p-2 rounded-md focus:outline-blue-200
                            shadow-sm border-gray-300 focus:border-indigo-300
                            focus:ring focus:ring-indigo-200
                            focus:ring-opacity-50"
                            value="{{ old('year_level_id') }}">

                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>

                        <x-input-error :messages="$errors->get('year_level_id')" class="mt-2" />
                    </div>

                    {{-- program --}}
                    <div class="mt-4 w-full md:ml-5">
                        <x-input-label for="program" :value="__('Program')" />

                        <select aria-placeholder="" name="program" id=""
                            class="text-gray-700 bg-slate-100 w-full
                    mt-2 p-2 rounded-md focus:outline-blue-200
                    shadow-sm border-gray-300 focus:border-indigo-300
                    focus:ring focus:ring-indigo-200
                    focus:ring-opacity-50"
                            hover:bg-gray-500" value="{{ old('program') }}">

                            <option value="BSIT">BS In Information Technology</option>
                            <option value="BSIS">BS In Information System</option>
                            <option value="BSCS">BS In Computer Science</option>
                        </select>

                        <x-input-error :messages="$errors->get('program')" class="mt-2" />
                    </div>
                </div>

                <div class="md:flex">
                    <!-- Sibject code -->
                    <div class="mt-4 w-full md:mr-5">
                        <x-input-label for="subject_code" :value="__('Subject Code')" />

                        <x-text-input id="subject_code" class="block mt-1 w-full" type="text"
                            name="subject_code" :value="old('subject_code')" required autofocus />

                        <x-input-error :messages="$errors->get('subject_code')" class="mt-2" />
                    </div>

                    <!-- Sibject desc -->
                    <div class="mt-4 w-full md:ml-5">
                        <x-input-label for="subject_desc" :value="__('Subject Description')" />

                        <x-text-input id="subject_desc" class="block mt-1 w-full" type="text"
                            name="subject_desc" :value="old('subject_desc')" required autofocus />

                        <x-input-error :messages="$errors->get('subject_desc')" class="mt-2" />
                    </div>
                </div>

                <div class="md:flex">
                    <!-- lec units -->
                    <div class="mt-4 w-full md:mr-5">
                        <x-input-label for="lec_units" :value="__('Lecture Units')" />

                        <x-text-input id="lec_units" class="block mt-1 w-full" type="number" name="lec_units"
                            :value="old('lec_units')" required autofocus />

                        <x-input-error :messages="$errors->get('lec_units')" class="mt-2" />
                    </div>

                    <!-- lab units -->
                    <div class="mt-4 w-full md:ml-5">
                        <x-input-label for="lab_units" :value="__('Laboratory Units')" />

                        <x-text-input id="lab_units" class="block mt-1 w-full" type="number" name="lab_units"
                            :value="old('lab_units')" required autofocus />

                        <x-input-error :messages="$errors->get('lab_units')" class="mt-2" />
                    </div>
                </div>

                <div>


                    <div class="md:flex mt-10 md:mt-0 justify-center">
                        <div class=" ">
                            <div class="flex justify-center mt-8 mb-3">
                                <button
                                    class="shadow-lg px-5 mx-5 py-3  text-white font-bold rounded-lg
                                    items-center bg-gray-800 md:w-48 w-full
                                    border border-transparent  text-xs
                                     uppercase tracking-widest hover:bg-green-200 hover:text-green-800 hover:font-bold hover:border-green-500
                                    active:bg-gray-900 focus:outline-none focus:border-gray-900
                                    focus:ring ring-gray-300 disabled:opacity-25 transition
                                    ease-in-out duration-150">
                                    Add Subject
                                </button>
                            </div>
                        </div>
                        <div class=" ">
                            <div class="flex justify-center mt-8 mb-3">
                                <a href="{{ route('admin.subject_lists.index') }}"
                                    class="shadow-lg px-5 mx-5 py-3 text-center  text-red-500 font-bold rounded-lg
                                    items-center md:w-48 w-full
                                    border border-red-500  text-xs
                                     uppercase tracking-widest hover:bg-red-200 hover:text-red-500
                                    active:bg-gray-900 focus:outline-none focus:border-gray-900 hover:font-bold
                                    focus:ring ring-gray-300 disabled:opacity-25 transition
                                    ease-in-out duration-150">
                                    Cancel
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
