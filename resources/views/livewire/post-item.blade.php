<div>
    <x-card padding="p-4" cardClasses="rounded-sm border-2 border-primary-200" footerClasses="flex justify-between">
        @if (! $title)
            <a href="{{ route('posts.show', $post->slug) }}"><h3 class="font-bold text-base">{{ $post->title }}</h3></a>
        @else
            <h3 class="font-bold text-base">{{ $post->title }}</h3>
        @endif

        <p class="mt-2 text-sm">{{ $excerpt ? $post->excerpt : $post->body }}</p>

        @if ($back)
            <x-slot name="footer">
                <x-button href="{{ route('posts.index') }}" icon="arrow-left" label="back" sm flat />
                <x-button wire:click='delete' label="Delete" sm negative flat />
            </x-slot>
        @endif
    </x-card>
</div>
