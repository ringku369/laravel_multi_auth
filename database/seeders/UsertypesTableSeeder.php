<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class UsertypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        DB::table('user_types')->truncate();
        DB::table('user_types')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'name' => 'Master Admin',
                    'code' => '1',
                    'parent_id' => null,
                    'status' => 1,
                    'default_role_id' => 1
                ),
            1 =>
                array(
                    'id' => 2,
                    'name' => 'Super Admin',
                    'code' => '2',
                    'parent_id' => null,
                    'status' => 1,
                    'default_role_id' => 3
                ),
            2 =>
                array(
                    'id' => 3,
                    'name' => 'System Admin',
                    'code' => '3',
                    'parent_id' => null,
                    'status' => 1,
                    'default_role_id' => 3
                ),
            3 =>
                array(
                    'id' => 4,
                    'name' => 'Admin',
                    'parent_id' => '3',
                    'code' => '4',
                    'status' => 1,
                    'default_role_id' => 4
                ),
            4 =>
                array(
                    'id' => 5,
                    'name' => 'Branch Admin',
                    'parent_id' => null,
                    'code' => '5',
                    'status' => 1,
                    'default_role_id' => 5
                ),
            5 =>
                array(
                    'id' => 6,
                    'name' => 'Training Center User',
                    'parent_id' => null,
                    'code' => '6',
                    'status' => 1,
                    'default_role_id' => 7
                ),
            6 =>
                array(
                    'id' => 7,
                    'name' => 'Trainee',
                    'code' => '7',
                    'status' => 1,
                    'parent_id' => null,
                    'default_role_id' => 7
                ),
        ));
        

        Schema::enableForeignKeyConstraints();

    }
}