<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchedulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // テーブルのクリア
        DB::table('schedules')->truncate();

        // 初期データ用意（列名をキーとする連想配列）
        $schedules = [
                    ['title' => 'ミーティング',
                    'begin' => '2023-12-01 10:00:00',
                    'end' => '2023-12-01 11:00:00',
                    'place' => 'オンライン',
                    'content' => '進捗確認'],
                    ['title' => 'クリスマス',
                    'begin' => '2023-12-25 18:30:00',
                    'end' => '2023-12-25 22:30:00',
                    'place' => '大学',
                    'content' => 'クリスマス'],
                    ['title' => '正月',
                    'begin' => '2023-01-01 00:00:00',
                    'end' => '2023-01-01 02:00:00',
                    'place' => '家',
                    'content' => '正月']
                 ];

        // 登録
        foreach($schedules as $schedule) {
         \App\Models\Schedule::create($schedule);
        }
    }
}
