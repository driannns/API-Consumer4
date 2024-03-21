<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class DashboardController extends Controller
{
    public function index(){
        $client = new Client();
        $res = $client->get(config('app.API.API_URL'). "/?action=get_countries&APIkey=". config('app.API.API_KEY'));
        $resData = json_decode($res->getBody()->getContents());

        return view('dashboard',  compact('resData'));
    }
    
    public function leagues(string $id){
        
        $client = new Client();
        $res = $client->get(config('app.API.API_URL'). "/?action=get_leagues&country_id=". $id ."&APIkey=". config('app.API.API_KEY'));
        $resData = json_decode($res->getBody()->getContents());
        return view('leagues',  compact('resData'));
    }
    
    public function teams(string $id){       
        $client = new Client();
        $res = $client->get(config('app.API.API_URL'). "/?action=get_teams&league_id=". $id ."&APIkey=". config('app.API.API_KEY'));
        $resData = json_decode($res->getBody()->getContents());
    
        return view('teams',  compact('resData'));
    }
}
