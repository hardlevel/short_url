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
                        <input type="text" name="old-link">
                        <input type="text" name="alias">
                        <button type="submit">Enviar</button>
                    </form>
                    @elsecan('user')
                        Somente admins pode cadastrar novos links
                    @endcan
                </div>
            </div>
        </div>
    </div>
</x-app-layout>