<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('admins', function (Blueprint $table) {
            
            $table->foreign('role_id', 'admins_fk_role_id')
                ->references('id')
                ->on('roles')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table->foreign('user_type_id', 'admins_fk_user_type_id')
                ->references('id')
                ->on('user_types')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table->foreign('division_id', 'admins_fk_division_id')
                ->references('id')
                ->on('divisions')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table->foreign('district_id', 'admins_fk_district_id')
                ->references('id')
                ->on('districts')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table->foreign('upazila_id', 'admins_fk_upazila_id')
                ->references('id')
                ->on('upazilas')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('admins', function (Blueprint $table) {
            $table->dropForeign('admins_fk_role_id');
            $table->dropForeign('admins_fk_user_type_id');
            $table->dropForeign('admins_fk_division_id');
            $table->dropForeign('admins_fk_district_id');
            $table->dropForeign('admins_fk_upazila_id');
        });
    }
}
