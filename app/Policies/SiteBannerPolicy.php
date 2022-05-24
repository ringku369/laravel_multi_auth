<?php

namespace App\Policies;

use App\Models\Role;
use App\Models\Admin;
use Illuminate\Auth\Access\HandlesAuthorization;
use Auth;
class SiteBannerPolicy
{
    use HandlesAuthorization;


    public function grand(Admin $admin)
    {
        return $result = Role::roleHasGrantPermissions($admin->role_id, 'pages');
    }

    public function parent(Admin $admin)
    {
        return $result = Role::roleHasParentPermissions($admin->role_id, 'banner');
    }

    public function create(Admin $admin)
    {
        return $result = Role::roleHasChildPermissions($admin->role_id,'banner','banner.create');
    }

    public function read(Admin $admin)
    {
        return $result = Role::roleHasChildPermissions($admin->role_id,'banner','banner.read');
    }

    public function update(Admin $admin)
    {
        return $result = Role::roleHasChildPermissions($admin->role_id,'banner','banner.update');
    }

    public function delete(Admin $admin)
    {
        return $result = Role::roleHasChildPermissions($admin->role_id,'banner','banner.delete');
    }

}
