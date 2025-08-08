
@section('content')
    <div class="prose hero bg-slate-200 mx-auto max-w-full rounded">
        <div class="hero-content text-center my-10">
            <div class="max-w-md mb-10">
                <h1 class="text-white font-bold">とくめい図書室</h1>
                <p class="text-white">タイトルがみえない本屋さん</p>
                <a class="btn btn-yellow-500 btn-lg mx-5" href="{{ route('login') }}">ログイン</a>
                {{-- ユーザー登録ページへのリンク --}}
                <a class="btn btn-yellow-300 btn-lg mx-5" href="{{ route('register') }}">アカウント作成</a>
            </div>
        </div>
    </div>
@endsection