<?php

use App\Note;
use Illuminate\Database\Seeder;

class NotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $notes = new Note();
        $notes->id = 1;
        $notes->title = 'sữa quạt';
        $notes->content = 'mang quạt ra cửa hàng điện tử NTC';
        $notes->type_id = 1;
        $notes->save();
    }
}
