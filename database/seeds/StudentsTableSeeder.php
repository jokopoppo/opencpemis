<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'id' => '580610631',
            'first_name' => 'นายชวศิษฐ์',
            'last_name' => 'เต็งไตรรัตน์',
            'project_id' => 1
        ]);
        DB::table('students')->insert([
            'id' => '580610642',
            'first_name' => 'นายดรันภพ',
            'last_name' => 'เป็งคำตา',
            'project_id' => 1
        ]);
        DB::table('students')->insert([
            'id' => '580610646',
            'first_name' => 'นายธนิน',
            'last_name' => 'วรรณวิไลรัตน์'
        ]);
    }
}
