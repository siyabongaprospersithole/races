<?php 

namespace App\Helpers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;

class Cacher
{
    public $store;

    public function __construct($store = 'file')
    {
        $this->store = $store;
    }



    public static  function setCached($key, $value,  $store = 'file')
    {
      //  $cachedData = Redis::set($key, serialize($value));
      Cache::store($store)->put($key, $value);
    }

    public static function setCachedWithDuration($key, $value, $duration, $store = 'file')
    {
        Cache::store($store)->put($key, $value, $duration);
      //  $cachedData = Redis::setex($key, $duration, serialize($value));
    }

    public static function getCached($key, $store = 'file')
    {
       // $cachedData = Redis::get($key);
        $cachedData = Cache::store($store)->get($key);

        return $cachedData;
    
        if ($cachedData) {
            return $cachedData;
        }
        return null;
    }

    public static function removeCached($key, $store = 'file')
    {
       // Redis::del($key);
       Cache::store($store)->forget($key);
    }
}
