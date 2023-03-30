<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Producto;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*DB::table('users')->insert([
            'username' => 'admin',
            'firstname' => 'Admin',
            'lastname' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('secret')
        ]);*/

        //creacion de seeders para la lsiat de productos
        $prod1 = new Producto();
        $prod1->nombre = 'Laptop';
        $prod1->precio = 2000.00;
        $prod1->save();

        $prod2 = new Producto();
        $prod2->nombre = 'Mouse';
        $prod2->precio = 50.00;
        $prod2->save();

        $prod3 = new Producto();
        $prod3->nombre = 'Teclado';
        $prod3->precio = 300.00;
        $prod3->save();




    }
}
