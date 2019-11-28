<?php

namespace Milestone\MaidJobEntry\Seeder;

use Illuminate\Database\Seeder;

class ResourceActionMethodTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceActionMethod::query()
            ->create([	'id' => '558401', 	'resource_action' => '558301', 	'type' => 'Form', 	'idn1' => '556003', 												])
            ->create([	'id' => '558402', 	'resource_action' => '558302', 	'type' => 'List', 	'idn1' => '557303', 												])
            ->create([	'id' => '558403', 	'resource_action' => '558303', 	'type' => 'Form', 	'idn1' => '556004', 												])
            ->create([	'id' => '558404', 	'resource_action' => '558304', 	'type' => 'List', 	'idn1' => '557304', 												])
            ->create([	'id' => '558405', 	'resource_action' => '558305', 	'type' => 'FormWithData', 	'idn1' => '556003', 	'idn2' => '557801', 											])
            ->create([	'id' => '558406', 	'resource_action' => '558306', 	'type' => 'FormWithData', 	'idn1' => '556004', 	'idn2' => '557802', 											])
            ->create([	'id' => '558407', 	'resource_action' => '558307', 	'type' => 'List', 	'idn1' => '557305', 												])
            ->create([	'id' => '558408', 	'resource_action' => '558308', 	'type' => 'List', 	'idn1' => '557306', 												])
            ->create([	'id' => '558409', 	'resource_action' => '558309', 	'type' => 'List', 	'idn1' => '557307', 												])
            ->create([	'id' => '558410', 	'resource_action' => '558310', 	'type' => 'List', 	'idn1' => '557308', 												])
            ->create([	'id' => '558411', 	'resource_action' => '558311', 	'type' => 'List', 	'idn1' => '557309', 												])
            ->create([	'id' => '558412', 	'resource_action' => '558312', 	'type' => 'List', 	'idn1' => '557310', 												])
            ->create([	'id' => '558413', 	'resource_action' => '558313', 	'type' => 'Form', 	'idn1' => '556001', 												])
            ->create([	'id' => '558414', 	'resource_action' => '558314', 	'type' => 'List', 	'idn1' => '557301', 												])
            ->create([	'id' => '558415', 	'resource_action' => '558315', 	'type' => 'FormWithData', 	'idn1' => '556001', 	'idn2' => '557803', 											])
            ->create([	'id' => '558416', 	'resource_action' => '558316', 	'type' => 'ListRelation', 	'idn1' => '555901', 	'idn2' => '557305', 											])
            ->create([	'id' => '558417', 	'resource_action' => '558317', 	'type' => 'ListRelation', 	'idn1' => '555901', 	'idn2' => '557306', 											])
            ->create([	'id' => '558418', 	'resource_action' => '558318', 	'type' => 'ListRelation', 	'idn1' => '555901', 	'idn2' => '557307', 											])
            ->create([	'id' => '558419', 	'resource_action' => '558319', 	'type' => 'ListRelation', 	'idn1' => '555901', 	'idn2' => '557308', 											])
            ->create([	'id' => '558420', 	'resource_action' => '558320', 	'type' => 'ListRelation', 	'idn1' => '555901', 	'idn2' => '557309', 											])
            ->create([	'id' => '558421', 	'resource_action' => '558321', 	'type' => 'ListRelation', 	'idn1' => '555901', 	'idn2' => '557310', 											])
            ->create([	'id' => '558422', 	'resource_action' => '558322', 	'type' => 'Form', 	'idn1' => '556002', 												])
            ->create([	'id' => '558423', 	'resource_action' => '558323', 	'type' => 'List', 	'idn1' => '557302', 												])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
