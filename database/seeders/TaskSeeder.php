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
            'due_date' => now()->addDays(10),
        ]);

        Task::create([
            'project_id' => 1,
            'category_id' => 2,
            'title' => 'Develop Contact Form',
            'description' => 'Implement a contact form on the website',
            'status' => 'pending',
            'due_date' => now()->addDays(15),
        ]);

        Task::create([
            'project_id' => 2,
            'category_id' => 3,
            'title' => 'Create App Prototype',
            'description' => 'Design a prototype for the mobile app',
            'status' => 'completed',
            'due_date' => now()->addDays(20),
        ]);
    }
}
