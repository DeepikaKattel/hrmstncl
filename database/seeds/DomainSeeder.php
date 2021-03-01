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
            'domain'=>'foo.saas.test',
            'tenant_id' => 2

        ]);
        Domain::create([
            'id'=>1,
            'domain'=>'bar.saas.test',
            'tenant_id' => 1

        ]);
    }
}
