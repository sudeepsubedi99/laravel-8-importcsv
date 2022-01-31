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
                                <h3 class="card-title text-center">Employee Details</h3>
                                <div class="card-tools text-right">
                                    <a href="{{ route('employees.index') }}"
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ">
                                        Go Back
                                    </a>
                                </div>
                                <div class="card-tools text-left">
                                    <a href="{{ route('employees.edit', $employee->id) }}"
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ">
                                        Edit Employee
                                    </a>
                                </div>
                            </div>
                            <div class="card-body px-2 mt-8">
                                <table class="table table-bordered">
                                    <tr>
                                        <td>ID</td>
                                        <td>{{ $employee->id }}</td>
                                    </tr>
                                    <tr>
                                        <td>Name</td>
                                        <td>
                                            <strong>{{ $employee->name }}</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Designation</td>
                                        <td>
                                            <strong>{{ $employee->designation }}</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Join Date</td>
                                        <td>
                                            <strong>{{ $employee->joindate }}</strong>
                                        </td>
                                    </tr>

                                </table>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
