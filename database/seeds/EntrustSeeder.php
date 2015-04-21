<?php

use Illuminate\Database\Seeder;

use App\Role;
use App\Permission;

class EntrustSeeder extends Seeder
{

    public function run()
    {
        /* Create administrator role */
        $admin = new Role;
        $admin->name = 'Administrator';
        $admin->save();

        /* Create officer role */
        $officer = new Role;
        $officer->name = 'Officer';
        $officer->save();

        /* Create member role */
        $member = new Role;
        $member->name = 'Member';
        $member->save();


        /* Permissions */

        /* Default permission for board members */
        $manageSystem = new Permission;
        $manageSystem->name = 'manage_system';
        $manageSystem->display_name = 'Manage System';
        $manageSystem->save();


        /* Apply permissions */
        $admin->perms()->sync(array($manageSystem->id));
        $officer->perms()->sync(array($manageSystem->id));
    }
}
