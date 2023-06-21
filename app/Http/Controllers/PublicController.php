<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{

    public $artists = [
        ["id"=>1, "name"=> "Autechre", "type"=>"elettronica", "img" => "autechre.jpg", "description"=>"gli anni 90 sono il futuro"],

        ["id"=>2, "name"=> "The Prodigy", "type" =>"elettronica", "img" => "prodigy.jpg", "description"=>"smack my bitch up"],

        ["id"=>3, "name"=> "Kasabian", "type" =>"rock", "img" => "kasabian.jpg", "description"=>"casablanca is for boys, kasabian is for men"],

        ["id"=>4, "name"=> "AC/DC", "type" =>"rock", "img" => "OIP.jpg", "description"=>"alto voltaggio, pericolo di morte"],

        ["id"=>5, "name"=> "Bob Marley", "type" =>"raggae", "img" => "bob marley.jpg", "description"=>"il fumo uccide"],
    ];


    public function showArtist() {
        return view('welcome', ['artisti' => $this->artists]);
    }


    public function showDettagli($id) {
        foreach($this->artists as $artist){
        if($artist['id']==$id){
            return view('dettagli', ['artista' => $artist]);
            }
        }
    }



    public function cercaArtista(Request $request) {
        
            $chiaveDiRicerca = $request->query('chiave');

            $filterArtist=[];
            foreach ($this->artists as $artist) {
                if(Str::of(Str::lower($artist['name']))->contains(Str::lower($chiaveDiRicerca))){
                    array_push($filterArtist, $artist);
                }
            }
            
            return view('cerca', ['artisti'=> $filterArtist]);
    }


    public function contattaci(){
        return view('contatti');
    }

    public function messaggiRicevuti(Request $request){
        $nome = $request->input('nome');
        $cognome = $request->input('cognome');
        $testo = $request->input('descrizione');
        
        $contact = new Contact($nome, $cognome, $testo);

        Mail::to('loris91@mail.it')->send($contact);
    }


}
