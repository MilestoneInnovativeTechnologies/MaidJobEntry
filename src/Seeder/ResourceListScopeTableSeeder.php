<?php

namespace Milestone\MaidJobEntry\Seeder;

use Illuminate\Database\Seeder;

class ResourceListScopeTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceListScope::query()
            ->create([	'id' => '557401', 	'resource_list' => '557304', 	'scope' => '555807', 													])
            ->create([	'id' => '557402', 	'resource_list' => '557305', 	'scope' => '555801', 													])
            ->create([	'id' => '557403', 	'resource_list' => '557306', 	'scope' => '555802', 													])
            ->create([	'id' => '557404', 	'resource_list' => '557307', 	'scope' => '555803', 													])
            ->create([	'id' => '557405', 	'resource_list' => '557308', 	'scope' => '555804', 													])
            ->create([	'id' => '557406', 	'resource_list' => '557309', 	'scope' => '555805', 													])
            ->create([	'id' => '557407', 	'resource_list' => '557310', 	'scope' => '555806', 													])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
