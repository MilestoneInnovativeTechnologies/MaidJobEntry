<?php

namespace Milestone\MaidJobEntry\Seeder;

use Illuminate\Database\Seeder;

class ResourceFormFieldTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceFormField::query()
            ->create([	'id' => '556101', 	'resource_form' => '556001', 	'name' => 'name', 	'type' => 'text', 	'label' => 'Manager Name', 											])
            ->create([	'id' => '556102', 	'resource_form' => '556001', 	'name' => 'email', 	'type' => 'text', 	'label' => 'Email For Login', 											])
            ->create([	'id' => '556103', 	'resource_form' => '556001', 	'name' => 'password', 	'type' => 'password', 	'label' => 'Login Password', 											])
            ->create([	'id' => '556104', 	'resource_form' => '556002', 	'name' => 'name', 	'type' => 'text', 	'label' => 'Country Name', 											])
            ->create([	'id' => '556105', 	'resource_form' => '556003', 	'name' => 'code', 	'type' => 'text', 	'label' => 'Code', 											])
            ->create([	'id' => '556106', 	'resource_form' => '556003', 	'name' => 'nationality', 	'type' => 'select', 	'label' => 'Nationality', 											])
            ->create([	'id' => '556107', 	'resource_form' => '556003', 	'name' => 'name', 	'type' => 'text', 	'label' => 'Name of Maid', 											])
            ->create([	'id' => '556108', 	'resource_form' => '556004', 	'name' => 'maid', 	'type' => 'select', 	'label' => 'Select Maid', 											])
            ->create([	'id' => '556109', 	'resource_form' => '556004', 	'name' => 'date', 	'type' => 'text', 	'label' => 'Work Date', 											])
            ->create([	'id' => '556110', 	'resource_form' => '556004', 	'name' => 'hours', 	'type' => 'text', 	'label' => 'Total Worked Hours', 											])
            ->create([	'id' => '556111', 	'resource_form' => '556004', 	'name' => 'amount', 	'type' => 'text', 	'label' => 'Total Amount Collected', 											])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
