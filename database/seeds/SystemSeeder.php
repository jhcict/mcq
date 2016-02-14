<?php

use Illuminate\Database\Seeder;
use App\Role as Role;
use App\User as User;
use App\Permission as Permission;
/**
 * Class: SystemSeeder
 *
 * @category DatabaseSeeder
 * @package  LearnMCQ
 * @author   Gnanakeethan Balasubramaniam <gnana@keethan.me>
 * @license  MIT https://license.mit.edu
 * @link     https://mcq.learntechnologies.org/
 * @link     http://laravel.com/docs/5.1/migration
 * @see      Seeder
 */
class SystemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Creating Roles
         */
        $admin = new Role();
        $admin->name         = 'admin';
        $admin->display_name = 'Administrator';
        $admin->description  = 'Administration of the System';
        $admin->save();

        $registered = new Role();
        $registered->name         = 'registered';
        $registered->display_name = 'Registered User';
        $registered->description  = 'Registered User of the System';
        $registered->save();

        $moderator = new Role();
        $moderator->name         = 'moderator';
        $moderator->display_name = 'Moderator';
        $moderator->description  = 'Moderator of the System';
        $moderator->save();




        /**
         * Creating Permissions
         */
        /**
         * Subject
         */
        $permission = new Permission();
        $permission->name         = 'create-subject';
        $permission->display_name = 'Create Subject'; // optional
        $permission->description  = 'Create new Subject in The system'; // optional
        $permission->save();

        $admin->attachPermission($permission);
        $moderator->attachPermission($permission);


        /**
         * Papers
         */
        $permission = new Permission();
        $permission->name         = 'create-papers';
        $permission->display_name = 'Create Papers'; // optional
        $permission->description  = 'Creating Papers in The System'; // optional
        $permission->save();

        $admin->attachPermission($permission);
        $moderator->attachPermission($permission);
        $registered->attachPermission($permission);



        $permission = new Permission();
        $permission->name         = 'update-papers';
        $permission->display_name = 'Update Papers'; // optional
        $permission->description  = 'Updating Papers in the System'; // optional
        $permission->save();

        $admin->attachPermission($permission);
        $moderator->attachPermission($permission);
        $registered->attachPermission($permission);


        $permission = new Permission();
        $permission->name         = 'delete-papers';
        $permission->display_name = 'Delete Papers'; // optional
        $permission->description  = 'Deleting Papers from the System'; // optional
        $permission->save();

        $admin->attachPermission($permission);
        $moderator->attachPermission($permission);





        /**
         * Questions
         */
        $permission = new Permission();
        $permission->name         = 'create-question';
        $permission->display_name = 'Create Question'; // optional
        $permission->description  = 'Create Question in the System'; // optional
        $permission->save();

        $admin->attachPermission($permission);
        $moderator->attachPermission($permission);
        $registered->attachPermission($permission);


        $permission = new Permission();
        $permission->name         = 'update-question';
        $permission->display_name = 'Update Question'; // optional
        $permission->description  = 'Update Questions in the System'; // optional
        $permission->save();

        $admin->attachPermission($permission);
        $moderator->attachPermission($permission);
        $registered->attachPermission($permission);


        $permission = new Permission();
        $permission->name         = 'delete-question';
        $permission->display_name = 'Delete Question'; // optional
        $permission->description  = 'Deleting Question from the System'; // optional
        $permission->save();

        $admin->attachPermission($permission);
        $moderator->attachPermission($permission);



        /**
         * Answers
         */
        $permission = new Permission();
        $permission->name         = 'create-answer';
        $permission->display_name = 'Create Answers'; // optional
        $permission->description  = 'Create answers in the system'; // optional
        $permission->save();

        $admin->attachPermission($permission);
        $moderator->attachPermission($permission);
        $registered->attachPermission($permission);


        $permission = new Permission();
        $permission->name         = 'update-answer';
        $permission->display_name = 'Update Answers'; // optional
        $permission->description  = 'Updating answers in the system'; // optional
        $permission->save();

        $admin->attachPermission($permission);
        $registered->attachPermission($permission);
        $moderator->attachPermission($permission);


        $permission = new Permission();
        $permission->name         = 'delete-answer';
        $permission->display_name = 'Delete Answers'; // optional
        $permission->description  = 'Deleting Answers from the System'; // optional
        $permission->save();

        $admin->attachPermission($permission);
        $registered->attachPermission($permission);
        $moderator->attachPermission($permission);






        /**
         * Discussions
         */
        $permission = new Permission();
        $permission->name         = 'create-discussion';
        $permission->display_name = 'Create Discussion'; // optional
        $permission->description  = 'Creating Discussions on Papers,Questions ';
        $permission->save();



        $admin->attachPermission($permission);
        $registered->attachPermission($permission);
        $moderator->attachPermission($permission);


        $permission = new Permission();
        $permission->name         = 'update-discussion';
        $permission->display_name = 'Update Discussion'; // optional
        $permission->description  = 'Updating Discussions on Papers,System';
        $permission->save();



        $admin->attachPermission($permission);
        $registered->attachPermission($permission);
        $moderator->attachPermission($permission);

        $permission = new Permission();
        $permission->name         = 'delete-discussion';
        $permission->display_name = 'Delete Discussion'; // optional
        $permission->description  = 'Deleting Discussions'; // optional
        $permission->save();


        $admin->attachPermission($permission);
        $registered->attachPermission($permission);
        $moderator->attachPermission($permission);

        $permission = new Permission();
        $permission->name         = 'create-discussion-post';
        $permission->display_name = 'Create Discussion Post'; // optional
        $permission->description  = 'Creating Discussions Post'; // optional
        $permission->save();



        $admin->attachPermission($permission);
        $registered->attachPermission($permission);
        $moderator->attachPermission($permission);


        $permission = new Permission();
        $permission->name         = 'update-discussion-post';
        $permission->display_name = 'Update Discussion'; // optional
        $permission->description  = 'Updating Discussions on Papers,System';
        $permission->save();



        $admin->attachPermission($permission);
        $registered->attachPermission($permission);
        $moderator->attachPermission($permission);

        $permission = new Permission();
        $permission->name         = 'delete-discussion-post';
        $permission->display_name = 'Delete Discussion'; // optional
        $permission->description  = 'Deleting Discussions'; // optional
        $permission->save();

        $admin->attachPermission($permission);
        $registered->attachPermission($permission);
        $moderator->attachPermission($permission);







        /**
         * User Creations
         */
        $user = User::create(
            [
            'name' => 'Gnanakeethan Balasubramaniam',
            'email' => 'gnanakeethan@gmail.com',
            'password' => bcrypt('password'),
            ]
        );
        $user->attachRole($admin);

        $user = User::create(
            [
                'name'=>'Moderator',
                'email'=>'moderator@mailinator.com',
                'password'=>bcrypt('password')
            ]
        );

        $user->attachRole($moderator);



        $user = User::create(
            [
                'name'=>'Registered',
                'email'=>'registered@mailinator.com',
                'password'=>bcrypt('password')
            ]
        );

        $user->attachRole($registered);
    }
}
