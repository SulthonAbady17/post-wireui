<div>
    <div class="flex flex-col justify-center gap-y-6">
        <x-input wire:model="search" placeholder="Search..." class="focus:ring-secondary-500 focus:border-secondary-500" />
        @foreach ($posts as $post)
            <livewire:post-item :post="$post" :wire:key="$post->id" excerpt />
        @endforeach
        @if ($count < $posts_count)
            <x-button.circle wire:click='loadMore' class="mx-auto" icon="chevron-down" flat />
        @endif
    </div>
</div>
