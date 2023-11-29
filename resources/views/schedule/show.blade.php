@extends('schedule/layout')
@section('title', 'スケジュール詳細')
@section('content')
<body>
    <div class="w-full bg-gray-100 min-h-screen">
        <h2 class="font-bold text-xl px-8 py-4">スケジュール詳細</h2>
        <div class="flex px-8 py-2">
            <h3 class="font-bold mx-1 w-24">タイトル</h3>
            <p>{{ $schedule->title }}</p>
        </div>
        <div class="flex px-8 py-2">
            <h3 class="font-bold mx-1 w-24">開始</h3>
            <p>{{ $schedule->begin }}</p>
        </div>
        <div class="flex px-8 py-2">
            <h3 class="font-bold mx-1 w-24">終了</h3>
            <p>{{ $schedule->end }}</p>
        </div>
        <div class="flex px-8 py-2">
            <h3 class="font-bold mx-1 w-24">場所</h3>
            <p>{{ $schedule->place }}</p>
        </div>
        <div class="flex px-8 py-2">
            <h3 class="font-bold mx-1 w-24">内容</h3>
            <p>{{ $schedule->content }}</p>
        </div>
        <div class="flex mx-4 my-8">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded h-10 mx-4"><a href="/schedule">一覧に戻る</a></button>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded h-10 mx-4"><a href="/schedule/{{ $schedule->id }}/edit">編集</a></button>
            <form action="/schedule/{{ $schedule->id }}" method="post">
                @method('delete')
                @csrf
                <button onclick="return confirm('本当に削除しますか？')" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded h-10 mx-4">削除</button>
            </form>
        </div>
    </div>
</body>
@endsection