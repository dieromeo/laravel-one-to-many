<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $project = new Project();

            $project->title = $faker->sentence(3);
            $project->description = $faker->sentence();
            $project->slug = Str::of($project->title)->slug('-');
            $project->link = $faker->url();
            $project->screen = $faker->image(null, 360, 360);
            $project->collaborators = implode(', ',  $faker->words(2));
            $project->used_languages = implode(', ', $faker->words(2));

            $project->save();
        }
    }
}
