<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @can('admin')
                    <form method="post" action="{{ route('links.store') }}">
                        @csrf
                        <div class="mb-4">
                            <label for="old-link" class="block text-sm font-medium">Link Original:</label>
                            <input type="text" name="old-link" id="old-link" class="mt-1 px-2 py-1 w-full rounded-md bg-gray-800 text-white" required>
                        </div>
                        <div class="mb-4">
                            <label for="alias" class="block text-sm font-medium">Alias:</label>
                            <input type="text" name="alias" id="alias" class="mt-1 px-2 py-1 w-full rounded-md bg-gray-800 text-white" required>
                        </div>
                        <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">Enviar</button>
                    </form>
                    @elsecan('user')
                        Somente admins pode cadastrar novos links
                    @endcan
                </div>
            </div>
        </div>
    </div>
</x-app-layout>