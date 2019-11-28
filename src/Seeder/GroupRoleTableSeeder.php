<?php

namespace Milestone\MaidJobEntry\Seeder;

use Illuminate\Database\Seeder;

class GroupRoleTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\GroupRole::query()
            ->create([	'id' => '555501', 	'group' => '555201', 	'role' => '555401', 													])
            ->create([	'id' => '555502', 	'group' => '555202', 	'role' => '555402', 													])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
