<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Curso;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $curso = new Curso();

        $curso->name = 'Laravel';
        $curso->description = "El mejor framework de PHP";
        $curso->category = "Desarrollo web";

        $curso->save();


        $curso2 = new Curso();

        $curso2->name = 'Python';
        $curso2->description = "El mejor lenguaje web";
        $curso2->category = "Desarrollo web";

        $curso2->save();


        $curso3 = new Curso();

        $curso3->name = 'React';
        $curso3->description = "El mejor library de PHP";
        $curso3->category = "Desarrollo web";

        $curso3->save();
    }
}
