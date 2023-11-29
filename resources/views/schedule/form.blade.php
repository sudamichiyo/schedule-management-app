<body>
    <div class="w-full bg-gray-100 min-h-screen">
    @if($target == 'store')
    <h2 class="font-bold text-xl px-8 py-4">スケジュール登録</h2>
    @else
    <h2 class="font-bold text-xl px-8 py-4">スケジュール編集</h2>
    @endif
        @include('schedule/message')
        <form action="/schedule/{{ $schedule->id }}" method="post">
        @if($target == 'update')
            @method('put')
        @endif
        @csrf
        <div class="flex px-8 py-2 items-center">
            <h3 class="font-bold mx-1 w-24">タイトル</h3>
            <input type="text" name="title" value="{{ $schedule->title }}" class="w-64">
        </div>
        <div class="flex px-8 py-2 items-center">
            <h3 class="font-bold mx-1 w-24">開始</h3>
            <input type="datetime-local" name="begin" value="{{ $schedule->begin }}" class="w-64">
        </div>
        <div class="flex px-8 py-2 items-center">
            <h3 class="font-bold mx-1 w-24">終了</h3>
            <input type="datetime-local" name="end" value="{{ $schedule->end }}" class="w-64">
        </div>
        <div class="flex px-8 py-2 items-center">
            <h3 class="font-bold mx-1 w-24">場所</h3>
            <input type="text" name="place" value="{{ $schedule->place }}" class="w-64">
        </div>
        <div class="flex px-8 py-2 items-center">
            <h3 class="font-bold mx-1 w-24">内容</h3>
            <textarea cols="20" rows="5" name="content" class="w-64">{{ $schedule->content }}</textarea>
        </div>
        <div class="flex mx-4 my-8">
            @if($target == 'store')
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded h-10 mx-4">登録</button>
            @else
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded h-10 mx-4">保存</button>
            @endif
            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded h-10 mx-4"><a href="/schedule/{{ $schedule->id }}">キャンセル</a></button>
        </div>
        </form>
    </div>
</body>
    