<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateFusioncmsInsertMigrations extends Migration
{
    protected $insertMigrations = [
        '2014_10_12_000000_create_users_table',
        '2014_10_12_100000_create_password_resets_table',
        '2014_11_10_035249_update_users_table',
        '2019_09_25_004232_create_taxonomies_table',
        '2020_05_13_000000_create_permissions_table',
        '2020_05_13_100000_create_roles_table',
        '2020_11_11_231406_create_fieldsets_table',
    ];

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        foreach ($this->insertMigrations as $migration) {
            DB::table('migrations')->insert([
                'migration' => $migration,
                'batch' => 1,
            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        foreach ($this->insertMigrations as $migration) {
            DB::table('migrations')->delete([
                'migration' => $migration,
                'batch' => 1,
            ]);
        }
    }
}
