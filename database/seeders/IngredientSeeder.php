<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('instructions')->insert([
            'recipe_id' => '1',
            'name'      => 'courgette',
            'amount'    => "300 g",
            'created_at'=> '2021-06-06 15:34:43',
            'updated_at'=> '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id' => '1',
            'name'      => 'volkorenbrood',
            'amount'    => "8 sneetjes",
            'created_at'=> '2021-06-06 15:34:43',
            'updated_at'=> '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id' => '1',
            'name'      => 'mager rundergehakt',
            'amount'    => "300 g",
            'created_at'=> '2021-06-06 15:34:43',
            'updated_at'=> '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id' => '1',
            'name'      => 'wit vrij uitloopei',
            'amount'    => "1",
            'created_at'=> '2021-06-06 15:34:43',
            'updated_at'=> '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id' => '1',
            'name'      => 'Amerikaanse cajunkruiden',
            'amount'    => "2 el",
            'created_at'=> '2021-06-06 15:34:43',
            'updated_at'=> '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id' => '1',
            'name'      => 'milde olijfolie',
            'amount'    => "4 el",
            'created_at'=> '2021-06-06 15:34:43',
            'updated_at'=> '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id' => '1',
            'name'      => 'tomaten',
            'amount'    => "2",
            'created_at'=> '2021-06-06 15:34:43',
            'updated_at'=> '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id' => '1',
            'name'      => 'avocado',
            'amount'    => "1",
            'created_at'=> '2021-06-06 15:34:43',
            'updated_at'=> '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id' => '1',
            'name'      => 'kaas-uienbollen',
            'amount'    => "4",
            'created_at'=> '2021-06-06 15:34:43',
            'updated_at'=> '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id' => '1',
            'name'      => 'mayonaise',
            'amount'    => "4 el",
            'created_at'=> '2021-06-06 15:34:43',
            'updated_at'=> '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id' => '1',
            'name'      => 'veldsla',
            'amount'    => "85 g",
            'created_at'=> '2021-06-06 15:34:43',
            'updated_at'=> '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id' => '2',
            'name'      => 'winterpeen',
            'amount'    => "250 g",
            'created_at'=> '2021-06-06 15:34:43',
            'updated_at'=> '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id' => '2',
            'name'      => 'bleekselderij',
            'amount'    => "3 stengels",
            'created_at'=> '2021-06-06 15:34:43',
            'updated_at'=> '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id' => '2',
            'name'      => 'prei',
            'amount'    => "1",
            'created_at'=> '2021-06-06 15:34:43',
            'updated_at'=> '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id' => '2',
            'name'      => 'middelgrote uien',
            'amount'    => "2",
            'created_at'=> '2021-06-06 15:34:43',
            'updated_at'=> '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id' => '2',
            'name'      => 'knoflook',
            'amount'    => "2 tenen",
            'created_at'=> '2021-06-06 15:34:43',
            'updated_at'=> '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id' => '2',
            'name'      => 'milde olijfole',
            'amount'    => "2 el",
            'created_at'=> '2021-06-06 15:34:43',
            'updated_at'=> '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id' => '2',
            'name'      => 'half-om-half gehakt',
            'amount'    => "300 g",
            'created_at'=> '2021-06-06 15:34:43',
            'updated_at'=> '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id' => '2',
            'name'      => 'pastasaus basilicum',
            'amount'    => "520 g",
            'created_at'=> '2021-06-06 15:34:43',
            'updated_at'=> '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id' => '2',
            'name'      => 'spaghetti',
            'amount'    => "300 g",
            'created_at'=> '2021-06-06 15:34:43',
            'updated_at'=> '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id' => '2',
            'name'      => 'geraspte kaas 30+',
            'amount'    => "100 g",
            'created_at'=> '2021-06-06 15:34:43',
            'updated_at'=> '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id' => '3',
            'name'      => 'winterpeen',
            'amount'    => "1",
            'created_at'=> '2021-06-06 15:34:43',
            'updated_at'=> '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id' => '3',
            'name'      => 'bleekselderij',
            'amount'    => "3 stengels",
            'created_at'=> '2021-06-06 15:34:43',
            'updated_at'=> '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id' => '3',
            'name'      => 'middelgrote ui',
            'amount'    => "1",
            'created_at'=> '2021-06-06 15:34:43',
            'updated_at'=> '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id' => '3',
            'name'      => 'knoflook',
            'amount'    => "2 tenen",
            'created_at'=> '2021-06-06 15:34:43',
            'updated_at'=> '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id' => '3',
            'name'      => 'mergpijpjes',
            'amount'    => "4",
            'created_at'=> '2021-06-06 15:34:43',
            'updated_at'=> '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id' => '3',
            'name'      => 'kraanwater',
            'amount'    => "1,25 L",
            'created_at'=> '2021-06-06 15:34:43',
            'updated_at'=> '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id' => '3',
            'name'      => 'sjalotten',
            'amount'    => "2",
            'created_at'=> '2021-06-06 15:34:43',
            'updated_at'=> '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id' => '3',
            'name'      => 'ongezouten roomboter',
            'amount'    => "50 g",
            'created_at'=> '2021-06-06 15:34:43',
            'updated_at'=> '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id' => '3',
            'name'      => 'risottorijst',
            'amount'    => "300 g",
            'created_at'=> '2021-06-06 15:34:43',
            'updated_at'=> '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id' => '3',
            'name'      => 'saffraan',
            'amount'    => "0,25 g",
            'created_at'=> '2021-06-06 15:34:43',
            'updated_at'=> '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id' => '3',
            'name'      => 'parmigiano reggiano',
            'amount'    => "50 g",
            'created_at'=> '2021-06-06 15:34:43',
            'updated_at'=> '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id' => '4',
            'name'      => 'middelgrote ui',
            'amount'    => "1",
            'created_at'=> '2021-06-06 15:34:43',
            'updated_at'=> '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id' => '4',
            'name'      => 'bloemkool',
            'amount'    => "1",
            'created_at'=> '2021-06-06 15:34:43',
            'updated_at'=> '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id' => '4',
            'name'      => 'kokosolie',
            'amount'    => "2 el",
            'created_at'=> '2021-06-06 15:34:43',
            'updated_at'=> '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id' => '4',
            'name'      => "Patak's Madras Indiase kruidenpasta in pot",
            'amount'    => "2 el",
            'created_at'=> '2021-06-06 15:34:43',
            'updated_at'=> '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id' => '4',
            'name'      => 'gedroogde gele splitlinzen',
            'amount'    => "250 g",
            'created_at'=> '2021-06-06 15:34:43',
            'updated_at'=> '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id' => '4',
            'name'      => 'diepvries tuinerwten',
            'amount'    => "300 g",
            'created_at'=> '2021-06-06 15:34:43',
            'updated_at'=> '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id' => '4',
            'name'      => 'tomatenblokjes in blik',
            'amount'    => "400 g",
            'created_at'=> '2021-06-06 15:34:43',
            'updated_at'=> '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id' => '4',
            'name'      => 'groentenbouillon',
            'amount'    => "500 ml",
            'created_at'=> '2021-06-06 15:34:43',
            'updated_at'=> '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id' => '5',
            'name'      => 'Mexicaanse wraps',
            'amount'    => "8 stuks",
            'created_at'=> '2021-06-06 15:34:43',
            'updated_at'=> '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id' => '5',
            'name'      => 'Kipfilet',
            'amount'    => "600 g",
            'created_at'=> '2021-06-06 15:34:43',
            'updated_at'=> '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id' => '5',
            'name'      => 'Mexicaanse kruiden',
            'amount'    => "1 zakje",
            'created_at'=> '2021-06-06 15:34:43',
            'updated_at'=> '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id' => '5',
            'name'      => 'Geraspte kaas',
            'amount'    => "300 g",
            'created_at'=> '2021-06-06 15:34:43',
            'updated_at'=> '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id' => '5',
            'name'      => 'Ijsbergsla',
            'amount'    => "1 krop",
            'created_at'=> '2021-06-06 15:34:43',
            'updated_at'=> '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id' => '5',
            'name'      => 'Kidneybonen',
            'amount'    => "400 g",
            'created_at'=> '2021-06-06 15:34:43',
            'updated_at'=> '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id' => '5',
            'name'      => 'Paprika',
            'amount'    => "2 stuks",
            'created_at'=> '2021-06-06 15:34:43',
            'updated_at'=> '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id' => '5',
            'name'      => 'Tomaat',
            'amount'    => "4 stuks",
            'created_at'=> '2021-06-06 15:34:43',
            'updated_at'=> '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id' => '6',
            'name'      => 'Tomaat',
            'amount'    => "2 stuks",
            'created_at'=> '2021-06-06 15:34:43',
            'updated_at'=> '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id' => '6',
            'name'      => 'Komkommer',
            'amount'    => "1 helft",
            'created_at'=> '2021-06-06 15:34:43',
            'updated_at'=> '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id' => '6',
            'name'      => 'Watermeloen',
            'amount'    => "1 kg",
            'created_at'=> '2021-06-06 15:34:43',
            'updated_at'=> '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id' => '6',
            'name'      => 'Limoen',
            'amount'    => "1 stuk",
            'created_at'=> '2021-06-06 15:34:43',
            'updated_at'=> '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id' => '6',
            'name'      => 'Verse basilicum',
            'amount'    => "15 g",
            'created_at'=> '2021-06-06 15:34:43',
            'updated_at'=> '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id' => '6',
            'name'      => 'Extra vierge olijfolie',
            'amount'    => "2 el",
            'created_at'=> '2021-06-06 15:34:43',
            'updated_at'=> '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id' => '6',
            'name'      => 'Ijsblokjes',
            'amount'    => "6 stuks",
            'created_at'=> '2021-06-06 15:34:43',
            'updated_at'=> '2021-06-20 08:45:15'
        ]);
    }
}
