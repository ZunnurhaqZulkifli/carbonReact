<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Tasks;
use App\Models\User;
use Database\Factories\TasksFactory;
use Illuminate\Console\View\Components\Task;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Artisan::call('migrate:refresh');
        //
        $this->call(
            UsersSeeder::class,
        );
        //
        User::factory(40)->create();
        Tasks::factory(150)->create();
    }
}
