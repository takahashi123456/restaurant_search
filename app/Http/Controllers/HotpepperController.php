<?php

namespace App\Http\Controllers;

use Request;
use GuzzleHttp\Client; 
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Schema;

class HotpepperController extends Controller
{
    // API先のUrl
    private const api_url = "http://webservice.recruit.co.jp/hotpepper/gourmet/v1/";
    // ?key={Token}&lat=34.67&lng=135.52&range=5&order=4&format=json
    // Apiキーの変数
    private $api_key;

    public function index(){

        $api = new Client();
        // formから緯度経度や検索条件(rangeなど)を受け取る
        $all = Request::all();
        $latitude = $all["latitude"];
        $longitude = $all["longitude"];
        $range = $all["range"];
        $keyword = $all["keyword"];
        // methodの設定
        $method = "GET";
        // Apiキーの呼び出し
        $this->api_key = config('hotpepper.api_key');
        // Apiのオプション (例 'count' => 10,
        $options =[
            'query' =>[
                'key' => config('hotpepper.api_key'),
                'lat' => $latitude,
                'lng' => $longitude,
                'count' => 100,
                'range' => $range,
                'keyword' => $keyword,
                'format' => 'json',
            ],
        ];
        // httpリクエストを送信
        $response = $api->request($method, self::api_url, $options);
        // jsonに入れる
        $response_json = json_decode($response->getBody(), true)['results'];

        // 帰ってきたresponseの必要な部分だけ指定
        $restaurants = $response_json["shop"];

        // 配列の数をカウント
        $count = count($restaurants);

        // return view('index', compact('restaurants'));
        return view('list', compact('restaurants','count'));
    }
    
    public function detail($id){
        // postからidを取得
        // $all = Request::all("value");

        // Apiキーからidで検索し取得
        $api = new Client();
        $method = "GET";
        $options =[
            'query' =>[
                'key' => config('hotpepper.api_key'),
                'id' => $id,
                'format' => 'json'
            ],
        ];
        $response = $api->request($method, self::api_url, $options);

        $restaurants = json_decode($response->getBody(), true)['results'];

        $detail_restaurant = $restaurants["shop"];

        return view('detail', compact('detail_restaurant'));
    }
}
