<x-app-layout>
    @section('doc_title', 'Create Subject')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create New Subject') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div>
                        <a href="{{ route('admin.subject_lists.index') }}"
                            class="hadow-lg px-6 my-3 py-2 shadow-lg
                            bg-gray-800
                            border border-transparent rounded-md font-semibold text-xs
                            text-white uppercase tracking-widest hover:bg-gray-700
                            active:bg-gray-900 focus:outline-none focus:border-gray-900
                            focus:ring ring-gray-300 disabled:opacity-25 transition
                            ease-in-out duration-150">
                            Back</a>
                    </div>
                    <div>
                        <h1 class="font-bold text-lg xl:text-3xl flex justify-center">Subject Information</h1>
                    </div>

                    <form method="POST" action="{{ route('admin.subject_lists.store') }}">
                        @csrf

                        {{-- year level --}}
                        <div class="mt-4">
                            <x-input-label for="year_level_id" :value="__('Year Level')" />

                            <select aria-placeholder="" name="year_level_id" id=""
                                class="text-gray-700 bg-slate-100 w-full
                            mt-2 p-2 rounded-md focus:outline-blue-200
                            shadow-sm border-gray-300 focus:border-indigo-300
                            focus:ring focus:ring-indigo-200
                            focus:ring-opacity-50"
                                hover:bg-gray-500" value="{{ old('year_level_id') }}">

                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>

                            <x-input-error :messages="$errors->get('year_level_id')" class="mt-2" />
                        </div>

                        {{-- program --}}
                        <div class="mt-4">
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

                        <!-- Sibject code -->
                        <div class="mt-4">
                            <x-input-label for="subject_code" :value="__('Subject Code')" />

                            <x-text-input id="subject_code" class="block mt-1 w-full" type="text" name="subject_code"
                                :value="old('subject_code')" required autofocus />

                            <x-input-error :messages="$errors->get('subject_code')" class="mt-2" />
                        </div>

                        <!-- Sibject desc -->
                        <div class="mt-4">
                            <x-input-label for="subject_desc" :value="__('Subject Description')" />

                            <x-text-input id="subject_desc" class="block mt-1 w-full" type="text" name="subject_desc"
                                :value="old('subject_desc')" required autofocus />

                            <x-input-error :messages="$errors->get('subject_desc')" class="mt-2" />
                        </div>

                        <!-- lec units -->
                        <div class="mt-4">
                            <x-input-label for="lec_units" :value="__('Lecture Units')" />

                            <x-text-input id="lec_units" class="block mt-1 w-full" type="number" name="lec_units"
                                :value="old('lec_units')" required autofocus />

                            <x-input-error :messages="$errors->get('lec_units')" class="mt-2" />
                        </div>

                        <!-- lec units -->
                        <div class="mt-4">
                            <x-input-label for="lab_units" :value="__('Laboratory Units')" />

                            <x-text-input id="lab_units" class="block mt-1 w-full" type="number" name="lab_units"
                                :value="old('lab_units')" required autofocus />

                            <x-input-error :messages="$errors->get('lab_units')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-8">
                            <x-primary-button class="ml-4 w-full">
                                {{ __('Save Subject') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
