<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Query\Expression as raw;
use Stevebauman\Location\Location;
use Cornford\Googlmapper\Mapper;

class SunController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $location = new Location();
        $ip = "176.59.32.112";//request()->ip();
        $position = $location->get($ip);
//Тут нужно получать реальное место положение
        $position->regionName = "Moscow";
        $position->cityName = "Moscow";
        $position->latitude = 55.7409018;
        $position->longitude = 37.6068839;
        $latitude = round($position->latitude);
        $longitude = round($position->longitude);
        $appid="dcfa73155b5994a04520435adefd3d17";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://api.openweathermap.org/v3/uvi/'.$latitude.','.$longitude.'/2017Z.json?appid='.$appid);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $data = json_decode(curl_exec($ch),1);
        $uv = $data["data"];


        $chw = curl_init();
        curl_setopt($chw, CURLOPT_URL, 'api.openweathermap.org/data/2.5/weather?lat='.$latitude.'&lon='.$longitude.'&appid='.$appid);
        curl_setopt($chw, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
        curl_setopt($chw, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($chw, CURLOPT_RETURNTRANSFER, true);
        $data = json_decode(curl_exec($chw),1);
        $weather = $data['main'];
        $wind = $data['wind'];
        $clouds = $data['clouds']['all'];
        $weather["temp"] = round($weather["temp"] - 273, 0);
        $weather["pressure"] = round(0.00750062 * $weather["pressure"] * 100, 0);
        $eco = 1;

        $indexSafe = 10 - round(10*($eco/3.0 + $uv/11.0 + $uv["speed"]/32)/3, 0);
        return view('sun.index',[
          "position"=>$position
         ,"ip"=>$ip
         ,"uv"=>$uv
         ,"weather"=>$weather
         ,"wind"=>$wind
         ,"clouds"=>$clouds
         ,"eco"=>$eco
         ,"indexSafe"=>$indexSafe
         ]);
/*
        (new Mapper($view_map))->map($position->latitude, $position->longitude);
         return $view_map;
*/
    }

}
