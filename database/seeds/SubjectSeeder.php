<?php

use Illuminate\Database\Seeder;

use App\Subject;
class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subject::create(
            [
                'name'=>'Engineering Technology',
                'code'=>'065',
                'abbreviation'=>'ET',
                'category_id'=>1,
            ]
        );
        Subject::create(
            [
                'name'=>'Biosystem Technology',
                'code'=>'066',
                'abbreviation'=>'BT',
                'category_id'=>1,
            ]
        );

        Subject::create(
            [
                'name'=>'Science For Technology',
                'code'=>'067',
                'abbreviation'=>'SFT',
                'category_id'=>1,
            ]
        );
        Subject::create(
            [
                'name'=>'Physics',
                'code'=>'001',
                'abbreviation'=>'PHY',
                'category_id'=>2,
            ]
        );
        Subject::create(
            [
                'name'=>'Chemistry',
                'code'=>'002',
                'abbreviation'=>'CHM',
                'category_id'=>2,
            ]
        );
    }
}
