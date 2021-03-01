<?php
use App\Tenant;
use App\User;
use Illuminate\Database\Seeder;

class TenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tenant::create([
            'id'=>1,

        ]);
        Tenant::create([
            'id'=>2,

        ]);

        Tenant::all()->runForEach(function () {
            factory(User::class)->create();
        });
    }
}
