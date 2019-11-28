<?php

namespace Milestone\MaidJobEntry\Seeder;

use Illuminate\Database\Seeder;

class ResourceFormFieldOptionTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceFormFieldOption::query()
            ->create([	'id' => '556301', 	'form_field' => '556106', 	'type' => 'Foreign', 		'value_attr' => 'id', 	'label_attr' => 'name', 	'preload' => 'Yes', 									])
            ->create([	'id' => '556302', 	'form_field' => '556108', 	'type' => 'List', 	'detail' => '557303', 	'value_attr' => 'id', 	'label_attr' => 'display', 	'preload' => 'Yes', 									])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
