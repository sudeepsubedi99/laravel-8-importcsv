<x-app-layout>
    <x-delete />
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Employees') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <x-alert.success></x-alert.success>

                    <x-validation-errors class="mb-4" :errors="$errors" />


                    <div class="overflow-hidden overflow-x-auto min-w-full align-middle sm:rounded-md">
                        <div class="card">
                            <div class="card-header ">
                                <h3 class="card-title text-center">Details on Employee</h3>
                                <div class="card-tools text-right">
                                    <a href="{{ route('employees.index') }}"
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ">
                                        Go Back
                                    </a>
                                </div>
                            </div>
                            <div class="card-body bg-white divide-y divide-gray-200 divide-solid">
                                {{-- @dd($id); --}}
                                <form action="{{ route('employees.store') }}" method="post" autocomplete="off">
                                    @csrf

                                    <div class="form-group ">
                                        <label for="name"
                                            class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">Name</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            value="{{ old('name') ?? '' }}">
                                        @error('name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group ">
                                        <label for="designation"
                                            class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">designation</label>
                                        <input type="text" class="form-control" id="designation" name="designation"
                                            value="{{ old('designation') ?? '' }}">
                                        @error('designation')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group ">
                                        <label for="joindate"
                                            class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">joindate</label>
                                        <input type="text" class="form-control" id="joindate" name="joindate"
                                            value="{{ old('joindate') ?? '' }}">
                                        @error('joindate')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <button type="submit"
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                                </form>
                                </form>
                            </div>

                        </div>



                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
