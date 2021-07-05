<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Recipe;
use App\Models\Ingredient;
use App\Models\Instruction;

class InstructionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('instructions')->insert([
            'recipe_id'   => '1',
            'step_number' => '1',
            'description' => "Verwarm de oven voor op 200 C. Boen de courgette schoon en rasp grof. Rooster ondertussen het brood in het midden van de oven in ca. 8 min. krokant. Snijd de korstjes eraf. Maal het brood in de keukenmachine in ca. 1 min. fijn.",
            'created_at'  => '2021-06-06 15:34:43',
            'updated_at'  => '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id'   => '1',
            'step_number' => '2',
            'description' => "Verhit de helft van de olie in een grote koekenpan met antiaanbaklaag en bak de burgers in 10 min. goudbruin en gaar. Keer de burgers halverwege.",
            'created_at'  => '2021-06-06 15:34:43',
            'updated_at'  => '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id'   => '1',
            'step_number' => '3',
            'description' => "Snijd ondertussen de helft van de tomaten in dunne plakjes. Snijd de rest van de tomaat in blokjes van een ½ cm. Halveer de avocado in de lengte en verwijder de pit. ",
            'created_at'  => '2021-06-06 15:34:43',
            'updated_at'  => '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id'   => '1',
            'step_number' => '4',
            'description' => "Snijd de ene helft van de avocado in dunne plakjes, de andere helft in blokjes van een ½ cm. Pers de citroen uit. Besprenkel alle plakjes en blokjes avocado met 1 el citroensap (per 4 personen). Breng op smaak met peper.",
            'created_at'  => '2021-06-06 15:34:43',
            'updated_at'  => '2021-06-20 08:45:15'
        ]);
        
        DB::table('instructions')->insert([
            'recipe_id'   => '1',
            'step_number' => '5',
            'description' => "Meng het fijngemalen brood, gehakt, ei en de cajunkruiden in een kom. Voeg de courgette toe en meng erdoor. Vorm van het mengsel met natte handen 4 burgers van Ø 10cm.",
            'created_at'  => '2021-06-06 15:34:43',
            'updated_at'  => '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id'   => '1',
            'step_number' => '6',
            'description' => "Verwarm ondertussen de kaas-uibollen 2 min. in het midden van de oven. Halveer de broodjes. Besmeer de onderste helften van de broodjes met de mayonaise. ",
            'created_at'  => '2021-06-06 15:34:43',
            'updated_at'  => '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id'   => '1',
            'step_number' => '7',
            'description' => " Beleg met wat plakjes avocado, een handje veldsla, een half-om-halfburger en wat plakjes tomaat en dek af met de bovenkant van de broodjes.",
            'created_at'  => '2021-06-06 15:34:43',
            'updated_at'  => '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id'   => '1',
            'step_number' => '8',
            'description' => "Meng de rest van de veldsla met 1 el citroensap (per 4 personen), de rest van de olie en peper naar smaak. Schep de blokjes tomaat en avocado erdoor. Serveer de burgers met de salade.",
            'created_at'  => '2021-06-06 15:34:43',
            'updated_at'  => '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id'   => '2',
            'step_number' => '1',
            'description' => "Schil de winterpeen en snijd in kleine stukjes van een ½ cm. Halveer de bleekselderij in de lengte en snijd in stukjes van een ½ cm. Halveer de prei, was onder koud stromend water en snijd fijn. Snipper de ui en snijd de knoflook fijn.",
            'created_at'  => '2021-06-06 15:34:43',
            'updated_at'  => '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id'   => '2',
            'step_number' => '2',
            'description' => "Verhit de olie in een hapjespan en bak de peen, bleekselderij, prei, ui, knoflook, peper en zout 8 min. op middelhoog vuur. ",
            'created_at'  => '2021-06-06 15:34:43',
            'updated_at'  => '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id'   => '2',
            'step_number' => '3',
            'description' => "Roer regelmatig. Voeg het gehakt toe en bak 5 min. mee. Roer regelmatig. Voeg de pastasaus toe en stoof 10 min. op laag vuur met de deksel op de pan.",
            'created_at'  => '2021-06-06 15:34:43',
            'updated_at'  => '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id'   => '2',
            'step_number' => '4',
            'description' => " Kook ondertussen de spaghetti volgens de aanwijzingen op de verpakking beetgaar. Giet de pasta af en verdeel over diepe borden. Schep de saus erop en bestrooi met de kaas.",
            'created_at'  => '2021-06-06 15:34:43',
            'updated_at'  => '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id'   => '3',
            'step_number' => '1',
            'description' => "Hoewel beenmerg van kalfsschenkel traditioneel in deze risotto thuishoort, wordt het weinig meer gebruikt, vaak omdat het moeilijk te krijgen is. ",
            'created_at'  => '2021-06-06 15:34:43',
            'updated_at'  => '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id'   => '3',
            'step_number' => '2',
            'description' => " Maar het geeft een extra rijke smaak aan het gerecht. Rode wijn kan worden gebruikt, die wel kleur en smaak van de risotto beïnvloeden.",
            'created_at'  => '2021-06-06 15:34:43',
            'updated_at'  => '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id'   => '3',
            'step_number' => '3',
            'description' => "Breng de bouillon aan de kook en laat het zachtjes koken, terwijl je de risotto maakt. Doe de saffraan in een kommetje met een beetje van de warme (niet kokend) bouillon en laat dit 15 minuten weken.",
            'created_at'  => '2021-06-06 15:34:43',
            'updated_at'  => '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id'   => '3',
            'step_number' => '4',
            'description' => "Wrijf de draadjes tegen de wand van het kommetje fijn.",
            'created_at'  => '2021-06-06 15:34:43',
            'updated_at'  => '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id'   => '3',
            'step_number' => '5',
            'description' => "Smelt de beenmerg in een pan met een klontje boter en laat het uitje hierin zachtjes fruiten tot het zacht en doorschijnend is geworden, voeg nu de rijst toe en roer tot de korrels glanzen van het vet.",
            'created_at'  => '2021-06-06 15:34:43',
            'updated_at'  => '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id'   => '3',
            'step_number' => '6',
            'description' => "Blus de rijst met de wijn en laat 2 minuten goed doorkoken. Blijf roeren en voeg nu een beetje van de hete bouillon toe aan de rijst. ",
            'created_at'  => '2021-06-06 15:34:43',
            'updated_at'  => '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id'   => '3',
            'step_number' => '7',
            'description' => "Als het vocht is opgenomen voeg steeds meer bouillon toe. De risotto moet langzaam blijven doorkoken op nagenoeg dezelfde temperatuur.",
            'created_at'  => '2021-06-06 15:34:43',
            'updated_at'  => '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id'   => '3',
            'step_number' => '8',
            'description' => "Risotto moet ongeveer 15-18 minuten koken. Halverwege de kooktijd voeg de saffraan toe.",
            'created_at'  => '2021-06-06 15:34:43',
            'updated_at'  => '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id'   => '3',
            'step_number' => '9',
            'description' => "De risotto moet zacht en romig zijn, maar niet te nat. Proef en voeg zout en peper toe naar smaak.",
            'created_at'  => '2021-06-06 15:34:43',
            'updated_at'  => '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id'   => '3',
            'step_number' => '10',
            'description' => "Haal de risotto van het vuur en roer de resterende boter erdoor en twee eetlepels van de Parmezaanse kaas.",
            'created_at'  => '2021-06-06 15:34:43',
            'updated_at'  => '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id'   => '3',
            'step_number' => '11',
            'description' => "Het restant van de kaas wordt op tafel gezet en naar smaak toegevoegd.",
            'created_at'  => '2021-06-06 15:34:43',
            'updated_at'  => '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id'   => '4',
            'step_number' => '1',
            'description' => "Snipper de ui. Snijd de bloemkool in kleine roosjes.",
            'created_at'  => '2021-06-06 15:34:43',
            'updated_at'  => '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id'   => '4',
            'step_number' => '2',
            'description' => "Verhit de kokosolie in een hapjespan en fruit de ui met de kruidenpasta 5 min. op laag vuur. ",
            'created_at'  => '2021-06-06 15:34:43',
            'updated_at'  => '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id'   => '4',
            'step_number' => '3',
            'description' => "Voeg de bloemkool, gele linzen, tuinerwten, tomaten, groentebouillontablet en het water toe en breng aan de kook.",
            'created_at'  => '2021-06-06 15:34:43',
            'updated_at'  => '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id'   => '4',
            'step_number' => '4',
            'description' => "Laat met de deksel op de pan 25 min. op laag vuur koken tot de linzen gaar zijn. Roer regelmatig.",
            'created_at'  => '2021-06-06 15:34:43',
            'updated_at'  => '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id'   => '5',
            'step_number' => '1',
            'description' => "Snijd de kip in stukjes en bak deze gaar. Giet het vet af en voeg nu het zakje Mexicaanse kruiden toe, giet een beetje water bij zodat de kruiden zich makkelijk verspreiden.",
            'created_at'  => '2021-06-06 15:34:43',
            'updated_at'  => '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id'   => '5',
            'step_number' => '2',
            'description' => "Zet ondertussen op een laag vuur een pannetje op met daarin de inhoud van de bonen, gooi het sap dus niet af. Roer regelmatig.",
            'created_at'  => '2021-06-06 15:34:43',
            'updated_at'  => '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id'   => '5',
            'step_number' => '3',
            'description' => "Snijd alle groente in kleine blokjes en zet dit in schaaltjes op tafel.",
            'created_at'  => '2021-06-06 15:34:43',
            'updated_at'  => '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id'   => '5',
            'step_number' => '4',
            'description' => "Doe de wraps per 4 stuks in de magnetron voor 1 minuut op 600-700W. Leg deze op een bord en zet het bord op tafel.",
            'created_at'  => '2021-06-06 15:34:43',
            'updated_at'  => '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id'   => '5',
            'step_number' => '5',
            'description' => "Doe vervolgens alle andere ingrediënten in een bakje en zet ook deze op tafel. Iedereen kan nu een wrap pakken en daarop doen wat zij willen. Eet smakelijk!",
            'created_at'  => '2021-06-06 15:34:43',
            'updated_at'  => '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id'   => '6',
            'step_number' => '1',
            'description' => "Snijd de tomaten en halve komkommer in grove stukken. Schil de watermeloen en snijd in grove stukken.",
            'created_at'  => '2021-06-06 15:34:43',
            'updated_at'  => '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id'   => '6',
            'step_number' => '2',
            'description' => "Pers de limoen uit. Haal de blaadjes van de takjes basilicum en houd er een paar apart. Meng de meloen en komkommer met de tomaten, het limoensap, basilicum, de olie en ijsblokjes in de blender tot een gladde soep.",
            'created_at'  => '2021-06-06 15:34:43',
            'updated_at'  => '2021-06-20 08:45:15'
        ]);
        DB::table('instructions')->insert([
            'recipe_id'   => '6',
            'step_number' => '3',
            'description' => "Breng op smaak met versgemalen peper en zout. Garneer met het achtergehouden basilicum.",
            'created_at'  => '2021-06-06 15:34:43',
            'updated_at'  => '2021-06-20 08:45:15'
        ]);
    }
}
