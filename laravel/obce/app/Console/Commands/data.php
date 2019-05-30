<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Sunra\PhpSimple\HtmlDomParser;

class DataImportCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'data:import';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import data of Cities from portal e-obce.sk';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

        // Dubug info
        echo "Call CLI to import database.\n";
        // Import fake data to DB
        // Artisan::call('db:seed');


        // Get list of cities
        $html = HtmlDomParser::file_get_html('https://www.e-obce.sk/zoznam_vsetkych_obci.html', false, null, 0 );

        // Dubug info
        echo "Get list of cities.\n";


        // Get pages URLs of specific city from list of cities
        foreach( $html->find('#telo td[height="29"] table a') as $element) {
            //$atext[] = $element->text(); // name of city
            $ahref[] = $element->href; // URL of city
        }

        // Dubug info
        echo "Get pages URLs of specific city from list of cities.\n";

        for ($i=0; $i < count($ahref); $i++) {

            // Get content from page of specific city
            $city = HtmlDomParser::file_get_html( $ahref[$i] , false, null, 0 );

            // Get information of specific city
            foreach( $city->find('#telo td[height="29"]') as $element) {

                // Name
                $results= trim( str_replace( ['Obec', 'Mesto'],['', ''], html_entity_decode( $element->find('tr',0)->children(0)->plaintext ) ) );
                $cities[$i]['name'] = $results;

                // Dubug info
                if($i%50 == 0) echo ".";

                // Mayor
                $results = trim( $element->find('tr',15)->children(1)->plaintext );
                $cities[$i]['mayor'] = $results;


                // Address with ZIP and city name
                $results = trim( $element->find('tr',6)->children(0)->plaintext ) . ", " . trim( $element->find('tr',7)->children(0)->plaintext );
                $cities[$i]['address'] = $results;


                // Phone
                $results = trim( $element->find('tr',4)->children(0)->plaintext );
                $cities[$i]['phone'] = $results;


                // Fax
                $results = trim( $element->find('tr',5)->children(2)->plaintext );
                $cities[$i]['fax'] = $results;


                // Email
                $results = trim( $element->find('tr',6)->children(2)->plaintext );
                $cities[$i]['email'] = $results;

                // Web
                $results = trim( $element->find('tr',7)->children(2)->plaintext );
                $cities[$i]['web'] = $results;


                // Image URL
                $results = $element->find('tr',3)->children(0)->outertext();
                foreach ( $element->find('td[width="84"] img') as $img) {
                    $results = $img->src; // URL to image
                    $cities[$i]['image'] = $results;
                }
            }
        }

        echo "\nDone, all data of cities si prepared to import database.\n";


        echo "Start import database.\n";
         \DB::table('cities')->truncate();

        //for ($i=0; $i < count( $atext ); $i++) {
        for ($i=0; $i < count( $cities ); $i++) {

            // Dubug info
            if($i%50 == 0) echo ".";

            \DB::table('cities')->insert(
                [
                    'name' => $cities[$i]['name'],
                    'mayor' => $cities[$i]['mayor'],
                    'address' => $cities[$i]['address'],
                    'phone' => $cities[$i]['phone'],
                    'fax' => $cities[$i]['fax'],
                    'email' => $cities[$i]['email'],
                    'web' => $cities[$i]['web'],
                    'image' => $cities[$i]['image'],
                    'gps' => ''
                ]
            );
        }

        echo "\nImport data to database was successfully.";
    }
}
