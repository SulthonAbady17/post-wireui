<div>
    <x-card padding="p-4" cardClasses="rounded-sm border-2 border-primary-200 pb-4">
        <form wire:submit.prevent="submit">
            @csrf
            <div class="flex flex-col gap-4">
                <x-input wire:model="post.title" label="Title" placeholder="Write your title here..." />
                <x-textarea wire:model="post.body" label="Body" placeholder="Write your body here..." />
                <x-button type="submit" label="Save"/>
            </div>
        </form>
    </x-card>
</div>
