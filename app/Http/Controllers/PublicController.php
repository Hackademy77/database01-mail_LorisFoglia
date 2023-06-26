<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Models\Artist;
use App\Models\Artista;
use App\Mail\ContactMail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\ArtistRequest;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{

    // public $artists = [
    //     ["id"=>1, "name"=> "Autechre", "type"=>"elettronica", "img" => "autechre.jpg", "description"=>"gli anni 90 sono il futuro"],

    //     ["id"=>2, "name"=> "The Prodigy", "type" =>"elettronica", "img" => "prodigy.jpg", "description"=>"smack my bitch up"],

    //     ["id"=>3, "name"=> "Kasabian", "type" =>"rock", "img" => "kasabian.jpg", "description"=>"casablanca is for boys, kasabian is for men"],

    //     ["id"=>4, "name"=> "AC/DC", "type" =>"rock", "img" => "OIP.jpg", "description"=>"alto voltaggio, pericolo di morte"],

    //     ["id"=>5, "name"=> "Bob Marley", "type" =>"raggae", "img" => "bob marley.jpg", "description"=>"il fumo uccide"],
    // ];


    public function showArtist() {

        $artists = Artista::all();

        return view('artisti.welcome', ['artisti' => $artists]);
    }


    public function showDettagli($id) {
        // foreach($this->artists as $artist){
        // if($artist['id']==$id){
        //     return view('artisti.dettagli', ['artista' => $artist]);
        //     }
        // }
        $artist = Artista::find($id);
        return view('artisti.dettagli', ['artista' => $artist]);
    }



    public function cercaArtista(Request $request) {
        
            $chiaveDiRicerca = $request->query('chiave');
            $artists = Artista::all();
            $filterArtist=[];
            foreach ($artists as $artist) {
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
        $contact = new ContactMail($nome, $cognome, $testo);

        Mail::to('loris91@mail.it')->send($contact);

        return redirect()->route('arrivederci');
    }

    public function arrivederci(){
        return view('arrivederci');
    }


    public function crea(){

        return view("artisti.create");
    }


    public function store(ArtistRequest $request){

        $nome = $request->input('name');
        $tipo = $request->input('type');
        $descrizione = $request->input('description');
        
        if($request->file('img')== null){
            $img = 'ignoto.jpg';
        }else{
            $img = $request->file('img')->store('public/artists');
        }

        Artista::create([
            'name' => $nome,
            'type' => $tipo,
            'description' => $descrizione,
            'img' => $img,
        ]);

        return to_route('home');
    }

}
