<?php

namespace App;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Database\Eloquent\Model;

class internationnalArticle extends Model
{
    private $url="https://newsapi.org/v2/";
    private $key="a4d8371b30e84f4d91b3736add56f791";
    function getsources(){
        try {
            $http=new Client();
            $apiRequest=$http->request('GET',$this->url."sources?apiKey=".$this->key);
            $source=json_decode($apiRequest->getBody()->getContents());
            return $source;
        }catch (RequestException $e){

        }
    }
    function getarticles($source="cnn",$categorie="general"){
        try {
            $http=new Client();
            $apiRequest=$http->request('GET',$this->url."top-headlines?source=".$source."&category=".$categorie."&pageSize=10&apiKey=".$this->key);
            $source=json_decode($apiRequest->getBody()->getContents());
            return $source;
        }catch (RequestException $e){

        }
    }
    function getTopnews(){
        try {
            $http=new Client();
            $apiRequest=$http->request('GET',$this->url."top-headlines?country=us&pageSize=10&apiKey=".$this->key);
            $source=json_decode($apiRequest->getBody()->getContents());
            return $source;
        }catch (RequestException $e){
        }
    }

}
