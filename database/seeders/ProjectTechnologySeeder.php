<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Technology;

use Faker\Generator as Faker;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectTechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
    
        
        $technologies = Technology::all()->pluck('id');

        for ($i=1; $i < 40; $i++) { 
            $project = Project::find($i);
            $project->technologies()->attach($faker->randomElements($technologies, 3));
        }
    }
}