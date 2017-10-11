<?php

use Illuminate\Database\Seeder;

class ProjectsCommitteesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects_committees')->insert([
            'project_id' => 1,
            'lecturer_id' => 'FG02'
        ]);
    }
}
