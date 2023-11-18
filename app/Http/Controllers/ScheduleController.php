<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;

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
}
