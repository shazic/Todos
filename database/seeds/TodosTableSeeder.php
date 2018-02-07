<?php

use Illuminate\Database\Seeder;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //run the seeder for Todos table.
        factory(App\Todo::class,7)->create();
    }
}
