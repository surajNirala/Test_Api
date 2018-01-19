<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         /*$this->call(UsersTableSeeder::class);
         $this->call(GuestsTableSeeder::class);
         $this->call(Key_logsTableSeeder::class);*/
         factory(App\User::class, 2)->create();
         factory(App\Model\Guest::class, 2)->create();
         factory(App\Model\Key_log::class,4)->create();
    }
}
