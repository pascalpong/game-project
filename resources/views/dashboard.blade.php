<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="py-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
                <form method="POST" action="{{ route('game.store') }}" enctype="multipart/form-data">
                @csrf
                    <div class="flex w-full">
                        <div class="flex-1 px-2">
                            <label class="block mb-2 text-sm font-medium text-gray-900" for="image">Upload file</label>
                            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer" aria-describedby="file_input_help" id="image" name="image" type="file">
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                        </div>
                        <div class="flex-1 px-2">
                            <label class="block mb-2 text-sm font-medium text-gray-900" for="name">Name</label>
                            <input class="w-full text-sm text-gray-900 border border-gray-300 rounded-lg" id="name" name="name" type="text">
                        </div>
                        <div class="flex-1 px-2">
                            <label class="block mb-2 text-sm font-medium text-gray-900" for="link">Link</label>
                            <input class="w-full text-sm text-gray-900 border border-gray-300 rounded-lg" id="link" name="link" type="text">
                        </div>
                        <div class="flex-1 px-2">
                            <label class="block mb-2 text-sm font-medium text-gray-900" for="type">Type</label>
                            <input class="w-full text-sm text-gray-900 border border-gray-300 rounded-lg" id="type" name="type" type="text">
                        </div>
                    </div>
                    <div>
                        <input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit" value="submit">
                    </div>
                </form>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th class="text-center p-2 border-b-2 border-blue-500 border-opacity-75 md:border-opacity-50">Images</th>
                            <th class="text-left p-2 border-b-2 border-blue-500 border-opacity-75 md:border-opacity-50">Games</th>
                            <th class="text-center p-2 border-b-2 border-blue-500 border-opacity-75 md:border-opacity-50">Type</th>
                            <th class="text-center p-2 border-b-2 border-blue-500 border-opacity-75 md:border-opacity-50">Link</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse( $games as $game )
                        <tr class="p-2 border-b-2 border-blue-500 border-opacity-75 md:border-opacity-50">
                            <td class="text-center">
                                <img height="150" width="150" src="{{ $game->image }}" />
                            </td>
                            <td>{{ $game->name }}</td>
                            <td class="text-center">{{ $game->type }}</td>
                            <td class="text-center"><a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="{{ $game->link }}">click</a></td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3">No data</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
