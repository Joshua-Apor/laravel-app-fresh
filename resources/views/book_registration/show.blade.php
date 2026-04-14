<x-layout title="Book Details">

<div class="max-w-4xl mx-auto px-4 py-12">

    <h1 class="text-3xl font-black text-white mb-6">
        {{ $book->title }}
    </h1>

    <div class="bg-white/5 border border-white/10 rounded-3xl p-8 text-white space-y-2">

        <p><strong>Author:</strong> {{ $book->author }}</p>
        <p><strong>Genre:</strong> {{ $book->genre }}</p>
        <p><strong>Year:</strong> {{ $book->published_year }}</p>
        <p><strong>Price:</strong> ₱{{ $book->price }}</p>
        <p><strong>Availability:</strong> {{ $book->is_available ? 'In Stock' : 'Out of Stock' }}</p>
        <p><strong>ISBN:</strong> {{ $book->isbn }}</p>
        <p><strong>Description:</strong> {{ $book->description }}</p>

    </div>

    <div class="mt-6">
        <a href="/books" class="text-blue-300">← Back</a>
    </div>

</div>

</x-layout>