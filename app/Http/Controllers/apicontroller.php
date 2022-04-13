<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;


class apicontroller extends Controller
{
    public function get_news(){
        $apiURL = 'https://newsapi.org/v2/everything?q=tesla&from=2022-03-13&sortBy=publishedAt&apiKey=3414675e9dee47fa88f26797566f7626';
        
  
        $response = Http::get($apiURL);
  
        $statusCode = $response->status();
        $responseBody = json_decode($response->getBody(), true);
  
        dd($responseBody);



        // $headers = [        
        //     'Content-Type: application/json',
        // ];
    
        // $ch = curl_init();
      
        // curl_setopt($ch, CURLOPT_URL, $url);
        // curl_setopt($ch, CURLOPT_POST, true);
        // curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        // curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        // // Disabling SSL Certificate support temporarly
        // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);                

        // // Execute post
        // $result = curl_exec($ch);

        // if ($result === FALSE) {
        //     die('Curl failed: ' . curl_error($ch));            
        // }        

        // // Close connection
        // curl_close($ch);
        // var_dump($result);
        // //dd($result);
    }
}
