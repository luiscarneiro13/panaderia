<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->crearAll();
    }
    public function crearAll()
    {
        $created_at = date('Y:m:d H:m:i');
        $updated_at = date('Y:m:d H:m:i');

        DB::table('medidas')->insert([
            ['medida' => 'lts', 'created_at' => $created_at, 'updated_at' => $updated_at],
            ['medida' => 'kgs', 'created_at' => $created_at, 'updated_at' => $updated_at],
            ['medida' => 'grs', 'created_at' => $created_at, 'updated_at' => $updated_at]
        ]);
        DB::table('materiaps')->insert([
            ['nombre_materia' => 'Harina','medidas_id' => 3, 'created_at' => $created_at, 'updated_at' => $updated_at],
            ['nombre_materia' => 'Azucar','medidas_id' => 3, 'created_at' => $created_at, 'updated_at' => $updated_at],
            ['nombre_materia' => 'Levadura','medidas_id' => 3, 'created_at' => $created_at, 'updated_at' => $updated_at]
        ]);
    }
}
