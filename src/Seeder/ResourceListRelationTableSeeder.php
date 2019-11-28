<?php

namespace Milestone\MaidJobEntry\Seeder;

use Illuminate\Database\Seeder;

class ResourceListRelationTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceListRelation::query()
            ->create([	'id' => '557501', 	'resource_list' => '557303', 	'relation' => '555902', 													])
            ->create([	'id' => '557502', 	'resource_list' => '557304', 	'relation' => '555903', 													])
            ->create([	'id' => '557503', 	'resource_list' => '557305', 	'relation' => '555903', 													])
            ->create([	'id' => '557504', 	'resource_list' => '557306', 	'relation' => '555903', 													])
            ->create([	'id' => '557505', 	'resource_list' => '557307', 	'relation' => '555903', 													])
            ->create([	'id' => '557506', 	'resource_list' => '557308', 	'relation' => '555903', 													])
            ->create([	'id' => '557507', 	'resource_list' => '557309', 	'relation' => '555903', 													])
            ->create([	'id' => '557508', 	'resource_list' => '557310', 	'relation' => '555903', 													])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
