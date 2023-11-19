<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Http\Requests\ScheduleRequest;

class ScheduleController extends Controller
{
    public function index() {
      // DBよりschedulesテーブルの値を全て取得
      $schedules = Schedule::all();

      // 取得した値をビュー「schedule/index」に渡す
      return view('schedule/index', compact('schedules'));
    }

    public function show($id) {
      // DBよりURIパラメータと同じIDを持つschedulesの情報を取得
      $schedule = Schedule::findOrFail($id);

      // 取得した値をビュー「schedule/show」に渡す
      return view('schedule/show', compact('schedule'));
    }

    public function edit($id) {
        // DBよりURIパラメータと同じIDを持つschedulesの情報を取得
        $schedule = Schedule::findOrFail($id);
  
        // 取得した値をビュー「schedule/edit」に渡す
        return view('schedule/edit', compact('schedule'));
    }

    public function update(ScheduleRequest $request, $id) {
        // DBよりURIパラメータと同じIDを持つschedulesの情報を取得
        $schedule = Schedule::findOrFail($id);
        
        //テーブルのレコードの情報を書き換え
        $schedule->title = $request->title;
        $schedule->begin = $request->begin;
        $schedule->end = $request->end;
        $schedule->place = $request->place;
        $schedule->content = $request->content;
        $schedule->save();

        //詳細画面に戻る
        return redirect("/schedule/$id");
    }    

    public function create() {
        // 空の$scheduleを渡す
        $schedule = new Schedule();
        return view('schedule/create', compact('schedule'));
    }

    public function store(ScheduleRequest $request) {

        $schedule = new Schedule();
        
        //テーブルのレコードの情報を書き換え
        $schedule->title = $request->title;
        $schedule->begin = $request->begin;
        $schedule->end = $request->end;
        $schedule->place = $request->place;
        $schedule->content = $request->content;
        $schedule->save();

        //スケジュール一覧に戻る
        return redirect("/schedule");
    } 

    public function destroy($id) {
         // DBよりURIパラメータと同じIDを持つschedulesの情報を取得
        $schedule = Schedule::find($id);

        //レコードを削除
        $schedule->delete();

         //スケジュール一覧に戻る
        return redirect("/schedule");
    }
}
