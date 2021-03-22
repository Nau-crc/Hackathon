<?php

namespace App\Models;

use Laratrust\Models\LaratrustRole;

class Role extends LaratrustRole
{
    public $guarded = [];

    public function AdminRole()
    {
        //
    }

    public function ColaboratorRole()
    {
        //
    }

    public function UserRole() 
    {
        //
    }
}
