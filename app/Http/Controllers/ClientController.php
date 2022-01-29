<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;

class ClientController extends Controller
{
    public $supply,$holders;

    public function __construct(){
        $this->supply;
        $this->holders;
    }
    public function home()
    {
        $client = new Client();
         $crawler = $client->request('GET', 'https://bscscan.com/token/0xd23445d97d6bebf7306f58d7862f07f2a5bb40f5');
        $crawler->filter('#ContentPlaceHolder1_tr_tokenHolders .mr-3')->each(function ($node) {
            $this->holders =  $node->text()."\n";
        });
        
        $crawler = $client->request('GET', 'https://bscscan.com/token/0xd23445d97d6bebf7306f58d7862f07f2a5bb40f5?a=0x2911a0fefc09d97b69847c11b697ba017bde7944');
        $crawler->filter('#ContentPlaceHolder1_divFilteredHolderBalance')->each(function ($node) {
            $this->supply =  $node->text()."\n";
        });

        if ($crawler) {
            $sabu = $this->supply;
            $saba = $this->holders;
            return view('client.home',compact('sabu','saba'));
        }

        return view('client.home',compact('saba','sabu'));
    }
}
