<?php

use Illuminate\Database\Migrations\Migration;

class AddEventAndRosteringPermissions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('mship_permission')->insert([
            ['name' => 'adm/events', 'display_name' => 'Admin / Events', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['name' => 'adm/events/manage', 'display_name' => 'Admin / Events / Manage', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['name' => 'adm/events/roster', 'display_name' => 'Admin / Events / Roster', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('mship_permission')->whereIn('name', [
           'adm/events',
           'adm/events/manage',
           'adm/events/roster',
        ])->delete();
    }
}
