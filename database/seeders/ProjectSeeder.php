<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        Project::create([
            'name' => 'Website Redesign',
            'description' => 'Redesign the company website',
            'due_date' => now()->addDays(30),
        ]);

        Project::create([
            'name' => 'Mobile App Development',
            'description' => 'Develop a new mobile app',
            'due_date' => now()->addDays(60),
        ]);

        Project::create([
            'name' => 'Marketing Campaign',
            'description' => 'Launch a new marketing campaign',
            'due_date' => now()->addDays(90),
        ]);
    }
}
