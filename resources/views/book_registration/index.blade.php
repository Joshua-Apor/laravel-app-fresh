<x-layout title="Books List | Book Management System">

<div class="max-w-6xl mx-auto mt-12 px-4 pb-20">
    
    <div class="flex flex-col md:flex-row justify-between items-end mb-8 gap-4">
        <div>
            <h1 class="text-3xl font-black text-white tracking-tight">Book Management</h1>
            <p class="text-blue-200/60 text-sm mt-1">Managing all available books in the system.</p>
        </div>

        <a href="/books/create"
           class="flex items-center gap-2 bg-amber-400 hover:bg-amber-300 text-amber-950 px-5 py-2.5 rounded-xl font-bold text-sm transition-all shadow-lg shadow-amber-400/20 active:scale-95">
            
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
            </svg>

            Add New Book
        </a>
    </div>

    <div class="relative overflow-hidden bg-white/5 border border-white/10 backdrop-blur-md rounded-3xl shadow-2xl">

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">

                <thead>
                    <tr class="bg-white/5 text-blue-200/70 text-xs uppercase tracking-widest font-bold">
                        <th class="px-6 py-4">Book Details</th>
                        <th class="px-6 py-4">Author</th>
                        <th class="px-6 py-4">Genre</th>
                        <th class="px-6 py-4">Year</th>
                        <th class="px-6 py-4">Price</th>
                        <th class="px-6 py-4">Availability</th>
                        <th class="px-6 py-4 text-right">Actions</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-white/10">
                    @foreach ($books as $book)
                        <tr class="group hover:bg-white/[0.03] transition-colors">

                            <td class="px-6 py-5">
                                <div class="text-white font-semibold">{{ $book->title }}</div>
                                <div class="text-blue-100/40 text-xs">ISBN: {{ $book->isbn }}</div>
                            </td>

                            <td class="px-6 py-5 text-blue-100/70 text-sm">
                                {{ $book->author }}
                            </td>

                            <td class="px-6 py-5">
                                <span class="bg-blue-400/10 text-blue-300 px-2.5 py-0.5 rounded-full text-xs border border-blue-400/20">
                                    {{ $book->genre }}
                                </span>
                            </td>

                            <td class="px-6 py-5 text-blue-100/50 text-sm">
                                {{ $book->published_year }}
                            </td>

                            <td class="px-6 py-5 text-white">
                                ₱{{ $book->price }}
                            </td>

                            <td class="px-6 py-5">
                                {{ $book->is_available ? 'In Stock' : 'Out of Stock' }}
                            </td>

                            <td class="px-6 py-5 text-right">
                                <div class="flex justify-end items-center gap-2 opacity-0 group-hover:opacity-100 transition-opacity">

                                    <a href="/books/{{ $book->id }}"
                                       class="p-2 text-blue-300 hover:bg-blue-400/20 rounded-lg">
                                        View
                                    </a>

                                    <a href="/books/{{ $book->id }}/edit"
                                       class="p-2 text-yellow-300 hover:bg-yellow-400/20 rounded-lg">
                                        Edit
                                    </a>

                                    <form action="/books/{{ $book->id }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')

                                        <button onclick="return confirm('Delete this book?')"
                                                class="p-2 text-red-400 hover:bg-red-400/20 rounded-lg">
                                            Delete
                                        </button>
                                    </form>

                                </div>
                            </td>

                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>

    </div>

</div>

</x-layout>