<?php

use Illuminate\Database\Seeder;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');


        User::truncate();

        factory(User::class)->create([
            'fname' => 'Admin',
            'email' => 'admin@mail.com',
        ]);

        factory(User::class)->create([
            'fname' => 'User',
            'email' => 'user@mail.com',
        ]);
    }
}
