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
        //$this->call(UsuariosTableSeeder::class);
        Eloquent::unguard();
        Schema::disableForeignKeyConstraints();

        $this->call('RolesTableSeeder');
        $this->call('RegistrosTableSeeder');
        $this->call('UsuariosTableSeeder');
        $this->call('ProvinciasTableSeeder');

        Schema::enableForeignKeyConstraints();
    }
}
