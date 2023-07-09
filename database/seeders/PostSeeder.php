<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title'=>'タイトル',
            'body'=>'本文です',
            'category_id'=>1,
            'created_at'=>new DateTime(),
            'updated_at'=>new DateTime(),
        ]);
        DB::table('posts')->insert([
            'title'=>'たいとる',
            'body'=>'ほんぶんです',
            'category_id'=>2,
            'created_at'=>new DateTime(),
            'updated_at'=>new DateTime(),
        ]);
    }
}
