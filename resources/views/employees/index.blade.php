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
                    {{-- <form action="{{ route('import_parse') }}" method="POST" class="mb-4"
                        enctype="multipart/form-data">
                        @csrf

                        <div>
                            <x-label for="csv_file" :value="__('CSV file to import')" />

                            <x-input id="csv_file" class="block mt-1 w-full" type="file" name="csv_file" required />
                        </div>

                        <div class="mt-4 flex items-center">
                            <x-label for="header" :value="__('File contains header row?')" />

                            <x-input id="header" class="ml-1" type="checkbox" name="header" checked />
                        </div>

                        <x-button class="mt-4">
                            {{ __('Submit') }}
                        </x-button>
                    </form> --}}

                    <div class="overflow-hidden overflow-x-auto min-w-full align-middle sm:rounded-md">
                        <div class="card">
                            <div class="card-header ">
                                <h3 class="card-title text-center ">All Employee</h3>
                                <div class="card-tools text-right mb-8">
                                    <a href="{{ route('employees.create') }}"
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ">
                                        Add New Employee
                                    </a>
                                </div>
                            </div>
                            <table class="min-w-full divide-y divide-gray-200 border">
                                <thead>
                                    <tr>
                                        <th class="px-6 py-3 bg-gray-50">
                                            <span
                                                class="text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Name</span>
                                        </th>
                                        <th class="px-6 py-3 bg-gray-50">
                                            <span
                                                class="text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Designation</span>
                                        </th>
                                        <th class="px-6 py-3 bg-gray-50">
                                            <span
                                                class="text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Join
                                                Date</span>
                                        </th>
                                        <th class="px-6 py-3 bg-gray-50">
                                            <span
                                                class="text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Action</span>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody class="bg-white divide-y divide-gray-200 divide-solid">
                                    @foreach ($employees as $employee)
                                        <tr class="bg-white">
                                            <td
                                                class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900 text-center">
                                                {{ $employee->name }}
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900 text-center">
                                                {{ $employee->designation }}
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900 text-center">
                                                {{ $employee->joindate }}
                                            </td>
                                            <td class="text-center">
                                                <a href="{{ route('employees.show', [$employee->id]) }}"
                                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                                    Details
                                                    {{-- {{ route('users.show', [$admin->id]) }} --}}
                                                </a>
                                                <a href="{{ route('employees.edit', [$employee->id]) }}"
                                                    class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded margin-5">
                                                    Edit
                                                    {{-- {{ route('users.edit', [$admin->id]) }} --}}
                                                </a>
                                                <button
                                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                                                    onclick="confirmDelete({{ $employee->id }})">
                                                    Delete
                                                </button>
                                                <form id="delete-form-{{ $employee->id }}" style="display: none"
                                                    action="{{ route('employees.destroy', $employee->id) }}"
                                                    method="POST">
                                                    @csrf @method('DELETE')

                                                </form>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        {{ $employees->links() }}

                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
