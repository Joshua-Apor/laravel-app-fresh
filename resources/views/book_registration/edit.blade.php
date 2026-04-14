<x-layout title="Edit Book | Book Management System">

<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

    <div class="mb-8">
        <a href="/books" class="text-blue-300 hover:text-white transition-colors text-sm flex items-center gap-2">
            Back to Books List
        </a>
    </div>

    <div class="bg-white/5 border border-white/10 backdrop-blur-md rounded-3xl p-8 shadow-2xl">

        <form method="POST" action="/books/{{ $book->id }}">
            @csrf
            @method('PUT')

            <div class="border-b border-white/10 pb-8 mb-8">
                <h2 class="text-3xl font-black text-white tracking-tight">Edit Book</h2>
                <p class="mt-2 text-blue-200/60 text-sm">Update book details below.</p>
            </div>

            <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                <div class="sm:col-span-3">
                    <label class="text-blue-100 text-sm">Title</label>
                    <input type="text" name="title"
                           value="{{ $book->title }}"
                           class="w-full rounded-xl bg-white/10 px-4 py-2.5 text-white">
                </div>

                <div class="sm:col-span-3">
                    <label class="text-blue-100 text-sm">Author</label>
                    <input type="text" name="author"
                           value="{{ $book->author }}"
                           class="w-full rounded-xl bg-white/10 px-4 py-2.5 text-white">
                </div>

                <div class="sm:col-span-3">
                    <label class="text-blue-100 text-sm">Genre</label>
                    <input type="text" name="genre"
                           value="{{ $book->genre }}"
                           class="w-full rounded-xl bg-white/10 px-4 py-2.5 text-white">
                </div>

                <div class="sm:col-span-3">
                    <label class="text-blue-100 text-sm">Year</label>
                    <input type="number" name="published_year"
                           value="{{ $book->published_year }}"
                           class="w-full rounded-xl bg-white/10 px-4 py-2.5 text-white">
                </div>

                <div class="col-span-full">
                    <label class="text-blue-100 text-sm">Description</label>
                    <textarea name="description"
                              class="w-full rounded-xl bg-white/10 px-4 py-2.5 text-white">{{ $book->description }}</textarea>
                </div>

                <div class="sm:col-span-3">
                    <label class="text-blue-100 text-sm">Price</label>
                    <input type="number" name="price"
                           value="{{ $book->price }}"
                           class="w-full rounded-xl bg-white/10 px-4 py-2.5 text-white">
                </div>

                <div class="sm:col-span-3">
                    <label class="text-blue-100 text-sm">ISBN</label>
                    <input type="text" name="isbn"
                           value="{{ $book->isbn }}"
                           class="w-full rounded-xl bg-white/10 px-4 py-2.5 text-white">
                </div>

                <div class="sm:col-span-3">
                    <label class="text-blue-100 text-sm">Pages</label>
                    <input type="number" name="pages"
                           value="{{ $book->pages }}"
                           class="w-full rounded-xl bg-white/10 px-4 py-2.5 text-white">
                </div>

                <div class="sm:col-span-3">
                    <label class="text-blue-100 text-sm">Language</label>
                    <input type="text" name="language"
                           value="{{ $book->language }}"
                           class="w-full rounded-xl bg-white/10 px-4 py-2.5 text-white">
                </div>

                <div class="sm:col-span-3">
                    <label class="text-blue-100 text-sm">Publisher</label>
                    <input type="text" name="publisher"
                           value="{{ $book->publisher }}"
                           class="w-full rounded-xl bg-white/10 px-4 py-2.5 text-white">
                </div>

                <div class="sm:col-span-3 flex items-center gap-2">
                    <input type="checkbox" name="is_available"
                           {{ $book->is_available ? 'checked' : '' }}>
                    <label class="text-blue-100 text-sm">Available</label>
                </div>

            </div>

            <div class="mt-12 flex justify-end gap-4">
                <a href="/books" class="text-white">Cancel</a>

                <button class="bg-amber-400 text-black px-6 py-2 rounded-xl font-bold">
                    Update Book
                </button>
            </div>

        </form>

    </div>

</div>

</x-layout>