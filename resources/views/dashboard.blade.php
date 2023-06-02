<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    @auth
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('links.create') }}">Novo link</a>
                </div>
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg text-gray-900 dark:text-gray-100">
                <table class="table-auto">
                    <thead>
                        <tr>
                            <th class="px-4 py-2">Nome</th>
                            <th class="px-4 py-2">Link original</th>
                            <th class="px-4 py-2">Link gerado</th>
                            <th class="px-4 py-2">Cliques</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($links as $link)
                        <tr class="bg-gray-800">
                            <td class="px-4 py-2">{{ $link['url_key'] }}</td>
                            <td class="px-4 py-2">{{ $link['destination_url'] }}</td>
                            <td class="px-4 py-2">{{ $link['default_short_url'] }}</td>
                            <td class="px-4 py-2">{{ $link['default_short_url'] }}</td>
                            <td class="px-4 py-2">-</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endauth
</x-app-layout>
