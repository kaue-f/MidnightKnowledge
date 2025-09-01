<?php

namespace Database\Seeders;

use App\Enums\RoleEnum;
use App\Enums\PermissionEnum;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionsRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (PermissionEnum::array() as $key => $value) {
            Permission::create(['name' => $key]);
        }

        foreach (RoleEnum::array() as $key => $value) {
            $role = Role::create(['name' => $key]);

            $permissions = match ($role->name) {
                'manager' => ['report_review_users', 'report_review_comments', 'report_review_contents', 'content_review_new', 'content_review_update', 'grant_ban_user', 'bypass_content_review', 'update_profile'],
                'moderator' => ['report_review_comments', 'report_review_contents', 'content_review_new', 'content_review_update', 'bypass_content_review', 'update_profile'],
                'contributor' => ['content_review_new', 'content_review_update', 'bypass_content_review', 'update_profile'],
                'vip' => ['bypass_content_review', 'update_profile'],
                'member' => ['submit_content_for_review', 'update_profile'],
            };

            $role->givePermissionTo($permissions);
        }
    }
}
