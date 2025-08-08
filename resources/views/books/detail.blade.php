@extends('layouts.app')

@section('content')

    <div class="prose ml-4">
        <h2 class="prose-lg">書籍詳細</h2>
    </div>

    <div class="flex justify-center">
        @csrf
        @method('PUT')

            <div class="my-4">
                <h2 class="label-text">キャッチコピー</h2>
                <span class="label-text">詳細</span>
                <p>ジャンル</p>
                <p>キーワード</p>
                <p>キーワード</p>
            </div>

        <button type="button" class="btn btn-neutral btn-outline">もどる</button>
        <button type="button" class="btn btn-neutral btn-primary">読む</button>
    </div>

@endsection