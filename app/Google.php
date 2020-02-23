<?php
namespace App;

class Google
{    
    public function client()
    {
        $client = new \Google_Client();
        
        

        if(!env('APP_SERVER_MODE')){ //Local Mode
            
            $client->setClientId("924223373544-nukb1prootiuoo1gmhumots4mjkg7bv8.apps.googleusercontent.com");
            $client->setClientSecret("b0k5rJyCUCplwDRTYowOkVnp");
            $client->setRedirectUri("http://election.com/in");
        }

        // if(env('APP_SERVER_MODE')){ //Server Mode
        //     $client->setClientId("924223373544-nukb1prootiuoo1gmhumots4mjkg7bv8.apps.googleusercontent.com");
        //     $client->setClientSecret("b0k5rJyCUCplwDRTYowOkVnp");
        //     $client->setRedirectUri("http://election.com/in");
        // }

        $client->setScopes(explode(',', "email,profile,https://www.googleapis.com/auth/calendar"));
        $client->setApprovalPrompt("auto");
        $client->setAccessType("offline");
        return $client;
    }
}