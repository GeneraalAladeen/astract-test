<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->admin()->state(['email' => 'admin@admin.com'])->create();

        User::factory()->count(10)->hasMessages(5)->create();
    }
}
