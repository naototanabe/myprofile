<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'title' => 'good-habit',
            'url' => 'https://good-habit-jp.herokuapp.com/',
            'img' => 'https://good-habit-jp.herokuapp.com/image/Good-Habit1.png',
        ];
        DB::table('works')->insert($param);
    }
}
