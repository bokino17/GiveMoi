<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');

        // Create roles (Please don't delete this it's verry important !)

        Role::create(['guard_name' => 'admin', 'name' => 'admin']);
        Role::create(['guard_name' => 'admin', 'name' => 'advertiser']);
        Role::create(['guard_name' => 'admin', 'name' => 'editor']);
        Role::create(['guard_name' => 'admin', 'name' => 'moderator']);
        Role::create(['guard_name' => 'admin', 'name' => 'visitor']);



        //Create permissions Administrations
        Permission::create(['guard_name' => 'admin' , 'name' => 'create-administrator']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'view-administrator']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'edit-administrator']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'delete-administrator']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'edited_by-admin-administrator']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'delete-multiple-administrator']);



        // create permissions testimonials
        Permission::create(['guard_name' => 'admin' , 'name' => 'create-testimonial']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'edit-testimonial']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'edited_by-testimonial']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'delete-testimonial']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'delete-multiple-testimonial']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'publish-testimonial']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'unpublish-testimonial']);

        // create permissions eventments
        Permission::create(['guard_name' => 'admin' , 'name' => 'create-eventment']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'edit-eventment']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'edited_by-eventment']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'delete-eventment']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'delete-multiple-eventment']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'publish-eventment']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'unpublish-eventment']);


        // create permissions message-contacts
        Permission::create(['guard_name' => 'admin' , 'name' => 'all-contact_message']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'view-contact_message']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'delete-contact_message']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'delete-multiple-contact_message']);


        // create permissions conditions and utilisation
        Permission::create(['guard_name' => 'admin' , 'name' => 'create-condition_utilisation']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'edit-condition_utilisation']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'edited_by-condition_utilisation']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'publish-condition_utilisation']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'unpublish-condition_utilisation']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'delete-condition_utilisation']);

        // create permissions abouts
        Permission::create(['guard_name' => 'admin' , 'name' => 'create-about']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'edit-about']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'edited_by-about']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'delete-about']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'delete-multiple-about']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'publish-about']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'unpublish-about']);

        // create permissions tags
        Permission::create(['guard_name' => 'admin' , 'name' => 'create-tag']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'edit-tag']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'edited_by-tag']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'delete-tag']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'delete-multiple-tag']);



        // create permissions presentations
        Permission::create(['guard_name' => 'admin' , 'name' => 'create-presentation']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'edit-presentation']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'edited_by-presentation']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'delete-presentation']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'delete-multiple-presentation']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'publish-presentation']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'unpublish-presentation']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'view-presentation']);


        //Create permissions user
        Permission::create(['guard_name' => 'admin' , 'name' => 'create-user']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'delete-user']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'view-user']);

        //Create permissions colors
        Permission::create(['guard_name' => 'admin' , 'name' => 'create-color']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'edit-color']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'edit_by-color']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'delete-color']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'delete-multiple-color']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'publish-color']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'unpublish-color']);

        //Create permissions specialities
        Permission::create(['guard_name' => 'admin' , 'name' => 'create-speciality']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'edit-speciality']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'edit_by-speciality']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'delete-speciality']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'delete-multiple-speciality']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'publish-speciality']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'unpublish-speciality']);

        //Create permissions works
        Permission::create(['guard_name' => 'admin' , 'name' => 'create-work']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'edit-work']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'edit_by-work']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'delete-work']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'delete-multiple-work']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'publish-work']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'unpublish-work']);

        //Create permissions roles
        Permission::create(['guard_name' => 'admin' , 'name' => 'all-role']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'create-role']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'edit-role']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'delete-role']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'delete-multiple-role']);

        //Create permissions roles
        Permission::create(['guard_name' => 'admin' , 'name' => 'all-slide']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'create-slide']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'edit-slide']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'edited_by-slide']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'delete-slide']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'publish-slide']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'unpublish-slide']);


        //Create permissions permissions
        Permission::create(['guard_name' => 'admin' , 'name' => 'all-permission']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'create-permission']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'edit-permission']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'delete-permission']);
        Permission::create(['guard_name' => 'admin' , 'name' => 'delete-multiple-permission']);





        // create roles and assign created permissions

        $role = Role::create(['guard_name' => 'admin', 'name' => 'super-admin']);
        $role->givePermissionTo(Permission::all());


    }
}
