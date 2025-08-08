<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>とくめい図書室</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body>
        <div class="navbar bg-base-100 justify-between">
            <a href="{{ route('home') }}" class="btn btn-ghost">
                とくめい図書室
            </a>

            @auth

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                        <button type="submit" class="btn btn-sm btn-outline btn-error book-registration__show-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="inline size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                            </svg>
                            <span>ログアウト</span>
                        </button>
                </form>
            @endauth
        </div>

        <div class="hero shelf-message">
            @auth
                <?php
                use App\Models\Book;
                use Livewire\Attributes\Layout;
                use Livewire\Volt\Component;


                    public function books()
                    {
                        return Book::all();
                    }
                ?>

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
            @else
                @include('top')
            @endauth
        </div>
    </body>
</html>