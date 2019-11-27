<?php

use Illuminate\Database\Seeder;

class OcamentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Orcamento',20)->create();
    }
}
