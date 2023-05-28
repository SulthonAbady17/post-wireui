@extends('layouts.app')

@section('content')
    <section>
        <div class="container mx-auto">
            <div class="mx-4 my-8">
                <x-card title="Your Posts" cardClasses="rounded-sm border-2">
                    <x-slot name="action">
                        <x-dropdown>
                            <x-dropdown.item label="Create Post" href="{{ route('posts.index') }}" />
                            <x-dropdown.item label="My Profile" />
                            <x-dropdown.item label="Logout" />
                        </x-dropdown>
                    </x-slot>

                    <div class="mx-2 mb-10">
                        <livewire:post-list />
                    </div>
                </x-card>
            </div>
        </div>
    </section>
@endsection