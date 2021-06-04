<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function permissions(){
        return Permission::select('permissions.intitule as intitule')
                         ->join('role_permissions', 'role_permissions.id_permission', '=', 'permissions.id')
                         ->join('roles', 'roles.id', '=', 'role_permissions.id_role')
                         ->where('roles.id', $this->id)
                         ->get();
    }
}
