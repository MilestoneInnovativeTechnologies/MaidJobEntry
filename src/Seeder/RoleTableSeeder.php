<?php

namespace Milestone\MaidJobEntry\Seeder;

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\Role::query()
            ->create([	'id' => '555401', 	'name' => 'administrator', 	'description' => 'Easy Clean Administrator', 	'title' => 'Easy Clean Administrator', 												])
            ->create([	'id' => '555402', 	'name' => 'manager', 	'description' => 'Manager', 	'title' => 'Manager', 												])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
