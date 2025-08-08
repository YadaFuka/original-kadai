@auth
    {{-- ログアウトへのリンク --}}
    <li><a class="link link-hover text-red-600" href="#" onclick="event.preventDefault();this.closest('form').submit();">ログアウト</a></li>
@else
    {{-- ユーザー登録ページへのリンク --}}
    <li><a class="link link-hover text-yellow-500" href="{{ route('register') }}">新規登録</a></li>
    <li><div class="divider lg:hidden"></div></li>
    {{-- ログインページへのリンク --}}
    <li><a class="link link-hover text-yellow-500" href="{{ route('login') }}">ログイン</a></li>
@endauth