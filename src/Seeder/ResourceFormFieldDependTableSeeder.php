<?php

namespace Milestone\MaidJobEntry\Seeder;

use Illuminate\Database\Seeder;

class ResourceFormFieldDependTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceFormFieldDepend::query()
            ->create([	'id' => '556701', 	'form_field' => '556109', 					'method' => 'todayDate', 		'ignore_null' => 'No', 							])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
