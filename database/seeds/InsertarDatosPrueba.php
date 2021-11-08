<?php

use Illuminate\Database\Seeder;

class InsertarDatosPrueba extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 10; $i++) { 
            DB::table('prueba')->insert(array(
                'name' => 'prueba '.$i
            ));
        }
        $this->command->info("datos cargados correctamente");
    }
}
