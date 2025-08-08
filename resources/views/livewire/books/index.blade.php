<?php

use App\Models\Book;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('components.layouts.bookshelf')] class extends Component {
    public function books()
    {
        return Book::all();
    }
}; ?>

<div>
    <h2 class="text-2xl font-bold mb-4">書籍一覧</h2>

    @php
    $books = $this->books();
    @endphp

    @if($books->count() > 0)

    @else
        <div class="alert">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-info shrink-0 w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            <span>現在登録されている書籍はありません。</span>
        </div>
    @endif
</div>