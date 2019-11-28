<?php

namespace Milestone\MaidJobEntry\Seeder;

use Illuminate\Database\Seeder;

class ResourceRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $_ = \DB::statement('SELECT @@GLOBAL.foreign_key_checks');
        \DB::statement('set foreign_key_checks = 0');
        \Milestone\Appframe\Model\ResourceRole::query()
            ->create([	'id' => '555701', 	'resource' => '555601', 	'role' => '555401', 													])
            ->create([	'id' => '555702', 	'resource' => '555602', 	'role' => '555402', 													])
            ->create([	'id' => '555703', 	'resource' => '555603', 	'role' => '555402', 													])
            ->create([	'id' => '555704', 	'resource' => '555604', 	'role' => '555402', 													])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
