<?php

use App\categorie;
use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(categorie::class);
        factory(categorie::class)->create(['nom'=>'Economie']);
        factory(categorie::class)->create(['nom'=>'Societe']);
        factory(categorie::class)->create(['nom'=>'Culture']);
    }
}
