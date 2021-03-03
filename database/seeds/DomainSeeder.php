<?php

use Illuminate\Database\Seeder;
use Stancl\Tenancy\Database\Models\Domain;

class DomainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Domain::create([
            'id'=>1,
            'domain'=>'foo.test',
            'tenant_id' => 2

        ]);
        Domain::create([
            'id'=>2,
            'domain'=>'bar.test',
            'tenant_id' => 1

        ]);
    }
}
