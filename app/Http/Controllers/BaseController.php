<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client as Client;
use App\Depeche;
use App\WantedRole;
class BaseController extends Controller
{
    public function index(){

        $guild = Depeche::find(1)->first();
        $wantedroles = WantedRole::all();



        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'https://eu.api.battle.net/wow/character/stormscale/Dèxterr?fields=achievements&locale=en_GB&apikey=c44ya8ser8a7agbuvxukcfu9ebzztk4v');
        $antorusID = [];

        //Collection for completed achievements
        $collection = collect(json_decode($res->getBody(),true));
        $achievements = collect($collection['achievements']);
        $completedAchievements = collect($achievements['achievementsCompleted']);
        
        foreach($completedAchievements as $achiev => $id){

            switch($id){
                case 11992:
                    array_push($antorusID, $id);
                    break;
                case 11993:
                    array_push($antorusID, $id);
                    break;
                case 11994:
                    array_push($antorusID, $id);
                    break;
                case 11995:
                    array_push($antorusID, $id);
                    break;
                case 11996:
                    array_push($antorusID, $id);
                    break;
                case 11997:
                    array_push($antorusID, $id);
                    break;
                case 11998:
                    array_push($antorusID, $id);
                    break;
                case 11999:
                     array_push($antorusID, $id);
                    break;
                case 12000:
                    array_push($antorusID, $id);
                    break;
                case 12001:
                     array_push($antorusID, $id);
                    break;
                case 12002:
                    array_push($antorusID, $id);
                    break;  

            }

            
    
        }
        

        return view('welcome')->with('deadbosses', $antorusID)
                              ->with('guild', $guild)
                              ->with('wantedroles',$wantedroles);


    }

    public function updateGuild(){

        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'https://eu.api.battle.net/wow/guild/stormscale/depeche?fields=members&locale=en_GB&apikey=c44ya8ser8a7agbuvxukcfu9ebzztk4v');
        echo $res->getStatusCode();
        // 200
        echo $res->getHeaderLine('content-type');
        // 'application/json; charset=utf8'
        $json = json_decode($res->getBody(),true);

        $collection = collect($json);

        $membersCount = 0;
        
        foreach($collection->get('members') as $key){
            echo $membersCount;
            $membersCount++;
        }
        
        $guild = Depeche::find(1)->first();
        $guild->name = $collection->get('name');
        $guild->members = $membersCount;
        $guild->achievementpoints = $collection->get('achievementPoints');
        $guild->save();

        return redirect()->back();
    }


}
