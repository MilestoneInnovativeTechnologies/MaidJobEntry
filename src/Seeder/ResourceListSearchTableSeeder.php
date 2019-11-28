<?php

namespace Milestone\MaidJobEntry\Seeder;

use Illuminate\Database\Seeder;

class ResourceListSearchTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceListSearch::query()
            ->create([	'id' => '557701', 	'resource_list' => '557303', 	'field' => 'name', 													])
            ->create([	'id' => '557702', 	'resource_list' => '557303', 	'field' => 'code', 													])
            ->create([	'id' => '557703', 	'resource_list' => '557303', 	'field' => 'name', 	'relation' => '555902', 												])
            ->create([	'id' => '557704', 	'resource_list' => '557304', 	'field' => 'name', 	'relation' => '555903', 												])
            ->create([	'id' => '557705', 	'resource_list' => '557305', 	'field' => 'name', 	'relation' => '555903', 												])
            ->create([	'id' => '557706', 	'resource_list' => '557306', 	'field' => 'name', 	'relation' => '555903', 												])
            ->create([	'id' => '557707', 	'resource_list' => '557307', 	'field' => 'name', 	'relation' => '555903', 												])
            ->create([	'id' => '557708', 	'resource_list' => '557308', 	'field' => 'name', 	'relation' => '555903', 												])
            ->create([	'id' => '557709', 	'resource_list' => '557309', 	'field' => 'name', 	'relation' => '555903', 												])
            ->create([	'id' => '557710', 	'resource_list' => '557310', 	'field' => 'name', 	'relation' => '555903', 												])
            ->create([	'id' => '557711', 	'resource_list' => '557301', 	'field' => 'name', 													])
            ->create([	'id' => '557712', 	'resource_list' => '557301', 	'field' => 'email', 													])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
