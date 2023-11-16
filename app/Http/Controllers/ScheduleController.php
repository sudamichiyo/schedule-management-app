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
}
