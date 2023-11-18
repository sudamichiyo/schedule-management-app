<head>
    <title>詳細画面</title>
</head>
<body>
    <ul>
        <li>{{ $schedule->title }}</li>
        <li>{{ $schedule->begin }}</li>
        <li>{{ $schedule->end }}</li>
        <li>{{ $schedule->place }}</li>
        <li>{{ $schedule->content }}</li>
    </ul>
    <button><a href="/schedule">一覧に戻る</a></button>
</body>