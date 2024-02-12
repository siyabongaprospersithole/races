<?php
namespace App\Helpers;
use Illuminate\Support\Str;
use Storage;

class AppHelper
{


 
    public function encrypt($string, $key=5) {
        $result = '';
        for($i=0, $k= 10; $i<$k; $i++) {
            $char = substr($string, $i, 1);
            $keychar = substr($key, ($i % strlen($key))-1, 1);
            $char = chr(ord($char)+ord($keychar));
            $result .= $char;
        }
        $b = base64_encode($result);

        return Str::replace('=','-',$b);
    }

     public function decrypt($string, $key=5) {
        $result = '';
        $string = Str::replace('-','=',$string);
        $string = base64_decode($string);
        for($i=0,$k= 10; $i< $k ; $i++) {
            $char = substr($string, $i, 1);
            $keychar = substr($key, ($i % strlen($key))-1, 1);
            $char = chr(ord($char)-ord($keychar));
            $result.=$char;
        }

        $cleanedString = preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $result);


        return $cleanedString;
    }

    public function getMonthsBetweenDates($start, $end){
        $months = [];
        $start = \Carbon\Carbon::parse($start);
        $end = \Carbon\Carbon::parse($end);
        for($i = $start; $i->lte($end); $i->addMonth()){
            $months[] = $i->format('Y-m-d');
        }
        return $months;
    }

}




 



  