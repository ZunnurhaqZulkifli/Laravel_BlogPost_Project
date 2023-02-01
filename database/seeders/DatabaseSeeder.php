<?php

// namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // dd(get_class($hacker), get_class($else));
        // $this->call(UsersTableSeeder::class);

        if ($this->command->confirm('Do You Want To Refresh The Database ?')) {
            $this->command->call('migrate:refresh');
            $this->command->info('Database Was Refreshed');
        }

        $this->call([
            UsersTableSeeder::class,
            BlogPostsTableSeeder::class,
            CommentsTableSeeder::class
        ]);
    }
}
