<?php

namespace App\Http\Controllers\Autorisations;

use App\Models\Role;
use App\Models\Permission;
use App\Models\Roles_Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\RolePermission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::orderBy('roles.intitule', 'asc')
                        ->get();

        return view('autorisations.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::all();

        return view('autorisations.roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'intitule' => [ 'required', 'string', 'max:255', 'unique:roles'],
        ],
        [
            'intitule.required' => "Le champ intitulé est obligatoire.",
            'intitule.unique' => "Ce rôle existe déjà.",
        ]);

        $role = new Role([
            'intitule' => $request->get('intitule'),
            'detail' => $request->get('description')
        ]);

        $role->save();
        // $role = Role::where('intitule', $role->intitule)->get();

        $permissions[] = $request->get('permissions');

        if(isset($permissions[0])){  
            foreach ($permissions[0] as $permission){
                $roles_permission = new RolePermission([
                    'id_role' => $role->id,
                    'id_permission' => $permission,
                ]);

                $roles_permission->save();
            }
        }
        

        return redirect()->route('roles.index')
                         ->with('success', 'Rôle crée avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        $permissions = RolePermission::select('intitule')
                        ->join('permissions', 'role_permissions.id_permission', '=', 'permissions.id')
                        ->where('id_role', $role->id)
                        ->get();

        return view('autorisations.roles.show', compact('role', 'permissions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        $roles_permissions = RolePermission::select('intitule')
                        ->join('permissions', 'role_permissions.id_permission', '=', 'permissions.id')
                        ->where('id_role', $role->id)
                        ->get();
        $tabl_rp = [];
        foreach($roles_permissions as $role_permission){
            array_push($tabl_rp, $role_permission->intitule);
            
        }

        $roles_permissions = $tabl_rp;
        
        $permissions = Permission::all();

        return view('autorisations.roles.edit', compact('role', 'permissions', 'roles_permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $role->update($request->all());

        $permissions[] = $request->get('permissions');

        if(isset($permissions)){  
            foreach ($permissions[0] as $permission){

                RolePermission::select('role_permissions.id')
                                ->join('permissions', 'role_permissions.id_permission', '=', 'permissions.id')
                                ->where('role_permissions.id_role', '=', $role->id, 'AND','permissions.intitule', '=', $permission)
                                ->delete();

            }
        }
        if(isset($permissions)){  
            foreach ($permissions[0] as $permission){
                $roles_permission = new RolePermission([
                    'id_role' => $role->id,
                    'id_permission' => $permission,
                ]);

                $roles_permission->save();
            }
        }

        return redirect()->route('roles.index')
                        ->with('success', 'Rôle mis à jour avec succès.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role = Role::find($role->id);
        $role->delete();

        return redirect()->route('roles.index')
                        ->with('success', 'Rôle supprmé avec succès.');                      
    }
}
