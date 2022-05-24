<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //User::truncate();
        $this->call([RolePermissionSeeder::class,SiteSettingSeeder::class]);
        //\App\Models\Role::factory(1)->create();
        \App\Models\User::factory(1)->create();
        \App\Models\Admin::factory(1)->create();
        \App\Models\Post::factory(1)->create();

    }
}
