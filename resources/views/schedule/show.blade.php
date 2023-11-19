@extends('schedule/layout')
@section('title', 'スケジュール詳細')
@section('content')
<body>
    <ul>
        <li>{{ $schedule->title }}</li>
        <li>{{ $schedule->begin }}</li>
        <li>{{ $schedule->end }}</li>
        <li>{{ $schedule->place }}</li>
        <li>{{ $schedule->content }}</li>
    </ul>
    <button><a href="/schedule">一覧に戻る</a></button>
    <button><a href="/schedule/{{ $schedule->id }}/edit">編集</a></button>
    <form action="/schedule/{{ $schedule->id }}" method="post">
        @method('delete')
        @csrf
        <button onclick="return confirm('本当に削除しますか？')">削除</button>
    </form>
    
</body>
@endsection