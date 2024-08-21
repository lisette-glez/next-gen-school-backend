<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      $this->call(CourseSeeder::class);
      $this->call(ModuleSeeder::class);
      $this->call(LessonSeeder::class);
      $this->call(QuizSeeder::class);
      $this->call(QuestionSeeder::class);
      $this->call(AnswerSeeder::class);
      $this->call(StudentSeeder::class);
      $this->call(QuizRatingSeeder::class);
    }
}
