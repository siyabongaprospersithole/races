<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class RaceCardController extends Controller
{
   public function index(){
      try {
        if(Cache::has('allracedcardssss')){
            return Cache::get('allracedcardssss');
         }else{
           $files = [
               storage_path('app/public/RaceCard_XGD.json'),
               storage_path('app/public/RaceCard_LYO.json'),
               storage_path('app/public/RaceCard_C3R.json'),
           ];
           $racecards = [];
           foreach($files as $file){
               if(file_exists($file)){
                $racecard = isset(json_decode(file_get_contents($file), true)['racecard']) ? json_decode(file_get_contents($file), true)['racecard'] : [];
                if($racecard){
                    $racecards[] = array(
                        'itw' => $racecard['itw'],
                        'track' => $racecard['track'],
                        'date' => \Carbon\Carbon::parse($racecard['date'])->format('Y-m-d'),
                        'eventType' => $racecard['eventType'],
                        'status' => $racecard['status'],
                        'numberOfRaces' => count($racecard['races'])
                    );
                }
                
                
               }
           }
           Cache::put('allracedcardssss', $racecards, 300);
           return $racecards;
         }
      } catch (\Exception $e) {
       

// Inside your catch block:
Log::error('Failed to fetch race cards: ' . $e->getMessage());

         return response()->json(['message' => 'Service currently not available'], 500);
      }
   }

    public function show($id){
        try {
            if(Cache::has('racecard' . $id)){
                return Cache::get('racecard' . $id);
            }else{
                $files = [
                    storage_path('app/public/RaceCard_XGD.json'),
                    storage_path('app/public/RaceCard_LYO.json'),
                    storage_path('app/public/RaceCard_C3R.json'),
                ];
                $racecard = [];
                foreach($files as $file){
                    if(file_exists($file)){
                        $racecard = isset(json_decode(file_get_contents($file), true)['racecard']) ? json_decode(file_get_contents($file), true)['racecard'] : [];
                        if($racecard){
                            if($racecard['itw'] == $id){
                                Cache::put('racecard' . $id, $racecard, 300);
                                return $racecard;
                            }
                        }   
                    }
                }
                if(!$racecard){
                    return response()->json(['message' => 'not found', 404]);
                }
            }
        
        } catch (\Exception $e) {
            Log::error('Failed to fetch' . $id );

            return response()->json('Not found');
        }
    }
}
