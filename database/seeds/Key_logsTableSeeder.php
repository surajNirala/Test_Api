<?php

use Illuminate\Database\Seeder;

class Key_logsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Key_log::class, 30)->create();
    }
}
