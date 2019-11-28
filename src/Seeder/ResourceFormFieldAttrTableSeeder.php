<?php

namespace Milestone\MaidJobEntry\Seeder;

use Illuminate\Database\Seeder;

class ResourceFormFieldAttrTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceFormFieldAttr::query()
            ->create([	'id' => '556401', 	'form_field' => '556104', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '556402', 	'form_field' => '556105', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '556403', 	'form_field' => '556107', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '556404', 	'form_field' => '556106', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '556405', 	'form_field' => '556101', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '556406', 	'form_field' => '556102', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '556407', 	'form_field' => '556103', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '556408', 	'form_field' => '556108', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '556409', 	'form_field' => '556109', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '556410', 	'form_field' => '556110', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '556411', 	'form_field' => '556111', 	'name' => 'inline', 	'value' => '4', 												])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
