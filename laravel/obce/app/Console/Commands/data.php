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
        echo "Call CLI to import database...";
        // Artisan::call('db:seed');

        $html = HtmlDomParser::file_get_html('https://www.e-obce.sk/zoznam_vsetkych_obci.html', false, null, 0 );

        foreach( $html->find('#telo td[height="29"] table a') as $element) {
            $atext[] = $element->plaintext;
        }

         \DB::table('cities')->truncate();

        for ($i=0; $i < count( $atext ); $i++) {
            \DB::table('cities')->insert(
                [
                    'name' => $atext[$i],
                    'mayor' => '',
                    'address' => '',
                    'phone' => '',
                    'fax' => '',
                    'email' => '',
                    'web' => '',
                    'image' => '',
                    'gps' => ''
                ]
            );

            echo "\n";
            echo $i;
        }

        echo "\nImport data to database was successfully.";
    }
}
