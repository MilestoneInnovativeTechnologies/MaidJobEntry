<?php

namespace Milestone\MaidJobEntry\Seeder;

use Illuminate\Database\Seeder;

class DatabaseReset extends Seeder
{
    /**
     * Seed the Milestone\MaidJobEntrylication's database.
     *
     * @return void
     */
    public function run()
    {
        \DB::statement('DELETE FROM users WHERE id > 555100');
        \DB::statement('DELETE FROM __groups WHERE id > 555200');
        \DB::statement('DELETE FROM __group_users WHERE id > 555300');
        \DB::statement('DELETE FROM __roles WHERE id > 555400');
        \DB::statement('DELETE FROM __group_roles WHERE id > 555500');
        \DB::statement('DELETE FROM __resources WHERE id > 555600');
        \DB::statement('DELETE FROM __resource_roles WHERE id > 555700');
        \DB::statement('DELETE FROM __resource_scopes WHERE id > 555800');
        \DB::statement('DELETE FROM __resource_relations WHERE id > 555900');
        \DB::statement('DELETE FROM __resource_forms WHERE id > 556000');
        \DB::statement('DELETE FROM __resource_form_fields WHERE id > 556100');
        \DB::statement('DELETE FROM __resource_form_field_data WHERE id > 556200');
        \DB::statement('DELETE FROM __resource_form_field_options WHERE id > 556300');
        \DB::statement('DELETE FROM __resource_form_field_attrs WHERE id > 556400');
        \DB::statement('DELETE FROM __resource_form_field_dynamic WHERE id > 556500');
        \DB::statement('DELETE FROM __resource_form_field_validations WHERE id > 556600');
        \DB::statement('DELETE FROM __resource_form_field_depends WHERE id > 556700');
        \DB::statement('DELETE FROM __resource_form_layout WHERE id > 556800');
        \DB::statement('DELETE FROM __resource_form_data_map WHERE id > 556900');
        \DB::statement('DELETE FROM __resource_form_defaults WHERE id > 557000');
        \DB::statement('DELETE FROM __resource_form_collection WHERE id > 557100');
        \DB::statement('DELETE FROM __resource_form_upload WHERE id > 557200');
        \DB::statement('DELETE FROM __resource_lists WHERE id > 557300');
        \DB::statement('DELETE FROM __resource_list_scopes WHERE id > 557400');
        \DB::statement('DELETE FROM __resource_list_relations WHERE id > 557500');
        \DB::statement('DELETE FROM __resource_list_layout WHERE id > 557600');
        \DB::statement('DELETE FROM __resource_list_search WHERE id > 557700');
        \DB::statement('DELETE FROM __resource_data WHERE id > 557800');
        \DB::statement('DELETE FROM __resource_data_scopes WHERE id > 557900');
        \DB::statement('DELETE FROM __resource_data_relations WHERE id > 558000');
        \DB::statement('DELETE FROM __resource_data_view_sections WHERE id > 558100');
        \DB::statement('DELETE FROM __resource_data_view_section_items WHERE id > 558200');
        \DB::statement('DELETE FROM __resource_actions WHERE id > 558300');
        \DB::statement('DELETE FROM __resource_action_methods WHERE id > 558400');
        \DB::statement('DELETE FROM __resource_action_attrs WHERE id > 558500');
        \DB::statement('DELETE FROM __resource_action_lists WHERE id > 558600');
        \DB::statement('DELETE FROM __resource_action_data WHERE id > 558700');
        \DB::statement('DELETE FROM __resource_defaults WHERE id > 558800');
        \DB::statement('DELETE FROM __resource_metrics WHERE id > 558900');
        \DB::statement('DELETE FROM __resource_dashboard WHERE id > 559000');
        \DB::statement('DELETE FROM __resource_dashboard_sections WHERE id > 559100');
        \DB::statement('DELETE FROM __resource_dashboard_section_items WHERE id > 559200');
        \DB::statement('ALTER TABLE `users`  AUTO_INCREMENT=555101');
        \DB::statement('ALTER TABLE `__groups`  AUTO_INCREMENT=555201');
        \DB::statement('ALTER TABLE `__group_users`  AUTO_INCREMENT=555301');
        \DB::statement('ALTER TABLE `__roles`  AUTO_INCREMENT=555401');
        \DB::statement('ALTER TABLE `__group_roles`  AUTO_INCREMENT=555501');
        \DB::statement('ALTER TABLE `__resources`  AUTO_INCREMENT=555601');
        \DB::statement('ALTER TABLE `__resource_roles`  AUTO_INCREMENT=555701');
        \DB::statement('ALTER TABLE `__resource_scopes`  AUTO_INCREMENT=555801');
        \DB::statement('ALTER TABLE `__resource_relations`  AUTO_INCREMENT=555901');
        \DB::statement('ALTER TABLE `__resource_forms`  AUTO_INCREMENT=556001');
        \DB::statement('ALTER TABLE `__resource_form_fields`  AUTO_INCREMENT=556101');
        \DB::statement('ALTER TABLE `__resource_form_field_data`  AUTO_INCREMENT=556201');
        \DB::statement('ALTER TABLE `__resource_form_field_options`  AUTO_INCREMENT=556301');
        \DB::statement('ALTER TABLE `__resource_form_field_attrs`  AUTO_INCREMENT=556401');
        \DB::statement('ALTER TABLE `__resource_form_field_dynamic`  AUTO_INCREMENT=556501');
        \DB::statement('ALTER TABLE `__resource_form_field_validations`  AUTO_INCREMENT=556601');
        \DB::statement('ALTER TABLE `__resource_form_field_depends`  AUTO_INCREMENT=556701');
        \DB::statement('ALTER TABLE `__resource_form_layout`  AUTO_INCREMENT=556801');
        \DB::statement('ALTER TABLE `__resource_form_data_map`  AUTO_INCREMENT=556901');
        \DB::statement('ALTER TABLE `__resource_form_defaults`  AUTO_INCREMENT=557001');
        \DB::statement('ALTER TABLE `__resource_form_collection`  AUTO_INCREMENT=557101');
        \DB::statement('ALTER TABLE `__resource_form_upload`  AUTO_INCREMENT=557201');
        \DB::statement('ALTER TABLE `__resource_lists`  AUTO_INCREMENT=557301');
        \DB::statement('ALTER TABLE `__resource_list_scopes`  AUTO_INCREMENT=557401');
        \DB::statement('ALTER TABLE `__resource_list_relations`  AUTO_INCREMENT=557501');
        \DB::statement('ALTER TABLE `__resource_list_layout`  AUTO_INCREMENT=557601');
        \DB::statement('ALTER TABLE `__resource_list_search`  AUTO_INCREMENT=557701');
        \DB::statement('ALTER TABLE `__resource_data`  AUTO_INCREMENT=557801');
        \DB::statement('ALTER TABLE `__resource_data_scopes`  AUTO_INCREMENT=557901');
        \DB::statement('ALTER TABLE `__resource_data_relations`  AUTO_INCREMENT=558001');
        \DB::statement('ALTER TABLE `__resource_data_view_sections`  AUTO_INCREMENT=558101');
        \DB::statement('ALTER TABLE `__resource_data_view_section_items`  AUTO_INCREMENT=558201');
        \DB::statement('ALTER TABLE `__resource_actions`  AUTO_INCREMENT=558301');
        \DB::statement('ALTER TABLE `__resource_action_methods`  AUTO_INCREMENT=558401');
        \DB::statement('ALTER TABLE `__resource_action_attrs`  AUTO_INCREMENT=558501');
        \DB::statement('ALTER TABLE `__resource_action_lists`  AUTO_INCREMENT=558601');
        \DB::statement('ALTER TABLE `__resource_action_data`  AUTO_INCREMENT=558701');
        \DB::statement('ALTER TABLE `__resource_defaults`  AUTO_INCREMENT=558801');
        \DB::statement('ALTER TABLE `__resource_metrics`  AUTO_INCREMENT=558901');
        \DB::statement('ALTER TABLE `__resource_dashboard`  AUTO_INCREMENT=559001');
        \DB::statement('ALTER TABLE `__resource_dashboard_sections`  AUTO_INCREMENT=559101');
        \DB::statement('ALTER TABLE `__resource_dashboard_section_items`  AUTO_INCREMENT=559201');
    }
}
