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
                    <a href="{{ route('links.index') }}">Novo link</a>
                </div>
            </div>
            <div class="">
                <table class="table-auto">
                    <thead>
                        <tr>
                            <th>Link original</th>
                            <th>Link gerado</th>
                        </tr>
                    </thead>
                    @dd($links)
                    <tbody>
                        @foreach ($links as $link)
                        <tr>
                            <td>{{ $link->original-link }}</td>
                            <td>{{ $link->new-link }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endauth
</x-app-layout>
