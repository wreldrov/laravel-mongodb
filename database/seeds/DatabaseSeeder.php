<?php

use Illuminate\Database\Seeder;

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
        $this->call(LibrarySeeder::class);
        $this->call(ParkSeeder::class);
        $this->call(TheatreSeeder::class);
        $this->call(KyzylordaInfoSeeder::class);
        $this->call(ZonyOtdykhaSeeder::class);
    }
}
