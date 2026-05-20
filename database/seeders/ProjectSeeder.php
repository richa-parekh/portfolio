<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            'title' => 'Business Website',
            'description' =>
                'Responsive WordPress website for a business.',
            'image' => 'project1.jpg',
            'tech_stack' =>
                'WordPress, Elementor, CSS',
            'project_type' =>
                'WordPress',
            'project_url' =>
                '#'
        ]);

        Project::create([
            'title' => 'Gym Website',
            'description' =>
                'Modern responsive fitness website concept.',
            'image' => 'project2.jpg',
            'tech_stack' =>
                'Laravel, Tailwind CSS',
            'project_type' =>
                'Concept Project',
            'project_url' =>
                '#'
        ]);

        Project::create([
            'title' => 'Laravel Dashboard',
            'description' =>
                'Admin dashboard with CRUD functionality.',
            'image' => 'project3.jpg',
            'tech_stack' =>
                'Laravel, MySQL',
            'project_type' =>
                'Laravel',
            'project_url' =>
                '#'
        ]);
    }
}
