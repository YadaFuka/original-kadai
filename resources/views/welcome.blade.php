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
                <img src="/images/logo.png" alt="Bookshelf"/>
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
            <div class="hero-overlay bg-opacity-60"></div>
            <div class="hero-content text-center text-neutral-content">
                <div class="max-w-md">
                    <h1 class="mb-5 text-5xl md:text-6xl font-base font-serif">とくめい図書室</h1>
                    <p>表紙がみえない本屋さん</p>
                </div>
            </div>
        </div>

        {{-- <div class="p-5">
            <div class="max-w-5xl mx-auto">
                {{ $slot }}
            </div>
        </div> --}}
    </body>
</html>