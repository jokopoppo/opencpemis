<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            'id' => 1,
            'name' => 'Mobile InnoSphere',
            'course_id' => '261491',
            'section_no' => '001',
            'semester' => 1,
            'year' => 2560,
            'adviser_id' => 'FG01'
        ]);
    }
}
