<?php

use App\NoteType;
use Illuminate\Database\Seeder;

class NoteTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = new NoteType();
        $type->id = 1;
        $type->name = 'cá nhân';
        $type->description = 'của tôi';
        $type->save();
    }
}
