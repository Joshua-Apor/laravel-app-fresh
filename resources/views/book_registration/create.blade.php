<x-layout title="Add Book | Book Management System">

<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    
    <div class="mb-8">
        <a href="/books" class="text-blue-300 hover:text-white transition-colors text-sm flex items-center gap-2">
            Back to Books List
        </a>
    </div>

    <div class="bg-white/5 border border-white/10 backdrop-blur-md rounded-3xl p-8 shadow-2xl">

        <form method="POST" action="/books" enctype="multipart/form-data">
    @csrf

            <div class="border-b border-white/10 pb-8 mb-8">
                <h2 class="text-3xl font-black text-white tracking-tight">Add New Book</h2>
                <p class="mt-2 text-blue-200/60 text-sm">Please fill in book details below.</p>
            </div>

            <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                <div class="sm:col-span-3">
                    <label class="text-blue-100 text-sm">Title</label>
                    <input type="text" name="title" required class="w-full rounded-xl bg-white/10 px-4 py-2.5 text-white">
                </div>

                <div class="sm:col-span-3">
                    <label class="text-blue-100 text-sm">Author</label>
                    <input type="text" name="author" required class="w-full rounded-xl bg-white/10 px-4 py-2.5 text-white">
                </div>

                <div class="sm:col-span-3">
                    <label class="text-blue-100 text-sm">Genre</label>
                    <input type="text" name="genre" class="w-full rounded-xl bg-white/10 px-4 py-2.5 text-white">
                </div>

                <div class="sm:col-span-3">
                    <label class="text-blue-100 text-sm">Year</label>
                    <input type="number" name="published_year" class="w-full rounded-xl bg-white/10 px-4 py-2.5 text-white">
                </div>

                <div class="col-span-full">
                    <label class="text-blue-100 text-sm">Description</label>
                    <textarea name="description" class="w-full rounded-xl bg-white/10 px-4 py-2.5 text-white"></textarea>
                </div>

                <div class="sm:col-span-3">
                    <label class="text-blue-100 text-sm">Price</label>
                    <input type="number" name="price" class="w-full rounded-xl bg-white/10 px-4 py-2.5 text-white">
                </div>

                <div class="sm:col-span-3">
                    <label class="text-blue-100 text-sm">ISBN</label>
                    <input type="text" name="isbn" required class="w-full rounded-xl bg-white/10 px-4 py-2.5 text-white">
                </div>

                <div class="sm:col-span-3">
                    <label class="text-blue-100 text-sm">Pages</label>
                    <input type="number" name="pages" required class="w-full rounded-xl bg-white/10 px-4 py-2.5 text-white">
                </div>

                <div class="sm:col-span-3">
                    <label class="text-blue-100 text-sm">Language</label>
                    <input type="text" name="language" required class="w-full rounded-xl bg-white/10 px-4 py-2.5 text-white">
                </div>

                <div class="sm:col-span-3">
                    <label class="text-blue-100 text-sm">Publisher</label>
                    <input type="text" name="publisher" required class="w-full rounded-xl bg-white/10 px-4 py-2.5 text-white">
                </div>

                <div class="sm:col-span-3 flex items-center gap-2">
                    <input type="checkbox" name="is_available" checked>
                    <label class="text-blue-100 text-sm">Available</label>
                </div>

                <div class="col-span-full">
                    <label class="text-blue-100 text-sm">Cover Image</label>
                    <input type="file" name="cover_image" class="text-white">
                </div>

            </div>

            <div class="mt-12 flex justify-end gap-4">
                <a href="/books" class="text-white">Cancel</a>

                <button class="bg-amber-400 text-black px-6 py-2 rounded-xl font-bold">
                    Save Book
                </button>
            </div>

        </form>

    </div>

</div>

</x-layout>