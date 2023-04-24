<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Книги') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-5xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if (session()->has('status'))
                        <div class="flex justify-center items-center">

                            <p class="ml-3 text-sm font-bold text-green-600">{{ session()->get('status') }}</p>
                        </div>
                    @endif

                    <div class="mt-1 mb-4">

                        <x-primary-button>
                            <a href="{{ route('admin.books.create') }}">{{ __('Добавить книгу') }}</a>
                        </x-primary-button>
                    </div>
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        @if($books->count() > 0)
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    #
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Название книги
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Редактировать
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Удалить
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($books as $book)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                        {{ $book->id }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $book->name }}

                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="{{ route('book.edit', $book) }}">Edit</a>
                                    </td>
                                    <td class="px-6 py-4">
                                        <form action="{{ route('book.destroy', $book) }}" method="POST"
                                              onsubmit="return confirm('{{ trans('are You Sure ? ') }}');"
                                              style="display: inline-block;">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit" class="px-4 py-2 text-white bg-red-700 rounded"
                                                   value="Delete">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        @else
                            <p class="p-6">Книг не найдено</p>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
