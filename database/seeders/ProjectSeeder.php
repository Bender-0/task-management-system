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
            'due_date' => today()->addDays(random_int(3,60))->format('d-m-Y'),
        ]);

        Project::create([
            'name' => 'Mobile App Development',
            'description' => 'Develop a new mobile app',
            'due_date' => today()->addDays(random_int(3,60))->format('d-m-Y'),
        ]);

        Project::create([
            'name' => 'Marketing Campaign',
            'description' => 'Launch a new marketing campaign',
            'due_date' => today()->addDays(random_int(3,60))->format('d-m-Y'),
        ]);
    }
}
