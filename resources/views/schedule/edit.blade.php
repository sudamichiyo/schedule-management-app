<head>
  <title>編集画面</title>
</head>
<body>
      <h3>編集画面です</h3>
      <form action="/schedule/{{ $schedule->id }}" method="post">
        @method('put')
        @csrf
        <label>
            タイトル : <input type="text" name="title" value="{{ $schedule->title }}">
        </label>
        <br>
        <label>
            開始日時 : <input type="datetime-local" name="begin" value="{{ $schedule->begin }}">
        </label>
        <br>
        <label>
            終了日時 : <input type="datetime-local" name="end" value="{{ $schedule->end }}">
        </label>
        <br>
        <label>
            場所 : <input type="text" name="place" value="{{ $schedule->place }}">
        </label>
        <br>
        <label>
            内容 : <textarea cols="20" rows="5" name="content">{{ $schedule->content }}</textarea>
        </label>

        <button type="submit">保存</button>
      </form>

      <button><a href="/schedule/{{ $schedule->id }}">キャンセル</a></button>
</body>
    