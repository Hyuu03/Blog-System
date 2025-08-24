<x-layout :title="$title">
    <div class="flex items-center justify-center gap-2.5">

        @foreach ($posts as $post)
            <article class="p-8 max-w-full border border-gray-300 rounded-2xl">
                <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
                    <h2 class="mb-1 text-3xl tracking-tight font bold text-gray-900">{{ $post['title'] }}</h2>
                </a>
                <div class="text-base text-gray-500">
                    <a href="#">{{ $post['author'] }}</a> | 1 Agustus 2025
                </div>
                <p class="my-4 font-light">{{ Str::limit($post['body'], 100) }}</p>
                <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">Read More
                    &raquo;</a>
            </article>
        @endforeach
    </div>

</x-layout>
