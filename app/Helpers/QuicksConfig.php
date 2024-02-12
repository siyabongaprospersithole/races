<?php
namespace App\Helpers;
use Illuminate\Support\Str;
use App\Models\Permission;
use App\Models\PermissionRole;

class QuicksConfig
{
    public function getConfig() {


        
        return array(
            'authorizationRequestUrl' => \config('services.quickbooks.authorizationRequestUrl'),
            'tokenEndPointUrl' => \config('services.quickbooks.tokenEndPointUrl'),
            'client_id' => \config('services.quickbooks.client_id'),
            'client_secret' => \config('services.quickbooks.client_secret'),
            'oauth_scope' => \config('services.quickbooks.oauth_scope'),
            'oauth_redirect_uri' => \config('services.quickbooks.oauth_redirect_uri'),
            'baseUrl' => \config('services.quickbooks.baseUrl')
        );

     
    }

     



    
     
}