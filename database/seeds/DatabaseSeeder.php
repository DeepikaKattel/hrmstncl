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
//        $this->call(TenantSeeder::class);
//        $this->call(DomainSeeder::class);
        $this->call(VoyagerDatabaseSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
