@extends('schedule/layout')
@section('title', 'スケジュール一覧')
@section('content')
<body>
    <h3>スケジュール一覧</h3>
      @foreach($schedules as $schedule)
      <ul>
        <li><a href="/schedule/{{ $schedule->id }}">{{ $schedule->title }}</a></li>
        <li>{{ $schedule->begin }}</li>
        <li>{{ $schedule->end }}</li>
      </ul>
      @endforeach
      <button><a href="/schedule/create">登録</a></button>
</body>
@endsection
    