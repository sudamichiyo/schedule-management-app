@extends('schedule/layout')
@section('title', 'スケジュール一覧')
@section('content')
<body>
  <div class="w-full bg-gray-100 min-h-screen">
    <h2 class="font-bold text-xl px-8 py-4">スケジュール一覧</h2>
    @foreach($schedules as $schedule)
    <div class="bg-white mx-8 my-4 px-8 py-4 rounded shadow-md hover:bg-blue-50">
    <a class="flex" href="/schedule/{{ $schedule->id }}">
      <div class="flex-auto">
        <p>{{ $schedule->title }}</p>
      </div>
      <div class="flex flex-initial px-2">
        <h3 class="font-bold mx-1">開始</h3>
        <p>{{ $schedule->begin }}</p>
      </div>
      <div class="flex flex-initial px-2">
        <h3 class="font-bold mx-1">終了</h3>
        <p>{{ $schedule->end }}</p>
      </div>
    </a>
    </div>
    @endforeach
    <div class="flex mx-4 my-8">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded h-10 mx-4"><a href="/schedule/create">登録</a></button>
      <form action="/logout" method="post">
        @csrf
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded h-10 mx-4">ログアウト</button>
      </form>
    </div>
  </div>
</body>
@endsection
    