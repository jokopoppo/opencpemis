<?php

use Illuminate\Database\Seeder;

class LecturersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lecturers')->insert([
            'id' => 'FG01',
            'first_name' => 'Yuthapong',
            'last_name' => 'Somchit'
        ]);

        DB::table('lecturers')->insert([
            'id' => 'FG02',
            'first_name' => 'Karn',
            'last_name' => 'Somchit'
        ]);
    }
}
