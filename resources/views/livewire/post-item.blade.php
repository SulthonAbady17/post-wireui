<div>
    <x-card padding="px-4 py-4" cardClasses="rounded-sm border-2">
        <a href=""><h3 class="font-bold text-base">{{ $post->title }}</h3></a>
        <p class="mt-2 text-sm">{{ $excerpt ? $post->excerpt : $post->body }}</p>
    </x-card>
</div>
