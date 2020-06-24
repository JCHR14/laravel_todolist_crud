<?php

use \App\todolist;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TodoListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        todolist::create([
            'title' => 'Primera tarea del dia',
            'content' => 'Repellat molestiae omnis rerum? Excepturi alias nihil labore eius assumenda rerum cum minima atque quo provident rem impedit, aliquam recusandae asperiores corrupti?',
        ]);
        todolist::create([
            'title' => 'Segunda tarea del dia',
            'content' => 'Repellat molestiae omnis rerum? Excepturi alias nihil labore eius assumenda rerum cum minima atque quo provident rem impedit, aliquam recusandae asperiores corrupti?',
        ]);
        todolist::create([
            'title' => 'Tercera tarea del dia',
            'content' => 'Repellat molestiae omnis rerum? Excepturi alias nihil labore eius assumenda rerum cum minima atque quo provident rem impedit, aliquam recusandae asperiores corrupti?',
        ]);
    }
}
