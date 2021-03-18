<?php

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Permission list

            // users
            Permission::create(['name' => 'users.list']);
            Permission::create(['name' => 'users.show']);
            Permission::create(['name' => 'users.create']);
            Permission::create(['name' => 'users.systems']);
            Permission::create(['name' => 'users.update']);
            Permission::create(['name' => 'users.delete']);
            Permission::create(['name' => 'users.results']);

            // categories
            Permission::create(['name' => 'categories.create']);
            Permission::create(['name' => 'categories.update']);
            Permission::create(['name' => 'categories.delete']);

            // addictions
            Permission::create(['name' => 'addictions.create']);
            Permission::create(['name' => 'addictions.update']);
            Permission::create(['name' => 'addictions.delete']);

            // difficulty levels
            Permission::create(['name' => 'difficulty.levels.create']);
            Permission::create(['name' => 'difficulty.levels.update']);
            Permission::create(['name' => 'difficulty.levels.delete']);

            // information levels
            Permission::create(['name' => 'information.levels.create']);
            Permission::create(['name' => 'information.levels.update']);
            Permission::create(['name' => 'information.levels.delete']);

            // questions
            Permission::create(['name' => 'questions.create']);
            Permission::create(['name' => 'questions.update']);
            Permission::create(['name' => 'questions.delete']);

            // answers
            Permission::create(['name' => 'answers.create']);
            Permission::create(['name' => 'answers.update']);
            Permission::create(['name' => 'answers.delete']);

            // tests
            Permission::create(['name' => 'tests.create']);
            Permission::create(['name' => 'tests.update']);
            Permission::create(['name' => 'tests.delete']);

            // territorals

                // zones
                Permission::create(['name' => 'zones.create']);
                Permission::create(['name' => 'zones.update']);
                Permission::create(['name' => 'zones.delete']);

                // communes
                Permission::create(['name' => 'communes.create']);
                Permission::create(['name' => 'communes.update']);
                Permission::create(['name' => 'communes.delete']);

                // neighborhoods
                Permission::create(['name' => 'neighborhoods.create']);
                Permission::create(['name' => 'neighborhoods.update']);
                Permission::create(['name' => 'neighborhoods.delete']);

            // universities

                // programs
                Permission::create(['name' => 'programs.create']);
                Permission::create(['name' => 'programs.update']);
                Permission::create(['name' => 'programs.delete']);

                // modalities
                Permission::create(['name' => 'modalities.create']);
                Permission::create(['name' => 'modalities.update']);
                Permission::create(['name' => 'modalities.delete']);

                // semesters
                Permission::create(['name' => 'semesters.create']);
                Permission::create(['name' => 'semesters.update']);
                Permission::create(['name' => 'semesters.delete']);

            // educational secretaries

                // educational insitutions
                Permission::create(['name' => 'educational.institutions.create']);
                Permission::create(['name' => 'educational.institutions.update']);
                Permission::create(['name' => 'educational.institutions.delete']);

                // grades
                Permission::create(['name' => 'grades.create']);
                Permission::create(['name' => 'grades.update']);
                Permission::create(['name' => 'grades.delete']);

            // educational institutions

                // educational grades
                Permission::create(['name' => 'educational.grades.create']);
                Permission::create(['name' => 'educational.grades.update']);
                Permission::create(['name' => 'educational.grades.delete']);

            // companies

                // locations
                Permission::create(['name' => 'locations.create']);
                Permission::create(['name' => 'locations.update']);
                Permission::create(['name' => 'locations.delete']);

                // areas
                Permission::create(['name' => 'areas.create']);
                Permission::create(['name' => 'areas.update']);
                Permission::create(['name' => 'areas.delete']);

                // schedules
                Permission::create(['name' => 'schedules.create']);
                Permission::create(['name' => 'schedules.update']);
                Permission::create(['name' => 'schedules.delete']);

        // Root
        $root = Role::create(['name' => 'root']);

        $root->givePermissionTo(Permission::all());

        // Admin
        $admin = Role::create(['name' => 'admin']);

        $admin->givePermissionTo(Permission::all());

        // $admin->givePermissionTo([]);

        // Client
        $client = Role::create(['name' => 'client']);

        //User root

        $user = User::find(1);

        $user->assignRole('root');
    }
}
