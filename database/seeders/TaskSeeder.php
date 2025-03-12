<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::create([
            'project_id' => 1,
            'category_id' => 1,
            'title' => 'Design Homepage',
            'description' => 'Create a new design for the homepage',
            'status' => 'pending',
            'due_date' => today()->addDays(random_int(3,60))->format('d-m-Y')
        ]);

        Task::create([
            'project_id' => 1,
            'category_id' => 2,
            'title' => 'Develop Contact Form',
            'description' => 'Implement a contact form on the website',
            'status' => 'pending',
            'due_date' => today()->addDays(random_int(3,60))->format('d-m-Y'),
        ]);

        Task::create([
            'project_id' => 2,
            'category_id' => 3,
            'title' => 'Create App Prototype',
            'description' => 'Design a prototype for the mobile app',
            'status' => 'completed',
            'due_date' => today()->addDays(random_int(3,60))->format('d-m-Y'),
        ]);

        for ($i = 0; $i < 5; $i++) {
            Task::create([
                'project_id' => rand(1, 3),
                'category_id' => rand(1, 3),
                'title' => 'Task ' . ($i + 1),
                'description' => 'Description for task ' . ($i + 1),
                'status' => ['pending', 'in progress', 'completed'][rand(0, 2)],
                'due_date' => today()->addDays(random_int(3,60))->format('d-m-Y'),
            ]);
        }


    }
}
