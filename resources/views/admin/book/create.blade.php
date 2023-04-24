<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Создать книгу') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-5xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('admin.books.store') }}">
                        @csrf
                        <div class="mb-6">
                            <x-ui.image name="title"
                                        label="Название книги"
                                        placeholder="Введите название книги"
                            />
                        </div>

                        <div class="mb-6">
                            <x-ui.input name="title"
                                        label="Название книги"
                                        placeholder="Введите название книги"
                            />
                        </div>

                        <div class="mb-6">
                            <x-ui.input name="author"
                                        label="Автор"
                                        placeholder="Введите название автора книги"
                            />
                        </div>

                        <div class="mb-6">
                            <x-ui.radio name="rating"
                                        label="Рейтинг"
                                        :options="\App\Models\Book::RATING"
                            />
                            @error('rating')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <x-ui.textarea name="description"
                                        label="Описание"
                                        placeholder="Введите описание книги"
                            />
                        </div>

                        <x-primary-button type="submit">
                            Отправить
                        </x-primary-button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
