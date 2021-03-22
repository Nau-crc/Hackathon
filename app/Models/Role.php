<?php

namespace App\Models;

use Laratrust\Models\LaratrustRole;

class Role extends LaratrustRole
{
    public $guarded = [];

    public function roleToCreate()
    {

        $admin = Role::create([
            'name' => 'admin',
            'display_name' => 'Administrator', // optional
            'description' => 'User is allowed to manage and edit other users', // optional
        ]);

        $user = Role::create([
            'name' => 'user',
            'display_name' => 'User',
            'description' => 'User can manage is own personal informacion and get tasks from admin'
        ]);
    }
}
