<?php

namespace Milestone\MaidJobEntry\Seeder;

use Illuminate\Database\Seeder;

class ResourceFormFieldValidationTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceFormFieldValidation::query()
            ->create([	'id' => '556601', 	'form_field' => '556104', 	'rule' => 'required', 	'message' => 'Country Name is Mandatory', 												])
            ->create([	'id' => '556602', 	'form_field' => '556105', 	'rule' => 'required', 	'message' => 'Code is Mandatory', 												])
            ->create([	'id' => '556603', 	'form_field' => '556105', 	'rule' => 'unique', 	'message' => 'This code is already in use', 	'arg1' => 'maids', 	'arg2' => 'code', 	'arg3' => '-r:update', 									])
            ->create([	'id' => '556604', 	'form_field' => '556107', 	'rule' => 'required', 	'message' => 'Maid Name is Mandatory', 												])
            ->create([	'id' => '556605', 	'form_field' => '556108', 	'rule' => 'required', 	'message' => 'Select Maid', 												])
            ->create([	'id' => '556606', 	'form_field' => '556108', 	'rule' => 'required', 	'message' => 'Mention Hours', 												])
            ->create([	'id' => '556607', 	'form_field' => '556101', 	'rule' => 'required', 	'message' => 'Name is mandatory', 												])
            ->create([	'id' => '556608', 	'form_field' => '556102', 	'rule' => 'required', 	'message' => 'Email is mandatory', 												])
            ->create([	'id' => '556609', 	'form_field' => '556103', 	'rule' => 'required', 	'message' => 'Password is mandatory', 												])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
