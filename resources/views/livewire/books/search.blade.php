<?php

use App\Models\Book;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;
use Illuminate\Support\Facades\Redirect;

new class extends Component {
    public string $title = '';

}; ?>

<div>
    <div class="collapse collapse-arrow bg-base-100 border border-primary mb-4">
        <input type="checkbox" />
        <div class="collapse-title font-semibold text-primary">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="inline size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z" />
            </svg>
            <span>書籍検索</span>
        </div>
        <div class="collapse-content text-sm">
            <form wire:submit="searchBook" class="mt-6 space-y-6">
                <div>
                    <label for="keyword" class="label">
                        <span class="label-text">キーワード</span>
                    </label>
                    <input
                        wire:model="keyword"
                        id="keyword"
                        type="text"
                        name="keyword"
                        class="input input-bordered w-full"
                    />
                </div>
                <div>
                    <label for="genre" class="label">
                        <span class="label-text">ジャンル</span>
                    </label>
                    <input
                        wire:model="genre"
                        id="genre"
                        type="text"
                        name="genre"
                        class="input input-bordered w-full"
                    />
                </div>

                <div class="flex items-center justify-end">
                    <button type="button" class="btn btn-primary btn-outline">
                        検索
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>