<head>
  <title>スケジュール一覧画面</title>
</head>
<body>
    <h3>スケジュール一覧</h3>
      @foreach($schedules as $schedule)
      <ul>
        <li><a href="schedule/{{ $schedule->id }}">{{ $schedule->title }}</a></li>
        <li>{{ $schedule->begin }}</li>
        <li>{{ $schedule->end }}</li>
      </ul>
      @endforeach
</body>
    