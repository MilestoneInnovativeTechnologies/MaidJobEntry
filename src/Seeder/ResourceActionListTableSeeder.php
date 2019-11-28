<?php

namespace Milestone\MaidJobEntry\Seeder;

use Illuminate\Database\Seeder;

class ResourceActionListTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceActionList::query()
            ->create([	'id' => '558601', 	'resource_action' => '558305', 	'resource_list' => '557303', 													])
            ->create([	'id' => '558602', 	'resource_action' => '558306', 	'resource_list' => '557304', 													])
            ->create([	'id' => '558603', 	'resource_action' => '558316', 	'resource_list' => '557303', 													])
            ->create([	'id' => '558604', 	'resource_action' => '558317', 	'resource_list' => '557303', 													])
            ->create([	'id' => '558605', 	'resource_action' => '558318', 	'resource_list' => '557303', 													])
            ->create([	'id' => '558606', 	'resource_action' => '558319', 	'resource_list' => '557303', 													])
            ->create([	'id' => '558607', 	'resource_action' => '558320', 	'resource_list' => '557303', 													])
            ->create([	'id' => '558608', 	'resource_action' => '558321', 	'resource_list' => '557303', 													])
            ->create([	'id' => '558609', 	'resource_action' => '558315', 	'resource_list' => '557301', 													])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
